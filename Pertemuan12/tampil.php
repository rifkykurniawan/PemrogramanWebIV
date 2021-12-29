<?php 
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<div align="center" style="display: table; margin: 0 auto;">
<table border="1" style="float: left;">
<tr>
<td colspan="3" align="center">Ganjil</td>
</tr>
<tr align="center">
<td>No Polisi</td>
<td>Nama Pemilik</td>
<td>Aksi</td>
</tr>
<?php 
$max=mysqli_fetch_array(mysqli_query($koneksi,"select 
count(*) as count from ganjil"));
if($max['count']>0){
    $q=mysqli_query($koneksi,"select * from ganjil");
    while ($nopol=mysqli_fetch_array($q)){
        ?>
        <tr>
        <td><?=$nopol['nopol']?></td>
        <td><?=$nopol['pemilik']?></td>
        <td>
        <button 
        onclick="window.location='edit.php?nopol=<?=$nopol['nopol']?>'">Ed
        it</button>
        <button 
        onclick="window.location='proses.php?action=hapus&nopol=<?=$nopol[
            'nopol']?>'">Hapus</button>
            </td>
            </tr>
            <?php 
        }
    } ?>
    </table>
    <table border="1" style="float: left;">
    <tr>
    <td colspan="3" align="center">Genap</td>
    </tr>
    <tr align="center">
    <td>No Polisi</td>
    <td>Nama Pemilik</td>
    <td>Aksi</td>
    </tr>
    <?php 
    $max=mysqli_fetch_array(mysqli_query($koneksi,"select 
    count(*) as count from genap"));
    if($max['count']>0){
        $q=mysqli_query($koneksi,"select * from genap");
        while ($nopol=mysqli_fetch_array($q)){
            ?>
            <tr>
            <td><?=$nopol['nopol']?></td>
            <td><?=$nopol['pemilik']?></td>
            <td>
            <button 
            onclick="window.location='edit.php?nopol=<?=$nopol['nopol']?>'">Ed
            it</button>
            <button 
            onclick="window.location='proses.php?action=hapus&nopol=<?=$nopol[
                'nopol']?>'">Hapus</button>
                </td>
                </tr>
                <?php 
            }
        } ?>
        </table>
        </div>
        <div align="center">
        <button onclick="window.location='index.php'">Tambah 
        Baru</button>
        </div>
        </body>
        </html>