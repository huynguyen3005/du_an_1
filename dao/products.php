<?php
require_once "pdo.php";
function select_all_products(){
    $sql = "SELECT * FROM products ;";
    return pdo_query($sql);
}

function select_products_by_page($start,$limit){
    $sql = "SELECT * FROM products LIMIT $start, $limit ;";
    return pdo_query($sql);
}
?>