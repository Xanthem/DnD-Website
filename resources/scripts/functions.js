var charisma = 8;
var constitution = 8;
var dexterity = 8;
var intelligence = 8;
var strength = 8;
var wisdom = 8;

var $jsName = document.querySelector('.name');
var $jsValue = document.querySelector('.jsValue');

$jsName.addEventListener('input', function(event){
    $jsValue.innerHTML = $jsName.value;
}, false);


function add(currentValue, valueToAdd){
    currentValue += valueToAdd;
    document.getElementById('number').innerHTML = currentValue;
};

function subtract(currentValue, valueToSubtract){
    currentValue -= valueToSubtract;
    document.getElementById('number').innerHTML = currentValue;
};

function getCha() {
    document.getElementById("chaInput").value = charisma;
};

function operate(val){
    if(val == "add"){
        var val = document.getElementById('count').value;
        val++;
        document.getElementById('count').value = val;
    } else{
        var val = document.getElementById('count').value;
        val--;
        document.getElementById('count').value = val;
    }
}



