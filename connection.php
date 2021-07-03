<?php
    session_start();

    $host = "localhost";
    $dbuser = "root";
    $dbpassword = "";
    $dbname = "101";

    
    $username=$_POST['email'];
    $password=$_POST['password'];

    // database connetion

    $conn = new mysqli($host,$dbuser,$dbpassword,$dbname,);
    $link = mysqli_connect("localhost", "root", "", "101");

    // Check connection
    if($conn->connect_error){
        die('connection failed :'.$conn->connect_error);
    }


    
    // Escape user inputs for security
      $email = mysqli_real_escape_string($link, $_REQUEST['email']);
      $password = password_hash($_post['password'], PASSWORD_DEFAULT);
      


    $sql = "INSERT INTO users (email, password) VALUES ('$email','$password')";

    $results = $conn-> query($sql);

    if ($conn->query($sql) === TRUE) {
        header("location:login.html");
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      
      //displaying

      




      // Close connection
      mysqli_close($link);
    
?>