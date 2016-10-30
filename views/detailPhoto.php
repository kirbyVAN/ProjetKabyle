<?php
	
	$titlePage = 'Kabyle - Photo'.$photo['nomPhoto'];;
	
	ob_start();
	
	echo' 
	
		<h1> Détails de l\'image '.$photo['nomPhoto'].'</h1>
		
		<table class=\'detailPhoto\'>
			<tr>
				<td ROWSPAN="2">
					
						<img src="assets/images/'.$photo['nomPhoto'].'" alt="'.$photo['descriptionPhoto'].'"/>
						
				</td>
				<td>
					<p><strong> Date : </strong></p>
				</td>
				<td>
					<p> '.$photo['datePhoto'].'</p>
				</td>
			</tr>
			<tr>
				<td>
					<p><strong> Description : </strong></p>
				</td>
				<td>
					<p> '.$photo['descriptionPhoto'].' </p>
				</td>
			</tr>
		</table>
		';
		
	$content = ob_get_clean();
	
	include('views/layout.php');

?>