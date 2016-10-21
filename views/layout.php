<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link rel="stylesheet" media="screen, print, handheld" type="text/css" href="assets/css/calendrier.css" />
    <script type="text/javascript" src="js/calendrier.js"></script>
	<script type="text/javascript" src="js/formInscription.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css" />
	<title><?php echo"$titlePage" ?></title>
</head>

<body>

	<header>Kabyle</header>
	
	<nav  id="menu" class="_" role="navigation">
		<ul class="menu">
			<li class="first"><a href="index.php" title="" class="active">Accueil</a></li>
			<li><a href="index.php?page=media" title="La liste des ressources">Médias</a></li>
			<!--<li><a href="/assets/media" title="">Media</a></li>-->
			<li><a href="index.php?page=agenda" title="La liste des événements">Agenda</a></li>
			<?php echo $profil; ?>
			<li class="last"><a href="index.php?page=connexion" title="Connexion - Déconnexion"><?php echo $etatCo; ?></a></li>
			<li class="first"><a href="index.php?page=who" title="" class="active">A propos</a></li>
		</ul>
	</nav>
	
	<div class="corps">
	<?php echo"$content" ?>
	</div>
	
	<hr/>
	<footer>Site réalisé dans le cadre du <b>projet tuteuré</b>.<br/>Par Vanquin, Marchand, Sanchez-Brochet, Maisonhaute.</footer>
</body>
</html>