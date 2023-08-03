<?php
require_once "../dao/categories.php";
$category_id = $_GET["category_id"];
$category = category_select_by_id($category_id);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $category_id = $_POST['category_id'];
    $name = $_POST['name'];
    if (strlen($name) == 0) {
        $messiage['name'] = "bạn hãy nhập tên loại";
    } else {
        category_update($category_id,$name);
        setcookie("edit-category", "Sửa loại sản phẩm thành công", time() + 30);
        header("location: index.php?act=categories");
        // die();
    }
}
?>

<!-- form -->
<form action="" method="post">
    <div class="form-group">
        <label for="ma-loai">Mã loại :</label>
        <input type="text" class="form-control" id="ma-loai" name="category_id" placeholder="<?= $category_id?>" readonly value="<?= $category_id?>">
    </div>
    <div class="form-group">
        <label for="ten-loai">Tên loại:</label>
        <input type="text" class="form-control" id="ten-loai" name="name" value="<?= $category['name']?>">
    </div>
    <div class="mt-1">
        <button type="submit" class="btn btn-outline-primary">Sửa</button>
        <button type="reset" class="btn btn-outline-primary">Nhập lại</button>
        <a href="index.php?act=categories"><button type="button" class="btn btn-outline-primary">Danh sách</button></a>
    </div>
</form>