<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se connecter</title>
    <link rel="shortcut icon" href="../assets/image/logo/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/css_additionnels.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">

</head>
<body>
<header>
    <div class="couleur_header">
        <div class="container">
            <div class="row">
                <nav class="col navbar navbar-expand-md navbar-light navbar-inverse">
                    <a href="../index.php" class="navbar-brand font-weight-bold">
                    <img src="../assets/image/logo/logobg.png" alt="logo of Artizone" width="100" height="50" class="logo_artizone">
                        <span class="nom_artizone ml-3 font-weight-bold text-primary">ArtiZone</span>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div id="navbarContent" class="collapse navbar-collapse">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="../index.php" class="nav-link menu">Accueil</a>
                            </li>			
                            <li class="nav-item active">
                                <a href="info_inscription.php" class="nav-link menu">S'inscrire</a>
                            </li>							
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

<section>
	<div class="container mt-5" id="login">
		<div class="row form-group">
			<div class="col-12 col-md-3"></div>
			<div class=" tab col-12 col-md-6 border rounded shadow bg-light p-3 m-md-1">
				<label for="identifiant" class="form-label font-weight-bold ml-3 font-italic">Identifiant:</label>
				<input type="text" id="identifiant" 
					placeholder="Votre email ou numéro de téléphone... ***" class="form-control" required><br>

				<label for="password" class="form-label font-weight-bold ml-3 font-italic">Mot de passe:</label>
				<input type="password" id="password" 
					placeholder="Votre mot de passe... ***" class="form-control" required><br>

				<div class="container" id="erreur">
					<div class="row">
						<div class="col-12 text-danger">
							<p>Identifiant et/ou mot de passe incorrect...! Veuillez réessayer!</p>
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
							<button class="btn btn-link" id="forgot_password">Mot de passe oublié?</button>
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
