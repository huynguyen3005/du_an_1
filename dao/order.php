<?php
require_once 'pdo.php';

function add_order($date, $user_id, $total_price, $address, $note, $shipping ){
    $sql = "INSERT INTO orders (order_date, order_status, user_id, total_price, address, note, shipping) VALUES
    ('$date',b'0','$user_id','$total_price','$address','$note', '$shipping');";
    return pdo_execute($sql);
}

function select_order_by_user($user_id){
    $sql = "SELECT * FROM orders WHERE user_id = '$user_id' ;";
    return pdo_query($sql);
}
?>

