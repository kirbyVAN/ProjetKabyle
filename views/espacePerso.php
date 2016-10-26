<!--Page Espace personnel -->
<?php
	$title = "Kabyle";
	$titlePage = "Kabyle - Espace personnel";
	ob_start();
	
	echo'
	<h1>Bienvenu dans votre espace personnel !</h1><hr/>
	<p><b>Nom : </b>'.$user['Nom'].'</p>
	<p><b>Prenom : </b>'.$user['Prenom'].'</p>
	<p><b>Age : </b>'.$user['Age'].'</p>
	<p><b>Preudo/Login : </b>'.$user['Login'].'</p>
		';
		
	$content = ob_get_clean();
	
	include('layout.php');
?>