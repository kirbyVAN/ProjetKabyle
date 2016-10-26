<?php
	$titlePage="Kabyle - Home";
	ob_start();
	
	echo '
	
	<div id="my_carousel">
		<div id="slideshow">
		 <ul id="sContent">
		 
		  <!--<li><img src="./assets/images/KabyleFlag.jpg" class="vueS"></img></li>-->
		  
		 </ul>
		</div>
		<div id="recent">
			<span class="accueilPhoto">';
				if(isset($photo)){
					echo'
					<a href="index.php?page=photo&amp;photo='.$photo['idPhoto'].'" target="_blank" ><img src="assets/images/' .$photo['nomPhoto'].'" alt="'.$photo['descriptionPhoto'].'"/></a>';
				}
			echo'
			</span>
	
			<span class="accueilArticle">';
				if(isset($article)){
					echo'
					<P><b>'.$article['titre'].'</b><br/>de '.$article['auteur'].'<br/>le '.$article['dateArticle'].'</P>';
					$contenu = nl2br(stripslashes($article['contenu']));
					$obj = new ArticleManager();
					$texte = $obj->tronquer($contenu,200,$article['idArticle']);
					echo $texte;
				}
			echo'
			</span>
			
			<span class="accueilVideo">';
				if(isset($video)){
					echo'
						<div><iframe src="'.$video['url'].'" ></iframe></div>
						<div><P>'.$video['titre'].'</P>
						<P><a href="'.$video['url'].'">YouTube</a></P></div>';
				}
				echo'
			</span>
			
		</div>
	</div>
	
	<aside class="rightC">
		<script type="text/javascript">
			calendrier();
		</script>
		<br/>
		<div class="event">';
			if(isset($event)){
				if($event['idEvent']!=NULL){
					echo'
					<P><b>'.$event['nomEvent'].'</b><br/> du <time>'.$event['dateDebut'].'</time><br/> au <time>'.$event['dateFin'].'<time></P>';
					$contenu = nl2br(stripslashes($event['descriptionEvent']));
					$obj = new EventManager();
					$texte = $obj->tronquer($contenu,200,$event['idEvent']);
					echo $texte;
				}else{
					echo'<p>Il n\'y a rien de prévu sur l\'agenda pour l\'instant.';
				}
			}
			echo'
		</div>
		
	</aside>
	
	';
	
	
	$content = ob_get_clean();
	
	include('views/layout.php');
?>