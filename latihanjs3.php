<!DOCTYPE html>
<html>
<body>
<h2>Kalkulator</h2>
<form>
nilai 1: 
<input type="number" name="nilai1" id="nilai1">
<br>
nilai 2: 
<input type="number" name="nilai2" id="nilai2">
<br>
<button type="button" onclick = 'myfungsi(document.getElementById("nilai1").value, document.getElementById("nilai2").value)'>tambah</button>
<br>
<input type="number" name="hasil" id="hasil">
</form>
<script>
function luas(p,l)    
{
    let L = p*l;
    return L;
}
function myfungsi(n1,n2)
{    
let x = n1;
let y = n2;
console.log(x);
console.log(y);
let z = luas(x,y);
console.log(z);
document.getElementById("hasil").value = z;
}
</script>
</body>
</html>
