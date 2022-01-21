<?php
session_start();
session_destroy();
header('location.http://localhost/loginexample/login.php');
?>