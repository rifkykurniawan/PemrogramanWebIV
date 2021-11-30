<?php
    $angka = 1;
    $angka2 = 3;

    function penjumlahan(){
        // $jumlah = $angka + $angka2;
        $GLOBALS['jumlah'] = $GLOBALS['angka'] + $GLOBALS['angka2'];
    }
    penjumlahan();
    echo $jumlah;
?>
<br>
