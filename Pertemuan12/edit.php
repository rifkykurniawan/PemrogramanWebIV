<?php 
include 'koneksi.php';
$str = $_GET['nopol'];
$nopol = (int) filter_var($str, FILTER_SANITIZE_NUMBER_INT);
if ($nopol % 2 == 0) {
    $q=mysqli_query($koneksi, "select * from genap where 
    nopol='{$_GET['nopol']}'");
}
elseif ($nopol % 2 == 1) {
    $q=mysqli_query($koneksi, "select * from ganjil where 
    nopol='{$_GET['nopol']}'");
}
$data=mysqli_fetch_array($q);
?>
<!DOCTYPE html>
<html>
<head>
<title>Penggolongan No pol</title>
</head>
<body>
<div class="container">
<form method="post" action="proses.php?action=edit">
<div>
<input type="text" name="no_pol" value="<?=$data['nopol']?>" 
readonly>
</div>
<div>
<input type="text" name="nopolbaru">
</div>
<div>
<input type="text" name="pemilik" 
value="<?=$data['pemilik']?>">
</div>
<div>
<button type="submit">Edit</button>
</div>
</form>
<div>
</div>
</div>
</body>
</html>