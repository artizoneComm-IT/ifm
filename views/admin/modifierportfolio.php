<?php session_start();?>
<!DOCTYPE html>
<?php include_once('../../models/models.php');
$informations = new GetInformationsArtisant(3);
$reponse = $informations -> get_identities($_SESSION['id']);
$donnees = $reponse -> fetch();?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../../assets/image/logo/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/portfolio.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->

    <!-- Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title>Portfolio</title>

    <style>
      .banner-image{
          background-image: url("../../assets/image/art/profil.jpg");
          background-size: cover;
      }
      .identite{
          color: white;
      }
      .contact{
          border-radius: 20px;
          background-color:rgba(43, 255, 6, 0.116);
      }
      .modification{
          font-size: 30px;
          text-decoration:none;
      }
    </style>
  </head>
  <body>
    <div class="container-fluid">
        <div class="row" >
            <nav class="col navbar  fixed-top navbar-expand-lg bg-dark navbar-dark" >
                <a class="navbar-brand" href="...">
                    <img src="../../assets/image/logo/logo1.png" width="130" height="70" alt="Site logo">
                </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navbarContent" class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link" href="../../index.php"> <span>Accueil</span> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../gallerie.php"> <span>Gallerie</span> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> <span>Artisans</span> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> <span>A propos</span> </a>
                    </li>
                </ul>
            </div>
            </nav>
        </div>
    </div>
    <div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
        <div class="content text-left">
        <div class="container" >
        <div class="row">
            <div class="col-12 col-lg-5">
                <div class="identite">
                    <h1><?php echo $donnees['names']." ". $donnees['last_names'];?></h1>
                    <h2><?php if($donnees['work'] != ""){echo $donnees['work'];}?></h2>
                    <h2><?php echo $donnees['phone1']; ?><br><?php echo $donnees['email']; ?></h2>
                    <h2><?php echo $donnees['addresses']; ?></h2>
                    <h2><?php if(!empty($donnees['work'])){echo $donnees['work'];}?></h2>
                    <p><?php if(!empty($donnees['work_description'])){echo $donnees['work'];}?></p>
                    <a href="upload_file_profile.php" class="modification">Modifier</a>
                </div>
            </div>
            <div class="col-12 col-lg-3"></div>
            <div class="col-12 col-lg-4">
                <img src="<?php if(!empty($donnees['profile_link'])){echo '../../'.$donnees['profile_link'];}?>" class="rounded-circle" alt="profil" width="350" height="400" >
            </div>
        </div>
    </div>
        </div>
    </div>

    <div class="container" style="margin-top:100px">
        <div class="row">
            <div class="col-12 col-lg-4">
                <img src="../../assets/image/bg/report.png"  alt="profil" width="350" height="350" >
            </div>
            <div class="col-12 col-lg-3"></div>
            <div class="col-12 col-lg-5">
                <h1>Formation</h1>
                <h2><?php if($donnees['work'] != ""){echo $donnees['work'];}?></h2>
            </div>
        </div>
    </div>
    
    <div class="container" style="margin-top:100px">
        <div class="row">
            <div class="col-12 col-lg-5">
                <h1>Expérience</h1>
                <h2><?php if($donnees['work'] != ""){echo $donnees['work'];}?></h2>
            </div>
            <div class="col-12 col-lg-3"></div>
            <div class="col-12 col-lg-4">
                <img src="../../assets/image/bg/experience.png"  alt="profil" width="350" height="350" >
            </div>
        </div>
    </div>

    <div class="container" style="margin-top:100px">
        <div class="content text-left">
            <div class="contact">
                <div class="row">
                    <div class="col-12 col-lg-2"></div>
                    <div class="col-12 col-lg-6">
                        <h1>Ajouter un article</h1>
                        <form action="">
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Veuillez séléctionner l'image de votre produit</label>
                                <input class="form-control" type="file" id="formFile">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput2" class="form-label">Prix de votre article:</label>
                                <input type="number" class="form-control" id="exampleFormControlInput2" placeholder="...Ar">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Description du produit:</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                <div class="content text-center">
                                    <button type="button" class="btn btn-primary" style="margin-top:30px">Enregistrer</button>
                                </div>
                            </div>
                        </form>
                    </div>  
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top:100px">
        <div class="couleur_footer">
            <div class="bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <ul class="list-inline text-center">
                                <li class="list-inline-item">
                                    <a href="#"><img src="../../assets/image/inscription/information.png" alt=" " width="30" height="30">À propos</a>
                                </li>
                                <li class="list-inline-item">&middot;</li>

                                <li class="list-inline-item">
                                    <a href="#"><img src="../../assets/image/inscription/copyright.png" alt=" " width="30" height="30">Copyright</a>
                                </li>
                                <li class="list-inline-item">&middot;</li>

                                <li class="list-inline-item">
                                    <a href="mailto:#"><img src="../../assets/image/inscription/gmail.png" alt=" " width="30" height="30"> Gmail</a>
                                </li>
                                <li class="list-inline-item">&middot;</li>

                                <li class="list-inline-item">
                                    <a href="#" target="_blank" title="facebook.com/ArtiZone-UP/"><img src="../../assets/image/inscription/facebook.png" alt=" " width="30" height="30"> Facebook</a>
                                </li>
                                <li class="list-inline-item">&middot;</li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var nav = document.querySelector('nav');

        window.addEventListener('scroll', function(){
            if (window.pageYOffset > 100){
                nav.classList.add('bg-dark', 'shadow');
            }else {
                nav.classList.remove('bg-dark', 'shadow')
            }
        })
    </script> 
  </body>
</html>
