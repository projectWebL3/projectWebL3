<?php

require 'vendor/autoload.php';

use App\Router;

$router = new Router();
$router->run();
?>
<html>

<head>
    <link rel="stylesheet" href="./assets/vendor/bootstrap-grid.min.css">
    <link rel="stylesheet" href="./assets/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/vendor/form.css">
</head>
</head>

<form method="post"  >
   
       
    <div class="form-row">
          <div class="for-row">
            <label for="validationDefault01">First name</label>
            <input type="text" class="form-control"  name="prenom" placeholder="First name" value="Prenom" required>
          </div>
          <div class="form-row">
            <label for="validationDefault02">Last name</label>
            <input type="text" class="form-control" name="nom" placeholder="Last name" value="Nom" required>
          </div>
          <div class="form-ro">
            <label for="validationDefault02">Email</label>
            <input type="text" class="form-control" name="mail" placeholder="Email"  required>
          </div> 

  <div class="form-row">
    <label for="inputAddress">Voie</label>
    <input type="text" class="form-control" name="voie" placeholder="Main St">
  </div>
   <div class="form-row">
    <label for="inputAddress">NVoie</label>
    <input type="text" class="form-control" name="Nvoie" placeholder="12">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Code Postal</label>
      <input type="text" class="form-control" name="lieu">
    </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" name="ville">
    </div>
    <div class="form-row">
    <label for="exampleFormControlTextarea1">Prestation</label>
    <textarea class="form-control" name="prestation" rows="3"></textarea>
  </div>

  <div class="form-row">
      <label for="inputCity">Lieu</label>
      <input type="text" class="form-control" name="lieu">
    </div>

    <label for="inputPassword5">Password</label>
<input type="password" name="mdp" class="form-control" aria-describedby="passwordHelpBlock">
<small id="password" class="form-text text-muted">
  Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
</small>
         
        </div>

  <button type="submit" class="btn btn-primary">S'inscrire</button>

</form>

<html>

