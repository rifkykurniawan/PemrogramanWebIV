<?php
    include('koneksi.php');

    //get id
    $id = $_GET['id'];

    $query = "DELETE FROM tbl_siswa WHERE Id_siswa = '$id'";

    if ($conn->query($query)) {
        header("location: index.php");
    }else {
        echo "Data Gagal Dihapus";
    }
?>