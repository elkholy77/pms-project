<?php
// session_start();
//message functions
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
//user functions
$userjsonfile = __DIR__ . '/../data/users.json';

if(!file_exists($userjsonfile)) {
    
    file_put_contents($userjsonfile, json_encode([]));
}

//register user
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
//login user
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
//admin login
function adminlogin($email,$password){
    $adminEmail = "admin@gmail.com";
    $adminPassword = "admin123";
    if($email == $adminEmail && $password == $adminPassword){
        return true;}

}
//cart count
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
//order functions
$orderjsonfile = __DIR__ . '/../data/order.json';

if(!file_exists($orderjsonfile)) {
    
    file_put_contents($orderjsonfile, json_encode([]));}

function dataorder($data){

    $orderjson=$GLOBALS['orderjsonfile'];
    $orderdatajson=file_get_contents($orderjson);
    $order=json_decode($orderdatajson,true);
    $newid=empty($order) ? 1 : max(array_column($order, 'id')) + 1;
    $neworder=[
        'id'=>$newid,
        'name'=>$data['name'],
        'email'=>$data['email'],
        'address'=>$data['address'],
        'phone'=>$data['Phone'],
        'notes'=>$data['Notes'],
        'cart'=>$data['cart'] ];
    $order[]=$neworder;
    file_put_contents($orderjson, json_encode($order, JSON_PRETTY_PRINT));
    return true;
}

function getorders(){
    $orderjson=$GLOBALS['orderjsonfile'];
    $orderdatajson=file_get_contents($orderjson);
    $orders=json_decode($orderdatajson,true);
    return $orders;
}



//items
$itemsjsonfile = __DIR__ . '/../data/items.json';

if(!file_exists($itemsjsonfile)) {
    
    file_put_contents($itemsjsonfile, json_encode([]));}

function additem($name,$price,$details,$file_path){
    $itemsjson=$GLOBALS['itemsjsonfile'];
    $itemsdatajson=file_get_contents($itemsjson);
    $item=json_decode($itemsdatajson,true);
    $newid=empty($item) ? 1 : max(array_column($item, 'id')) + 1;
    $newitem=[
        'id'=>$newid,
        'name'=>$name,
        'price'=>$price,
        'details'=>$details,
        'image'=>$file_path
    ];
    $item[]=$newitem;
    file_put_contents($itemsjson, json_encode($item, JSON_PRETTY_PRINT));
    return true;

}

function getitems(){
        $itemsjson=$GLOBALS['itemsjsonfile'];
    $itemsdatajson=file_get_contents($itemsjson);
    $item=json_decode($itemsdatajson,true);
    return $item;

}