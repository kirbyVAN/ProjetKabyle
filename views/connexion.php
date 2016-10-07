<!--Page Création de compte -->
<?php
	$title = "Kabyle";
	$titlePage = "Kabyle - Connexion";
	ob_start();
	
	echo'
		<form method="POST" action="index.php?page=connexion">
			<table class="connexion">
			<tr><td><label>Login : </label></td>
				<td><input name="login" placeholder=""></td></tr>
			<tr><td><label>Mot de passe : </label></td>
				<td><input name="pass" placeholder="" type="password"></td></tr>
			<tr><td colspan=2><button>Valider</button></td></tr>
			</table>
		</form>
		'.$messageCo.'
		<p>Je n\'ai pas encore de compte : <a href="index.php?page=creation">Créer un compte</a></p>';
	$content = ob_get_clean();
	
	include('layout.php');
?>