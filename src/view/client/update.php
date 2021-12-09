<html>

<head>
    <link rel="stylesheet" href="./assets/vendor/bootstrap-grid.min.css">
    <link rel="stylesheet" href="./assets/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/vendor/form.css">
</head>
</head>
<h2 >Modifier mon adresse mail associée au compte</h2>
<form method="post"  action="index.php?route=client&action=update&id=<?= $_GET['id'] ?>">
   


    <div class="form-row">
    <label for="exampleFormControlTextarea1">Email</label>
    <textarea class="form-control" name="mail" rows="3"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Modifier</button>

</form>

</html>