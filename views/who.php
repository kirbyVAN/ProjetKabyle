<?php
	$titlePage="Kabyle - Qui sommes-nous ?";
	ob_start();
	
	echo '
	<p>Qui sommes - nous ?</p>
	
	';
	
	
	$content = ob_get_clean();
	
	include('views/layout.php');
?>