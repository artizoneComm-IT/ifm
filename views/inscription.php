<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="shortcut icon" href="../assets/image/logo/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/inscription.css">

    <!-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.6.2/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/info-inscription.css">  -->
</head>
<body>
<!-- <header>
    <div class="couleur_header">
        <div class="container-fluid">
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
            <div class="container">
            <img class="logo_ArtiZone shadow" src="../assets/image/logo/logobg.png" alt="ArtiZone'logo" width="120" height="70">         
                <button
                    type="button"
                    class="navbar-toggler"
                    data-bs-target="navbarNav"
                    data-bs-toggler="collapse"
                    aria-controls="navbarNav"
                    aria-expanded="false"
                    aria-lable="Toggle Navbar"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="mx-auto">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white"> <span style="color:green; font-size:15px; font-weight:bold">Accueil</span> </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white" ><span style="color:green; font-size:15px; font-weight:bold">Gallerie</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white"><span style="color:green; font-size:15px; font-weight:bold">Catégories</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white"><span style="color:green; font-size:15px; font-weight:bold">Artisans</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white"><span style="color:green; font-size:15px; font-weight:bold">Se connecter</span></a>
                        </li>
                    </ul>
                    </div>
                </div>
            </div>   
        </nav>
        </div>
    </div>
</header> -->

<header class="accueil_inscription fixed-top">
    <div class="container">
        <div class="row">
            <nav class="col navbar navbar-expand-md navbar-light">
                <img class="logo_ArtiZone shadow mr-3" src="../assets/image/logo/logobg.png" alt="ArtiZone'logo" width="120" height="70"> 
                    <span class="titre text-primary mr-3">ArtiZone</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="navbarContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="../index.php" class="nav-link">Acceuil</a>
                        </li>           
                        <li class="nav-item">
                            <a href="#" class="nav-link">Artisant</a>
                        </li>   
                        <li class="nav-item">
                            <a href="#" class="nav-link">Gallerie</a>
                        </li> 
                        <li class="nav-item">
                            <a href="#" class="nav-link mr-md-5">Catégories</a>
                        </li>
                        <li class="nav-item ml-md-5 active">
                            <a href="login.php" class="btn btn-primary" class="nav-link">Se connecter</a>
                        </li>                       
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>

<section>
    <div class="container mt-5">
        <p class="text-success text-center" style="font-family: 'Z003'; font-size:1.5em;">Veuillez remplir vos identités:</p>
        <div class="row form-group">
            <div class="col-12 col-md-1"></div>

            <div class="col-12 col-md-5 m-2 border bg-light shadow rounded p-2">
                <label for="names" class="form-label font-weight-bold font-italic ml-3">Nom:</label>
                <input type="text" id="names" placeholder="Veuillez saisir votre nom ***" class="form-control" required><br>

                <label for="last_names" class="form-label font-weight-bold font-italic ml-3">Prénom(s):</label>
                <input type="text" id="last_names" placeholder="Veuillez saisir votre prénom(s) ***" class="form-control" required><br>

                <label for="pseudo" class="form-label font-weight-bold font-italic ml-3">Pseudo:</label>
                <input type="text" id="pseudo" placeholder="Veuillez saisir votre pseudo ***" class="form-control" required><br>

                <label for="phones" class="form-label font-weight-bold font-italic ml-3">Téléphones:</label>
                <input type="phone" id="phone1" placeholder="Téléphone 1 ***" class="form-control" required><br>
                <input type="phone" id="phone2" placeholder="Téléphone 2 ***" class="form-control"><br>
            </div>

            <div class="col-12 col-md-5 m-2 border bg-light rounded p-2">
                <label for="addresses" class="form-label font-weight-bold font-italic ml-3">Domicile:</label>
                <input type="text" id="addresses" placeholder="Veuillez saisir votre adresse ***" class="form-control" required><br>

                <label for="email" class="form-label font-weight-bold font-italic ml-3">Adresse email:</label>
                <input type="text" id="email" placeholder="Veuillez saisir votre email ***" class="form-control" required><br>

                <label for="password" class="form-label font-weight-bold font-italic ml-3">Mot de passe:</label>
                <input type="password" id="password" placeholder="Veuillez saisir votre mot de passe ***" class="form-control" required><br>

                <label class="form-label font-weight-bold font-italic ml-3">Où êtes-vous dans l'artisanat ?</label>
                <select id="categorie" class="form-control" required>
                    <option value=""> --- Veuillez en choisir ***</option>
                    <option value="1">peinture</option>
                    <option value="2">dessin</option>
                    <option value="3">sculpture</option>
                    <option value="4">vannerie</option>
                    <option value="5">coutûre</option>
                    <option value="6">tissage</option>
                </select>

                <div class="container mt-3">
                    <div class="row">
                        <div class="col-12 text-center">
                            <button class="btn btn-success" id="envoyer">Envoyer</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-1"></div>
        </div>
    </div>
</section>

    <!-- script>
        var nav = document.querySelector('nav');

        window.addEventListener('scroll', function(){
            if (window.pageYOffset > 100){
                nav.classList.add('bg-dark', 'shadow');
            }else {
                nav.classList.remove('bg-dark', 'shadow')
            }
        })
    </script>  -->
<script type="text/javascript" src="../assets/js/jquery.js"></script>
<script type="text/javascript" src="../assets/js/popper.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../assets/js/js_inscription.js"></script>
</body>
</html>