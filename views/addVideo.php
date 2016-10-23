<!--Page AddVideo -->
<?php
	$title = "Kabyle";
	$titlePage = "Ajouter une vidéo";
	ob_start();
	
	echo'
		<form method="POST" action="index.php?page=addVideo">
			<table class="creation">
			<tr>
				<td><label>Titre :</label></td>
				<td><input type="text" id="titreVideo" name="titreVideo" placeholder="Titre vidéo"/></td>
			</tr>
			<tr>
				<td colspan="2"><label>URL :</label> <i>(format de l\'url : https://www.youtube.com/embed/xxxxxxxxx)</i></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="text" id="url" name="url" placeholder="url"/></td>
			</tr>
			<tr>	
				<td><label>Date :</label></td>
				<td><input type="date"  id="dateVideo" name="dateVideo" placeholder="Date video"/></td>
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