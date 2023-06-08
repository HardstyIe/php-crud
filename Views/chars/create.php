<?php require_once 'Views/head.php'; ?>

<form action="../chars/create" method="post">
  <div class="form-group">
    <label for="name">Nom du Personnage</label>
    <input type="text" name="name" id="name" class="form-control">

    <label for="race">Selectionnez votre race</label>
    <select name="race" id="race">
      <option value="orc">Orc</option>
      <option value="human">Humain</option>
      <option value="elve">Elf</option>
      <option value="dwarf">Nain</option>
    </select>

    <label for="class">Selectionnez votre classe</label>
    <select name="class" id="class">
      <option value="berserker">Berserker</option>
      <option value="paladin">Paladin</option>
      <option value="ranger">Ranger</option>
      <option value="ninja">Nain</option>
      <option value="oracle">Oracle</option>
      <option value="bard">Bard</option>
      <option value="sorcier">Sorcier</option>
      <option value="hunter">Chasseur de Démon</option>
    </select>
  </div>
  <button class="btn btn-primary">Ajouter</button>
</form>

<?php require_once 'Views/foot.php'; ?>
