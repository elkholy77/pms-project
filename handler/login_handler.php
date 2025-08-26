<?php
session_start();
require_once '../core/functions.php';
include_once '../core/validation.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ;
    $password = $_POST['password'] ;

        if(adminlogin($email, $password)) {
        setmessage("success", "admin login successful");
        header("Location: ../admin/order_data.php");
        exit;}
    
   $errors=validatelogin($email,$password);

   if(!empty($errors)){
    setmessage("danger", $errors);
    header("Location: ../login.php");
    exit;
}   

    if(loginuser($email, $password)) {
        setmessage("success", "login successful");
        header("Location: ../index.php");
        exit;
    }
    else {
        setmessage("danger", "invalid email or password");
        header("Location: ../login.php");
        exit;
    }
}
