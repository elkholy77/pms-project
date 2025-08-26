<?php
session_start();
include_once '../core/validation.php';
include_once '../core/functions.php';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = trim($_POST['password']);

    $errors = validateregister($username, $email, $password);
    if(!empty($errors)) {
       setmessage("danger",$errors);
       header("Location: ../register.php");
       exit;  
}
    if(registeruser($username, $email, $password)) {
        setmessage("success", "user register successfully");
        header("location: ../login.php");
        exit;}

        
}