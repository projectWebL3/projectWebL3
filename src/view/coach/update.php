<?php

use App\model\Coach;
?>
<html>

<head>
    <link rel="stylesheet" href="./assets/vendor/bootstrap-grid.min.css">
    <link rel="stylesheet" href="./assets/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/vendor/formulaire.css">
</head>


<body>

<div class="containers ">

<div class = "titre">
  <h2 >Modification coach</h2>
</div>
<form method="post"  action="index.php?route=coach&action=update&id=<?= $_GET['id'] ?>">
    <div class="form-row">
    <label for="exampleFormControlTextarea1">Prestation</label>
    <textarea class="form-control" name="prestation" rows="3"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Modifier</button>

</form>
</div>
<html>