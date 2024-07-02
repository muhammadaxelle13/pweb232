<!DOCTYPE html>
<html>
<body>

<h2>JavaScript For Loop</h2>

<p id="isi"></p>

<script>
let text = '';
for (let i = 0; i < 10; i++) {
  text = text + i +"<br>";
}

document.getElementById("isi").innerHTML = text;
</script>

</body>
</html>
