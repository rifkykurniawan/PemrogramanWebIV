<?php
    //buat variabel
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "db_rekammedis";

    //buat koneksi
    $koneksi = new mysqli($servername, $username, $password, $database);

    //periksa koneksi
    if ($koneksi->connect_error) {
        # code...
        die("Koneksi gagal : " . $conn->connect_error);
    }else {
        # code...
        echo "Berhasil";
    }

?>