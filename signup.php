<?php
include("connection.php");


 $firstname=$_POST['firstname'];
 $lastname=$_POST['lastname'];
 $email=$_POST['email'];
 $password=$_POST['password'];
 $role= $_POST['role'];



 $sql="INSERT INTO storytellers (`firstName`, `lastName`, `email`, `password`, `role`) VALUES ('$firstname', '$lastname', '$email', '$password', '$role')";
  

 if(mysqli_query($db,$sql))
 {
    
    header("location: index.php"); // Redirecting To another Page
 }else
 {
 echo "Incorrect username or password.";
 }


?>

