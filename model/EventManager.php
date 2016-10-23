<?php
 
class EventManager extends Model{
	
	public function getEvent() {
		$reponse = $this ->executerRequete('SELECT * FROM Evenements WHERE dateDebut>= NOW() order by dateDebut');
		$event=$reponse->fetchAll();
		return $event;
	}
	
	public function getDetailEvent($idEvent){
			$rep = $this->executerRequete('select * from Evenements where idEvent=:idE',array(':idE'=>$idEvent));
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
			$texte .= ' [...] <a href="index.php?page=detailEvent&idEvent='.$id.'" target="_blank">Lire la suite</a></p>';
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
	
	public function eventProc(){
		$reponse = $this ->executerRequete('SELECT idEvent, nomEvent, MIN(dateDebut), dateFin, descriptionEvent FROM Evenements WHERE dateDebut>=NOW()');
		$event=$reponse->fetch();
		return $event;
	}
}
?>