<html>

<head>
    <link rel="stylesheet" href="./assets/vendor/bootstrap-grid.min.css">
    <link rel="stylesheet" href="./assets/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/vendor/form.css">
</head>
</head>
<h2 >S'inscire comme Coach sportif</h2>
<form method="post"  action="index.php?route=coach&action=create">
   
   
          <div class="for-row">
            <label for="validationDefault01">Prénom</label>
            <input type="text" class="form-control"  name="prenom"  value="prenom" required>
          </div>
          <div class="form-row">
            <label for="validationDefault02">Nom</label>
            <input type="text" class="form-control" name="nom"  value="nom" required>
          </div>
           <div class="form-row">
            <label for="validationDefault03">Email</label>
            <input type="text" class="form-control" name="mail"  required>
          </div> 

          <div class="form-row">
    <label for="validationDefault04">Telephone</label>
    <input type="number" class="form-control" name="tel" required >
  </div>

  <div class="form-row">
    <label for="validationDefault05">Voie</label>
    <input type="text" class="form-control" name="voie" required>
  </div>
   <div class="form-row">
    <label for="validationDefault06">NVoie</label>
    <input type="number" class="form-control" name="nRue" required>
  </div>
  <div class="form-row">
      <label for="validationDefault07">Code Postal</label>
      <input type="number" class="form-control" name="codeP" required>
    </div>
  <div class="form-row">
      <label  for="validationDefault08">Ville</label>
      <input type="text" class="form-control" name="Ville" required>
    </div>
    <div class="form-row">
    <label for="validationDefault09">Prestation</label>
    <textarea class="form-control" name="prestation" rows="3" required></textarea>
  </div>
  <div class="form-row">
    <label for="validationDefault10">Biographie</label>
    <textarea class="form-control" name="bio" rows="3" required></textarea>
  </div>

  <div class="form-row">
      <label for="validationDefault11">Lieu</label>
      <input type="text" class="form-control" name="lieu" required>
    </div>

    <label for="inputPassword">Password</label>
<input type="password" name="mdp" class="form-control" aria-describedby="passwordHelpBlock" required>

         
        </div>

  <button type="submit" class="btn btn-dark">S'inscrire</button>

</form>

<html>
