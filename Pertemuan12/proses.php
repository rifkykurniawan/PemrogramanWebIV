<?php
include 'koneksi.php';
if ($_GET['action']=='tambah') {
    $str = $_POST['nopol'];
    $nopol = (int) filter_var($str, FILTER_SANITIZE_NUMBER_INT);
    if ($nopol % 2 == 0) {
        mysqli_query($koneksi, "insert into gena values 
        ('{$_POST['nopol']}','{$_POST['pemilik']}')");
    } elseif ($nopol % 2 == 1) {
        mysqli_query($koneksi, "insert into ganjil values 
        ('{$_POST['nopol']}','{$_POST['pemilik']}')");
    }
    header('location:tampil.php');
}
if ($_GET['action']=='edit') {
    $str1 = $_POST['nopol'];
    $nopol1 = (int) filter_var($str1, FILTER_SANITIZE_NUMBER_INT);
    $str2 = $_POST['nopolbaru'];
    $nopol2 = (int) filter_var($str2, FILTER_SANITIZE_NUMBER_INT);
    if (($nopol1 % 2) == ($nopol2 % 2)) {
        if ($nopol2 % 2 == 0) {
            mysqli_query($koneksi, "update genap set nopol='$str2', 
            pemilik='{$_POST['pemilik']}' where nopol='$str1'");
        } elseif ($nopol2 % 2 == 1) {
            mysqli_query($koneksi, "update ganjil set nopol='$str2', 
            pemilik='{$_POST['pemilik']}' where nopol='$str1'");
        }
        header('location:tampil.php');
    } elseif (($nopol1%2) != ($nopol2%2)) {
        if ($nopol2 % 2 == 0) {
            mysqli_query($koneksi, "insert into genap values 
            ('{$_POST['nopolbaru']}','{$_POST['pemilik']}')");
            mysqli_query($koneksi, "delete from ganjil where 
            nopol='{$_POST['nopol']}'");
        } elseif ($nopol2 % 2 == 1) {
            mysqli_query($koneksi, "insert into ganjil values 
            ('{$_POST['nopolbaru']}','{$_POST['pemilik']}')");
            mysqli_query($koneksi, "delete from genap where 
            nopol='{$_POST['nopol']}'");
        }
        header('location:tampil.php');
    }
}
if ($_GET['action']=='hapus') {
    $str = $_GET['nopol'];
    $nopol = (int) filter_var($str, FILTER_SANITIZE_NUMBER_INT);
    if ($nopol % 2 == 0) {
        mysqli_query($koneksi, "delete from genap where 
        nopol='{$_GET['nopol']}'");
    } elseif ($nopol % 2 == 1) {
        mysqli_query($koneksi, "delete from ganjil where 
        nopol='{$_GET['nopol']}'");
    }
    header('location:tampil.php');
}
?>