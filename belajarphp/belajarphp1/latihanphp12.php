<?php
include "koneksi.php";

$sql ="select * from supplier";
$hasil = mysqli_query($conn, $sql);
?>
<a href="latihanphp13.php" target="_self"><button>Tambah</button></a>
<table border="1">
    <thead>
        <tr>
            <th>Kode</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Telp</th>
            <th>Ket</th>
            <th>Nama Perusahaan</th>
        </tr>
    </thead>
    <tbody>
<?php
if(mysqli_num_rows($hasil)>0)
{
    while($row = mysqli_fetch_assoc($hasil)) {
        $kode=$row["kode"];
        $nama=$row["nama"];
        $alamat=$row["alamat"];
        $telp=$row["telp"];
        $ket=$row["ket"];
        $nama_perusahaan=$row["nama_perusahaan"];  
        echo '<tr><td>'.$row["kode"].'</td>';
        echo '<td>'.$row["nama"].'</td>';
        echo '<td>'.$row["alamat"].'</td>';
        echo '<td>'.$row["telp"].'</td>';
        echo '<td>'.$row["ket"].'</td>';
        echo '<td>'.$row["nama_perusahaan"].'</td>';  
        echo '<td><a href="latihanphp14.php?
        kode='.$kode.'&nama='.$nama.'&alamat='.$alamat.'&telp='.$telp.'&ket='.$ket.'&nama_perusahaan='.$nama_perusahaan.'" target="_self">
        <button>VIEW</button></a></td></tr>'; 
    }

}
?>
    </tbody>
</table>
<?php
mysqli_close($conn);
?>