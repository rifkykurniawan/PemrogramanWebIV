<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pernyataan Kondisional</title>
</head>
<body>
    <h3>Pernyataan Menggunakan if dan else</h3>
    <?php
        $teman = "bejo";

        if ($teman == "andi") {
            echo "dia adalah teman saya";
        }else {
            # code...
            echo "dia bukan teman saya";
        }
    ?>

    <h3>Pernyataan Menggunakan if ... elseif ... else </h3>
    <?php
        $teman2 = "bejo";

        if ($teman2 == "dika") {
            echo "Dika adalah teman saya";
        }elseif ($teman2 == "rio") {
            echo "Rio adalah teman saya";
        }else {
            echo "Saya tidak punya teman";
        }
    ?>

    <h3>Pernyataan Menggunakan Switch</h3>
    <?php
        $angka = 10;

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
            default:
                echo "Isi variabel tidak ditemukan di Swtich Case";
                break;
        }
    ?>
</body>
</html>