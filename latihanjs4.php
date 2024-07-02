<!DOCTYPE html>
<html>
<body>

<h2>JavaScript if</h2>
<form>
UTS: 
<input type="number" name="uts" id="uts">
<br>
UAS: 
<input type="number" name="uas" id="uas">
<br>
TUGAS: 
<input type="number" name="tugas" id="tugas">
<br>
<button type="button" onclick = 'myfungsi()'>hitung</button>
<br>
<input type="number" name="hasil" id="hasil">
</form>
<p id="isi">NILAI IPK MK</p>

<script>
   function myfungsi()
   {

    let uts1 = document.getElementById("uts").value;
    let uas1 = document.getElementById("uas").value;
    let tugas1 = document.getElementById("tugas").value;
    let nilai = 0.3*parseInt(uts1)+0.3*parseInt(uas1)+0.4*parseInt(tugas1)

if (nilai >= 80) {
  document.getElementById("isi").innerHTML = "A";
}
else if (nilai >=70)
{
    document.getElementById("isi").innerHTML = "B";  
}
else
{
    document.getElementById("isi").innerHTML = "C";
}
   }
</script>

</body>
</html>
