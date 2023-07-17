<?php
require_once "pdo.php";

function select_all_users(){
    $sql = "SELECT * FROM users ;";
    return pdo_query($sql);
}

function count_users(){
    $sql = "SELECT count(*) as total FROM users;";
    return pdo_query_one($sql);
}

function add_user($email,$password,$type,$name,$address,$phone_number,$photo,$status,$created_on,$sex){
    $sql = "INSERT INTO users (email,password,type,name,address,phone_number,photo,status,created_on,sex) 
    VALUES ('$email','$password',b'$type','$name','$address','$phone_number','$photo',b'$status','$created_on','$sex') ;";
    return pdo_execute($sql);
}


function delete_user($user_id){
    $sql = "DELETE FROM users WHERE user_id = $user_id;";
    pdo_execute($sql);
}

function select_one_user($user_id){
    $sql = "SELECT * FROM users WHERE user_id = $user_id ;";
    return pdo_query_one($sql);
}

function update_user($user_id,$email,$type,$name,$address,$phone_number,$photo,$status,$sex){
    if(strlen($photo) == 0){
        $sql = "update users set email='$email', type=b'$type', name='$name', address='$address', phone_number='$phone_number', status=b'$status', sex='$sex' where user_id='$user_id' ;";
    }else{
        $sql = "update users set email='$email', type=b'$type', name='$name', address='$address', phone_number='$phone_number', photo='$photo', status=b'$status', sex='$sex' where user_id='$user_id' ;";
    }
    pdo_execute($sql);
}
function select_user_by_page($start,$limit){
    $sql = "SELECT * FROM users LIMIT $start, $limit;";
    return pdo_query($sql);
}
?>