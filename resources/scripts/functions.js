// Increment/Decrement values on character creator page
function operate(val, object, stat){
    modString = stat + 'Mod';
    if(val == "add"){
        val = document.getElementById(object).value;
        var statPoints = parseInt(document.getElementById('statPoints').innerHTML);

        if ( statPoints == 0){
            document.getElementById('errMsgBox').innerText = "Not enough stat points.";
        }

        else if (val >= 15) {
            document.getElementById('errMsgBox').innerText = "Maximum stat value is 15.";
        }

        else {
            document.getElementById('errMsgBox').innerText = "";
            // Increase stat & update
            val++;
            document.getElementById(object).value = val;

            // Decrease total points & update
            statPoints--;
            document.getElementById('statPoints').innerHTML = statPoints;
            document.getElementById(modString).value = Math.floor((val - 10) / 2);
            //console.log(modString + " Incremented");
        }
    }

    else{
        val = document.getElementById(object).value;
        statPoints = parseInt(document.getElementById('statPoints').innerHTML);

        if (val <= 8) {
            document.getElementById('errMsgBox').innerText = "Cannot reduce stats below 8.";
        }

        else {
            document.getElementById('errMsgBox').innerText = "";
            // Decrease stat & update
            val--;
            document.getElementById(object).value = val;

            // Increase total points & update
            statPoints++;
            document.getElementById('statPoints').innerHTML = statPoints;
            document.getElementById(modString).value = Math.floor((val - 10) / 2);
            //console.log(modString + " Decremented");
        }
    }
}

// Updates the Modifier on the character creator day
function updateMod(statNum, statMod) {
    mod = Math.floor((document.getElementById(statNum).value - 10) / 2);

    if (mod > 0) {
        document.getElementById(statMod).innerText = "+" + mod;
    }

    else {
        document.getElementById(statMod).innerText = mod;
    }
}

// Expander for details
function tableHide() {
    $("td[colspan=5]").find("p").hide();
    $("td.expander").click(function (event) {
        event.stopPropagation();
        var $target = $(event.target);
        if ($target.closest("td").attr("colspan") > 1) {
            $target.slideUp();
        } else {
            $target.closest("tr").next().find("p").slideToggle();
        }
    });
}