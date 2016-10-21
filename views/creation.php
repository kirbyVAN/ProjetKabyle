<!--Page Création de compte -->
<?php
	$title = "Kabyle";
	$titlePage = "creation";
	ob_start();
	
	echo'
		<form method="POST" action="index.php?page=creation">
			<table class="creation">
			<tr>
				<td><label>Nom :</label></td>
				<td><input type="text" id="nom" name="nom" placeholder="Nom"/></td>
			</tr>
			<tr>
				<td><label>Prénom :</label></td>
				<td><input type="text" id="prenom" name="prenom" placeholder="Prenom"/></td>
			</tr>
			<tr>	
				<td><label>Âge :</label></td>
				<td><input type="text"  id="age" name="age" size="2" placeholder="Age" onchange="verif_age(this)"/></td>
			</tr>
			<tr><td><label>Adresse mail : </label></td>
				<td><input type="text" id="email" name="email" placeholder="Email"></td>
			</tr>
			<tr>
				<td><label>Identifiant :</label></td>
				<td><input type="text" id="login" name="login" placeholder="Identifiant" onchange="verif_id(this)"/></td>
			</tr>
			<tr>
				<td><label>Mot de passe :</label></td>
				<td><input type="password" id="pass" name="pass" placeholder="Mot de passe" onchange="verif_force_mdp(this)"/></td>
			</tr>
			<tr>
				<td colspan=2 id="mdp_msg"><P></P></td>
			</tr>
			<tr>
				<td colspan=2 id="force_msg"><P></P></td>
			</tr>
			<tr>
				<td><label>Confirmer le mot de passe :</label></td>
				<td><input type="password" id="pass2" name="pass2"  placeholder="Confirmation" onchange="verif_mdp2(this)"/></td>
			</tr>
			<tr>
				<td colspan=2><label><input id="chk" type="checkbox" onclick="verif_cgu(this)"/>J\'accepte les conditions d\'utilisation</label></td>
			</tr>
			<tr>
				<td colspan=2><input id="ok" type="submit" value="VALIDER"/></td>
			</tr>
			</table>
		</form>';
	//A revoir
	if (isset($res)){
		if($res==1){
			echo 'ERREUR : Login existant !';
		}
		elseif($res==2){
			echo 'ERREUR : email existant !';
		}
		elseif($res==0){
			echo 'Super ! Bienvenue au club !';
		}
		else{
			echo '';
		}
	}
	$content = ob_get_clean();
	
	include('layout.php');
?>