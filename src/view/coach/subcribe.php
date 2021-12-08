<html>

<head>
    <link rel="stylesheet" href="./assets/vendor/bootstrap-grid.min.css">
    <link rel="stylesheet" href="./assets/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/vendor/formulaire.css">
</head>


<div class="containers ">

<div class = "titre">
  <h2 >Inscription coach</h2>
</div>

<form method="post"  action="index.php?route=coach&action=create">  
    <div class="form-row">
          <div class="for-row">
            <label for="validationDefault01">Prénom</label>
            <input type="text" class="form-control"  name="prenom"  value="prenom" required>
          </div>
          <div class="form-row">
            <label for="validationDefault02">Nom</label>
            <input type="text" class="form-control" name="nom"  value="nom" required>
          </div>
           <div class="form-row">
            <label for="validationDefault02">Email</label>
            <input type="text" class="form-control" name="mail"  required>
          </div> 

          <div class="form-row">
    <label for="inputAddress">Telephone</label>
    <input type="number" class="form-control" name="tel" >
  </div>

  <div class="form-row">
    <label for="inputAddress">Voie</label>
    <input type="text" class="form-control" name="voie" >
  </div>
   <div class="form-row">
    <label for="inputAddress">NVoie</label>
    <input type="number" class="form-control" name="nRue" >
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Code Postal</label>
      <input type="number" class="form-control" name="codeP">
    </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" name="Ville">
    </div>
    <div class="form-row">
    <label for="exampleFormControlTextarea1">Prestation</label>
    <textarea class="form-control" name="prestation" rows="3"></textarea>
  </div>
  <div class="form-row">
    <label for="exampleFormControlTextarea1">Biographie</label>
    <textarea class="form-control" name="bio" rows="3"></textarea>
  </div>

  <div class="form-row">
      <label for="inputCity">Lieu</label>
      <input type="text" class="form-control" name="lieu">
    </div>

    <div class="form-row">
      <label for="inputCity">Image</label>
      <input type="text" class="form-control" name="img">
    </div>

    <label for="inputPassword5">Password</label>
<input type="password" name="mdp" class="form-control" aria-describedby="passwordHelpBlock">
<small id="password" class="form-text text-muted">
  Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
</small>
         
        </div>

  <button type="submit" class="btn btn-primary">S'inscrire</button>

</form>
</div>

<html>
