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

function count_all_products(){
    $sql = "SELECT count(*) as total FROM products;";
    return pdo_query_one($sql);
}

function add_product($category_id, $name, $description, $price, $date_added, $quantity){
    $sql = "INSERT INTO products (category_id, name, description, price, date_added, quantity, sold)
    VALUES ('$category_id', '$name', '$description', '$price', '$date_added', '$quantity', '0') ;";
    return pdo_execute($sql);
}

function delele_product_by_id($product_id){
    $sql = "DELETE FROM products WHERE product_id = '$product_id' ;";
    return pdo_execute($sql);
}

?>