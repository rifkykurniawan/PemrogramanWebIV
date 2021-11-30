<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="text-align: center;">  
    <h3>Perulangan While</h3>
    <?php
        $x = 3;
        while ($x <= 5) {
            echo "Angka $x <br>";
            $x++;
        }
    ?>

    <h3>Perulangan For</h3>
    <?php
        for($kata=1;$kata<=20;$kata++){	
            echo "Belajar pemrograman PHP"."<br/>";
        }
    ?>

    <h3>Perulangan do While</h3>
    <?php
        $x = 12;
        do{
            echo "Variabel X Berisi : $x <br>";
            $x++;
        }while ($x <= 10);
    ?>
</body>
</html>