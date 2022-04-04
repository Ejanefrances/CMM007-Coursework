<?php 
 include("connection.php");


 $email='';
 $password='';

 if(empty($_POST["email"]) || empty($_POST["password"]))

 {
 echo "Both fields are required.";
 }else{

  $email=$_POST['email'];
  $password=$_POST['password'];

  $sql="SELECT ID FROM adminlogin WHERE email='$email' and password='$password'";
  $result=mysqli_query($db,$sql); 

  if(mysqli_num_rows($result) == 1)
  {
     
  header("location: home.php"); // Redirecting To another Page
  }else
  {

  echo "<script language='javascript'>";
  echo "alert('WRONG INFORMATION')";
  echo "</script>";
  die();
  }
 }

?>
 