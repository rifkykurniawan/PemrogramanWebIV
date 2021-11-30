<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Tipe Data String</h4>
    <?php
        $i = "Apa Kabar";
        $k = 'Apa Kabar';
        echo $i;
        echo "<br>";
        echo $k;
        echo "<br>";
        echo strlen("Apa Kabar");//digunakan untuk menentukan panjang string
        echo "<br>";
        echo str_word_count("Apa Kabar");//digunakan untuk menghitung jumlah kata
        echo "<br>";
        echo str_replace("Kabar", "Saja", "Apa Kabar");//mengganti teks dalam string
    ?>
    <hr>
    <h4>Tipe Data Integer</h4>
    <?php
        $i = 1234;
        var_dump($i);//digunakan untuk mengembalikan tipe data dan nilai
        echo "<br>";
        echo $i;
    ?>
    <hr>
    <h4>Tipe Data Float</h4>
    <?php
        $i = 10.123;
        var_dump($i); //digunakan untuk mengembalikan tipe data dan nilai
    ?>
    <hr>
    <h4>Tipe Data Array</h4>
    <?php
        $nama = array("Diki", "Dika", "Jono");
        var_dump($nama);
    ?>
    <hr>
    <h4>Object</h4>
    <?php
        class manusia{
            var $nama;
            var $warna;
            //membuat method manusia

            function tampilkan_nama(){
                return "Nama Saya adalah Yudi <br>";
            }
            function warna_kulit(){
                return "Warna Kulit Saya Sawo Matang<br>";
            }
        }
        //instansiasi class manusia
        $manusia = new manusia();
        //memanggil method tampilkan_nama dari class manusia
        echo $manusia->tampilkan_nama();
        //memanggil method warna_kulit dari class manusia
        echo $manusia->warna_kulit();
    ?>
</body>
</html>