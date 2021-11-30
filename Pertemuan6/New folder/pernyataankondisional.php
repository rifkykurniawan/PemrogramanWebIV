<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pernyataan Kondisional</title>
</head>
<body style="text-align: center;">
    <h3>Pernyataan Menggunakan If dan Else</h3>
<?php
    $teman = "andi";

    if ($teman == "andi") {
        echo "dia adalah teman saya";
    }else{
        echo "dia bukan teman saya";
    }
?>
<br>
    <h3>Pernyataan Menggunakan If ... Elseif ... Else</h3>

<!-- Pernyataan IF ... ELSE IF ... ELSE -->
<?php
    $teman2 = "dika";

    if ($teman == "bejo") {
        echo "Bejo adalah teman saya";
    }elseif ($teman == "rio") {
        echo "Rio adalah teman saya";
    }else {
        echo "Saya tidak punya teman";
    }
?>

    <h3>Pernyataan Menggunakan Switch</h3>
    <!-- Switch Case -->
    <?php 
    $angka = 3;
        switch ($angka) {
            case 1:
                echo "Isi variabel angka adalah satu";
                break;
            case 2:
                echo "Isi variabel angka adalah dua";
                break;
            case 3:
                echo "Isi variabel angka adalah tiga";
                break;
            case 4:
                echo "Isi variabel angka adalah empat";
                break;
            case 5:
                echo "Isi variabel angka adalah lima";
                break;
            case 6:
                echo "Isi variabel angka adalah enam";
                break;
            default:
                echo "Isi variabel tidak di temukan";
                break;
        }
    ?>
</body>
</html>