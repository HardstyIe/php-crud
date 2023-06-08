<?php require_once 'Views/head.php'; ?>

<form action="../char/create" method="post">
  <div class="form-group">
    <label for="name">Nom du Personnage</label>
    <input type="text" name="name" id="name" class="form-control">

    <label for="race">Selectionnez votre race</label>
    <select name="race" id="race">
      <option value="orc">Orc</option>
      <option value="human">Humain</option>
      <option value="elve">Elf</option>
      <option value="dwarf">Nain</option>
      <option value="gobelin">Gobelin</option>
    </select>

    <label for="class">Selectionnez votre classe</label>
    <select name="class" id="class">
      <option value="berserker">Berserker</option>
      <option value="paladin">Paladin</option>
      <option value="ranger">Ranger</option>
      <option value="ninja">Assassin</option>
      <option value="druide">Druide</option>
      <option value="barde">Barde</option>
      <option value="sorcier">Sorcier</option>
      <option value="chasseur">Chasseur de Démon</option>
    </select>

    <label for="attack">Selectionnez vos point d'attaque</label>
    <select name="attack" id="attack">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
    </select>

    <label for="defense">Selectionnez vos point de defense</label>
    <select name="defense" id="defense">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
    </select>
  </div>
  <button class="btn btn-primary">Ajouter</button>
</form>

<?php require_once 'Views/foot.php'; ?>
