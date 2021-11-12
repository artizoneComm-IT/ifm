<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Bootstrap </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css" class="rel">

  <style>
      .banner-image{
          background-image: url("assets/image/bg/pinceau.jpg");
          background-size: cover;
      }
  </style>

</head>
<body>  
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
     <div class="container">
         <a href="#" class="navbar-brand">Web zone</a>
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
             <div class="mx-auto"></div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">Home</a>
                </li>
            </ul>
         </div>
     </div>   
    </nav>

    <!-- banner image -->
    <div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
        <div class="content text-center">
            <h1 class="text-white">Web zone</h1>
        </div>
    </div>

    <!-- Main content area -->
    <div class="container my-5 d-grid gap-5">
        <div class="p-5 border">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate ratione aperiam doloribus consequatur modi harum veritatis nihil quisquam voluptate hic?
            </p>
        </div>
        <div class="p-5 border">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate ratione aperiam doloribus consequatur modi harum veritatis nihil quisquam voluptate hic?
            </p>
        </div>
        <div class="p-5 border">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate ratione aperiam doloribus consequatur modi harum veritatis nihil quisquam voluptate hic?
            </p>
        </div>
        <div class="p-5 border">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate ratione aperiam doloribus consequatur modi harum veritatis nihil quisquam voluptate hic?
            </p>
        </div>
        <div class="p-5 border">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate ratione aperiam doloribus consequatur modi harum veritatis nihil quisquam voluptate hic?
            </p>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
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