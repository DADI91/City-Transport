<?php

if($_POST) {
	foreach ($_POST as $key => $value) {
		if(empty($_POST[$key])){
			echo "Un des champs n'est pas rempli !";
			require_once("Views/inscription.html");
			exit();
		}
	}
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$date = $_POST['date'];
	$gender = $_POST['gender'];
	$mail = $_POST['mail'];
	$adresse = $_POST['adresse'];
	$code_postal = $_POST['cp'];
	$ville = $_POST['ville'];
	$mdp = $_POST['password'];
	$mdp2 = $_POST['mdp'];
	if(preg_match('#[a-zA-Z0-9]+ [a-zA-Z0-9] + [.] {1,1} [a-zA-Z]+#', $mail)) {
		
	} else {
		echo "L'adresse n'est pas bonne";
	}

} else {
	require_once("Views/inscription.html");
}
