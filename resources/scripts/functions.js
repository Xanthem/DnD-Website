/**
 * Created by Joshua on 7/11/2016.
 */
var charisma = 8;
var constitution = 8;
var dexterity = 8;
var intelligence = 8;
var strength = 8;
var wisdom = 8;

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

document.getElementById("chaInput").value = charisma.value;
document.getElementById("conInput").value = constitution;
document.getElementById("dexInput").value = dexterity;
document.getElementById("intInput").value = intelligence;
document.getElementById("strInput").value = strength;
document.getElementById("wisInput").value = wisdom;


