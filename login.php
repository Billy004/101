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
        
    }else{
        header('location: signup.html');
    }

?>
