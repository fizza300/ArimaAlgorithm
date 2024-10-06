<?php

session_start();
include("db.php");
if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $username = $_POST['uname'];
    $password = $_POST['password']; 
    $email = $_POST['mail'];
    $gender = $_POST['gender'];

    if(!empty($username) && !empty($password) && !is_numeric($username))
    {
        $query = "insert into data (username, password, email, gender) VALUES ('$username', '$password', '$email', '$gender')";
        mysqli_query($con, $query);
        echo "<script type= 'text/javascript'>alert('Successfully Register')</script>";
    }
    else
    echo "<script type= 'text/javascript'>alert('Please Enter valid information')</script>";
    
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up Form</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <div class="box">
        <span class="boxLine"></span>
        <form method="POST">
            <h2>Sign up</h2>
            <div class="inputBox">
                <input type="text" name='uname'  required>
                <span>Username</span>
                <i></i>
            </div>

            <div class="inputBox">
                <input type="password" name='password' required>
                <span>Enter Password</span>
                <i></i>

            </div>

            <div class="inputBox">
                <input type="email" name='mail' required>
                <span>Email Address</span>
                <i></i>

            </div>
            <div class="rBtn">
                <label class="lbl">Gender :</label>
                <div class="radio-wrapper">
                    <input type="radio" name="gender" id="male" value="male" checked/>
                    <label for="male">Male</label>
                </div>
            <div class="radio-wrapper">
                <input type="radio" name="gender" id="female" value="female"/>
                <label for="female">Female</label>
            </div>
        </div>
        <input type="submit" value="SignUp">
        <div class="links">
                <a style="display: flex; color: aqua; font-size: 18px; "  href="index.php">Log In</a>

            
        </div>
        </form>

    </div>
    
</body>
</html>