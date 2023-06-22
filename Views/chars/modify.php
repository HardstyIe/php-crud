<?php require_once './Views/head.php'; ?>


<form action="" method="post">
  <label for="name">Nom du personnage</label>
  <input type="text" name="name" id="name" value="<?= $char->getName() ?>">
  <input type="submit" value="Modifier">


  <?php require_once './Views/foot.php'; ?>
