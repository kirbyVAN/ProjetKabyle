<?php

	
	$title = "Erreur 404!";
	
	$titlePage = "Kabyle - Erreur";
		
	ob_start();
	if ($error_type == 1){
		echo '<div id ="erreur"><p> ERREUR : nombre incorrect.<p>';
	} else {
		echo '<div id ="erreur"> <p>Erreur ! La page demandée n\'existe pas. <p>';
	}
	
	
	$content = ob_get_clean();
	
	include('layout.php');
	
	
?>	
	