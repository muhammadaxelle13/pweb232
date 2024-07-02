<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
 
 $('#isi') .load('page1.php');  

 $("#page2").click(function()
 {    $('#isi') .load('page2.php');  });
 $("#page3").click(function()
 {     $('#isi') .load('page3.php');  });
 $("#page4").click(function()
 {     $('#isi') .load('page4.php');  });
 
});
</script>
</head>
<body>
<h1>Hello jquery</h1>

<button id="page2">Tambah</button>
<div id="isi">
</div>

</body>
</html>
