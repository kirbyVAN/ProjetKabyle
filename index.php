<?php
session_start();
//ini_set('display_errors','off');
require_once('model/Model.php');
require_once('model/UtilisateurManager.php');
require_once('model/ArticleManager.php');
require_once('model/PhotoManager.php');
require_once('model/VideoManager.php');
require_once('model/EventManager.php');

$messageCo = "";
$profil = NULL;

	if(isset($_SESSION['Login'])){
		$profil='<li><a href="index.php?page=espacePerso">'.$_SESSION['Login'].'</a></li>';
		$etatCo="Déconnexion";
		
	} else {
		$etatCo="Connexion";
	}
	if (isset($_GET['page'])){
		
		if($_GET['page'] == 'who'){
			include('views/who.php');
		}
		
		/*Liste des médias*/
		elseif($_GET['page'] == 'media'){
			
			
			if (isset($_POST['typeMedia'])){
				
				if($_POST['typeMedia']=='A'){
					$obj1 = new ArticleManager();
					$article = $obj1->getArticles();
					
				} elseif($_POST['typeMedia']=='I') {
					$obj2 = new PhotoManager();
					$photo = $obj2->getPhotos();
					
				} elseif($_POST['typeMedia']=='V') {
					$obj3 = new VideoManager();
					$video = $obj3->getVideos();
					
				} else{
					$obj1 = new ArticleManager();
					$article = $obj1->getArticles();
					$obj2 = new PhotoManager();
					$photo = $obj2->getPhotos();
					$obj3 = new VideoManager();
					$video = $obj3->getVideos();
				}	
	
			} else {
				$obj1 = new ArticleManager();
				$article = $obj1->getArticles();
				$obj2 = new PhotoManager();
				$photo = $obj2->getPhotos();
				$obj3 = new VideoManager();
				$video = $obj3->getVideos();
			}
			
			
			
			include('views/media.php');
		}
		
		/*Détails de l'article*/
		elseif($_GET['page'] == 'detailMedia'){
			$obj = new ArticleManager();
			$article = $obj->getDetailsArticle($_GET['idArticle']);
			include('views/detailMedia.php');
		}
		
		/*Détails de la photo*/
		elseif($_GET['page'] == 'detailPhoto'){
			$obj = new PhotoManager();
			$photo = $obj->getDetailsPhoto($_GET['idPhoto']);
			include('views/detailPhoto.php');
		}
		
		/*Liste d'évènements*/
		elseif($_GET['page'] == 'agenda'){
			$obj = new EventManager();
			$event = $obj->getEvent();
			include('views/agenda.php');
		}
		
		/*Détails de l'evenement*/
		elseif($_GET['page'] == 'detailEvent'){
			$obj = new EventManager();
			$event = $obj->getDetailEvent($_GET['idEvent']);
			include('views/detailEvent.php');
		}
		
		/*Création d'un utilisateur*/
		elseif ($_GET['page'] == 'creation') {
			
			if(isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_POST['age']) AND isset($_POST['email']) AND isset($_POST['login']) AND isset($_POST['pass']) AND isset($_POST['pass2'])){
						
				$obj = new UtilisateurManager();
				$data = $obj->createUser($_POST['nom'],$_POST['prenom'], $_POST['age'], $_POST['email'], $_POST['login'], $_POST['pass']);
				
				if ($data == 0){
					$res=0;
				} elseif ($data == 1){
					$res=1;
				} elseif ($data == 2){
					$res=2;
				}
				include('views/creation.php');
				
			}  else {
				
				$res=-1;
				include('views/creation.php');				
			}
		}
		
		/*Connexion*/
		elseif ($_GET['page'] == 'connexion'){
			
			if(isset($_SESSION['Login'])){
				session_destroy();
				header('Location: index.php');
				exit(0);
			} 
			
			if(isset($_POST['login']) AND isset($_POST['pass'])){
				$user = new UtilisateurManager();
				$co = $user->logUser($_POST['login'],$_POST['pass']);
				
				if($co==1){
					$_SESSION['Login']=$_POST['login'];
					$etatCo="Deconnexion";
					$messageCo = "Vous êtes maintenant connecté en tant que " .$_SESSION['Login'];
					header('Location: index.php');
				} else {
					$messageCo = "Login et/ou mot de passe <b>incorrects</b>. Veuillez vérifier et réessayer !";
				}
			}
	
			include('views/connexion.php');
			
		} 
		
		/*Espace personnel*/
		elseif($_GET['page'] == 'espacePerso') {
			$statut = new UtilisateurManager();
			$user = $statut->getDetailUser($_SESSION['Login']);
			if($user['admin']=='1'){
				include ('views/espaceAdmin.php');
			}
			elseif($user['admin']=='2'){
				include ('views/espaceMaster.php');
			} else {
				include ('views/espacePerso.php');
			}
		}
		
		/*Ajouter un utilisateur*/
		elseif($_GET['page'] == 'addUser') {
			$obj1 = new UtilisateurManager();
			$tempUser = $obj1->getTempUser();
			
			if(isset($_POST['chk'])){
				$obj2 = new UtilisateurManager();
				$data = $obj2->addUser($_POST['chk']) ;
				if ($data == 0){
						$res=0;
						
					} else{
						$res=1;
					}
			$tempUser = $obj1->getTempUser();
				include ('views/addUser.php');
			}else{
				include ('views/addUser.php');
			}
		}
		
		/*Ajouter un administrateur*/
		elseif($_GET['page'] == 'addAdmin') {
			$obj1 = new UtilisateurManager();
			$noAdmin = $obj1->getNoAdmin();
			
			if(isset($_POST['chk'])){
				$obj2 = new UtilisateurManager();
				$data = $obj2->addAdmin($_POST['chk']) ;
				if ($data == 0){
						$res=0;
						
					} else{
						$res=1;
					}
			$noAdmin = $obj1->getNoAdmin();
				include ('views/addAdmin.php');
			}else{
				include ('views/addAdmin.php');
			}
		}
		
		/*Supprimer un administrateur*/
		elseif($_GET['page'] == 'supprAdmin') {
			$obj1 = new UtilisateurManager();
			$admin = $obj1->getAdmin();
			
			if(isset($_POST['chk'])){
				$obj2 = new UtilisateurManager();
				$data = $obj2->supprAdmin($_POST['chk']) ;
				if ($data == 0){
						$res=0;
						
					} else{
						$res=1;
					}
			$admin = $obj1->getAdmin();
				include ('views/supprAdmin.php');
			}else{
				include ('views/supprAdmin.php');
			}
		}
		
		/*Ajouter une vidéo*/
		elseif($_GET['page'] == 'addVideo') {
			if(isset($_POST['titreVideo']) AND isset($_POST['url']) AND isset($_POST['dateVideo']) AND isset($_POST['descVideo'])){
						
				$obj = new VideoManager();
				$data = $obj->addVideo($_POST['titreVideo'],$_POST['url'], $_POST['dateVideo'], $_POST['descVideo']);
				
				if ($data == 0){
					$res=0;
				} elseif ($data == 1){
					$res=1;
				}
				include('views/addVideo.php');
				
			}  else {
				
				$res=-1;
				include('views/addVideo.php');				
			}
		}
		
		/*Supprimer une video*/
		elseif($_GET['page'] == 'supprVideo') {
			$obj1 = new VideoManager();
			$video = $obj1->getVideos();
			
			if(isset($_POST['chk'])){
				$obj2 = new VideoManager();
				$data = $obj2->supprVideo($_POST['chk']) ;
				if ($data == 0){
						$res=0;
						
					} else{
						$res=1;
					}
			$video = $obj1->getVideos();
				include ('views/supprVideo.php');
			}else{
				include ('views/supprVideo.php');
			}
		}
		
		/*Ajouter une photo*/
		elseif($_GET['page'] == 'addPhoto') {
		
			if(isset($_FILES['photo']['name']) AND isset($_POST['datePhoto'])){
				
				$obj = new PhotoManager();
				$data = $obj->addPhoto($_FILES['photo']['name'], $_POST['datePhoto'], $_POST['descPhoto']);
				
				if ($data == 0){
					$res=0;
				} elseif ($data == 1){
					$res=1;
				}
				include('views/addPhoto.php');
			
			}  else {
				
				$res=-1;
				include('views/addPhoto.php');				
			}
			
		}
		
		/*Supprimer une photo*/
		elseif($_GET['page'] == 'supprPhoto') {
			$obj1 = new PhotoManager();
			$photo = $obj1->getPhotos();
			
			if(isset($_POST['chk'])){
				$obj2 = new PhotoManager();
				$data = $obj2->supprPhoto($_POST['chk']) ;
				if ($data == 0){
						$res=0;
						
					} else{
						$res=1;
					}
			$photo = $obj1->getPhotos();
				include ('views/supprPhoto.php');
			}else{
				include ('views/supprPhoto.php');
			}
		}
		
		/*Ajouter un article*/
		elseif($_GET['page'] == 'addArticle') {
			if(isset($_POST['titreArticle']) AND isset($_POST['auteurArticle']) AND isset($_POST['addArticle']) AND isset($_POST['dateArticle'])){
						
				$obj = new ArticleManager();
				$data = $obj->addArticle($_POST['titreArticle'],$_POST['auteurArticle'], $_POST['addArticle'], $_POST['dateArticle']);
				
				if ($data == 0){
					$res=0;
				} elseif ($data == 1){
					$res=1;
				}
				include('views/addArticle.php');
				
			}  else {
				
				$res=-1;
				include('views/addArticle.php');				
			}
		}
		
		/*Supprimer un article*/
		elseif($_GET['page'] == 'supprArticle') {
			$obj1 = new ArticleManager();
			$article = $obj1->getArticles();
			
			if(isset($_POST['chk'])){
				$obj2 = new ArticleManager();
				$data = $obj2->supprArticle($_POST['chk']) ;
				if ($data == 0){
						$res=0;
						
					} else{
						$res=1;
					}
			$article = $obj1->getArticles();
				include ('views/supprArticle.php');
			}else{
				include ('views/supprArticle.php');
			}
		}
		
		/*Ajouter un evenement*/
		elseif($_GET['page'] == 'addEvent') {
			if(isset($_POST['nomEvent']) AND isset($_POST['dateDebut']) AND isset($_POST['dateFin']) AND isset($_POST['descEvent'])){
						
				$obj = new EventManager();
				$data = $obj->addEvent($_POST['nomEvent'],$_POST['dateDebut'], $_POST['dateFin'], $_POST['descEvent']);
				
				if ($data == 0){
					$res=0;
				} elseif ($data == 1){
					$res=1;
				}
				include('views/addEvent.php');
				
			}  else {
				
				$res=-1;
				include('views/addEvent.php');				
			}
		}
		
		/*Supprimer un event*/
		elseif($_GET['page'] == 'supprEvent') {
			$obj1 = new EventManager();
			$event = $obj1->getEvent();
			
			if(isset($_POST['chk'])){
				$obj2 = new EventManager();
				$data = $obj2->supprEvent($_POST['chk']) ;
				if ($data == 0){
						$res=0;
						
					} else{
						$res=1;
					}
			$event = $obj1->getEvent();
				include ('views/supprEvent.php');
			}else{
				include ('views/supprEvent.php');
			}
		}
		
		else {
			include('views/error.php');
		}
		
	}
	else {
		$obj1 = new PhotoManager();
		$photo = $obj1->photoRecent();
		$obj2 = new ArticleManager();
		$article = $obj2->articleRecent();
		$obj3 = new videoManager();
		$video = $obj3->videoRecent();
		$obj4 = new EventManager();
		$event = $obj4->eventProc();
		include('views/accueil.php');
	}
?>