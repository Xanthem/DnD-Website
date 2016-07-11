<?php
require_once "$_SERVER[DOCUMENT_ROOT]/config/auth_config.php";
?>

<body>
<input placeholder="Name" class="inputs" autofocus />
<select class="inputs" >
    <option selected="selected">Select Class</option>
    <option value="Barbarian">Barbarian</option>
    <option value="Bard">Bard</option>
    <option value="Cleric">Cleric</option>
    <option value="Druid">Druid</option>
    <option value="Fighter">Figher</option>
    <option value="Monk">Monk</option>
    <option value="Paladin">Paladin</option>
    <option value="Ranger">Ranger</option>
    <option value="Rogue">Rogue</option>
    <option value="Sorcerer">Sorcerer</option>
    <option value="Warlock">Warlock</option>
    <option value="Wizard">Wizard</option>
</select>
<select class="inputs">
    <option selected="selected">Select Race</option>
    <option value="Dragonborn">Dragonborn</option>
    <option value="Dwarf">Dwarf</option>
    <option value="Elf">Elf</option>
    <option value="Gnome">Gnome</option>
    <option value="Halfling">Halfling</option>
    <option value="Half-Elf">Half-Elf</option>
    <option value="Half-Orc">Half-Orc</option>
    <option value="Human">Human</option>
    <option value="Tiefling">Tiefling</option>

</select>
<input placeholder="Level" class="inputs" />
<br>
<h2 ="left">Statistics</h2>
<input placeholder="Charisma" class="inputs" />
<br>
<input placeholder="Constitution" class="inputs" />
<br>
<input placeholder="Dexterity" class="inputs" />
<br>
<input placeholder="Intelligence" class="inputs" />
<br>
<input placeholder="Strength" class="inputs" />
<br>
<input placeholder="Wisdom" class="inputs" />
<br>
<button type="submit" name="Create">Create Character</button>

</body>
