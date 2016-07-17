function operate(val, object){
    if(val == "add"){
        val = document.getElementById(object).value;
        var statPoints = parseInt(document.getElementById('statPoints').innerHTML);

        if ( statPoints == 0){
            document.getElementById('errMsgBox').innerText = "Not enough stat points.";
        }

        else if (val >= 18) {
            document.getElementById('errMsgBox').innerText = "Maximum stat value is 18.";
        }

        else {
            document.getElementById('errMsgBox').innerText = "";
            // Increase stat & update
            val++;
            document.getElementById(object).value = val;

            // Decrease total points & update
            statPoints--;
            document.getElementById('statPoints').innerHTML = statPoints;
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
            // Decrease stat &update
            val--;
            document.getElementById(object).value = val;

            // Increase total points &update
            statPoints++;
            document.getElementById('statPoints').innerHTML = statPoints;
        }
    }
}

function updateMod(statMod) {

}