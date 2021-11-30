<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><u>Fungsi Mengembalikan Nilai</u></p>
    <?php
        function sum($t, $y){
            $hasil = $t + $y;
            return $hasil;
        }
        echo "5 + 5 = " . sum(5,5) . "<br>";
        echo "1 + 2 = " . sum(1,2) . "<br>";
        echo "7 + 9 = " . sum(7,9) . "<br>";
        echo "2 + 2 = " . sum(2,2) . "<br>";
        echo sum(1,1);
    ?>
    <br>
    <hr>
    <p><u>Tanggal dan Waktu</u></p>
    <?php
    // menampilkan tanggal
        echo " Sekarang tanggal " . date("Y/m/d") . "<br>";
        echo " Sekarang tanggal " . date("Y-m-d") . "<br>";
        echo " Sekarang tanggal " . date("Y.m.d") . "<br>";
        echo " Sekarang tanggal " . date("d.m.Y") . "<br>";
    //menampilkan waktu
        date_default_timezone_set ("Asia/Jakarta");
        // http://php.net/manual/en/timezones.php
        echo "Sekarang jam : " . date("h:i:sa") . "<br>";
    //menampilkan hari ini dengan "l = ellll"
        echo " Today is " . date("l") . "<br>";
    ?>
    <br><hr>
    <p><u>Tanggal dan waktu yang dikonversi ke bentuk standar</u></p>
    <?php
        $t = strtotime("Today");
            echo date("Y-m-d",$t) . "<br>";
        $t = strtotime("tomorrow");
            echo date("Y-m-d",$t) . "<br>";
        $t = strtotime("+5 Day");
            echo date("Y-m-d",$t) . "<br>";
        $t = strtotime("+2 Months");
            echo date("Y-m-d",$t) . "<br>";

        
    ?>
    <br><hr>
    <p><u>Membuat Tahun Copyright Otomatis</u></p>
            <?php
            $tanggal = time () ;
            //Untuk mengambil data waktu dan tanggal saat ini dari server 
            $tahun= date("Y",$tanggal);
            //Memformat agar hanya menampilkan tahun 4 digit angka dengan Y (kapital)
            echo "Copyright @ " . $tahun;
            /* baris ini mencetak rentang copyright,
            Anda perlu mengganti 2011 dengan tahun pertama kali website Anda diluncurkan */
            ?>


</body>
</html>