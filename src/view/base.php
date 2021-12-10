<!DOCTYPE html>
<html>
    <head>
        <title>Trouve tonCoach Sportif</title>
        <link rel="stylesheet" href="./assets/vendor/bootstrap-grid.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

        <link rel="stylesheet" href="./assets/vendor/bootstrap.min.css">
        <link rel="stylesheet" href="./assets/vendor/footer.css">
        <link rel="stylesheet" href="./assets/vendor/basestyle.css">
    </head>
    


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto" >
      <li class="nav-item active">
        <a class="nav-link" href="index.php?route=coach&action=read">Trouver son coach </a>
      </li>
       <li class="nav-item dropdown">
       
        <a class="nav-link" href="index.php?route=client&action=create">Inscription du Sportif</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?route=coach&action=create">Insciption du Coach</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?route=coach&action=connexion">Connection du Coach</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?route=client&action=connexion">Connection du sportif</a>
      </li>

    
    </ul>
   
  </div>
</nav>

    <body>
        <div class="p-5 mb-4 bg-light rounded-3" id="entete">
            <div class="container-fluid py-5">
           
                
            </div>
        </div>
         
        <?=  $content ?>
</body>
        <footer>
            <div class="footer-basic">
        <footer>
            <div class="social">
                <a href="#"><i class="icon ion-social-instagram"></i></a>
                <a href="#"><i class="icon ion-social-snapchat"></i></a>
                <a href="#"><i class="icon ion-social-twitter"></i></a>
                <a href="#"><i class="icon ion-social-facebook"></i></a>
            </div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="index.php?route=home">Home</a></li>
                <li class="list-inline-item"><a href="#">Services</a></li>
                <li class="list-inline-item"><a href="#">About</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
            </ul>
            <p class="copyright">Trouve ton Coach © 2021</p>
        </footer>
    </div>
   
        </footer>
    
</html>