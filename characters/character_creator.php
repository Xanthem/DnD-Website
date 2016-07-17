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

<table class="table-stats">
    <thead>
    <tr>
        <th>Attribute</th>
        <th>Points Remaining: <span id="statPoints" class="statPoints">27</span></th>
        <th>Racial Bonus</th>
        <th>Total Modifier</th>
    </tr>
    </thead>

    <tbody>
    <tr>
        <td>Charisma</td>
        <td>
            <input name="chaInput" id="chaInput" class="inputs-stats" value="8" disabled="disabled" width="50">
            <input type="button" value="-" onclick="operate('dec', 'chaInput'), updateMod('chaInput', 'totalChaMod')">
            <input type="button" value="+" onclick="operate('add', 'chaInput'), updateMod('chaInput', 'totalChaMod')">
        </td>
        <td><span>+0</span></td>
        <td><span id="totalChaMod">-1</span></td>
    </tr>
    <tr>
        <td>Constitution</td>
        <td>
            <input name="conInput" id="conInput" class="inputs-stats" value="8" disabled="disabled" width="50" />
            <input type="button" value="-" onclick="operate('dec', 'conInput'), updateMod('conInput', 'totalConMod')">
            <input type="button" value="+" onclick="operate('add', 'conInput'), updateMod('conInput', 'totalConMod')">
        </td>
        <td><span>+0</span></td>
        <td><span id="totalConMod">-1</span></td>
    </tr>
    <tr>
        <td>Dexterity</td>
        <td>
            <input name="dexInput" id="dexInput" class="inputs-stats" value="8" disabled="disabled" width="50" />
            <input type="button" value="-" onclick="operate('dec', 'dexInput'), updateMod('dexInput', 'totalDexMod')">
            <input type="button" value="+" onclick="operate('add', 'dexInput'), updateMod('dexInput', 'totalDexMod')">
        </td>
        <td><span>+0</span></td>
        <td><span id="totalDexMod">-1</span></td>
    </tr>
    <tr>
        <td>Intelligence</td>
        <td>
            <input name="intInput" id="intInput" class="inputs-stats" value="8" disabled="disabled" width="50" />
            <input type="button" value="-" onclick="operate('dec', 'intInput'), updateMod('intInput', 'totalIntMod')">
            <input type="button" value="+" onclick="operate('add', 'intInput'), updateMod('intInput', 'totalIntMod')">
        </td>
        <td><span>+0</span></td>
        <td><span id="totalIntMod">-1</span></td>
    </tr>
    <tr>
        <td>Strength</td>
        <td>
            <input name="strInput" id="strInput" class="inputs-stats" value="8" disabled="disabled" width="50" />
            <input type="button" value="-" onclick="operate('dec', 'strInput'), updateMod('strInput', 'totalStrMod')">
            <input type="button" value="+" onclick="operate('add', 'strInput'), updateMod('strInput', 'totalStrMod')">
        </td>
        <td><span>+0</span></td>
        <td><span id="totalStrMod">-1</span></td>
    </tr>
    <tr>
        <td>Wisdom</td>
        <td>
            <input name="wisInput" id="wisInput" class="inputs-stats" value="8" disabled="disabled" width="50" />
            <input type="button" value="-" onclick="operate('dec', 'wisInput'), updateMod('wisInput', 'totalWisMod')">
            <input type="button" value="+" onclick="operate('add', 'wisInput'), updateMod('wisInput', 'totalWisMod')">
        </td>
        <td><span>+0</span></td>
        <td><span id="totalWisMod">-1</span></td>
    </tr>
    </tbody>
</table>

<span id="errMsgBox" style="color:red"></span>
<br>
<button type="submit" name="Create">Create Character</button>
</body>
