<?php
require_once "../../dao/categories.php";
$category_id = $_GET['category_id'];
category_delete($category_id);
setcookie("delete-category" , "xóa sản phẩm thành công", time() + 30 , "/");
header("location: ../index.php?act=categories");
die();

?>