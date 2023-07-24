<?php
require_once '../dao/categories.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $category_id = $_POST['category_id'];
    $name = $_POST['name'];
    if (strlen($name) == 0) {
        $messiage['name'] = "bạn hãy nhập tên loại";
    } else {
        insert_category($name);
        setcookie("add-category", "thêm loại sản phẩm thành công", time() + 30);
        header("location: index.php?act=categories");
        die();
    }
}
?>
<!-- form -->
<form action="" method="post">
    <div class="form-group">
        <label for="ma-loai">Mã loại :</label>
        <input type="text" class="form-control" id="ma-loai" name="category_id" placeholder="auto number" readonly>
    </div>
    <div class="form-group">
        <label for="ten-loai">Tên loại:</label>
        <input type="text" class="form-control" id="ten-loai" name="name">
    </div>
    <div class="mt-1">
        <button type="submit" class="btn btn-outline-primary">Thêm mới</button>
        <button type="reset" class="btn btn-outline-primary">Nhập lại</button>
        <a href="index.php?act=categories"><button type="button" class="btn btn-outline-primary">Danh sách</button></a>
    </div>
</form>