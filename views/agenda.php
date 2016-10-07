<?php
	$titlePage="Kabyle - Evènements";
	ob_start();
	
	echo '
	<p>Agenda</p>
	<script type="text/javascript">
        calendrier();
    </script>
	';
	
	
	$content = ob_get_clean();
	
	include('views/layout.php');
?>