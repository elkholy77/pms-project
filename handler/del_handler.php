<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    if  (isset($_POST['delete'])) {
    $id = $_POST['delete'];
    $id = (int)$id;
    }

    unset($_SESSION['cart'][$id]);


header('Location: ../cart.php');
exit;

}