<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- membuat form -->
    <form action="proses_login.php" method="post">
        <?php if(isset($_GET["login_error"])){ ?>
            <h4>Maaf password atau username salah <?php }?></h4>
            <br>
            <!-- input username -->
            <input type="text" name="username" placeholder="Masukan Username">
            <!-- input password -->
            <input type="password" name="password" placeholder="Masukan Password">
            <!-- membuat button submit -->
            <input type="submit" value="Login" name="commit">
    </form>
</body>
</html>