<?php
function validaterequired($value,$name){
    return empty($value) ? "$name is required." : null;
}
function validateemail($value){
    return filter_var($value, FILTER_VALIDATE_EMAIL) ? null : "invalid email";
}
function validatepassword($password){
    if(strlen($password) <6){
        return "password must be at least 6 characters long";
    } elseif(!preg_match('/[A-Z]/', $password)) {
        return "password must contain uppercase letter";
    } elseif(!preg_match('/[a-z]/', $password)) {
        return "password must contain lowercase letter";
    } elseif(!preg_match('/[0-9]/', $password)) {
        return "password must contain number";
    }
    return null;}

function validateregister($name, $email, $password) {
    $fileds = [
        'name' => $name,
        'email' => $email,
        'password' => $password
    ];
    foreach ($fileds as $key => $value) {
        if($error= validaterequired($value, $key)) {
            return $error;
        }    
    } 
        if($error = validateemail($email)) {
        return $error;}
        
        if($error = validatepassword($password)) {
            return $error;
        }
}

    function validatelogin($email, $password) {
    $fileds = [
        'email' => $email,
        'password' => $password
    ];
    foreach ($fileds as $key => $value) {
        if($error= validaterequired($value, $key)) {
            return $error;
        }    
    } 
        if($error = validateemail($email)) {
        return $error;}
        
}

function ordervalidate($name,$address,$email,$phone,$notes){
    $fileds=[
        'name'=>$name,
        'email'=>$email,
        'address'=>$address,
        'phone'=>$phone,
        'notes'=>$notes
    ];
    foreach($fileds as $key=>$value){
        if($error=validaterequired($value,$key)){
            return $error;
        }
    }
    if($error=validateemail($email)){
        return $error;
    }
}

//validate item
function validateitem($name,$price,$details){
    $fileds=[
        'name'=>$name,
        'price'=>$price,
        'details'=>$details
    ];
 foreach($fileds as $key=>$value){
        if($error=validaterequired($value,$key)){
            return $error;
        }

        if($key==='price' && (!is_numeric($value) || $value <= 0)){
            return "price must be a positive number";
        }
        
    
}}