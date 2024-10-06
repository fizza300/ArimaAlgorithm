<?php
session_start();
include("db.php");
if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(!empty($username) && !empty($password) && !is_numeric($username))
    {
        $query="select * from data where username='$username' limit 1";
        $result= mysqli_query($con,$query);
        if($result)
        {
            if($result && mysqli_num_rows($result)>0)
            {
                $user_data=mysqli_fetch_assoc($result);
                if($user_data['password']==$password)
                {
                    header("location: Firstpage.php");
                    die;
                }
            }

        }

        echo "<script type= 'text/javascript'>alert('wrong username and password')</script>";
    }

    else{

        echo "<script type= 'text/javascript'>alert('wrong username and password')</script>";
        
        }
}





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form login and register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="box"> 
        <form method="POST">
        <h2>Log in</h2>
            <div class="inputBox">
                <input type="text" name="username" required>
                <span>Username</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" name="password" required>
                <span>Enter Password</span>
                <i></i>
            </div>
            <input type="submit" value="Login">
            <div class="links">
                <a href="lm.html" target="_blank">Learn More</a>
                <a class="btn" href="signup.php" target="_self">SIGN UP</a>
            </div>
        </form>
    </div>
</body>
</html>
