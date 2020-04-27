<?php



$nomErr = $prenomErr = $dateErr = $genderErr = $mailErr = $adresseErr = $cpErr = $villeErr = $mdpErr =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$nom=($_POST['nom']);
	$prenom=$_POST['prenom'];
	$date=$_POST['date'];
	$gender=$_POST['gender'];
	$mail=$_POST['mail'];
	$adresse=$_POST['adresse'];
	$cp=$_POST['cp'];
	$ville=$_POST['ville'];
	$mdp=$_POST['password'];

	if (empty($nom))
	{
		$nomErr = 'Ce champ est obligatoire';
	}

	else
	{
		if (!preg_match('#[a-zA-Z]+#', $nom))

		{
			$nomErr = 'Veuillez retaper le nom';
		}
	}

	if (empty($prenom))
	{
		$prenomErr = 'Ce champ est obligatoire';
	}

	else
	{
		if (!preg_match('#[a-zA-Z]+#', $prenom))

		{
			$prenomErr = 'Veuillez retaper le prenom';

		}
	}


	if (empty($gender))
	{
		$genderErr = 'Ce champ est obligatoire';
	}

	if (empty($mail))
	{}

	else
	{
		if (!filter_var($mail, FILTER_VALIDATE_EMAIL))
		{
			$mailErr = "L'adresse n'est pas bonne";

		}
	}


	if(empty($adresse))
	{
		$adresseErr = 'Ce champ est obligatoire';
	}
	else
	{
		if (!preg_match('#[a-zA-Z0-9]+#', $adresse))
		{
			$adresseErr = "Veuillez retaper l'adresse";
		}
	}

	if(empty($cp))
	{
		$cpErr = 'Ce champ est obligatoire';
	}
	else
	{
		if (!preg_match('#[0-9]+#', $cp))
		{
			$cpErr = 'Veuillez retaper le code postal';

		}
	}

	if(empty($ville))
	{
		$villeErr = 'Ce champ est obligatoire';
	}

	else
	{
		if (!preg_match('#[a-zA-Z]+#', $ville))
		{
			$villeErr = 'Veuillez retaper le nom de la ville';

		}
	}


	if(empty($mdp))
	{
		$mdpErr = 'Ce champ est obligatoire';
	}

	else
	{
		if (!preg_match('#[a-zA-Z0-9]+#', $mdp))
		{
			$mdpErr = 'Mot de passe non conforme';

		}
	}

}

$servername = "localhost:8889";
$username = "root";
$password = "root";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<title> Inscription </title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="style/style.css" />
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>

    <?php
        include('index.php')
    ?>


	<body  class="body">
				<div class="wrapper fadeInDown">
				<div id="formContent2">


				<div class="card">
					<header class="card-header">
						<a href="Connexion.html" class="float-right btn btn-outline-primary mt-1">Compte existant</a>
						<h4 class="card-title mt-2">Inscription</h4>
					</header>

					<article class="card-body">
						<form method="POST" action="Inscription.php">
							<div class="form-row">
								<div class="col form-group">
									<label>Nom</label>
									<input type="text" class="form-control" placeholder="" name="nom">
									<span style="color : red; font-size : 13px" >* <?php echo $nomErr; ?> </span>
								</div> <!-- form-group end.// -->

								<div class="col form-group">
									<label>Prenom</label>
									<input type="text" class="form-control" placeholder="" name="prenom">
									<span style="color : red; font-size : 13px" >* <?php echo $prenomErr;?> </span>
								</div> <!-- form-group end.// -->
							</div> <!-- form-row end.// -->


							<div class="form-group">
								<label>Date de naissance</label>
								<input type="date" class="form-control" max="" min="" name="date">
							</div> <!-- form-group end.// -->

							<div class="form-group">

								<label class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="gender" value="option1">
									<span class="form-check-label"> Mme </span>
								</label>

								<label class="form-check form-check-inline">
								  	<input class="form-check-input" type="radio" name="gender" value="option2">
							  		<span class="form-check-label"> Mlle </span>
                                </label>

                                <label class="form-check form-check-inline">
								  	<input class="form-check-input" type="radio" name="gender" value="option2">
							  		<span class="form-check-label"> M </span>
								</label>
								<span style="color : red; font-size : 13px" >* <?php echo $genderErr;?> </span>

							</div> <!-- form-group end.// -->


							<div class="form-group">
								<label>Addresse mail</label>
								<input type="mail" class="form-control" placeholder="Ex: mail@domaine.com" name="mail">
								<span style="color : red; font-size : 13px" > <?php echo $mailErr;?> </span>
							</div> <!-- form-group end.// -->

							<div class="form-group">
								<label>Adresse</label>
								<input type="text" class="form-control" name="adresse"><br/>
								<span style="color : red; font-size : 13px" >* <?php echo $adresseErr;?> </span>
							</div> <!-- form-group end.// -->

							<div class="form-row">
								<div class="form-group col-md-6">
									<label>Code postal</label>
									<input type="text" class="form-control" name="cp">
									<span style="color : red; font-size : 13px" >* <?php echo $cpErr;?> </span>
								</div> <!-- form-group end.// -->

								<div class="form-group col-md-6">
									<label>Ville</label>
									<input type="text" class="form-control" name="ville">
									<span style="color : red; font-size : 13px" >* <?php echo $villeErr;?> </span>
								</div> <!-- form-group end.// -->
							</div> <!-- form-row.// -->

							<div class="form-group">
								<label>Créer le mot de passe</label>
								<input class="form-control" type="password" name="password"><br/>
								<span style="color : red; font-size : 13px" >* <?php echo $mdpErr;?> </span>
							</div> <!-- form-group end.// -->

							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-block"> S'inscrire </button>
							</div> <!-- form-group// -->

						</form>
					</article> <!-- card-body end .// -->
				</div> <!-- card.// -->



				</div><!--form content-->
				</div><!--wrapper fadeInDown-->
</body>
</html>
