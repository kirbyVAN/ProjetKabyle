<?php
	$titlePage="Kabyle - Home";
	ob_start();
	
	echo '
	<div>
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
					<P><b>'.$article['titre'].'</b> de '.$article['auteur'].' le '.$article['MAX(dateArticle)'].'</P>';
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
	</div>
	<aside class="rightC">
		<script type="text/javascript">
			calendrier();
		</script>
		<br/>
		<div class="event">';
			if(isset($event)){
					echo'
					<P><b>'.$event['nomEvent'].'</b> du '.$event['MIN(dateDebut)'].' au '.$event['dateFin'].'</P>';
					$contenu = nl2br(stripslashes($event['descriptionEvent']));
					$obj = new EventManager();
					$texte = $obj->tronquer($contenu,200,$event['idEvent']);
					echo $texte;
				}
			echo'
		</div>
		
	</aside>
	<div>
	<div class="formulaire">
		<h2>Recherche</h2>
		<form>
			<table class="tableForm">
			<tr>
				<th>Thème<hr/></th>
				<th>Média<hr/></th>
				<td></td>
			</tr>
			<tr>
				<td><select>
					<option>Histoire</option>
					<option>Evènements</option>
					<option>Culture</option>
					<option>Autre</option>
					</select>
				</td>
				<td>
					<label><input name="media" type="checkbox" value="im"> Images</label>
					<label><input name="media" type="checkbox" value="vi"> Videos</label>
					<label><input name="media" type="checkbox" value="ar"> Articles</label>
				</td>
				<td></td>
			</tr>
			<tr>
			<td colspan="3"></td>
			<td>
				<button>Valider</button>
			</td>
			</table>
		</form>
	</div>
	';
	
	
	$content = ob_get_clean();
	
	include('views/layout.php');
?>