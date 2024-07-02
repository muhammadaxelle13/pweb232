<?php
include "koneksi.php";

if(isset($_POST["update"]))
{
    $kode = $_POST["kode"];
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $telp = $_POST["telp"];
    $ket = $_POST["ket"];
    $nama_perusahaan = $_POST["nama_perusahaan"];
    
    // Pernyataan SQL yang telah diperbaiki
    $sql = "UPDATE supplier SET nama = '$nama', alamat = '$alamat', telp = '$telp', ket = '$ket', nama_perusahaan = '$nama_perusahaan' WHERE kode = '$kode'";    

    if (mysqli_query($conn, $sql)) {
      echo '<script>alert("Sukses bro")</script>';
      echo("<script>location.href = 'latihanphp12.php';</script>");
    } else {
      echo '<script>alert("Gagal bro")</script>';
    }   
} 

if(isset($_POST["delete"]))
{
    $kode = $_POST["kode"];
   
    $sql = "DELETE FROM supplier WHERE kode = '$kode'";    
    if (mysqli_query($conn, $sql)) {
      echo '<script>alert("Sukses delete bro")</script>';
      echo("<script>location.href = 'latihanphp12.php';</script>");
    } else {
      echo '<script>alert("Gagal bro")</script>';
    }   
} 

if(isset($_POST["cancel"]))
{
    echo("<script>location.href = 'latihanphp12.php';</script>");
}

if(isset($_GET["kode"]))
{
    $kode = $_GET["kode"];
    $nama = $_GET["nama"];
    $alamat = $_GET["alamat"];
    $telp = $_GET["telp"];
    $ket = $_GET["ket"];
    $nama_perusahaan = $_GET["nama_perusahaan"];
}
else
{
    $kode = "";
    $nama =  "";
    $alamat =  "";
    $telp = "";
    $ket = "";
    $nama_perusahaan = "";
}
?>
<html>
<body>
<form action ="" method="POST">
Kode :<input type="text" name="kode" readonly value="<?php echo $kode; ?>"><br></br>
Nama :<input type="text" name="nama" value="<?php echo $nama; ?>"><br></br>
Alamat :<input type="text" name="alamat" value="<?php echo $alamat; ?>"><br></br>
Telepon :<input type="text" name="telp" value="<?php echo $telp; ?>"><br></br>
Keterangan :<input type="text" name="ket" value="<?php echo $ket; ?>"><br></br>
Nama Perusahaan :<input type="text" name="nama_perusahaan" value="<?php echo $nama_perusahaan; ?>"><br></br>
<input type="submit" name="update" value="Update">
<input type="submit" name="delete" value="Delete">
<input type="submit" name="cancel" value="Cancel">
</form>

</body>
</html>