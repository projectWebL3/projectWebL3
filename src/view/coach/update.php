<html>

<head>
    <link rel="stylesheet" href="./assets/vendor/bootstrap-grid.min.css">
    <link rel="stylesheet" href="./assets/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/vendor/form.css">
</head>
</head>

<form method="post"  action="index.php?route=coach&action=update&id=<?= $_GET['id'] ?>">
   


    <div class="form-row">
    <label for="exampleFormControlTextarea1">Prestation</label>
    <textarea class="form-control" name="prestation" rows="3"></textarea>
  </div>

  <button type="submit" class="btn btn-dark">Modifier</button>

</form>

<html>