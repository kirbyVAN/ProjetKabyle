<?php
	$titlePage="Kabyle - Supprimer un événement";
	ob_start();
	$obj = new EventManager();
	echo '
	<h1>Supprimer un événement</h1>
	';
	echo '<hr/>
		<form method="POST" action="index.php?page=supprEvent">
		<table style="width:95%">
		<tr style="font-size:14pt; text-align:center; background-color:cyan; height:50px">
			<th></th>
			<th>Nom</th>
			<th>Date de début</th>
			<th>Date de fin</th>
			<th>Description</th>
		</tr>
		';
	foreach($event as $data){						
			echo '<tr class="blocEvent">	
						<td><input type=radio name="chk" value="'.$data['idEvent'].'"/></td>
						<td>'.$data['nomEvent'].'</td>
						<td>'.$data['dateDebut'].'</td>
						<td>'.$data['dateFin'].'</td>
						<td>';
			$descEvent = nl2br(stripslashes($data['descriptionEvent']));
			$texte = $obj->tronquer($descEvent,200,$data['idEvent']);
			echo $texte;
			echo'</td></tr>' ;
		}
	echo'<tr><td style="text-align:center" colspan="5"><button>Supprimer</button></td></tr>
		</table>' ;
	echo'</form>';
	
	
	$content = ob_get_clean();
	
	include('views/layout.php');
?>