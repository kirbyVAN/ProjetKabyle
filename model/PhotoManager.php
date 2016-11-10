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
		$reponse = $this ->executerRequete('SELECT * FROM Photos ORDER BY datePhoto desc');
		$photo=$reponse->fetch();
		return $photo;
	}
	
	public function addPhoto($nomPhoto, $datePhoto, $descriptionPhoto){
		$test_nom = $this->executerRequete('select * from Photos where nomPhoto=?', $nomPhoto);
		if($test_nom->rowCount() != 0){
			return 1;
		}
		$insertion = $this->executerRequete('insert into Photos(nomPhoto, datePhoto, descriptionPhoto) values (?,?,?)',array($nomPhoto, $datePhoto, $descriptionPhoto));
			return 0;
	}
	
	public function supprPhoto($idPhoto){
			$modification = $this->executerRequete('DELETE FROM Photos WHERE idPhoto=:idP',array(':idP'=>$idPhoto));
			return 0;
		}
	
}	
?>