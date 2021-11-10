<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Artizone-Login</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
</head>
<body>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-12">
					
				</div>
			</div>
		</div>
	</header>
	<section>
		<div class="container mt-5">
			<div class="row form-group">
				<div class="col-12 col-md-3"></div>
				<div class="col-12 col-md-6 border rounded shadow p-3 m-1">
					<label for="identifiant" class="form-label font-weight-bold ml-3 font-italic">Identifiant:</label>
					<input type="text" id="identifiant" 
						placeholder="Veuillez saisir votre email ou numéro de téléphone ***" class="form-control" required><br>

					<label for="password" class="form-label font-weight-bold ml-3 font-italic">Mot de passe:</label>
					<input type="password" id="password" 
						placeholder="Veuillez saisir votre mot de passe ***" class="form-control" required><br>

					<div class="container" id="erreur">
						<div class="row">
							<div class="col-12 text-danger">
								<p>Identifiant et/ou mot de passe incorrect...! Veuillez réessayer !</p>
							</div>
						</div>
					</div>
					<div class="container mt-2">
						<div class="row">
							<div class="col-12 text-center">
								<button class="btn btn-success" id="connecter">Se connecter</button>
							</div>
							<div class="col-12 text-right mt-3">
								<button class="btn btn-link" id="inscrire">S'inscrire</button>
							</div>
							<div class="col-12 text-left">
								<button class="btn btn-link" id="forgot_password">Mot de passe oublié ???</button>
							</div>
						</div>						
					</div>
				</div>
				<div class="col-12 col-md-3"></div>
			</div>
		</div>
	</section>

<script type="text/javascript" src="../assets/js/jquery.js"></script>
<script type="text/javascript" src="../assets/js/popper.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.js"></script>
<script type="text/javascript" src="../assets/js/js_login.js"></script>
</body>
</html>