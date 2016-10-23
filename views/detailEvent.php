<?php
	$titlePage='Kabyle -Evenement'.$event['nomEvent'];
	ob_start();

	echo'<article class="detailEvent">
		<header>
			<H1>Evènement</H1>
			<H2> '.$event['nomEvent'].'</H2>
			<div>
				<P> <time datetime="'.$event['dateDebut'].'"> Du '.$event['dateDebut'].' au '.$event['dateFin'].' </time></P>
			</div>
		</header>
		
		<body> 
			<content>
				
				'.$event['descriptionEvent'].'
			</content>';			
			
	echo'
		<BR/>
		</body>
	
		<footer>
			<BR/>
		</footer>
		</article>';
			
	
	
	
	$content = ob_get_clean();
	
	include('views/layout.php');
?>