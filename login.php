<?php
session_start();

    $host = "localhost";
    $dbuser = "root";
    $dbpassword = "";
    $dbname = "101";

    
    $email=$_POST['email'];
    $password=$_POST['password'];


    

    $mysqli = new mysqli($host,$dbuser, $dbpassword, $dbname); 
    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query ($mysqli , $query);

    while ($row = mysqli_fetch_assoc($result)){
        $emailfromdb = $row['email'];
        $pwfromdb = $row['password'];
        
    }
    if ($pwfromdb==$password and $emailfromdb==$email){

        header('location: home.html');

    }else{
        echo "<script>alert('error loging in')</script>";
        header('location: signup.html');
    }



?>
<html>
<head>
<title>loginform</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class ="loginbox">
    <img src="avatar.png" class="avatar">
    <h1>Login Here</h1>
    <form action="connection.php" method="post" name="action" value="login" type="hidden" autocomplete="off">
        <p>Username</p>
        <input type="email" name="email" placeholder="Enter Email">
        <p> Password</p>
        <input type="password" name="password" placeholder="Enter Password">
        <input type="submit" name="submit" value="LOGIN">
        <a href="#"> Forgot password?</a>
        <a href="#"> Sign up</a>
    </form>
</div>
</body>
</html>
