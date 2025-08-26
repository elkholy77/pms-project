<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $address=$_POST['address'];
    $Phone=$_POST['Phone'];
    $Notes=$_POST['Notes'];
    
    
    // Process the order data (e.g., save to database, send email, etc.)
    
}
header("Location: ../index.php");
exit;
