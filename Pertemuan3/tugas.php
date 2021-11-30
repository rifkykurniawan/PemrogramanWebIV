<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ol>
        <li>           
            <?php
            $tanggal = time () ;
            //Untuk mengambil data waktu dan tanggal saat ini dari server 
            $tahun= date("Y",$tanggal);
            //Memformat agar hanya menampilkan tahun 4 digit angka dengan Y (kapital)
            echo "Copyright @ " . $tahun;
            /* baris ini mencetak rentang copyright,
            Anda perlu mengganti 2011 dengan tahun pertama kali website Anda diluncurkan */
            ?>
        </li>
        <li>
            <?php
            $awal  = strtotime('1992-08-10'); //Waktu awal

            $akhir = time(); // Waktu sekarang atau akhir
            
            $diff  = $akhir - $awal;
            
            echo 'Umur anda adalah ' . floor($diff / (60 * 60 * 24 * 365)) . ' tahun';
            
            // Output : Umur anda adalah 26 tahun
            
            echo "<br>";
                        
            // echo 'Umur anda adalah ' . floor($diff / (60 * 60 * 24)) . ' hari';
            
            // //Output : Umur anda adalah 9695 hari
            ?>
        </li>
        <li>
        <?php
        $age = array("Adi"=>"519031131", "Ben"=>"519031101", "Joe"=>"519031104");
        asort($age);

        foreach($age as $x => $x_value) {
        echo $x_value ." ". $x;
        echo "<br>";
        }
        ?>
        </li>
    </ol>
</body>
</html>