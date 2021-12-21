<?php
//include ke database
include('koneksi.php');

//get data from tambah_siswa
$nisn = $_POST['nisn'];
$nama_lengkap = $_POST['nama_lengkap'];
$alamat = $_POST['alamat'];

//query insert
$query = "INSERT INTO tbl_siswa(nisn, nama_lengkap, alamat) VALUES ('$nisn','$nama_lengkap', '$alamat')";

//pengecekan ketika gagal dan berhasil

if ($conn->query($query)) {
    # code...
    header("location:index.php");
}else {
    # code...
    echo "Data Gagal disimpan!!";
}
?>