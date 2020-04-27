<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<title> Itiniraire </title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="style/style.css" />
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>
    
    <?php  
        include('index.php')
    ?>
    
<body class="bd_conn">
		

		<div class="container">
		
			<div class="wrapper fadeInDown">
				<div class="col-md-6">
					<div class="card">
					<header class="card-header">
						<h4 class="card-title mt-2">Simuler votre itineraire</h4>	
					</header>
					
					<article class="card-body">
						<form>
							<div class="form-group">
								<label for="formGroupExampleInput">Saisisser votre gare de départ :</label>
								<input type="text" class="form-control" id="formGroupExampleInput" placeholder="ex: lieu, station, address">
							</div> <!-- form-group end.// -->
							
							<div class="form-group">
								<label for="formGroupExampleInput2">Saisisser votre gare d'arriver :</label>
								<input type="text" class="form-control" id="formGroupExampleInput2" placeholder="ex: lieu, station, address">
							</div> <!-- form-group end.// -->
							
							<div class="form-group">
								<label class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="choice" value="option3">
									<span class="form-check-label">Trajet le plus court</span>
								</label>
								
								<label class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="choice" value="option4">
									<span class="form-check-label">Trajet le plus rapide</span>
								</label>
							</div> <!-- form-group end.// -->
							
							<div class="form-row">
								<div class="form-group col-md-6">
									<label>Jour de départ</label>
									<input type="date" class="form-control">
								</div> <!-- form-group end.// -->
								
								<div class="form-group col-md-6">
									<label>Heure de départ</label>
									<input type="time" class="form-control">
								</div> <!-- form-group end.// -->
							</div> <!-- form-row.// -->  
							
							<div class="form-group">
								<button type="submit" class="btn btn-info btn-block"> C'est partie ! </button>
							</div> <!-- form-group// -->      
						</form>
					</article> <!-- card-body end .// -->
					
					<div class="border-top card-body text-center">...<a href=""></a></div>
				</div> <!-- card.// -->
				</div> <!-- col.//-->
				</div> <!-- row.//-->
				<div> <!-- wrapper.//-->
		</div> <!--container end.//-->
	
	</body>
</html>
