<?php
require_once "../dao/products.php";

// hiện session
if (isset($_SESSION['add-product'])) {
    echo '<div class="alert alert-success" role="alert">
            ' . $_COOKIE['add-product'] . '
          </div>
    ';
}

if (isset($_SESSION['delete-product'])) {
    echo '<div class="alert alert-success" role="alert">
            ' . $_COOKIE['delete-product'] . '
          </div>
    ';
}



$page_number = isset($_GET['page']) ? $_GET['page'] : 1;

if ($page_number <= 1) {
    $page_number = 1;
}
if ($page_number >= $page_number)

    $limit = 10;
$total_products = count_all_products();
$total_page = ceil($total_products['total'] / $limit);

if ($page_number <= 1) {
    $page_number = 1;
}
if ($page_number >= $total_page) {
    $page_number = $total_page;
}


$start = ($page_number - 1) * $limit;

$products = select_products_by_page($start, $limit);

?>


<table class="table">
    <thead>
        <tr>
            <th scope="col"><button>All</button></th>
            <th scope="col">MÃ SP</th>
            <th scope="col">TÊN SP</th>
            <th scope="col">LOẠI</th>
            <th scope="col">GIÁ</th>
            <th scope="col">SỐ LƯỢNG</th>
            <th scope="col">NGÀY NHẬP</th>
            <th scope="col">ĐÃ BÁN</th>
            <th scope="col">TÙY CHỌN</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($products as $product): ?>
            <tr>
                <th scope="col"><input class="form-check-input" type="checkbox" value="<?= $product['product_id'] ?>"
                        name="check_hh"></th>
                <th scope="col">
                    <?= $product['product_id'] ?>
                </th>
                <th scope="col">
                    <?= $product['name'] ?>
                </th>
                <th scope="col">
                    <?= $product['category_id'] ?>
                </th>
                <th scope="col">
                    <?= number_format($product['price'], 0) ?>
                </th>
                <th scope="col">
                    <?= $product['quantity'] ?>
                </th>
                <th scope="col">
                    <?= $product['date_added'] ?>
                </th>
                <th scope="col">
                    <?= $product['sold'] ?>
                </th>
                <th scope="col">
                    <a href="index.php?act=edit_product&product_id=<?= $product['product_id'] ?>"><button
                            class="button">Sửa</button></a>
                    <a onclick="return confirm('Bạn có muốn xóa hàng này không')"
                        href="products/delete_product.php?product_id=<?= $product['product_id'] ?>"><button
                            class="button">Xóa</button></a>
                </th>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<!-- page number list -->
<section class="page-number my-5">
    <div class="d-flex justify-content-center">
        <a class="mx-2" href="index.php?act=products&page=1">|&lt;</a>
        <a class="mx-2" href="index.php?act=products&page=<?= $page_number - 1 ?>">&lt;&lt;</a>
        <?php
        for ($i = 0; $i < $total_page; $i++) {
            echo '<a id="page' . ($i + 1) . '" class="mx-2" href="index.php?act=products&page=' . ($i + 1) . '"><button type="button" class="btn btn-primary">' . ($i + 1) . '</button></a>';
        }
        ?>
        <a class="mx-2" href="index.php?act=products&page=<?= $page_number + 1 ?>">&gt;&gt;</a>
        <a class="mx-2" href="index.php?act=products&page=<?= $total_page ?>">&gt;|</a>
    </div>

</section>

<section class="mt-1">
    <div class="button">
        <button type="submit" id="check-all" class="btn btn-outline-primary">Chọn tất cả</button>
        <button type="button" id="uncheck" class="btn btn-outline-primary">Bỏ chọn tất cả</button>
        <button type="button" class="btn btn-outline-primary">Xóa các mục chọn</button>
        <a href="index.php?act=add-product"><button type="button" class="btn btn-outline-primary">Nhập thêm</button></a>
    </div>
</section>

<script>
    document.getElementById('page<?= $page_number ?>').style.border = "2px solid green";
</script>