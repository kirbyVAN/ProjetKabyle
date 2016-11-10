<!--Page Espace master -->
<?php
	$title = "Kabyle";
	$titlePage = "Kabyle - Espace Master";
	ob_start();
	
	echo'
	<ul class="menuPerso">
		<li><a href="index.php?page=addVideo" title="Ajouter une vidéo">Ajouter une vidéo</a></li>
		<li><a href="index.php?page=addPhoto" title="Ajouter une photo">Ajouter une photo</a></li>
		<li><a href="index.php?page=addArticle" title="Ajouter un article">Ajouter un article</a></li>
		<li><a href="index.php?page=addEvent" title="Ajouter un évènement">Ajouter un évènement</a></li>
		<li><a href="index.php?page=addAdmin" title="Ajouter un administrateur">Ajouter un administrateur</a></li>
		<br/>
		<li><a href="index.php?page=supprVideo" title="Supprimer une vidéo">Supprimer une vidéo</a></li>
		<li><a href="index.php?page=supprPhoto" title="Supprimer une photo">Supprimer une photo</a></li>
		<li><a href="index.php?page=supprArticle" title="Supprimer un article">Supprimer un article</a></li>
		<li><a href="index.php?page=supprEvent" title="Supprimer un évènement">Supprimer un évènement</a></li>
		<li><a href="index.php?page=supprAdmin" title="Supprimer un administrateur">Supprimer un administrateur</a></li>
		<br/>
		<li><a href="index.php?page=addUser" title="Ajouter un utilisateur">Ajouter un utilisateur</a></li>
	</ul>
		';
	$content = ob_get_clean();
	
	include('layout.php');
?>