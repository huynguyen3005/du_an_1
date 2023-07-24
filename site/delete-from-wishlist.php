<?php
session_start();
$product_id = $_GET['product_id'];

$index = array_search($product_id, $_SESSION['wishlist']);
echo $index;
if ($index !== false) {
    unset($_SESSION['wishlist'][$index]);
}
header("Location: index.php?act=wishlist");
die();
?>