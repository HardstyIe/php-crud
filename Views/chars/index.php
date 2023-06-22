<?php require_once 'Views/head.php'; ?>

<a href="../char/create">Ajouter un Personnage</a>

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
      <td><a href="../char/update/<?= $char->getId() ?>">Modifier</a>
        <a href="../char/details/<?= $char->getId() ?>">Details</a>
        <a href="../char/delete/<?= $char->getId() ?>">Supprimer</a>
      </td>

    </tr>
  <?php endforeach; ?>
</table>

<?php require_once 'Views/foot.php'; ?>
