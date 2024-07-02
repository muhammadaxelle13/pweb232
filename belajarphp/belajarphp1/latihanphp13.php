<?php
include "koneksi.php";
if(isset($_POST["save"]))
{
    $kode = $_POST["kode"];
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $telp = $_POST["telp"];
    $ket = $_POST["ket"];
    $nama_perusahaan = $_POST["nama_perusahaan"];
    $sql = "INSERT INTO supplier VALUES ('$kode', '$nama', '$alamat','$telp', '$ket', '$nama_perusahaan')";    
    if (mysqli_query($conn, $sql)) {
      echo '<script>alert("sukses bro")</script>';
      //header('location:latihanphp12.php');
      echo("<script>location.href = 'latihanphp12.php';</script>");
    } else {
      echo '<script>alert("gagal bro")</script>';
    }   
} 
if(isset($_POST["cancel"]))
{
    echo("<script>location.href = 'latihanphp12.php';</script>");
}
?>
<html>
<body>
<form action ="" method="POST">
Kode :<input type="text" name="kode" ><br>
Nama :<input type="text" name="nama" ><br>
Alamat :<input type="text" name="alamat" ><br>
Telp :<input type="text" name="telp" ><br>
Ket :<input type="text" name="ket" ><br>
Nama Perusahaan :<input type="text" name="nama_perusahaan" ><br>
<input type="submit" name="save" value="save">
<input type="submit" name="cancel" value="cancel">

</form>

</body>
</html>