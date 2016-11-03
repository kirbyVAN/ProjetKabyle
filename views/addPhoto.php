<!--Page AddPhoto -->

<?php
	require_once('model/PhotoManager.php');
	// Constantes
	define('TARGET', './assets/images/');    // Repertoire cible
	define('MAX_SIZE', 100000);    // Taille max en octets du fichier
	define('WIDTH_MAX', 800);    // Largeur max de l'image en pixels
	define('HEIGHT_MAX', 800);    // Hauteur max de l'image en pixels
	 
	// Tableaux de donnees
	$tabExt = array('png','gif','jpg','jpeg');    // Extensions autorisees
	$infosImg = array();
	 
	// Variables
	$extension = '';
	$message = '';
	$nomImage = '';
	 
	/************************************************************
	 * Creation du repertoire cible si inexistant
	 *************************************************************/
	if( !is_dir(TARGET) ) {
	  if( !mkdir(TARGET, 0777) ) {
		exit('Erreur : le répertoire cible ne peut-être créé ! Vérifiez que vous diposiez des droits suffisants pour le faire ou créez le manuellement !');
	  }
	}
	 
	/************************************************************
	 * Script d'upload
	 *************************************************************/
	if(!empty($_POST))
	{
	  // On verifie si le champ est rempli
	  if(isset($_POST['datePhoto']) AND !empty($_FILES['photo']['name']) )
	  {
		// Recuperation de l'extension du fichier
		$extension  = strtolower(substr(strrchr($_FILES['photo']['name'], '.'), 1));
	 
		// On verifie l'extension du fichier
		if(in_array($extension,$tabExt))
		{
		  // On recupere les dimensions du fichier
		  $infosImg = getimagesize($_FILES['photo']['tmp_name']);
	 
		  // On verifie le type de l'image
		  if($infosImg[2] >= 1 && $infosImg[2] <= 14)
		  {
			// On verifie les dimensions et taille de l'image
			if(($infosImg[0] <= WIDTH_MAX) && ($infosImg[1] <= HEIGHT_MAX) && (filesize($_FILES['photo']['tmp_name']) <= MAX_SIZE))
			{
			  // Parcours du tableau d'erreurs
			  if(isset($_FILES['photo']['error']) 
				&& UPLOAD_ERR_OK === $_FILES['photo']['error'])
			  {
				// On renomme le fichier
				$nomImage = (string)$_FILES['photo']['name'];
	 
				// Si c'est OK, on teste l'upload
				if(move_uploaded_file($_FILES['photo']['tmp_name'], TARGET.$nomImage))
				{
				  $message = 'Upload réussi !';
				}
				else
				{
				  // Sinon on affiche une erreur systeme
				  $message = 'Problème lors de l\'upload !';
				}
			  }
			  else
			  {
				$message = 'Une erreur interne a empêché l\'uplaod de l\'image';
			  }
			}
			else
			{
			  // Sinon erreur sur les dimensions et taille de l'image
			  $message = 'Erreur dans les dimensions de l\'image !';
			}
		  }
		  else
		  {
			// Sinon erreur sur le type de l'image
			$message = 'Le fichier à uploader n\'est pas une image !';
		  }
		}
		else
		{
		  // Sinon on affiche une erreur pour l'extension
		  $message = 'L\'extension du fichier est incorrecte !';
		}
	  }
	  else
	  {
		// Sinon on affiche une erreur pour le champ vide
		$message = 'Veuillez remplir le formulaire svp !';
	  }
	}

	$title = "Kabyle";
	$titlePage = "Ajouter une photo";
	ob_start();
	
	echo'
		<h1>Ajouter une photo</h1><hr/>
		<strong>'.htmlspecialchars($message).'</strong>
		<form enctype="multipart/form-data" method="POST" action="index.php?page=addPhoto">
			<table class="creation">
			<tr>
				<td><label>Importer une image :</label></td>
				<input type="hidden" name="MAX_FILE_SIZE" value="'.MAX_SIZE.'" />
				<td><input type="file" id="photo" name="photo" placeholder="Importer une photo"/></td>
			</tr>
			<tr>	
				<td><label>Date :</label></td>
				<td><input type="date"  id="datePhoto" name="datePhoto" placeholder="Date photo"/></td>
			</tr>
			<tr><td><label>Description : </label></td>
				<td><textarea type="text" id="descPhoto" name="descPhoto" placeholder="Description"></textarea></td>
			</tr>
			<tr>
				<td colspan=2><input id="ajout" type="submit" value="AJOUTER"/></td>
			</tr>
			</table>
		</form>';

	$content = ob_get_clean();
	
	include('layout.php');
?>