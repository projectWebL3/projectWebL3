<!DOCTYPE html>
<html>
<head>
	<title>delete</title>
    <link rel="stylesheet" href="./assets/vendor/bootstrap-grid.min.css">
    <link rel="stylesheet" href="./assets/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/vendor/formulaire.css">
</head>
<body>

<div class="containers ">

<div class = "titre">
  <h2 >Suppression client</h2>
</div>
 <form method="post" action="index.php?route=client&action=delete&id=<?= $_GET['id'] ?>" name=formulaire">
                <center>Voulez-vous supprimer le cient <?= $_GET['id'] ?>?<br/>
                <input type="submit" value="OUI" name="oui" onClick="submit"/>
                <input type="submit" value="NON" name="non" />
              
                </center>
        </form>
</body>
</html>