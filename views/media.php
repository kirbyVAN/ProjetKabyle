<?php
	$titlePage="Kabyle - Médias";
	ob_start();
	
	$obj = new ArticleManager();

	echo '
		<h1>Liste des médias</h1>
		<br/><form method="POST" action="index.php?page=media">
			<label>Vous pouvez choisir un type de média : </label>
			<SELECT name="typeMedia" >	
				<option value="tous"> Tous </option>
				<option value="A"> Article </option>
				<option value="I"> Image </option>
				<option value="V"> Vidéo </option>
			</SELECT>
			<button type="submit"> RECHERCHER </button>
		</form>
	<br/>';
	
	if(isset($article)){
		echo '<hr/>';
		foreach($article as $data){						
			echo '<div class="blocArticle">	
						<span><P><b>'.$data['titre'].'</b> de '.$data['auteur'].' le '.$data['dateArticle'].'</P></span>
						<span>';
			$contenu = nl2br(stripslashes($data['contenu']));
			$texte = $obj->tronquer($contenu,200,$data['idArticle']);
			echo $texte;
			echo'</span>
				</div>' ;
		}
	}
	
	if(isset($photo)){
		echo '<hr/>';
		foreach($photo as $data){						
			echo '<div class="blocPhoto">	
						<span><P><a href="index.php?page=detailPhoto&amp;idPhoto='.$data['idPhoto'].'"target="_blank" ><img src="assets/images/' .$data['nomPhoto'].'" alt="'.$data['descriptionPhoto'].'"/></a></P></span>
				</div>' ;
		}
	}
	
	if(isset($video)){
		echo '<hr/>';
		foreach($video as $data){						
			echo '<div class="blocVideo">	
						<div><iframe src="'.$data['url'].'" ></iframe></div>
						<div><P>'.$data['titre'].'</P>
						<P><a href="'.$data['url'].'">YouTube</a></P></div>
				</div>' ;
		}
	}
	
	$content = ob_get_clean();
	
	include('views/layout.php');
?>