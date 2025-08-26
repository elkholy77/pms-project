<?php 
session_start();
if(isset($_SESSION['cart'])){
    unset($_SESSION['cart']);}
session_unset();

session_destroy();
header("Location: ../index.php");
exit;
?>