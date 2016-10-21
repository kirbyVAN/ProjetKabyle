<!--Page AddArticle -->
<?php
	$title = "Kabyle";
	$titlePage = "Ajouter un article";
	ob_start();
	
	echo'
		<form method="POST" action="index.php?page=addArticle">
			<table class="creation">
			<tr>
				<td><label>Titre :</label></td>
				<td><input type="text" id="titreArticle" name="titreArticle" placeholder="Titre article"/></td>
			</tr>
			<tr>	
				<td><label>Date :</label></td>
				<td><input type="date"  id="dateArticle" name="dateArticle" placeholder="Date article"/></td>
			</tr>
			<tr><td><label>Article : </label></td>
				<td><textarea type="text" id="addArticle" name="article" placeholder="Saisir l\'article ..."></textarea></td>
			</tr>
			<tr>
				<td colspan=2><input id="ajout" type="submit" value="AJOUTER"/></td>
			</tr>
			</table>
		</form>';

	$content = ob_get_clean();
	
	include('layout.php');
?>