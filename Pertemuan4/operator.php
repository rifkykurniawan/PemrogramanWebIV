<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Operator</h4>
    <?php
        $u = 1;
        $y = 2;
        echo "Penjumlahan : ";
        echo $u + $y;
        echo "<br>";
        echo "Pengurangan : ";
        echo $u - $y;
        echo "<br>";
        echo "Perkalian : ";
        echo $u * $y;
        echo "<br>";
        echo "Pembagian : ";
        echo $u / $y;
        echo "<br>";
        echo "Modulus (Sisa Hasil Bagi) : ";
        echo $u & $y; //simbol "dan"
    ?>
    <hr>
    <h4>Operator Perbandingan</h4>
    <h5>Equal</h5>
    <?php
        $u = 1;
        $y = "1";
        var_dump ($u == $y);//akan mengembalikan nilai true karena nilainya sama
    ?>
    <br>
    <h5>Identical</h5>
    <?php
        $u = 1;//tipe data integer
        $y = "1";//tipe data string
        var_dump ($u === $y);//akan mengembalikan nilai false karena tipe data nya tidak sama
    ?>
    <br>
    <h5>Not Equal</h5>
    <?php
        $u = 1;
        $y = "1";
        var_dump ($u != $y);//akan mengembalikan nilai false karena nilainya berbeda
    ?>
    <br>
    <h5>Not Identical</h5>
    <?php
        $u = 1;
        $y = "1";
        var_dump ($u !== $y);//bernilai benar karena typenya tidak sama
    ?>
    <br>
    <h5>Lebih besar/kecil dari</h5>
    <?php
        $u = 1;
        $y = 2;
        var_dump ($u > $y);//bernilai salah, karena var u lebih lebih besar dari y
        var_dump ($u < $y);//bernilai benar, karena u lebih kecil dari y
    ?>
    <br>
    <h5>Lebih besar/kecil sama dengan</h5>
    <?php
        $u = 1;
        $y = 2;
        var_dump ($u >= $y);
        var_dump ($u <= $y);
    ?>
    <hr>
    <br>

    <h4>Pre-Increment</h4>
    <?php
        $u = 11;
        echo ++$u;
        echo "<br>";
        echo $u++;

    ?>
    <h4>Post Increment</h4>
    <?php
        $u = 3;
        echo $u++;
    ?>
    <h4>Pre Decrement</h4>
    <?php
        $u = 2;
        echo --$u;
    ?>
    <hr>
    <br>
    <h4>Operator Logical</h4>
    <h5>AND</h5>
    <?php
        $u = 1;
        $y = 2;
        var_dump ($u == 1 and $y ==2);
        var_dump ($u == 1 && $y ==2); //DENGAN 2 SIMBOL "DAN"
    ?>
    <h5>OR</h5>
    <?php
        $u = 1;
        $y = 2;
        var_dump ($u == 1 or $y ==2);
        var_dump ($u == 1 || $y ==2);
    ?>
    <h5>XOR</h5>
    <?php
        $u = 1;
        $y = 2;
        var_dump ($u == 1 xor $y ==2);
    ?>
    <h5>NOT</h5>
    <?php
        $u = 1;
        $y = 2;
        var_dump ($u !== 1);
    ?>
</body>
</html>