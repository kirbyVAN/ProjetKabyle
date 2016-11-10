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
		$reponse = $this ->executerRequete('SELECT * FROM Videos order by dateVideo desc');
		$video=$reponse->fetch();
		return $video;
	}
	
	public function addVideo($titre, $url, $dateVideo, $descriptionVideo){
		$test_url = $this->executerRequete('select * from Videos where url=?', $url);
		if($test_url->rowCount() != 0){
			return 1;
		}
		$insertion = $this->executerRequete('insert into Videos(titre, url, dateVideo, descriptionVideo) values (?,?,?,?)',array($titre, $url, $dateVideo, $descriptionVideo));
			return 0;
	}
	
	public function supprVideo($idVideo){
			$modification = $this->executerRequete('DELETE FROM Videos WHERE idVideo=:idV',array(':idV'=>$idVideo));
			return 0;
		}
}	
?>