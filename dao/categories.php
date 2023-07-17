<?php
require_once "pdo.php";

function categories_select_all(){
    $sql = "SELECT * FROM categories;";
    return pdo_query($sql);
}
?>