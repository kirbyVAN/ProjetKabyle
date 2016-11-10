<?php
	$titlePage="Kabyle - Supprimer un article";
	ob_start();
	$obj = new ArticleManager();
	echo '
	<h1>Supprimer un article</h1>
	';
	echo '<hr/>
		<form method="POST" action="index.php?page=supprArticle">
		<table style="width:95%">
		<tr style="font-size:14pt; text-align:center; background-color:cyan; height:50px">
			<th></th>
			<th>Titre</th>
			<th>Auteur</th>
			<th>Date de publication</th>
			<th>Contenu</th>
		</tr>
		';
	foreach($article as $data){						
			echo '<tr class="blocArticle">	
						<td><input type=radio name="chk" value="'.$data['idArticle'].'"/></td>
						<td>'.$data['titre'].'</td>
						<td>'.$data['auteur'].'</td>
						<td>'.$data['dateArticle'].'</td>
						<td>';
			$contenu = nl2br(stripslashes($data['contenu']));
			$texte = $obj->tronquer($contenu,200,$data['idArticle']);
			echo $texte;
			echo'</td></tr>' ;
		}
	echo'<tr><td style="text-align:center" colspan="5"><button>Supprimer</button></td></tr>
		</table>' ;
	echo'</form>';
	
	
	$content = ob_get_clean();
	
	include('views/layout.php');
?>