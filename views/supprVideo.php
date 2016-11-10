<?php
	$titlePage="Kabyle - Supprimer une video";
	ob_start();

	echo '
	<h1>Supprimer une video</h1>
	';
	echo '<hr/>
		<form method="POST" action="index.php?page=supprVideo">
		<table style="width:95%; text-align:center;">
		<tr style="font-size:14pt; text-align:center; background-color:cyan; height:50px">
			<th></th>
			<th>Video</th>
			<th>Titre</th>
			<th>Date de publication</th>
			<th>URL</th>
		</tr>
		';
	foreach($video as $data){						
			echo '<tr class="blocArticle">	
						<td><input type=radio name="chk" value="'.$data['idVideo'].'"/></td>
						<td><iframe src="'.$data['url'].'" ></iframe></td>
						<td>'.$data['titre'].'</td>
						<td>'.$data['dateVideo'].'</td>
						<td>'.$data['url'].'</td>
				 </tr>' ;
		}
	echo'<tr><td style="text-align:center" colspan="5"><button>Supprimer</button></td></tr>
		</table>' ;
	echo'</form>';
	
	
	$content = ob_get_clean();
	
	include('views/layout.php');
?>