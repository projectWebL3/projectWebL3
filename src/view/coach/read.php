<?php var_dump($coach);
?>
<html>
<h2 >Mon Compte</h2>
<a href="index.php?route=coach&action=update&id=<?= $_GET['id'] ?>" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Modifier mes offres de prestation</a>
<a href="index.php?route=coach&action=delete&id=<?= $_GET['id'] ?>" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Supprimer mon compte</a>
</html>