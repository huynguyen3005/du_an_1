<?php
require_once "../global.php";
if (isset($_SESSION['user'])) {
    // Nếu user đã đăng nhập, hủy giá trị của biến user trong session
    unset($_SESSION['user']);
    header("Location: index.php?act=login");
    die();
}
?>