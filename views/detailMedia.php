<?php
	$titlePage='Kabyle - Article'.$article['titre'];
	ob_start();

	echo'<article>
		<header>
			<H2> '.$article['titre'].'</H2>
			<div>
				<P> <time datetime="'.$article['dateArticle'].' '.$article['heureArticle'].'"> Le '.$article['dateArticle'].' à '.$article ['heureArticle'].' </time> par '.$article['auteur'].' </P>
			</div>
		</header>
		
		<body> 
			<content>
				
				'.$article['contenu'].'
			</content>';
				
	if(isset($article['photo'])){
		echo'<div class="imgArticle">
			<img src="assets/imagesArticles/'.$article['photo'].'" alt="La photo de l\'article" />
			</div>
			';
	}				
			
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