<html>
<head>
    <style>
        .form-group {
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        .form-group label {
            margin-right: 10px;
        }
    </style>
</head>
<body>
<form action="latihanphp10.php" method="POST">
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama"><br>

    <label for="umur">Umur:</label>
    <input type="number" id="umur" name="umur"><br>

    <label for="tanggal">Tanggal Lahir:</label>
    <input type="date" id="tanggal" name="tanggal" value="<?php echo date('Y-m-d'); ?>"><br>

    <div class="form-group">
        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <input type="radio" id="laki_laki" name="jenis_kelamin" value="Laki-laki">
        <label for="laki_laki">Laki-laki</label>
        <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan">
        <label for="perempuan">Perempuan</label>
    </div>

    <div class="form-group">
        <label for="pendidikan">Pendidikan Terakhir:</label>
        <input type="checkbox" id="sd" name="pendidikan[]" value="SD">
        <label for="sd">SD</label>
        <input type="checkbox" id="smp" name="pendidikan[]" value="SMP">
        <label for="smp">SMP</label>
        <input type="checkbox" id="sma" name="pendidikan[]" value="SMA">
        <label for="sma">SMA</label>
        <input type="checkbox" id="pt" name="pendidikan[]" value="PT">
        <label for="pt">PT</label>
    </div>

    <label for="kota">Kota:</label>
    <select id="kota" name="kota">
        <option value="Surabaya">Surabaya</option>
        <option value="Jakarta">Jakarta</option>
        <option value="Bandung">Bandung</option>
    </select><br>

    <label for="alamat">Alamat:</label><br>
    <textarea id="alamat" name="alamat" rows="4" cols="50"></textarea><br>

    <input type="submit" value="Kirim">
</form>
</body>
</html>
