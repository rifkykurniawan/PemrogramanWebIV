<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="proses_login.php" id="login-form">
 <?php if(isset($_GET["login_error"])){ ?>
   <h4 style="color: red; text-align: center;" >Maaf Password atau username salah</h4>
 <?php } ?>
    <br />
    <div class="input-group">
     <input type="text" name="username" value="" placeholder="Username or Email" style="width: 280px;">
    </div>
    <div class="input-group">
     <input type="password" name="password" value="" placeholder="Password" style="width: 280px;">
    </div>
    <div class="input-group"><input type="submit" name="commit" value="Login" class="btn">
    </div>
   </form>
</body>
</html>