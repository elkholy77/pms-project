<?php
include '../core/functions.php';
include '../core/validation.php';
session_start();

if($_SERVER['REQUEST_METHOD']==='POST'){
    $name=$_POST['name'];
    $price=$_POST['price'];
    $details=$_POST['details'];
    $image=$_FILES['image']['name'];
}

$errors=validateitem($name,$price,$details);

if(!empty($errors)){
    setmessage("danger",$errors);
    header("Location: ../admin/add_items.php");
    exit;
}
if(!is_dir("../images")){
    mkdir("../images");
}

$file_path="images/".$image;


move_uploaded_file($_FILES['image']['tmp_name'],$file_path);
 
if(additem($name,$price,$details,$file_path)){

    setmessage("success","item added successfully");
    header("Location: ../admin/add_items.php");
    exit;
};

?>