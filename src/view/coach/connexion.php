<html>

<head>
    <script src="form.js"> </script>
    <link rel="stylesheet" href="./assets/vendor/bootstrap-grid.min.css">
    <link rel="stylesheet" href="./assets/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/vendor/form.css">
</head>

<form method="post" action="index.php?route=coach&action=connexion">
   
      
          <div class="form-row">
            <label for="exampleFormControlInput1">Email</label>
            <input type="text" id="mail" class="form-control" name="mail"  required>
          </div> 

     <label for="inputPassword5" for="validationDefault08">Mot de passe</label>
<input type="password" id="mdp" name="mdp" class="form-control" aria-describedby="passwordHelpBlock"required>



  <button type="submit" class="btn btn-primary"> Se connecter</button>

</form>