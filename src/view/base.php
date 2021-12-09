<!DOCTYPE html>
<html>
    <head>
        <title>Trouver Votre Coach Sportif</title>
        <link rel="stylesheet" href="./assets/vendor/bootstrap-grid.min.css">
        <link rel="stylesheet" href="./assets/vendor/bootstrap.min.css">
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

        <footer>
            FIN
        </footer>
    </body>
</html>