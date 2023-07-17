<?php
require_once "../../dao/users.php";
$user_id = $_GET['user_id'];
delete_user($user_id);
setcookie('delete-product', "đã xóa khách hàng xong" , time() + 30);
header("Location: ../index.php?act=users");
die();

?>