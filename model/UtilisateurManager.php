<!--UserManager-->
﻿<?php

	class UtilisateurManager extends Model{
	
		public function createUser($nom, $prenom, $age, $mail, $login, $pass) {
			//retourne vrai si création ok - login si il existe déjà - sinon email si il existe déjà
		
			$test_login = $this->executerRequete('select * from TempUser where Login=?', $login);
			$test_mail = $this->executerRequete('select * from TempUser where Email=?', $mail);
			if($test_login->rowCount() != 0){
				return 1;
			}
			if($test_mail->rowCount() != 0){
				return 2;
			}
			$insertion = $this->executerRequete('insert into TempUser(Nom,Prenom,Age,Email,Login,Pass) values (?, ?, ?, ?, ?, ?)',array($nom, $prenom, $age, $mail, $login, $pass));
			return 0;
		}
		
		public function addUser($login) {
			//retourne vrai si création ok - login si il existe déjà - sinon email si il existe déjà
			$test_login = $this->executerRequete('select * from Utilisateur where Login=?', $login);
			if($test_login->rowCount() != 0){
				return 1;
			}
			
			//copie de TempUser à utilisateur
			$insertion = $this->executerRequete('INSERT into Utilisateur SELECT * FROM TempUser where Login=:log', array(':log'=>$login));
			
			//suppression de TempUser
			$suppression = $this->executerRequete('DELETE FROM TempUser WHERE Login=:log', array(':log'=>$login));
			return 0;
		}
		
		public function logUser($login, $pass){
			//retourne vrai si la connexion ok - faux si login inexistant - login si passwd incorrect
			$connexion = $this ->executerRequete('SELECT * FROM Utilisateur WHERE Login=:Login AND Pass=:Pass',
			array(':Login' => $login, ':Pass' =>$pass));
		
			$count = $connexion->rowCount();
			$user = $connexion->fetch();
		
			if($user['Login']==$login AND $user['Pass']==$pass AND $count==1){
				return 1;
			} else {
				return 0;
			}
		}
		
		public function getDetailUser($login){
			$statut = $this -> executerRequete('SELECT * FROM Utilisateur WHERE Login=:Login',array(':Login'=>$login));
			$admin=$statut->fetch();
			return $admin;
		}
		
		public function getTempUser() {
			$reponse = $this ->executerRequete('SELECT Login, Nom, Prenom, Age FROM TempUser');
			$tempUser=$reponse->fetchAll();
			return $tempUser;
		}
		
		public function getNoAdmin() {
			$reponse = $this ->executerRequete('SELECT Login, Nom, Prenom, Age FROM Utilisateur WHERE admin=0');
			$noAdmin=$reponse->fetchAll();
			return $noAdmin;
		}
		
		public function getAdmin() {
			$reponse = $this ->executerRequete('SELECT Login, Nom, Prenom, Age FROM Utilisateur WHERE admin=1');
			$admin=$reponse->fetchAll();
			return $admin;
		}
	
		public function addAdmin($login){
			$modification = $this->executerRequete('UPDATE Utilisateur SET admin=1 WHERE Login=:Login',array(':Login'=>$login));
			return 0;
		}
		
		public function supprAdmin($login){
			$modification = $this->executerRequete('UPDATE Utilisateur SET admin=0 WHERE Login=:Login',array(':Login'=>$login));
			return 0;
		}
		
	}
	
?>