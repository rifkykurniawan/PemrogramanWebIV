<?php
    session_start();
    if (isset($_SESSION["username"])){
    }else{
        echo header("location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <H2>SELAMAT ANDA BERHASIL LOGIN</H2>
    <br>
    <a href="logout.php"> <u>Logout</u> </a>
</body>
</html>