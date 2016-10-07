﻿<?php
session_start();
// ini_set('display_errors','off');
require_once('model/Model.php');
require_once('model/UtilisateurManager.php');
require_once('model/ArticleManager.php');
require_once('model/PhotoManager.php');
require_once('model/VideoManager.php');

$messageCo = "";
$profil = NULL;

	if(isset($_SESSION['Login'])){
		$profil='<li><a href="index.php?page=profil">Espace personnel</a></li>';
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
		
		/*Liste d'évènements*/
		elseif($_GET['page'] == 'agenda'){
			include('views/agenda.php');
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
		include('views/accueil.php');
	}
?>