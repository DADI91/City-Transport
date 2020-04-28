<?php
require_once("Global/head.html");
require_once("Global/menu.html");

if(!empty($_GET['page'])) {
	switch($_GET['page']) {
		case 'accueil':
			require_once("Controllers/accueil.php");
			break;
		case 'connexion':
			require_once("Controllers/connexion.php");
			break;
		case 'trafic':
			require_once("Controllers/etat_trafic.php");
			break;
		case 'inscription':
			require_once("Controllers/inscription.php");
			break;
		case 'itineraire':
			require_once("Controllers/itineraire.php");
			break;
		default:
			header("Location: index.php?page=accueil");
			break;
	}
} else {
	header("Location: index.php?page=accueil");
}

require_once("Global/bottom.html");
?>
