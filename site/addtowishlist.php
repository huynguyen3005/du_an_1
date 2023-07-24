<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!isset($_SESSION['wishlist'])) {
        $_SESSION['wishlist'] = array();
    }

    if(!in_array($_POST['wishlist'], $_SESSION['wishlist'])) {
        array_push($_SESSION['wishlist'], $_POST['wishlist']);
    }

    
    var_dump($_SESSION['wishlist']);
}
?>