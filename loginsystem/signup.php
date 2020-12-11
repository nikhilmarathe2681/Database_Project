<?php

require "partials/dbconnect.php";

if($_SERVER['REQUEST_METHOD']=="POST"){
    $username=$_POST['username'];
    $username=str_replace('<','&lt;',$username);
    $username=str_replace('>','&gt;',$username);
    $password=$_POST['password'];
    $password=str_replace('<','&lt;',$password);
    $password=str_replace('>','&gt;',$password);
    $cpassword=$_POST['cpassword'];

    $sign=false;
    $namexists=false;

    $existsql="SELECT * FROM `users` WHERE `username`='$username'";
    $result=mysqli_query($con,$existsql);

    $num=mysqli_num_rows($result);

    if($num>0){
        echo "username Already Exists";
    }
    else{

        if(($password==$cpassword)){

            $hash=password_hash($password,PASSWORD_DEFAULT);
    
            $sql="INSERT INTO `users` (`username`, `password`) VALUES ('$username', '$hash')";
            $result=mysqli_query($con,$sql);
            if($result){
                $sign=true;
                echo "signup is completed successfully";
            }
            
        }
        else{
            echo "password Does not match";
        }
    }


}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
</head>
<body>
<div class="container">
<h1>SIGNUP To Continue</h1>
        <form action="signup.php" method="POST">
            <input type='text' name='username' id="first" placeholder="Enter Name"><br>
            <input type="password" name='password' id='pass' placeholder="Enter password"><br>
            <input type="password" name='cpassword' id='cpass' placeholder="conform  password"><br>
            <button type="submit">Signup</button>
            <button type="submit"><a href="login.php">Login</a></button>
        </form>

        
    </div>
    
</body>
</html>