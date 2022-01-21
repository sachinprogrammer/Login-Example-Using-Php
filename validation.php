<?php
SESSION_START();
$username=$_POST['username'];
$password=$_POST['password'];
echo  $username; die;
$con=mysqli_connect('localhost','root');
  if(!$con){
     echo"Connection Failed";
  }
  else {
      echo"Connection Done";
  }   
mysqli_select_db($con,loginpage);
$q="select *from login where username='$username' && password='$password'";
$result= mysqli_query($con,$q);
$num=mysqli_num_rows($result);
  if($num==1){
      $_SESSION['username']= $username;
      header("location.http://localhost/loginexample/home.php");
  }
  else{
    header('location.http://localhost/loginexample/login.php');
 }
mysqli_close($con); 
?>
