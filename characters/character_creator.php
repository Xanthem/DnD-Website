<?php
require_once "$_SERVER[DOCUMENT_ROOT]/config/auth_config.php";
?>
<head>
    <script>
        include "$_SERVER[DOCUMENT_ROOT]/resources/scripts/functions.js";
    </script>
</head>

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

<h2>Statistics</h2>
<input name="chaInput" id="chaInput" placeholder="Charisma" class="inputs" />
<a href="javascript:subtract(charisma, 1)"><button type="button">-</button></a>
<a href="javascript:add(charisma, 1)"><button type="button">+</button></a>
<br>
<input name="conInput" placeholder="Constitution" class="inputs" />
<a href="javascript:subtract(constitution, 1)"><button type="button">-</button></a>
<a href="javascript:add(constitution, 1)"><button type="button">+</button></a>
<br>
<input name="dexInput" placeholder="Dexterity" class="inputs" />
<a href="javascript:subtract(dexterity, 1)"><button type="button">-</button></a>
<a href="javascript:add(dexterity, 1)"><button type="button">+</button></a>
<br>
<input name="intInput" placeholder="Intelligence" class="inputs" />
<a href="javascript:subtract(intelligence, 1)"><button type="button">-</button></a>
<a href="javascript:add(intelligence, 1)"><button type="button">+</button></a>
<br>
<input name="strInput" placeholder="Strength" class="inputs" />
<a href="javascript:subtract(strength, 1)"><button type="button">-</button></a>
<a href="javascript:add(strength, 1)"><button type="button">+</button></a>
<br>
<input name="wisInput" placeholder="Wisdom" class="inputs" />
<a href="javascript:subtract(wisdom, 1)"><button type="button">-</button></a>
<a href="javascript:add(wisdom, 1)"><button type="button">+</button></a>
<br>
<button type="submit" name="Create">Create Character</button>

</body>
