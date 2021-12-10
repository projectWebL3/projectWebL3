<head>
    <link rel="stylesheet" href="./assets/vendor/readAll.css">
</head>

            <h2>Trouve ton Coach</h2>
            <div class="d-flex flex-wrap-reverse">
<?php foreach ($coach as $coach) { ?>
    <div class="p-2 ">
    <div class="card" id="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title"><?= $coach ['prenom']." ".$coach['nom']?></h5>
      <h6 class="card-subtitle mb-2 text-muted"><?= $coach['lieu'] ?></h6>
      <p class="card-text"><?= $coach['prestation'] ?></p> <br>
      <p class="card-text"><?= $coach['bio'] ?></p> <br>
      
      <h6 class="card-subtitle mb-2 text-muted">email : <?= $coach['mail'] ?> </h6>
      <h6 class="card-subtitle mb-2 text-muted">telephone <?= $coach['tel'] ?> </h6>
        

        
    </div>
  </div>
</div>
  <?php } ?>
  
</div>