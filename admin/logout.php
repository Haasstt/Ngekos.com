<?php 
echo "<script>alert('Data telah dihapus')</script>";
session_start(); 
$_SESSION = [];
session_unset();
session_destroy(); 

setcookie('id', '', time() - 3600);
setcookie('pass', '', time() - 3600);

header("location:login.php"); 
?>