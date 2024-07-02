<!DOCTYPE html>
<html>
<body>

<p id="isi"></p>
<p>mantap benar</p>
<button type="button" onclick="myfungsi()">klik</button>
<button type="button" onclick="myfungsi1()">klik</button>

<script>
document.getElementById("isi").innerHTML = 5 + 6;
document.write(5+12);

document.write("\nsip");

function myfungsi()
{
    window.alert("mantap bro");
}

function myfungsi1()
{
    console.log("ini muncul di console xxx");
}
</script>

</body>
</html>