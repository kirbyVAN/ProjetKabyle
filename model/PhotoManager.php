<?php
 
class PhotoManager extends Model{
	
	public function getPhotos() {
		$reponse = $this ->executerRequete('SELECT * FROM Photos order by datePhoto desc');
		$photos=$reponse->fetchAll();
		return $photos;
	}
	
	public function getDetailsPhoto($idPhoto){
			$rep = $this->executerRequete('select * from Photos where idPhoto=:idP',array(':idP'=>$idPhoto));
			$details=$rep->fetch();
			return $details;
		}
	
	public function photoRecent(){
		$reponse = $this ->executerRequete('SELECT idPhoto, nomPhoto, MAX(datePhoto), descriptionPhoto FROM Photos');
		$photo=$reponse->fetch();
		return $photo;
	}
}	
?>