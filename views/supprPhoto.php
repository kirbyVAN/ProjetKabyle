<?php
	$titlePage="Kabyle - Supprimer une photo";
	ob_start();

	echo '
	<h1>Supprimer une photo</h1>
	';
	echo '<hr/>
		<form method="POST" action="index.php?page=supprPhoto">
		<table style="width:95%; text-align:center;">
		<tr style="font-size:14pt; text-align:center; background-color:cyan; height:50px">
			<th></th>
			<th>Photo</th>
			<th>Nom de la photo</th>
			<th>Description</th>
		</tr>
		';
	foreach($photo as $data){						
			echo '<tr class="blocArticle">	
						<td><input type=radio name="chk" value="'.$data['idPhoto'].'"/></td>
						<td><img src="assets/images/' .$data['nomPhoto'].'" alt="'.$data['descriptionPhoto'].'" style="width:100px;"/></td>
						<td>'.$data['nomPhoto'].'</td>
						<td>'.$data['descriptionPhoto'].'</td>
				 </tr>' ;
		}
	echo'<tr><td style="text-align:center" colspan="5"><button>Supprimer</button></td></tr>
		</table>' ;
	echo'</form>';
	
	
	$content = ob_get_clean();
	
	include('views/layout.php');
?>