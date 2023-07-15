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
            echo "this page is product page";
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