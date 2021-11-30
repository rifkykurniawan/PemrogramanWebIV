<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perulangan</title>
</head>
<body style="text-align: center;">
    <!-- Perulangan While -->
    <h3>Perulangan While</h3>
    <?php 
        $x = 1; 
        
        while($x <= 10) {
            echo "Angka $x <br>";
            $x++;
        } 
    ?>

    <!-- Perulangan do While -->
    <h3>Perulangan do While</h3>
    <?php 
        $x = 6;
        do {
            echo "Variabel X berisi : $x <br>";
            $x++;
        } while ($x <= 10);
    ?>

    <!-- Perulangan For -->
    <h3>Perulangan For</h3>
    <?php 
        for($kata=1;$kata<=20;$kata++){	
            echo "Belajar pemrograman PHP"."<br/>";
        }
    ?>

    <!-- Perulangan foreach -->
    <h3>Perulangan Foreach</h3>
    <?php
    $warna = array("merah", "hijau", "biru", "kuning");

    foreach ($warna as $value) {
    echo "$value <br>";
    }
    ?>

    <!-- Tugas -->
    <h3>Konversi Angka ke Huruf</h3>
    <?php
                    function penyebut($nilai) {
                        $nilai = abs($nilai);
                        $huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
                        $temp = "";
                        if ($nilai < 12) {
                            $temp = " ". $huruf[$nilai];
                        } else if ($nilai <20) {
                            $temp = penyebut($nilai - 10). " belas";
                        } else if ($nilai < 100) {
                            $temp = penyebut($nilai/10)." puluh". penyebut($nilai % 10);
                        } else if ($nilai < 200) {
                            $temp = " seratus" . penyebut($nilai - 100);
                        } else if ($nilai < 1000) {
                            $temp = penyebut($nilai/100) . " ratus" . penyebut($nilai % 100);
                        } else if ($nilai < 2000) {
                            $temp = " seribu" . penyebut($nilai - 1000);
                        } else if ($nilai < 1000000) {
                            $temp = penyebut($nilai/1000) . " ribu" . penyebut($nilai % 1000);
                        } else if ($nilai < 1000000000) {
                            $temp = penyebut($nilai/1000000) . " juta" . penyebut($nilai % 1000000);
                        } else if ($nilai < 1000000000000) {
                            $temp = penyebut($nilai/1000000000) . " milyar" . penyebut(fmod($nilai,1000000000));
                        } else if ($nilai < 1000000000000000) {
                            $temp = penyebut($nilai/1000000000000) . " trilyun" . penyebut(fmod($nilai,1000000000000));
                        }     
                        return $temp;
                    }
                 
                    function terbilang($nilai) {
                        if($nilai<0) {
                            $hasil = "minus ". trim(penyebut($nilai));
                        } else {
                            $hasil = trim(penyebut($nilai));
                        }     		
                        return $hasil;
                    }
                 
                 
                    $angka = 12500;
                    echo $angka . " terbilang : ";
                    echo terbilang($angka);
                ?>

                <h3>Konversi Mata Uang</h3>
                <form action="perulangan.php" method="POST">
                    <input type="text" name="rupiah">
                    <input type="submit" value="Konversi">
                </form>
                <?php
                    $rupiah=$_POST['rupiah'];
                    $dollar = $rupiah / 14500;
                    echo $rupiah . " Rupiah = " . $dollar . " Dolar"; 
                ?>
</body>
</html>