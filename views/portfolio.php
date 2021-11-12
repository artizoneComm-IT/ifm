<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../assets/image/logo/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/portfolio.css">
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
          background-image: url("../assets/image/art/profil.jpg");
          background-size: cover;
      }
      .identite{
          color: white;
          margin-top: 50px;
      }
      .contact{
          border-radius: 20px;
          background-color:rgba(43, 255, 6, 0.116);
      }
      
    </style>
  </head>
  <body>
    <div class="container-fluid">
        <div class="row" >
            <nav class="col navbar  fixed-top navbar-expand-lg bg-dark navbar-dark" >
                <a class="navbar-brand" href="...">
                    <img src="../assets/image/logo/logo1.png" width="120" height="70" alt="Site logo">
                </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navbarContent" class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link" href="#"> <span>Accueil</span> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> <span>Gallerie</span> </a>
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
                    <h1>RAKOTO Maria</h1>
                    <h2>Déssinatrice</h2>
                    <h2>contact</h2>
                    <h2>addresse</h2>
                    <h2>Déssimetier</h2>
                    <h2>description</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium iste ipsa, enim tenetur asperiores dolore quod dolorem unde molestias magnam.</p>
                </div>
            </div>
            <div class="col-12 col-lg-3"></div>
            <div class="col-12 col-lg-4">
                <img src="../assets/image/bg/profil.jpg" class="rounded-circle" alt="profil" width="350" height="400" >
            </div>
        </div>
    </div>
        </div>
    </div>

    <div class="container" style="margin-top:100px">
        <div class="row">
            <div class="col-12 col-lg-4">
                <img src="../assets/image/bg/report.png"  alt="profil" width="350" height="350" >
            </div>
            <div class="col-12 col-lg-3"></div>
            <div class="col-12 col-lg-5">
                <h1>Formation</h1>
                <h2>Déssinateur</h2>
                <p>date</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa consequuntur nisi facere beatae eius, officia aliquid iusto illum voluptatem quasi.</p>
            </div>
        </div>
    </div>
    
    <div class="container" style="margin-top:100px">
        <div class="row">
            <div class="col-12 col-lg-5">
                <h1>Expérience</h1>
                <h2>Déssinatrice</h2>
                <p>date</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium iste ipsa, enim tenetur asperiores dolore quod dolorem unde molestias magnam.</p>
            </div>
            <div class="col-12 col-lg-3"></div>
            <div class="col-12 col-lg-4">
                <img src="../assets/image/bg/experience.png"  alt="profil" width="350" height="350" >
            </div>
        </div>
    </div>
    
    <div class="container" style="margin-top:100px">
        <div class="content text-left">
            <div class="contact">
                <div class="row">
                    <div class="col-12 col-lg-2"></div>
                    <div class="col-12 col-lg-6">
                        <h1>Contacter</h1>
                        <div >
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Adresse mail:</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                </div>
                                <label for="exampleFormControlInput1" class="form-label">Mot de passe:</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Votre message:</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                <div class="content text-center">
                                <button type="button" class="btn btn-primary" style="margin-top:30px">Envoyer</button>
                                </div>
                            </div>
                        </div>
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
                                    <a href="#"><img src="../assets/image/inscription/information.png" alt=" " width="30" height="30">À propos</a>
                                </li>
                                <li class="list-inline-item">&middot;</li>

                                <li class="list-inline-item">
                                    <a href="#"><img src="../assets/image/inscription/copyright.png" alt=" " width="30" height="30">Copyright</a>
                                </li>
                                <li class="list-inline-item">&middot;</li>

                                <li class="list-inline-item">
                                    <a href="mailto:#"><img src="../assets/image/inscription/gmail.png" alt=" " width="30" height="30"> Gmail</a>
                                </li>
                                <li class="list-inline-item">&middot;</li>

                                <li class="list-inline-item">
                                    <a href="#" target="_blank" title="facebook.com/ArtiZone-UP/"><img src="../assets/image/inscription/facebook.png" alt=" " width="30" height="30"> Facebook</a>
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