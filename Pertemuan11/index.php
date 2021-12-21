<!DOCTYPE html>
<html>
<head>
<title>Homepage</title>
</head>
<body>
<div align="center">
<form method="get" action="index.php?search">
<input type="text" name="search">
<input type="text" name="search2">
<button type="submit">Cari</button>
</form>
</div>
<div align="center">
<?php 
include 'koneksi.php';
$search=$_GET['search'];
$search2=$_GET['search2'];
if ($search[0]=='p' or $search[0]=='P') {
    ?>
    <div>Rekam Medis Pasien</div>
    <table border="1">
    <tr>
    <td>Nama Pasien</td>
    <td>Alamat</td>
    <td>Dokter</td>
    <td>Penyakit</td>
    </tr>
    <?php
    $q=mysqli_query($koneksi,"select * from tb_rekammedis where id_pasien='$search2'");
    while ($rekammedis=mysqli_fetch_array($q)){
    $q1=mysqli_query($koneksi,"select * from tb_pasien where id_pasien='$search2'");
    $rekampasien=mysqli_fetch_array($q1);
    $q3=mysqli_query($koneksi,"select * from tb_dokter where id_dokter='{$rekammedis['id_dokter']}'");
    $rekamdokter=mysqli_fetch_array($q3);
        ?>
        <tr>
        <td><?=$rekampasien['nama']?></td>
        <td><?=$rekampasien['alamat']?></td>
        <td><?=$rekamdokter['nama']?></td>
        <td><?=$rekammedis['penyakit']?></td>
        </tr>
        <?php
    }
    ?>
    </table>
    <?php
} elseif ($search[0]=='d' or $search[0]=='D') {
    ?>
    <div>Daftar Pasien Dirawat</div>
    <table border="1">
    <tr>
    <td>Nama Dokter</td>
    <td>Nama Pasien</td>
    <td>Penyakit</td>
    </tr>
    <?php
    $q=mysqli_query($koneksi,"select * from tb_rekammedis 
    where id_dokter='$search2'");
    while ($rekammedis=mysqli_fetch_array($q)){
        $q1=mysqli_query($koneksi,"select * from tb_dokter 
        where id_dokter='$search2'");
        $rekamdokter=mysqli_fetch_array($q1);
        $q3=mysqli_query($koneksi,"select * from tb_pasien 
        where id_pasien='{$rekammedis['id_pasien']}'");
        $rekampasien=mysqli_fetch_array($q3);
        ?>
        <tr>
        <td><?=$rekamdokter['nama']?></td>
        <td><?=$rekampasien['nama']?></td>
        <td><?=$rekammedis['penyakit']?></td>
        </tr>
        <?php
    }
    ?>
    </table>
    <?php
} elseif (is_null($search)) {
    ?>
    <div>Daftar Pasien</div>
    <table border="1">
    <tr>
    <td>ID Dokter</td>
    <td>Nama Dokter</td>
    <td>Alamat Dokter</td>
    </tr>
    <?php
    $q=mysqli_query($koneksi,"select * from tb_dokter");
    while ($dokter=mysqli_fetch_array($q)){
        ?>
        <tr>
        <td><?=$dokter['id_dokter']?></td>
        <td><?=$dokter['nama']?></td>
        <td><?=$dokter['alamat']?></td>
        </tr>
        <?php
    }
    ?>
    </table>
    <div>Daftar Pasien</div>
    <table border="1">
    <tr>
    <td>ID Pasien</td>
    <td>Nama Pasien</td>
    <td>Alamat Pasien</td>
    </tr>
    <?php
    $q=mysqli_query($koneksi,"select * from tb_pasien");
    while ($pasien=mysqli_fetch_array($q)){
        ?>
        <tr>
        <td><?=$pasien['id_pasien']?></td>
        <td><?=$pasien['nama']?></td>
        <td><?=$pasien['alamat']?></td>
        </tr>
        <?php
    }
    ?>
    <?php
}
?>
</div>
</body>
</html>