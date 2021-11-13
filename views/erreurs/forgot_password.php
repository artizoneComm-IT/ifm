<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Artizone-Forgot password</title>
	<link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../assets/css/loading.css">
	<link rel="stylesheet" href="../../assets/css/css_additionnels.css">
</head>
<body>
	<header>
		<div class="couleur_header">
	        <div class="container">
	            <div class="row">
	                <nav class="col navbar navbar-expand-md navbar-light navbar-inverse">
	                    <a href="../../index.php" class="navbar-brand font-weight-bold">
	                    <img src="../../assets/image/logo/logobg.png" alt="logo of Artizone" width="100" height="50" class="logo_artizone">
	                        <span class="nom_artizone ml-3 font-weight-bold text-primary">ArtiZone</span>
	                    </a>
	                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
	                        <span class="navbar-toggler-icon"></span>
	                    </button>
	                    <div id="navbarContent" class="collapse navbar-collapse">
	                        <ul class="navbar-nav">
	                            <li class="nav-item active">
	                                <a href="../../index.php" class="nav-link menu">Accueil</a>
	                            </li>							
	                        </ul>
	                    </div>
	                </nav>
	            </div>
	        </div>
	    </div>
	</header>
	<section>
		<div class="container">
			<div class="row form-group">
				<div class="col-12 col-md-3"></div>
				<div class="col-12 col-md-6  border shadow rounded bg-light p-3">
					<p class="text-warning">Pour la récupération de votre mot de passe, veuillez bien saisir votre email. <br>
					Merci de votre compréhension !</p>

					<label for="email" class="form-label font-weight-bold font-italic ml-3">Adresse email:</label>
					<input type="email" id="email"
						placeholder="Veuillez saisir votre email ***" class="form-control" required>

					<div class="container mt-3">
						<div class="row">
							<div class="col-12 text-center" id="envoyer">
								<button class="btn btn-success" id="send_mail">Envoyer</button>
							</div>
							<div class="col-12 text-center" id="loading">
								<span class="ld ld-hourglass ld-spin-fast" style="font-size:64px;color:#8da"></span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-3"></div>
			</div>
		</div>
	</section>
<script type="text/javascript" src="../../assets/js/jquery.js"></script>
<script type="text/javascript" src="../../assets/js/popper.js"></script>
<script type="text/javascript" src="../../assets/js/bootstrap.js"></script>
<script type="text/javascript" src="../../assets/js/js_login.js"></script>
</body>
</html>