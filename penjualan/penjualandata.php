<div class="container mt-3">
 
 <div class="card">
 <div class="card-header">  <h2>PENJUALAN</h2><button type="button" id="tambahpenjualan" class="btn btn-success"> 
               +
        </button></div>
 <div class="card-body">
 <table class="table" id="tabelpenjualan">
    <thead>
      <tr>
        <th>Invoice</th>
        <th>Tanggal</th>
        <th>Konsumen</th>
        <th>Telp</th>
        <th>Total</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>t01k00120240528092424023</td>
        <td>28-05-2024</td>
        <td>Adi</td>
        <td>08123466456</td>
        <td>20000</td>
        <td><button type="button" class="btn btn-success"> 
               V
        </button></td>
      </tr>
      <tr>
        <td>t02k00120240528092424023</td>
        <td>28-05-2024</td>
        <td>Adi</td>
        <td>08123466456</td>
        <td>70000</td>
        <td><button type="button" class="btn btn-success"> 
               V
        </button></td>
      </tr>
      <tr>
        <td>t03k00120240528092424023</td>
        <td>28-05-2024</td>
        <td>Adi</td>
        <td>08123466456</td>
        <td>50000</td>
        <td><button type="button" class="btn btn-success"> 
               V
        </button></td>
      </tr>
     
    </tbody>
    <tfood>
    <tr><td colspan="4" >TOTAL</td><td>3000000</td></tr>
    </tfood>
  </table>
</div>
</div>
  
</div>

<script>
$(document).ready(function()
{
$('#tabelpenjualan').DataTable();

$("#tambahpenjualan").click(function()
 {    $('#isiutama') .load('penjualan/tambahpenjualan.php');  });




});
</script>        