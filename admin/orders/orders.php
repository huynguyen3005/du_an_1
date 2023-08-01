<?php
require_once "../dao/order.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $status = $_POST['status'];
    $order_id = $_POST['order_id']; 
    for($i=0;$i<count($order_id);$i++) {
        update_status_by_order_id($order_id[$i], $status[$i]);
        setcookie("update-orders", "Sửa thành công", time() + 30);
    }

}

$orders = order_select_all();
?>

<div class="tab-pane fade  show active" id="nav-order" role="tabpanel" aria-labelledby="nav-order-tab">
    <div class="profile__ticket table-responsive">
        <form action="" method="post">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Order Id</th>
                        <th scope="col">Total Price</th>
                        <th scope="col">Status</th>
                        <th scope="col">View</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- order list -->
                    <?php if (isset($orders))
                        foreach ($orders as $order) : ?>
                        <tr>
                            <th scope="row"> #
                                <input type="hidden" name="order_id[]" value="<?= $order['order_id']?>">
                                <?= $order['order_id'] ?>
                            </th>
                            <td data-info="title">
                                <?= number_format($order['total_price']) ?>
                            </td>
                            <td data-info="status">
                                <select name="status[]" id="">
                                    <option value="<?= $order['order_status'] ?>" selected><?= $order['order_status'] == 1 ?  "Complete" : "Pending" ?></option>
                                    <option value="<?= $order['order_status'] == 1 ? '0' : '1' ?>"><?= $order['order_status'] == 1 ?  'Pending' : "Complete" ?></option>
                                </select>
                            </td>
                            <td><a href="index.php?act=order-detail&order_id=<?= $order['order_id'] ?>" class="tp-logout-btn">Invoice</a></td>
                        </tr>
                    <?php endforeach ?>
                    <!-- end -->
                </tbody>
            </table>
            <div class="mt-1">
                <button type="submit" class="btn btn-outline-primary">Update danh sách</button>
            </div>
        </form>
    </div>
</div>