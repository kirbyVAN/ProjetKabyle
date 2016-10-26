<?php
	$titlePage="Kabyle - Evènements";
	ob_start();
	
	echo '
	<h1>Agenda</h1>
	<script type="text/javascript">
        calendrier();
    </script>
	';
	echo '<hr/>';
	foreach($event as $data){						
		echo '<div class="blocEvent">	
					<span><P><b>'.$data['nomEvent'].'</b> du '.$data['dateDebut'].' au '.$data['dateFin'].'</P></span>
					<span>';
		$descEvent = nl2br(stripslashes($data['descriptionEvent']));
		$texte = $obj->tronquer($descEvent,200,$data['idEvent']);
		echo $texte;
		echo'</span>
			</div>' ;
	}
	
	
	$content = ob_get_clean();
	
	include('views/layout.php');
?>