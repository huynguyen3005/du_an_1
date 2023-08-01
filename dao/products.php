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

function count_all_products_by_category($category_id){
    $sql = "SELECT count(*) as total FROM products where category_id = '$category_id';";
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
function select_product_by_id($product_id){
    $sql = "SELECT * FROM products WHERE product_id = '$product_id';";
    return pdo_query_one($sql);
}

function edit_product_by_id($product_id, $category_id, $name, $quantity, $price, $description){
    $sql = "UPDATE products SET category_id = '$category_id', name = '$name', quantity = '$quantity', price = '$price', description = '$description'
     WHERE product_id = '$product_id' ;"; 
    return pdo_execute($sql);
}

function top_selling(){
    $sql = "SELECT * FROM products order by sold desc limit 4";  
    return pdo_query($sql);
}

// filter, search,

function count_all_products_by_keyword($keyword){
    $sql = "SELECT count(*) as total FROM products inner JOIN categories ON categories.category_id = products.category_id
    WHERE categories.name LIKE '%$keyword%' OR products.name LIKE '%$keyword%';";
    return pdo_query_one($sql);
}

function select_all_products_by_category($category_id,$start,$limit){
    $sql = "SELECT *  FROM products where category_id = '$category_id' limit $start, $limit;";
    return pdo_query($sql);
}

function select_all_products_by_keyword($keyword,$start,$limit){
    $sql = "SELECT * FROM products inner JOIN categories ON categories.category_id = products.category_id
    WHERE categories.name LIKE '%$keyword%' OR products.name LIKE '%$keyword%' limit $start, $limit;";
    return pdo_query($sql);
}

function select_all_products_filter($filter,$start,$limit){
    $sql = "SELECT * FROM products order by $filter limit $start, $limit;";
    return pdo_query($sql);
}


?>