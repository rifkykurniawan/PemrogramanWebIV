<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>PHP & DATABASE CONSTRAINS</title>
</head>
<body>
    <div align="center" class="container mt-5">
        <form action="index.php" method="get">
            <input type="text" name="search" class="form-control">
            <button type="submit" class="btn btn-primary mt-3">Cari</button>
        </form>

        <?php
            include('koneksi.php');
            $cari = $_GET['search'];
        ?>

        <h3>Rekam Medis Pasien</h3>
        <table border="1" class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Nama Pasien</th>
                    <th>Alamat</th>
                    <th>Dokter</th>
                    <th>Penyakit</th>
                </tr>
            </thead>
        <?php
            $q = mysqli_query($koneksi, "select * from tb_rekammedis where id_pasien='$cari'");

            while($rekammedis=mysqli_fetch_array($q)){
                $q1 = mysqli_query($koneksi,"select * from tb_pasien where id_pasien = '$cari'");
                $rekampasien = mysqli_fetch_array($q1);
                $q2 = mysqli_query($koneksi,"select * from tb_dokter where id_dokter = '$cari'");
                $rekamdokter = mysqli_fetch_array($q2);
        ?>

        <tr>
            <td><?php echo $rekampasien['nama']?></td>
            <td><?php echo $rekampasien['alamat']?></td>
            <td><?php echo $rekamdokter['nama']?></td>
            <td><?php echo $rekammedis['penyakit']?></td>
        </tr>

        <?php } ?>
        </table>
    </div>
</body>
</html>