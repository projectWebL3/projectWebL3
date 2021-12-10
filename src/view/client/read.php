<?php use App\model\Client;
?>

<html>
 
    <link href="./assets/vendor/readstyle.css" rel="stylesheet">
    


        <div class="container p-3 my-3 border">
            <div class="container p-3 my-3 bg-dark text-white">
                <h2 >Mes Informations</h2>

            </div>
            
            <p><span>Nom : </span><?= $client->nom ?></p>
            <p><span>Prenom :</span><?= $client->prenom?></p>
            <p><span> Adresse : </span><?= $client->nRue." ".$client->voie.", ".$client->codeP.", ".$client->ville ?></p> 
            <p><span>Email : </span><?= $client->mail?></p>
                  
            <a href="index.php?route=client&action=update&id=<?= $_GET['id'] ?>" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Modifier mon Mail</a>
            <a href="index.php?route=client&action=delete&id=<?= $_GET['id'] ?>" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Supprimer mon compte</a>
        </div>
</html>
