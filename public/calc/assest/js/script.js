
// NUmbers

function zero(){
    var result = document.getElementById('result').value;
    if (result == 0) {
        document.getElementById('result').value='0';
    } else {
        document.getElementById('result').value=document.getElementById('result').value+'0';
    }
}
function one(){
    var result = document.getElementById('result').value;
    if (result == 0) {
        document.getElementById('result').value='1';
    } else {
        document.getElementById('result').value=document.getElementById('result').value+'1';
    }
}
function two(){
    if (document.getElementById('result').value == 0) {
        document.getElementById('result').value='2';
    } else {
        document.getElementById('result').value=document.getElementById('result').value+'2';
    }
}
function three(){
    if (document.getElementById('result').value == 0) {
        document.getElementById('result').value='3';
    } else {
        document.getElementById('result').value=document.getElementById('result').value+'3';
    }
}
function four(){
    if (document.getElementById('result').value == 0) {
        document.getElementById('result').value='4';
    } else {
        document.getElementById('result').value=document.getElementById('result').value+'4';
    }
}
function five(){
    if (document.getElementById('result').value == 0) {
        document.getElementById('result').value='5';
    } else {
        document.getElementById('result').value=document.getElementById('result').value+'5';
    }
}
function six(){
    if (document.getElementById('result').value == 0) {
        document.getElementById('result').value='6';
    } else {
        document.getElementById('result').value=document.getElementById('result').value+'6';
    }
}
function seven(){
    if (document.getElementById('result').value == 0) {
        document.getElementById('result').value='7';
    } else {
        document.getElementById('result').value=document.getElementById('result').value+'7';
    }
}
function eight(){
    if (document.getElementById('result').value == 0) {
        document.getElementById('result').value='8';
    } else {
        document.getElementById('result').value=document.getElementById('result').value+'8';
    }
}
function nine(){
    if (document.getElementById('result').value == 0) {
        document.getElementById('result').value='9';
    } else {
        document.getElementById('result').value=document.getElementById('result').value+'9';
    }
}
function decimal(){
    var result = document.getElementById('result').value;
    if (result.includes('.') == false) {
        document.getElementById('result').value=document.getElementById('result').value+'.';
    }
}
function negative(){
    var result = document.getElementById('result').value;
    if (result.includes('-') == false) {
        document.getElementById('result').value='-'+document.getElementById('result').value;
    } else {
        document.getElementById('result').value= result.replace('-','');
    }
}
// Operands

function divison(){
    document.getElementById('solution').value=document.getElementById('solution').value+document.getElementById('result').value+'/';
    document.getElementById('result').value=null;
}
function multiply(){
    document.getElementById('solution').value=document.getElementById('solution').value+document.getElementById('result').value+'*';
    document.getElementById('result').value=null;
}
function subtraction(){
    document.getElementById('solution').value=document.getElementById('solution').value+document.getElementById('result').value+'-';
    document.getElementById('result').value=null;
}
function sum(){
    document.getElementById('solution').value=document.getElementById('solution').value+document.getElementById('result').value+'+';
    document.getElementById('result').value=null;
}
function calc(){
    // var a = document.getElementById('solution').value;
    // var b = eval(a);
    // document.getElementById('result').value=b;
}

// Operations

function backspace(){
    var number = document.getElementById('result').value;
    var length = number.length - 1;
    document.getElementById('result').value = number.slice(0, length);
}