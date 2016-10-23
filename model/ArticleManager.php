<?php
 
class ArticleManager extends Model{
	
	public function getArticles() {
		$reponse = $this ->executerRequete('SELECT * FROM Articles order by dateArticle desc, heureArticle desc');
		$articles=$reponse->fetchAll();
		return $articles;
	}
	
	public function getDetailsArticle($idArticle){
			$rep = $this->executerRequete('select * from Articles where idArticle=:idA',array(':idA'=>$idArticle));
			$details=$rep->fetch();
			return $details;
		}
		
	public function tronquer($texte,$n,$id)
	{
		if (strlen($texte) > $n)
		{    
			$texte = substr($texte, 0, $n);    
			$position_espace = strrpos($texte, " ");    
			$texte = substr($texte, 0, $position_espace);    
			$texte .= ' [...] <a href="index.php?page=detailMedia&idArticle='.$id.'" target="_blank">Lire la suite</a></p>';
			return $texte;
		}
		else
		{
			return $texte;
		}
	}
	
	function nl2br2($string) { 
		$string = str_replace(array("\r\n", "\r", "\n"), "<br />", $string); 
		return $string; 
	} 
	
	public function articleRecent(){
		$reponse = $this ->executerRequete('SELECT * FROM Articles ORDER BY dateArticle desc');
		$article=$reponse->fetch();
		return $article;
	}
	
	public function addArticle($titreArticle, $auteurArticle, $addArticle, $dateArticle){
		$insertion = $this->executerRequete('insert into Articles(titre, auteur, contenu, dateArticle) values (?,?,?,?)',array($titreArticle, $auteurArticle, $addArticle, $dateArticle));
			return 0;
	}
}
?>