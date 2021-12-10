<html>

<head>
    <script src="form.js"> </script>
    <link rel="stylesheet" href="./assets/vendor/bootstrap-grid.min.css">
    <link rel="stylesheet" href="./assets/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/vendor/form.css">
</head>
<h2 >S'inscrire comme sportif</h2>
<form method="post" action="index.php?route=client&action=create">
   
       
<div class="form-row">
            <label for="validationDefault01">Prenom</label>
            <input type="text"  class="form-control" name="prenom"  required>
          </div>

    <div class="form-row">
            <label for="validationDefault02">Nom</label>
            <input type="text"  class="form-control" name="nom"   required>
          </div>
          <div class="form-row">
            <label for="exampleFormControlInput1">Email</label>
            <input type="text" id="mail" class="form-control" name="mail"  required>
          </div> 

          <div class="form-row">
    <label for="inputAddress" for="validationDefault04">Voie</label>
    <input type="text" class="form-control" name="voie" required>
  </div>
  <div class="form-row">
    <label for="inputAddress" for="validationDefault05">NVoie</label>
    <input type="number" class="form-control" name="nRue" required>
  </div>
  <div class="form-row">
    
      <label for="inputCity" for="validationDefault06">Code Postal</label>
      <input type="number" class="form-control" name="codeP"required>
    </div>
    <div class="form-row">
    
      <label for="inputCity" for="validationDefault07">Ville</label>
      <input type="text" class="form-control" name="Ville"required>
    </div>
   

    <label for="inputPassword5" for="validationDefault08">Mot de passe</label>
<input type="password" id="mdp" name="mdp" class="form-control" aria-describedby="passwordHelpBlock"required>



  <button type="submit" class="btn btn-dark">S'inscrire</button>

</form>



<html>