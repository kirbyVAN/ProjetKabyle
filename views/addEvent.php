<!--Page AddEvent -->
<?php
	$title = "Kabyle";
	$titlePage = "Ajouter un événement";
	ob_start();
	
	echo'
		<h1>Ajouter un événement</h1><hr/>
		<form method="POST" action="index.php?page=addEvent">
			<table class="creation">
			<tr>
				<td><label>Nom de l\'événement :</label></td>
				<td><input type="text" id="nomEvent" name="nomEvent" placeholder="Nom évènement"/></td>
			</tr>
			<tr>	
				<td><label>Date de début:</label></td>
				<td><input type="date"  id="dateDebut" name="dateDebut" placeholder="Date de début"/></td>
			</tr>
			<tr>	
				<td><label>Date de fin :</label></td>
				<td><input type="date"  id="dateFin" name="dateFin" placeholder="Date de fin"/></td>
			</tr>
			<tr>
				<td colspan="2"><label>Description de l\'évènement : </label></td>
			</tr>
			<tr>
				<td colspan="2"><textarea type="text" id="descEvent" name="descEvent" placeholder="Description de l\'événement"></textarea></td>
			</tr>
			<tr>
				<td colspan=2><input id="ajout" type="submit" value="AJOUTER"/></td>
			</tr>
			</table>
		</form>';

	$content = ob_get_clean();
	
	include('layout.php');
?>