<?php require_once 'Views/head.php'; ?>

<!--  fait moi une carte qui affiche les information de mon Personnage avec le nom , la classe , la race , la defense et l'Attaque -->
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?= $char->getName() ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?= $char->getClass() ?></h6>
    <p class="card-text"><?= $char->getRace() ?></p>
    <p class="card-text"><?= $char->getAttack() ?></p>
    <p class="card-text"><?= $char->getDefense() ?></p>
    <a href="../char/update/<?= $char->getId() ?>" class="card-link">Modifier</a>
    <a href="../char/delete/<?= $char->getId() ?>" class="card-link">Supprimer</a>
  </div>


  <?php require_once 'Views/foot.php'; ?>
