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

<script>
    function operate(val, object){
        if(val == "add"){
            // Increase stat
            var val = document.getElementById(object).value;
            val++;
            document.getElementById(object).value = val;

            // Decrease total points
            var statPoints = document.getElementById('statPoints').value;
            statPoints--;
            document.getElementById('statPoints').value = statPoints;

        } else{
            var val = document.getElementById(object).value;
            val--;
            document.getElementById(object).value = val;
        }
    }
</script>

<h2>Stat Points Remaining: <span id="statPoints" class="statPoints">27</span></h2>
<div align="center"><label class="statLabels" >Charisma</label></div>
<input name="chaInput" id="chaInput" class="inputs-stats" value="8" disabled="disabled" width="50" />
<input type="button" value="-" onclick="operate('dec', 'chaInput')">
<input type="button" value="+" onclick="operate('add', 'chaInput')">
<br>
<div align="center"><label class="statLabels" >Constitution</label></div>
<input name="conInput" id="conInput" class="inputs-stats" value="8" disabled="disabled" width="50" />
<input type="button" value="-" onclick="operate('dec', 'conInput')">
<input type="button" value="+" onclick="operate('add', 'conInput')">
<br>
<div align="center"><label class="statLabels" >Dexterity</label></div>
<input name="dexInput" id="dexInput" class="inputs-stats" value="8" disabled="disabled" width="50" />
<input type="button" value="-" onclick="operate('dec', 'dexInput')">
<input type="button" value="+" onclick="operate('add', 'dexInput')">
<br>
<div align="center"><label class="statLabels" >Intelligence</label></div>
<input name="intInput" id="intInput" class="inputs-stats" value="8" disabled="disabled" width="50" />
<input type="button" value="-" onclick="operate('dec', 'intInput')">
<input type="button" value="+" onclick="operate('add', 'intInput')">
<br>
<div align="center"><label class="statLabels" >Strength</label></div>
<input name="strInput" id="strInput" class="inputs-stats" value="8" disabled="disabled" width="50" />
<input type="button" value="-" onclick="operate('dec', 'strInput')">
<input type="button" value="+" onclick="operate('add', 'strInput')">
<br>
<div align="center"><label class="statLabels" >Wisdom</label></div>
<input name="wisInput" id="wisInput" class="inputs-stats" value="8" disabled="disabled" width="50" />
<input type="button" value="-" onclick="operate('dec', 'wisInput')">
<input type="button" value="+" onclick="operate('add', 'wisInput')">
<br>
<button type="submit" name="Create">Create Character</button>
</body>
