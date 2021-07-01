<?php
session_start();
$hostname='localhost';
$authname='root';
$pass='';
$dbname='101';
// connecting to database
$conn= new mysqli($hostname,$authname,$pass,$dbname);
// checking if database is connected
//if($conn){
    //echo "Database connected";}
   // else {
   // echo "Database Not Connected";
   //}
   // encrypting unique variables
   switch ($_POST['action']) {
       case 'signup':
        $email=$_POST['email'];
        $password=password_hash($_POST['password'], PASSWORD_DEFAULT);
       // echo $email."<br>".$password;
       //inseting data into the table users in the database
       $sql="INSERT INTO users(email,password) VALUES('$email','$password')";
       $run_qry=mysqli_query($conn,$sql);
       if($run_qry){
           header("location:login.php");
       }
       break;
       /*
       case 'login':
        $email=$_POST['email'];
        $password=$_POST['password'];

        $select_user="SELECT * FROM users WHERE email='$email'";
        $run_qry=mysqli_query($conn,$select_user);
        if(mysqli_num_rows($run_qry)>0){
            while ($row=mysqli_fetch_assoc($run_qry)){
                if(password_verify($password,$row['password'])){
                    $email=$row['email'];                    
                    $_SESSION["email"]=$row['email'];
                    header("location:index.php");
                    
                }
                else{
                    header("location:login.php");
                }
            }
        }
        else{
            header("location:login.php");
        }
        break;*/
   } 

?>