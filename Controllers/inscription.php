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
	if (preg_match('#[a-zA-Z]+#', $nom)) {
		if (preg_match('#[a-zA-Z]+#', $prenom)) {
			if(preg_match('#[a-zA-Z0-9]+ [a-zA-Z0-9] + [.] {1,1} [a-zA-Z]+#', $mail)) {
				if(!empty($adresse)) {
					if (preg_match('#[a-zA-Z0-9]+#', $password)) {
						//Si tout est ok, on inscrit l"utilisateur
					} else {
						echo 'Mot de passe non conforme';
					}
				} else {
					echo "L'adresse est vide, veuillez remplir ce champ";
				}
			} else {
				echo "L'adresse n'est pas bonne";
			}
		} else {
			echo 'Veuillez retaper le prenom.';
		}
	} else {
		echo 'Veuillez retaper le nom. ';
	}
} else {
	require_once("Views/inscription.html");
}
