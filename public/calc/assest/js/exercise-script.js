function change(){
    var shirt = document.getElementById('shirt').value;
    var pants = document.getElementById('pants').value; 
    var change = shirt;
    document.getElementById('shirt').value = pants;
    document.getElementById('pants').value = change;
}