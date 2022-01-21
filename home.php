<?php
SESSION_START();
 if(!isset($_session['username']))
  header('location.http://localhost/loginexample/login.php');
?>
<!DOCTYPE html>
<html>
   <head>
      <title>login</title>  
   </head>
   <body>
      <h2> Welcome To Login Page,<?php echo $_session['username'];?></h2>
      <a href="logout.php"> Logout </a>
    </body> 
</html>     

