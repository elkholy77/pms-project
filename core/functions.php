<?php
// session_start();
function setmessage($type,$message){
    $_SESSION['message'] = [
        'type' => $type,
        'message' => $message
    ];
}

function showmessage(){
    if(isset($_SESSION['message'])){
        $type=$_SESSION['message']['type'];
        $message=$_SESSION['message']['message'];
        echo "<div class='alert alert-$type'>$message</div>";
        unset($_SESSION['message']);
    }
}

$userjsonfile = __DIR__ . '/../data/users.json';

if(!file_exists($userjsonfile)) {
    
    file_put_contents($userjsonfile, json_encode([]));
}
function registeruser($username,$email,$password){
    $userjson=$GLOBALS['userjsonfile'];
    $userdatajson=file_get_contents($userjson);
    $user=json_decode($userdatajson,true);
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $newuser=[
        "name" => $username,
        "email" => $email,
        "password" => $hashedPassword
    ];
    $user[]=$newuser;
    file_put_contents($userjson, json_encode($user, JSON_PRETTY_PRINT));
    return true;
}

function loginuser($email,$password){
    $userjson=$GLOBALS['userjsonfile'];
    $userdatajson=file_get_contents($userjson);
    $user=json_decode($userdatajson,true);
    foreach($user as $u) {
        if($u['email'] == $email && password_verify($password, $u['password'])) {
            $_SESSION['user'] = $u;
            return true;
        }
    }return false;
}

function cartcount($cart)
{
    $count = 0;
    if (isset($cart)) {
        foreach ($cart as $item) {
            $count += $item['quantity'];
        }
        return $count;
    }
    else {
        return null;
    }
}


