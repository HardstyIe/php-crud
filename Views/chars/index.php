<?php require_once 'Views/head.php'; ?>

<a href="../chars/create">Ajouter un Personnage</a>

<table class="table">
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Classe</th>
    <th>Race</th>
    <th>Attaque</th>
    <th>Defense</th>
  </tr>
  <?php foreach ($chars as $char) : ?>
    <tr>
      <td><?= $char->getId() ?></td>
      <td><?= $char->getName() ?></td>
      <td><?= $char->getClass() ?></td>
      <td><?= $char->getRace() ?></td>
      <td><?= $char->getAttack() ?></td>
      <td><?= $char->getDefense() ?></td>
    </tr>
  <?php endforeach; ?>
</table>

<?php require_once 'Views/foot.php'; ?>
