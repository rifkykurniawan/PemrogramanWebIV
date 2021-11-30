<!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> Login Page </title>  
<style>   
Body {  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: pink;  
}  
button {   
       background-color: #4CAF50;   
       width: 100%;  
        color: orange;   
        padding: 15px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
         }   
 form {   
        border: 30px solid #f1f1f1;  
        margin-left: 30%; 
        margin-right: 30%;
    }   
 input[type=text], input[type=password] {   
        width: 100%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid green;   
        box-sizing: border-box;   
    }  
 button:hover {   
        opacity: 0.7;   
    }   
  .cancelbtn {   
        width: auto;   
        padding: 10px 18px;  
        margin: 10px 5px;  
    }   
        
     
 .container {   
        padding: 25px;   
        background-color: lightblue;  
    }   
</style>   
</head>    
<body>    
    <center> <h1> Login </h1> </center>   
    <form action="proses_login.php" method="post">
        <?php if(isset($_GET["login_error"])){ ?>
            <h4>Maaf password atau username salah <?php }?></h4>
        <div class="container">   
            <br>
            <!-- input username -->
            <input type="text" name="username" placeholder="Masukan Username">
            <!-- input password -->
            <input type="password" name="password" placeholder="Masukan Password">
            <!-- membuat button submit -->
            <button type="submit" value="Login" name="commit">Login</button>   
        </div>  
    </form> 
</body>     
</html>  