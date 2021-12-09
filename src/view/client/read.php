<?php var_dump($client) ?>

<html>
<h2 >Mon Compte</h2>
<a href="index.php?route=client&action=update&id=<?= $_GET['id'] ?>" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Modifier mon Mail</a>
<a href="index.php?route=client&action=delete&id=<?= $_GET['id'] ?>" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Supprimer mon compte</a>
</html>