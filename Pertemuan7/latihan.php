<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Array Terindex</h3>
    <?php
        $nama = array("Paijo", "Tukiyem", "Tumini");
        echo "Nama mahasiswa " . $nama[0] . ", " . $nama[1];
    ?>

    <h3>Mendapatkan Panjang Array</h3>
    <?php
        $nama = array("Paijo", "Tukiyem", "Tumini");
        echo count($nama);
    ?>

    <h3>Loop Melalui Array</h3>
    <?php
        $nama = array("Paijo", "Tukiyem", "Tumini");
        $panjangarray = count($nama);
        for ($u = 0; $u < $panjangarray; $u++) { 
            # code...
            echo $nama[$u];
            echo "<br>";
        }
    ?>

    <h3>Array Multidimensional</h3>
    <?php
        $nama = array
        (
            array("Paijo", 20, "Gamping"),
            array("Aldi", 19, "Bantul"),
            array("Lisa", 30, "Sleman"),
        );

        echo $nama [0][0] . ", Usia : " . $nama[0][1] . ", Alamat : " . $nama[0][2] . "<br>";
        echo $nama [1][0] . ", Usia : " . $nama[1][1] . ", Alamat : " . $nama[1][2] . "<br>";
        echo $nama [2][0] . ", Usia : " . $nama[2][1] . ", Alamat : " . $nama[2][2] . "<br>";
    ?>

    <h3>Mengurutkan Array</h3>
    <?php
        $nama = array("Tukiyem", 18, "Yudi", 20, "Aldi", 30);
        rsort($nama); //untuk mengurutkan dari yang terbesar
        // sort($nama); //untuk mengurutkan dari yang terkecil

        $jumlahnama = count($nama);
        for ($u = 0; $u < $jumlahnama; $u++) { 
            # code...
            echo $nama[$u];
            echo "<br>";
        }
    ?>

    <h3>Mengurutkan Key - menurun dan naik</h3>
    <?php
        $usia = array 
        (
            "Yudi"=>"20 Tahun",
            "Ani" =>"80 Tahun",
            "Dika" => "30 Tahun"
        );

        // arsort($usia); //mengurutkan dari yang terbesar
        krsort($usia); //mengurutkan dari yang terkecil

        foreach ($usia as $u => $nilai) {
            # code...
            echo "Nama = " . $u . ", Usia = " . $nilai;
            echo "<br>";
        }
    ?>

    <br>

    <?php
        $usia = array("Paijo"=>"20 Tahun", "Tukiyem"=>"18 
        Tahun", "Tumini"=>"17 Tahun");
        krsort($usia);
        foreach($usia as $u => $nilai) {
        echo "Nama = " . $u . ", Usia = " . $nilai;
        echo "<br>";
        }

    ?>

</body>
</html>