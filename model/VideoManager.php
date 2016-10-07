<?php
 
class VideoManager extends Model{
	
	public function getVideos(){
	$reponse = $this->executerRequete('SELECT * FROM Videos order by dateVideo desc');
		$videos=$reponse->fetchAll();
		return $videos;
	}
	
	public function getDetailsVideo($idVideo){
			$rep = $this->executerRequete('select * from Videos where idVideo=:idV',array(':idV'=>$idVideo));
			$details=$rep->fetch();
			return $details;
		}
	
	public function videoRecent(){
		$reponse = $this ->executerRequete('SELECT idVideo, titre, url, MAX(dateVideo), descriptionVideo FROM Videos');
		$video=$reponse->fetch();
		return $video;
	}
}	
?>