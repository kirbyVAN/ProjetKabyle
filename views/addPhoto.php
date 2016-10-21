<!--Page AddPhoto -->
<?php
	$title = "Kabyle";
	$titlePage = "Ajouter une photo";
	ob_start();
	
	echo'
		<form method="POST" action="index.php?page=addPhoto">
			<table class="creation">
			<tr>
				<td><label>Titre :</label></td>
				<td><input type="text" id="titrePhoto" name="titrePhoto" placeholder="Titre photo"/></td>
			</tr>
			<tr>	
				<td><label>Date :</label></td>
				<td><input type="date"  id="datePhoto" name="datePhoto" placeholder="Date photo"/></td>
			</tr>
			<tr>
				<td><label>Importer une image :</label></td>
				<td><input type="file" id="photo" name="photo" placeholder="Importer une photo"/></td>
			</tr>
			<tr><td><label>Description : </label></td>
				<td><textarea type="text" id="descVideo" name="descVideo" placeholder="Description"></textarea></td>
			</tr>
			<tr>
				<td colspan=2><input id="ajout" type="submit" value="AJOUTER"/></td>
			</tr>
			</table>
		</form>';

	$content = ob_get_clean();
	
	include('layout.php');
?>