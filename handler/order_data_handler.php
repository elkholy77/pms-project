<?php
session_start();
include '../core/validation.php';
include '../core/functions.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
   
    $name=$_POST['name'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $Phone=$_POST['Phone'];
    $Notes=$_POST['Notes'];

    $errors=ordervalidate($name,$address,$email,$Phone,$Notes);



    if(!empty($errors)){
        setmessage("danger",$errors);
        header("Location: ../checkout.php");
        exit;
    }
    if(!isset($_SESSION['cart']) || empty($_SESSION['cart'])){
        setmessage("danger","cart is empty");
        header("Location: ../checkout.php");
        exit;
    }

        $_SESSION['order']=[
        'name'=>$name,
        'email'=>$email,
        'address'=>$address,
        'Phone'=>$Phone,
        'Notes'=>$Notes,
        'cart'=>$_SESSION['cart']
    ];
    $order=$_SESSION['order'];
    if(dataorder($order)){
        unset($_SESSION['cart']);
        unset($_SESSION['order']);
        setmessage("success","order placed successfully");
        header("Location: ../index.php");
        exit;
    }
    else{
        setmessage("danger","failed to place order");
        header("Location: ../checkout.php");
        exit;
    }


    
}
