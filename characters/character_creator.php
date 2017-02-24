<?php
require_once "$_SERVER[DOCUMENT_ROOT]/config/auth_config.php";
?>
<head>
    <script src="/resources/scripts/functions.js"></script>
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

<div>
<h2>Stat Points Remaining: <span id="statPoints" class="statPoints">27</span></h2>
    <div align="center"><label class="statLabels" >Charisma</label></div>
    <input name="chaInput" id="chaInput" class="inputs-stats" value="8" disabled="disabled" width="50" />
    <input type="button" value="-" onclick="operate('dec', 'chaInput', 'cha')">
    <input type="button" value="+" onclick="operate('add', 'chaInput', 'cha')">
    <input name="chaMod" id="chaMod" class="inputs-stats" value="-1" disabled="disabled" width="50" />
    <br>
    <div align="center"><label class="statLabels" >Constitution</label></div>
    <input name="conInput" id="conInput" class="inputs-stats" value="8" disabled="disabled" width="50" />
    <input type="button" value="-" onclick="operate('dec', 'conInput', 'con')">
    <input type="button" value="+" onclick="operate('add', 'conInput', 'con')">
    <input name="conMod" id="conMod" class="inputs-stats" value="-1" disabled="disabled" width="50" />
    <br>
    <div align="center"><label class="statLabels" >Dexterity</label></div>
    <input name="dexInput" id="dexInput" class="inputs-stats" value="8" disabled="disabled" width="50" />
    <input type="button" value="-" onclick="operate('dec', 'dexInput', 'dex')">
    <input type="button" value="+" onclick="operate('add', 'dexInput', 'dex')">
    <input name="dexMod" id="dexMod" class="inputs-stats" value="-1" disabled="disabled" width="50" />
    <br>
    <div align="center"><label class="statLabels" >Intelligence</label></div>
    <input name="intInput" id="intInput" class="inputs-stats" value="8" disabled="disabled" width="50" />
    <input type="button" value="-" onclick="operate('dec', 'intInput', 'int')">
    <input type="button" value="+" onclick="operate('add', 'intInput', 'int')">
    <input name="intMod" id="intMod" class="inputs-stats" value="-1" disabled="disabled" width="50" />
    <br>
    <div align="center"><label class="statLabels" >Strength</label></div>
    <input name="strInput" id="strInput" class="inputs-stats" value="8" disabled="disabled" width="50" />
    <input type="button" value="-" onclick="operate('dec', 'strInput', 'str')">
    <input type="button" value="+" onclick="operate('add', 'strInput', 'str')">
    <input name="strMod" id="strMod" class="inputs-stats" value="-1" disabled="disabled" width="50" />
    <br>
    <div align="center"><label class="statLabels" >Wisdom</label></div>
    <input name="wisInput" id="wisInput" class="inputs-stats" value="8" disabled="disabled" width="50" />
    <input type="button" value="-" onclick="operate('dec', 'wisInput', 'wis')">
    <input type="button" value="+" onclick="operate('add', 'wisInput', 'wis')">
    <input name="wisMod" id="wisMod" class="inputs-stats" value="-1" disabled="disabled" width="50" />
    <br>
    <span id="errMsgBox" style="color:red"></span>
<br>
<button type="submit" name="Create">Create Character</button>
</body>
