<?php
	$titlePage="Kabyle - Supprimer un administrateur";
	ob_start();
	
	echo '
	<h1>Supprimer un administrateur</h1>
	';
	echo '<hr/>
		<form method="POST" action="index.php?page=supprAdmin">
		<table style="width:95%">
		<tr style="font-size:14pt; text-align:center; background-color:cyan; height:50px">
			<th></th>
			<th>Login</th>
			<th>Nom</th>
			<th>Prenom</th>
			<th>Age</th>
		</tr>
		';
	foreach($admin as $data){						
		echo '<tr class="blocEvent" style="text-align:center">	
					<td><input type=radio name="chk" value="'.$data['Login'].'"/></td>
					<td>'.$data['Login'].'</td>
					<td>'.$data['Nom'].'</td>
					<td>'.$data['Prenom'].'</td>
					<td>'.$data['Age'].'</td>
				</tr>';
	}
	echo'<tr><td style="text-align:center" colspan="5"><button>Supprimer</button></td></tr>
		</table>' ;
	echo'</form>';
	
	
	$content = ob_get_clean();
	
	include('views/layout.php');
?>