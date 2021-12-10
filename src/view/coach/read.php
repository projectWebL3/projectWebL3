
<html>
<link href="./assets/vendor/readstyle.css" rel="stylesheet">
    


        <div class="container p-3 my-3 border">
            <div class="container p-3 my-3 bg-dark text-white">
                <h2 >Mes Informations</h2>

            </div>
            
            <p><span>Nom : </span><?= $coach->nom ?></p>
            <p><span>Prenom :</span><?= $coach->prenom?></p>
            <p><span> Adresse : </span><?= $coach->nRue." ".$coach->voie.", ".$coach->codeP.", ".$coach->ville ?></p> 
            <p><span>Email : </span><?= $coach->mail?></p>
            <p><span>Telephone : </span><?= $coach->tel ?></p>
            <p><span>Biographie : </span><?= $coach->bio ?></p>
            <p><span> Prestation : </span><?= $coach->prest ?></p> 
            <p><span>Lieu : </span><?= $coach->lieu?></p>
                  
            
            <a href="index.php?route=coach&action=update&id=<?= $_GET['id'] ?>" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Modifier mes offres de prestations</a>
            <a href="index.php?route=coach&action=delete&id=<?= $_GET['id'] ?>" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Supprimer mon compte</a>
        </div>
</html>