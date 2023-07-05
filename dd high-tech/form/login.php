<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../form/style.css">
</head>
<body>
    <div class="imgsec"><img src="../img/dd-hitech_logo-r.png" alt=""></div>
    <div class="main-box">
        <div class="side-box">
             <div class="side">
                 <h2>Don't have an account ?</h2>
                 <a href="../form/signup.php">Signup</a>
             </div>
        </div>
        <div class="front-box">
              <form action="" method="post">
                <div class="form-box">
                    <h1>Login</h1>
                    <div class="inp-box">
                        <input type="text" placeholder="Name" name="names" required><br>
                        <input type="email" placeholder="Email" name="email" required><br>
                        <input type="password" placeholder="Password" name="passwords" required><br>
                        <button type="submit">Login</button>
                    </div>
                </div>
              </form>
        </div>
    </div>
    
    <?php
require '../db.php';

$names = $_POST['names'];
$email = $_POST['email'];
$passwords = $_POST['passwords'];
$date = $_POST['date'] = date("Y-m-d H:i:s");

$sql = "INSERT INTO logins(names,email,passwords,dates) VALUES('".$names."', '".$email."','".$passwords."','".$date."')";
     if ($conn->query($sql) === FALSE){
         echo "error:" .$sql. ".<br>." .$conn->error;
     }

?>
<?php mysqli_close($conn); ?>
</body>
</html>