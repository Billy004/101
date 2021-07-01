<?php
    session_start();

    $host = "localhost";
    $dbuser = "root";
    $dbpassword = "";
    $dbname = "101";

    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['messsage'];

    // database connetion

    $conn = new mysqli($host,$dbuser,$dbpassword,$dbname,);
    $link = mysqli_connect("localhost", "root", "", "101");

    // Check connection
    if($conn->connect_error){
        die('connection failed :'.$conn->connect_error);
    }


    
    // Escape user inputs for security
      $name = mysqli_real_escape_string($link, $_REQUEST['name']);
      $email = mysqli_real_escape_string($link, $_REQUEST['email']);
      $message = mysqli_real_escape_string($link, $_REQUEST['message']);
      


    $sql = "INSERT INTO comments (name, email, message) VALUES ('$name','$email','$message')";

    $results = $conn-> query($sql);

    if ($conn->query($sql) === TRUE) {
        header("location:index.html");
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      
      //displaying

      




      // Close connection
      mysqli_close($link);
    
?>