/*fatma.derbel@etu.univ-lyon.fr*/

window.addEventListener("load", load_windows);

function load_windows(){
	boutton = document.getElementById('ok');
	boutton.disabled=true;
}

function verif_age(champ){
	if(isNaN(parseInt(champ.value)) ||  parseInt(champ.value)< 18){
		document.getElementById('age').style.background="lightPink";	
	}else{
		document.getElementById('age').style.background="lightGreen";
		return true;
	}
}

function verif_id(champ){
	var regex =/^[a-zA-Z]+$/;
	if((champ.value.length>=8) && (regex.test(champ.value))){
		document.getElementById('login').style.background="lightGreen";
		return true;
	}else{
		document.getElementById('login').style.background="lightPink";
	}
}

function verif_force_mdp(champ){
	
	var percent=0;
	//problème avec les expressions régulières
	//la force arrive au max à 40 mais il faut au moins 8 caractères, mais de même type
	var regex_min = /[a-z]/;
	var regex_maj = /[A-Z]/;
	var regex_chif = /[0-9]/;
	var regex_spe = /[!?@#$£%^&*°%µ]/;
	
	var force = document.getElementById("force_msg");
	
	vide = document.getElementById("mdp_msg");
	vide.textContent = "";
	
	if(champ.value.length<8){
		var conseil = document.createElement("p");
		conseil.setAttribute("class", "conseil");
		conseil.textContent = "ATTENION : Mot de passe trop court ! (8 caractères minimum) \n";
		document.getElementById("mdp_msg").appendChild(conseil);
	}
	else{
		percent+=20;
	}
	if(!regex_min.test(champ.value)){
		var conseil = document.createElement("p");
		conseil.setAttribute("class", "conseil");
		conseil.textContent = "ATTENTION : Mot de passe doit contenir au moins une lettre minuscule ! \n";
		document.getElementById("mdp_msg").appendChild(conseil);
	}
	else {
		percent+=20;
	}
	if(!regex_maj.test(champ.value)){
		var conseil = document.createElement("p");
		conseil.setAttribute("class", "conseil");
		conseil.textContent = "Conseil : ajoutez au moins une lettre majuscule.\n";
		document.getElementById("mdp_msg").appendChild(conseil);
	}
	else{
		percent+=20;
		
	}
	if(!regex_chif.test(champ.value)){
		var conseil = document.createElement("p");
		conseil.setAttribute("class", "conseil");
		conseil.textContent = "Conseil : ajoutez au moins un chiffre.\n";
		document.getElementById("mdp_msg").appendChild(conseil);
	}else{
		console.log(percent);
		percent+=20;
		console.log(percent);
		
	}
	console.log(percent);
	if(!regex_spe.test(champ.value)){
		var conseil = document.createElement("p");
		conseil.setAttribute("class", "conseil");
		conseil.textContent = "Conseil : ajoutez au moins un caractère spécial (!?@#$£%^&*°%µ).\n";
		document.getElementById("mdp_msg").appendChild(conseil);
	}else {
		percent+=20;
		
	}
	console.log(percent);
	
	if(percent<=40){
		force.textContent = "TROP FAIBLE ! :-( " + percent;
		document.getElementById('pass').style.background="lightPink";
		return false;
	} else {
		if(percent>40 && percent<=80){
			force.textContent = "PASSABLE. :-/ " + percent;
			document.getElementById('pass').style.background="lightYellow";
			return true;
		} else {
			force.textContent = "SUPER ! :-) " + percent;
			document.getElementById('pass').style.background="lightGreen";
			return true;
		}
	}
	/*A finir*/
	
	return false;
}

function verif_mdp2(champ){
	var mdp1 = document.getElementById('pass').value;
	var mdp2 = champ.value;
	
	if(mdp1 === mdp2){
		document.getElementById('pass2').style.background="lightGreen";
		return true;
	}else{
		document.getElementById('pass2').style.background="lightPink";	
	}
}

function verif_cgu(champ){

	var age = verif_age(document.getElementById('age'));
	var pseudo = verif_id(document.getElementById('login'));
	var mdp1 = verif_force_mdp(document.getElementById('pass'));
	var mdp2 = verif_mdp2(document.getElementById('pass2'));
	
	if(age && pseudo && mdp1 && mdp2){
		boutton.disabled=false;
	}	
}