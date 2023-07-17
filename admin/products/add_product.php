<?php
require_once "../dao/products.php";
require_once "../dao/categories.php";
require_once "../dao/images.php";

$categories = categories_select_all();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $category = $_POST['category'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $date_added = date('Y-m-d');
    $quantity = $_POST['quantity'];

    $images = $_FILES['images'];


    // check file ảnh
    if (strlen($images['name'][0]) > 0) {
        // print_r($images);
        foreach ($images['name'] as $image) {
            // check is file a image
            $img = ['jpg', 'png', 'jpeg', 'gif', 'webp'];
            $file_ext = pathinfo($image, PATHINFO_EXTENSION);
            $check_img = in_array($file_ext, $img);
            if (!$check_img) {
                $message['image'] = "file không phải ảnh";
            }
        }

        // check size file nếu file là ảnh
        if (!isset($message['image'])) {
            foreach ($images['size'] as $img_size) {
                if ($img_size > 2000000) {
                    $message['image'] = "file ảnh quá lớn";
                }
            }
        }

    } else {
        $message['image'] = "mời bạn thêm file ảnh cho sản phẩm";
    }



    if (strlen($category) == 0) {
        $message['category'] = 'mời bạn chọn loại hàng';
    }

    if (strlen($name) == 0) {
        $message['name'] = 'mời bạn nhập tên sản phẩm';
    }

    if (strlen($description) == 0) {
        $message['description'] = "nhập mô tả cho sản phẩm";
    }

    if ($price <= 0) {
        $message['price'] = "nhập giá cho sản phẩm";
    }

    if ($quantity <= 0) {
        $message['quantity'] = "nhập số lượng cho sản phẩm";
    }

    if (!isset($message)) {
        echo $category, $name, $description, $price, $date_added, $quantity;
        $product_id = add_product($category, $name, $description, $price, $date_added, $quantity);
        echo count($images['name']);
        for ($i=0; $i < count($images['name']); $i++) {
            echo $i;
            move_uploaded_file($images['tmp_name'][$i], "../content/img/products/" . $images['name'][$i]);
            add_image($images['name'][$i], $product_id);
        }

        setcookie("add-product", "thêm sản phẩm thành công", time() + 30);
        header("location: index.php?act=products");
        die();
    }
}

?>

<section class="form">
    <form class="row g-3" method="post" action="" enctype="multipart/form-data">
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Tên hàng hóa</label>
            <input type="text" class="form-control" id="inputPassword4" name="name">
            <div class="alert-danger">
                <?= $message['name'] ?? '' ?>
            </div>
        </div>
        <div class="col-md-6">
            <label for="inputAddress" class="form-label">Đơn giá</label>
            <input type="number" class="form-control" id="inputAddress" name="price" placeholder="">
            <div class="alert-danger">
                <?= $message['price'] ?? '' ?>
            </div>
        </div>
        <div class="col-md-6">
            <label for="inputAddress" class="form-label">Số lượng</label>
            <input type="number" class="form-control" id="inputAddress" name="quantity" placeholder="">
            <div class="alert-danger">
                <?= $message['quantity'] ?? '' ?>
            </div>
        </div>
        <div class="col-md-6">
            <label for="inputState" class="form-label">Loại hàng</label>
            <select id="inputState" class="form-select" name="category">
                <option value="" selected>Choose...</option>
                <?php foreach ($categories as $category): ?>
                    <option value="<?= $category['category_id'] ?>"><?= $category['name'] ?></option>
                <?php endforeach ?>
            </select>
            <div class="alert-danger">
                <?= $message['category'] ?? '' ?>
            </div>
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">Hình ảnh</label>
            <div id="img-input">
                <input id="image-input" type="file" class="form-control" id="inputAnh" name="images[]" accept="image/*"
                    multiple>
            </div>
            <div class="alert-danger">
                <?= $message['size'] ?? '' ?>
            </div>
            <div class="alert-danger">
                <?= $message['image'] ?? '' ?>
            </div>
        </div>
        <!-- preview image -->
        <div id="preview-container">
        </div>

        <!-- thông báo lỗi ảnh -->
        <div id="message-container"></div>

        <div class="col-12">
            <label for="inputZip" class="form-label">Mô tả</label>
            <textarea name="description" style="min-height: 200px;" class="form-control" placeholder="mô tả"
                id="description"></textarea>
            <div class="alert-danger">
                <?= $message['description'] ?? '' ?>
            </div>
        </div>


        <!-- button -->
        <div class="button">
            <a href="add_hang_hoa.php"><button type="submit" class="btn btn-outline-primary">Thêm mới</button></a>
            <button type="reset" class="btn btn-outline-primary">Nhập lại</button>
            <a href="hang_hoa.php"><button type="button" class="btn btn-outline-primary">Danh sách</button></a>
        </div>
    </form>
</section>

<script>

    document.getElementById("image-input").addEventListener("change", function (event) {
        var input = event.target;
        var previewContainer = document.getElementById("preview-container");

        while (previewContainer.firstChild) {
            previewContainer.removeChild(previewContainer.firstChild);
        }

        for (var i = 0; i < input.files.length; i++) {
            var reader = new FileReader();

            reader.onload = function (e) {
                //tạo thẻ div để chứa img
                var imgBox = document.createElement("div");
                imgBox.className = "img-box";
                previewContainer.appendChild(imgBox);

                if (i == 0) {
                    imgBox.innerHTML = "<p>ảnh bìa</p>";
                }
                var image = document.createElement("img");
                image.src = e.target.result;
                imgBox.appendChild(image);
                if (i == 0) {
                    var anhBia = document.createElement("p");
                    anhBia.innerHTML = "ảnh bìa"
                    imgBox.appendChild(anhBia);
                }
            }
            reader.readAsDataURL(input.files[i]);

        }
    });

</script>