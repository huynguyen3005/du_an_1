<?php 
require_once "pdo.php";

function add_variant($product_id,$size_id, $color_id){
    $sql = "INSERT INTO product_variants (product_id, size_id, color_id) VALUES ('$product_id', '$size_id', '$color_id');";
    return pdo_execute($sql);
}

?>