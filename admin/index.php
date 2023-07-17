<?php
require_once "../dao/pdo.php";
require_once "../dao/users.php";
require_once "../global.php";

// hearder
require_once "header.php";

if (isset($_GET['act'])) {
    $act = $_GET['act'];

    switch ($act) {
        // product page
        case 'products':
            require_once "products/products_list.php";
            break;

        // users page
        case 'users':
            require_once "users/list.php";
            break;

        //add user page
        case "add-user":
            require_once "users/add_user.php";
            break;

        // edit user page
        case "edit_user":
            require_once "users/edit_user.php";
            break;
            

        // edit product
        case "edit_product":
            require_once "products/edit_product.php";
            break;
        // add product
        case "add-product":
            require_once "products/add_product.php";
            break;
            
        default:
            require_once "home.php";
            break;
    }

} else {
    require_once "home.php";
}

// footer
require_once "footer.php";
?>