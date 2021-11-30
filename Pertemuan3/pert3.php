<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Latihan 3</h1>
    <!-- Variabel Global -->
    <p><u>Varibel Global</u></p>
    <?php
        $x = 10; //variabel ini dideklarasikan dalam bentuk global
        function coba(){
            //apabila diletakan disini akan error
        }
        echo "Variabel x fungsi luar (Global) adalah : $x";
    ?>

    <br><hr>
    <p><u>Variabel Lokal</u></p>
    <?php
        function coba2(){
            $y = "ini isi dari variabel y";//variabel yang diletakan didalam fungsi
            echo "Variabel y berisi : $y";
        }
        coba2(); //memanggil sesuai dengan nama fungsi
    ?>
    <br><hr>
    <p><u>Fungsi Dasar</u></p>
    <?php
        function sapa(){ //membuat function dengan nama function sapa
            echo "Halooo apa kabar??";
        }
        sapa();//memanggil function
    ?>
    <br><hr>
    <p><u>Fungsi dengan 1 argumen</u></p>
    <?php
        function mahasiswa($nama){
            echo "$nama UTY.<br>";
        }
        mahasiswa("Paijo");
        mahasiswa("Sri");
        mahasiswa("Mangku");
        mahasiswa("Tumini");
        mahasiswa("Kiyem");
        mahasiswa("Kiyem junior");    
    ?>
    <br><hr>
    <p><u>Fungsi dengan 2 Argumen</u></p>
    <?php
        function mahasiswa2($nama, $asal){
            echo "$nama UTY Berasal dari $asal<br>";
        }
        mahasiswa2 ("Paijo","Gamping");
        mahasiswa2 ("Yudi", "Sleman");
        mahasiswa2 ("Sri","Bantul");
    ?>
    <br><hr>
    <p><u>Fungsi dengan Nilai Argumen Default</u></p>
    <?php
        function jalan($namajalan = "Imam Bonjol"){
            echo "Alamat : Jl. $namajalan<br>";
        }
        jalan("Malioboro");
        jalan();
        jalan("Cempaka");
        jalan("Mawar");
    ?>
    <br><hr>


</body>
</html>