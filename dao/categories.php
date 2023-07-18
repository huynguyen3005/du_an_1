<?php
require_once "pdo.php";

function categories_select_all(){
    $sql = "SELECT * FROM categories;";
    return pdo_query($sql);
}

function category_select_by_id($id){
    $sql = "SELECT * FROM categories WHERE category_id = '$id';";
    return pdo_query_one($sql);
}

function categorie_select_by_page($start,$limit){
    $sql = "SELECT * FROM categories LIMIT $start, $limit ;";
    return pdo_query($sql);
}

function categorie_count_all(){
    $sql = "SELECT count(*) as total FROM categories ;";
    return pdo_query_one($sql);
}
?>