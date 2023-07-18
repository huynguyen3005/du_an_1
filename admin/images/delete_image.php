<?php
require_once "../../dao/images.php";

$img_id = $_GET['img_id'];
$product_id = $_GET['product_id'];
delete_img_by_id($img_id);
header("location: ../index.php?act=edit_product&product_id=$product_id");
die();

?>