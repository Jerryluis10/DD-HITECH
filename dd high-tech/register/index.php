<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="backgd">
    <div class="sideimage"><img src="../img/dd-hitech_logo-r.png" alt=""></div>
    <div class="into">
        <h1>Welcome</h1>
        <h4>Register for a course at DD HITECH <br> now and get started</h4>
    </div>
    <div class="form-box">
        <div class="first-box">
            <form action="" method="post">
                <div class="title">
                   <h1>Registration</h1>
                </div>
                <div class="inputs-flex">
                    <div class="inp-fstline">
                        <input type="text" placeholder="First Name" name="name" required><br>
                        <input type="text" placeholder="Last Name" name="lastname" required><br>
                        <input type="password" placeholder="Password" name="passwords" required><br>              
                    </div>
                    <div class="inp-secline">
                        <input type="email" placeholder="Email" name="email" required><br>
                        <input type="number" placeholder="Your Phone" name="phonenumber" required><br>   
                        <select name="course" id="" required>
                            <option  value="Select a course">Select a course</option>
                            <option  value="Web development">Web development</option>
                            <option  value="App Development">App Development</option>
                            <option  value="Database Systems">Database Systems</option>
                            <option  value="User research and analysis">User research and analysis</option>
                            <option  value="User experience(UX)">User experience(UX)</option>
                            <option  value="Design for Brand Identity">Design for Brand Identity</option>
                            <option  value="Electrical circuit">Electrical circuit</option>
                            <option  value="Control System">Control System</option>
                            <option  value="Robotics and Automation">Robotics and Automation</option>
                        </select> 
                    </div>
                </div>
                <div class="submit-bt"><button type="submit">Register</button></div>
           </form>
        </div>
    </div>
</div>


<?php
require '../db.php';

$name = $_POST['name'];
$lastname = $_POST['lastname'];
$passwords = $_POST['passwords'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$course = $_POST['course'];
$date = $_POST['date'] = date("Y-m-d H:i:s");

$sql = "INSERT INTO register(names,lastname,Passwords,email,phonenumber,course,dates) VALUES('".$name."', '".$lastname."','".$passwords."','".$email."','".$phonenumber."','".$course."','".$date."')";
     if ($conn->query($sql) === FALSE){
         echo "error:" .$sql. ".<br>." .$conn->error;
     }

?>
<?php mysqli_close($conn); ?>

</body>
</html>