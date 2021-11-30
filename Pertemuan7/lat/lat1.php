1. Array Terindex <br>
<?php
$nama = array("Paijo", "Tukiyem", "Tumini");
echo "Nama mahasiswa " . $nama[0] . ", " . $nama[1] . " and " . 
$nama[2] . ".";
?>
<br>



2. Mendapatkan panjang array <br>
<?php
$nama = array("Paijo", "Tukiyem", "Tumini");
echo count($nama);
?>
<br>



3. Loop Melalui Array <br>
<?php
$nama = array("Paijo", "Tukiyem", "Tumini");
$panjangArray = count($nama);
for($u = 0; $u < $panjangArray; $u++) {
 echo $nama[$u];
 echo "<br>";
}
?>
<br>



4. Array Multidimensional <br>
<?php
$nama = array
 (
 array("Paijo",20, "Gamping"),
 array("Tukiyem",18, "Pleret"),
 array("Tumini",17, "Kokap"),
 );
echo $nama [0][0].", Usia: ".$nama [0][1].", Alamat: ".$nama [0][2].".<br>";
echo $nama [1][0].", Usia: ".$nama [1][1].", Alamat: ".$nama [1][2].".<br>";
echo $nama [2][0].", Usia: ".$nama [2][1].", Alamat: ".$nama [2][2].".<br>";
?>
<br>



5. Mengurutkan Array <br>
<?php
$nama = array("Tukiyem",18, "Paijo",20, "Tumini",17);
sort($nama);
$jumlahNama = count($nama);
for($u = 0; $u < $jumlahNama; $u++) {
 echo $nama[$u];
 echo "<br>";
}
?>
<br>


5. Menurut Key - krsort menurun <br>
<?php
$usia = array
(
    "Paijo"=>"20 Tahun", 
    "Tukiyem"=>"18 Tahun", 
    "Tumini"=>"17 Tahun"
);
arsort($usia);
foreach($usia as $u => $nilai) {
 echo "Nama = " . $u . ", Usia = " . $nilai;
 echo "<br>";
}
?>
<!-- Variabel $GLOBALS -->
<?php
    $angka = 1;
    $angka2 = 4;

    function penjumlahan(){
        //$jumlah = $angka + $angka2;
        $GLOBALS['jumlah'] = $GLOBALS['angka'] + $GLOBALS['angka2'];
    }
    penjumlahan();
    echo $jumlah;
   
?>

robith
oniex
nazhier