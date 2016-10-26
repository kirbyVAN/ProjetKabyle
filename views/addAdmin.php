<?php
	$titlePage="Kabyle - Ajouter un administrateur";
	ob_start();
	
	echo '
	<h1>Ajouter un administrateur</h1>
	';
	echo '<hr/>
		<form method="POST" action="index.php?page=addAdmin">
		<table style="width:95%">';
	foreach($noAdmin as $data){						
		echo '<tr class="blocEvent" style="text-align:center">	
					<td><input type=radio name="chk" value="'.$data['Login'].'"/></td>
					<td>'.$data['Login'].'</td>
					<td>'.$data['Nom'].'</td>
					<td>'.$data['Prenom'].'</td>
					<td>'.$data['Age'].'</td>
				</tr>';
	}
	echo'<tr><td style="text-align:center" colspan="5"><button>Ajouter</button></td></tr>
		</table>' ;
	echo'</form>';
	
	
	$content = ob_get_clean();
	
	include('views/layout.php');
?>