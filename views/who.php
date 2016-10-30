<?php
	$titlePage="Kabyle - Qui sommes-nous ?";
	ob_start();
	
	echo '
	<h1>A propos</h1>
	<p>Les Kabyles (en arabe algérien : القبايل El Qbayel) sont un ensemble de tribus berbères formant un groupe ethnique originaire de la Kabylie (en kabyle : "tamurt n Ieqvayel", ou tamurt n yigawawen « pays des kabyles »), une région berbérophone d\'Algérie à dominante montagneuse. Ils peuplent le littoral et les divers massifs montagneux de la région : les montagnes du Djurdjura, des Bibans et des Babors. À partir de la fin du xixe siècle les Kabyles fournissent le premier groupe berbérophone par le nombre en Algérie. Ils ont constitué, depuis l\'indépendance de ce pays, le milieu le plus favorable au développement de la revendication identitaire berbère. Ils sont aujourd’hui présents dans d\'autres régions d’Algérie notamment à Alger, et parmi la diaspora algérienne en France.</p>
	<br/>
	<i style="color:blue; font-size:11pt;">https://fr.wikipedia.org/wiki/Kabyles</i>
	';
	
	
	$content = ob_get_clean();
	
	include('views/layout.php');
?>