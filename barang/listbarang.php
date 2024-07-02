<div class="container mt-3">
  <h2>Data Barang</h2>
<?php
include "..\belajarphp\koneksi.php";

$sql ="select * from barang";
$hasil = mysqli_query($conn, $sql);
?>
<button id="tambahbarang" class="btn btn-success" 
data-bs-toggle="modal" data-bs-target="#modaltambahbarang">Tambah</button>
  <table class="table table-bordered table-sm">
    <thead>
        <tr>
            <th>Kode</th>
            <th>Nama</th>
            <th>Satuan</th>
            <th>Harga Beli</th>
            <th>Harga Jual</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
<?php
if(mysqli_num_rows($hasil)>0)
{
    while($row = mysqli_fetch_assoc($hasil)) {
        $kode=$row["kode"];
        $nama=$row["nama"];
        $satuan=$row["satuan"];
        $hargabeli=$row["hargabeli"];
        $hargajual=$row["hargajual"]; 
        echo '<tr><td>'.$row["kode"].'</td>';
        echo '<td>'.$row["nama"].'</td>';
        echo '<td>'.$row["satuan"].'</td>';
        echo '<td>'.$row["hargabeli"].'</td>';
        echo '<td>'.$row["hargajual"].'</td>'; 
        echo '<td><a href="latihanphp11.php?kode='.$kode.'&nama='.$nama.'&satuan='.$satuan.'&hargabeli='.$hargabeli.'&hargajual='.$hargajual.'" target="_self">
        <button class="btn btn-success">VIEW</button></a></td></tr>'; 
    }
}
?>
    </tbody>
  </table>
<?php
mysqli_close($conn);
?>
</div>

<!-- The Modal -->
<div class="modal" id="modaltambahbarang">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Tambah Barang</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
<div class="mb-1">
<label for="Kode" class="form-label">Kode:</label>
<input type="text" name="kode" class="form-control" placeholder="Enter Kode" id="kode">
</div>    

<div class="mb-1">
<label for="Nama" class="form-label">Nama:</label>
<input type="text" name="nama" class="form-control" placeholder="Enter Nama" id="nama">
</div>    

<div class="mb-1">
<label for="Satuan" class="form-label">Satuan:</label>
<input type="text" name="satuan" class="form-control" placeholder="Enter Satuan" id="satuan">
</div>    

<div class="mb-1">
<label for="Hargabeli" class="form-label">Harga Beli:</label>
<input type="number" name="hargabeli" class="form-control" placeholder="Enter Harga Beli" id="hargabeli">
</div>  

<div class="mb-1">
<label for="Hargajual" class="form-label">Harga Jual:</label>
<input type="number" name="hargajual" class="form-control" placeholder="Enter Harga Jual" id="hargajual">
</div>  


      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
      <button type="button" class="btn btn-success" data-bs-dismiss="modal">Save</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>