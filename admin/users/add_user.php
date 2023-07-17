<?php
require_once "../dao/users.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email = $_POST['email'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $check_password = $_POST['check_password'];
    $sex = $_POST['sex'];
    $file = $_FILES['photo'];
    $status = $_POST['status'];
    $type = $_POST['type'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];

    // check is file a image
    $img = ['jpg', 'png', 'jpeg', 'gif', 'webp'];
    $file_ext = pathinfo($file['name'], PATHINFO_EXTENSION);

    $check_img = in_array($file_ext, $img);

    // validate the form
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message['email'] = 'Mời bạn nhập đúng định dạng email';
    }
    if (strlen($name) == 0) {
        $message['name'] = 'Mời bạn nhập họ tên';
    }
    if (strlen($password) == 0) {
        $message['password'] = 'Mời bạn nhập mật khẩu';
    }

    if (strlen($check_password) == 0) {
        $message['check_password'] = 'Mời bạn nhập lại mật khẩu';
    }

    if ($password !== $check_password) {
        $message['check_password'] = 'Mật khẩu xác nhận không đúng';
    }

    if (strlen($sex) == 0) {
        $message['sex'] = 'Mời bạn chọn giới tính';
    }

    if ($file['size'] == 0) {
        $message['photo'] = 'Mời bạn chọn file ảnh';
    }

    if ($file['size'] > 0) {
        if (!$check_img) {
            $message['check_photo'] = 'File không phải là ảnh';
        }
    }

    if (strlen($address) == 0){
        $message['address'] = "Mời bạn nhập địa chỉ";
    }

    if(!preg_match("/^0\d{9}$/", $phone_number)){
        $message['phone_number'] = 'số điện thoại không hợp lệ';
    }

    if(strlen($phone_number) == 0) {
        $message['phone_number'] = 'mời bạn nhập số điện thoại';
    }


    // nếu không có lỗi message thì form được submit

    if (!isset($message)) {
        $hash_password = password_hash($password, PASSWORD_DEFAULT);
        move_uploaded_file($file['tmp_name'], "../content/img/users/" . $file['name']);
        $created_on = date("Y-m-d");
        add_user($email,$hash_password,$type,$name,$address,$phone_number,$file['name'],$status,$created_on,$sex);
        // $insertedId = pdo_insertedId();
        setcookie("add-user", "thêm user thành công", time() + 30);
        header("location: index.php?act=users");
        die();
    }

}



?>

<!-- form -->
<section class="form">
    <form class="row g-3" method="post" enctype="multipart/form-data">
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputEmail4" name="email">
            <div class="<?= isset($message['email']) ? 'alert' : ''?> alert-danger">
                <?= $message['email'] ?? '' ?>
            </div>
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Họ tên</label>
            <input type="text" class="form-control" id="inputPassword4" name="name">
            <div class="<?= isset($message['name']) ? 'alert' : ''?> alert-danger">
                <?= $message['name'] ?? '' ?>
            </div>
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Mật khẩu</label>
            <input type="password" class="form-control" id="inputEmail4" name="password">
            <div class="<?= isset($message['password']) ? 'alert' : ''?> alert-danger">
                <?= $message['password'] ?? '' ?>
            </div>
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Xác nhận mật khẩu</label>
            <input type="password" class="form-control" id="inputPassword4" name="check_password">
            <div class="<?= isset($message['check_password']) ? 'alert' : ''?> alert-danger">
                <?= $message['check_password'] ?? '' ?>
            </div>
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Giới tính</label>
            <select class="form-select" name="sex">
                <option value="nam">nam</option>
                <option value="nữ" selected>nữ</option>
            </select>
            <div class="<?= isset($message['sex']) ? 'alert' : ''?> alert-danger">
                <?= $message['sex'] ?? '' ?>
            </div>
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Hình ảnh</label>
            <input type="file" class="form-control" id="inputPassword4" name="photo" accept="image/*">
            <div class="<?= isset($message['photo']) ? 'alert' : ''?> alert-danger">
                <?= $message['photo'] ?? '' ?>
            </div>
            <div class="<?= isset($message['check_photo']) ? 'alert' : ''?> alert-danger">
                <?= $message['check_photo'] ?? '' ?>
            </div>
        </div>
        <div class="col-md-6">
            <label for="inputZip" class="form-label w-100">Kích hoạt?</label>
            <div class="border border-1 rounded-3" style="height: 38px;">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" value="0">
                    <label class="form-check-label" for="inlineRadio1">chưa kích hoạt</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" value="1" checked>
                    <label class="form-check-label" for="inlineRadio2">kích hoạt</label>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <label for="inputZip" class="form-label w-100">Kiểu khách hàng</label>
            <div class="border border-1 rounded-3" style="height: 38px;">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="type" value="0" checked>
                    <label class="form-check-label" for="inlineRadio1">khách hàng</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="type" value="1">
                    <label class="form-check-label" for="inlineRadio2">admin</label>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Số điện thoại</label>
            <input type="number" class="form-control" id="inputEmail4" name="phone_number">
            <div class="<?= isset($message['phone_number']) ? 'alert' : ''?> alert-danger">
                <?= $message['phone_number'] ?? '' ?>
            </div>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Địa chỉ</label>
            <textarea name="address" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            <div class="<?= isset($message['address']) ? 'alert' : ''?> alert-danger">
                <?= $message['address'] ?? '' ?>
            </div>
        </div>
        <!-- button -->
        <div class="button">
            <button type="submit" class="btn btn-outline-primary">Thêm mới</button>
            <button type="reset" class="btn btn-outline-primary">Nhập lại</button>
            <a href="index.php?act=users"><button type="button" class="btn btn-outline-primary">Danh sách</button></a>
        </div>
    </form>
</section>