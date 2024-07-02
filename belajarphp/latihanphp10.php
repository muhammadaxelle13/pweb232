<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!empty($_POST["nama"])) {
        $nama = $_POST["nama"];
        echo "Nama: " . $nama . "<br>";
    } else {
        echo "Nama tidak boleh kosong.<br>";
    }

    if (!empty($_POST["umur"])) {
        $umur = $_POST["umur"];
        echo "Umur: " . $umur . "<br>";
    } else {
        echo "Umur tidak boleh kosong.<br>";
    }

    if (!empty($_POST["tanggal"])) {
        $tanggal_lahir = $_POST["tanggal"];
        echo "Tanggal Lahir: " . $tanggal_lahir . "<br>";
    } else {
        echo "Tanggal lahir tidak boleh kosong.<br>";
    }

    if (isset($_POST["jenis_kelamin"])) {
        $jenis_kelamin = $_POST["jenis_kelamin"];
        echo "Jenis Kelamin: " . $jenis_kelamin . "<br>";
    } else {
        echo "Jenis kelamin harus dipilih.<br>";
    }

    if (isset($_POST["pendidikan"])) {
        $pendidikan = $_POST["pendidikan"];
        echo "Pendidikan Terakhir: ";
        foreach ($pendidikan as $value) {
            echo $value . ", ";
        }
        echo "<br>";
    } else {
        echo "Pendidikan terakhir harus dipilih.<br>";
    }

    if (!empty($_POST["kota"])) {
        $kota = $_POST["kota"];
        echo "Kota: " . $kota . "<br>";
    } else {
        echo "Kota tidak boleh kosong.<br>";
    }

    if (!empty($_POST["alamat"])) {
        $alamat = $_POST["alamat"];
        echo "Alamat: " . $alamat . "<br>";
    } else {
        echo "Alamat tidak boleh kosong.<br>";
    }
}
?>
