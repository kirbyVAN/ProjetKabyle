<!--Page Espace personnel -->
<?php
	$title = "Kabyle";
	$titlePage = "Kabyle - Espace personnel";
	ob_start();
	
	echo'
	<ul class="menuPerso">
		<li><a href="index.php?page=addVideo" title="Ajouter une vidéo">Ajouter une vidéo</a></li>
		<li><a href="index.php?page=addPhoto" title="Ajouter une photo">Ajouter une photo</a></li>
		<li><a href="index.php?page=addArticle" title="Ajouter un article">Ajouter un article</a></li>
		<li><a href="index.php?page=addEvent" title="Ajouter un évènement">Ajouter un évènement</a></li>
	</ul>
		';
	$content = ob_get_clean();
	
	include('layout.php');
?>