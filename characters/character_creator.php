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
        <th>
            Stat
        </th>
        <th>
            Points Remaining: <span id="statPoints" class="statPoints">27</span>
        </th>
        <th>
            Class Bonus
        </th>
        <th>
            Racial Bonus
        </th>
        <th>
            Total Modifier
        </th>
    </tr>
    </thead>

    <tbody>
    <tr>
        <td>Charisma</td>
        <td>
            <input name="chaInput" id="chaInput" class="inputs-stats" value="8" disabled="disabled" width="50">
            <input type="button" value="-" onclick="operate('dec', 'chaInput')">
            <input type="button" value="+" onclick="operate('add', 'chaInput')">
        </td>
        <td><span>+0</span></td>
        <td><span>+0</span></td>
        <td><span>-1</span></td>
    </tr>
    <tr>
        <td>Constitution</td>
        <td>
            <input name="conInput" id="conInput" class="inputs-stats" value="8" disabled="disabled" width="50" />
            <input type="button" value="-" onclick="operate('dec', 'conInput')">
            <input type="button" value="+" onclick="operate('add', 'conInput')">
        </td>
        <td><span>+0</span></td>
        <td><span>+0</span></td>
        <td><span>-1</span></td>
    </tr>
    <tr>
        <td>Dexterity</td>
        <td>
            <input name="dexInput" id="dexInput" class="inputs-stats" value="8" disabled="disabled" width="50" />
            <input type="button" value="-" onclick="operate('dec', 'dexInput')">
            <input type="button" value="+" onclick="operate('add', 'dexInput')">
        </td>
        <td><span>+0</span></td>
        <td><span>+0</span></td>
        <td><span>-1</span></td>
    </tr>
    <tr>
        <td>Intelligence</td>
        <td>
            <input name="intInput" id="intInput" class="inputs-stats" value="8" disabled="disabled" width="50" />
            <input type="button" value="-" onclick="operate('dec', 'intInput')">
            <input type="button" value="+" onclick="operate('add', 'intInput')">
        </td>
        <td><span>+0</span></td>
        <td><span>+0</span></td>
        <td><span>-1</span></td>
    </tr>
    <tr>
        <td>Strength</td>
        <td>
            <input name="strInput" id="strInput" class="inputs-stats" value="8" disabled="disabled" width="50" />
            <input type="button" value="-" onclick="operate('dec', 'strInput')">
            <input type="button" value="+" onclick="operate('add', 'strInput')">
        </td>
        <td><span>+0</span></td>
        <td><span>+0</span></td>
        <td><span>-1</span></td>
    </tr>
    <tr>
        <td>Wisdom</td>
        <td>
            <input name="wisInput" id="wisInput" class="inputs-stats" value="8" disabled="disabled" width="50" />
            <input type="button" value="-" onclick="operate('dec', 'wisInput')">
            <input type="button" value="+" onclick="operate('add', 'wisInput')">
        </td>
        <td><span>+0</span></td>
        <td><span>+0</span></td>
        <td><span>-1</span></td>
    </tr>
    </tbody>
</table>

<span id="errMsgBox" style="color:red"></span>
<br>
<button type="submit" name="Create">Create Character</button>
</body>
