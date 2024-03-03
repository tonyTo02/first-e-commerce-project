<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Đơn hàng của bạn</h1>
    <?php
    $cartTotal = 0;
    ?>

    <a href="?action=edit" class="btn btn-primary" style="margin:10px">
        + Chỉnh sửa thông tin cá nhân
    </a>
    <table class="table">
        <thead>
            <tr class="table-secondary">
                <th scope="col">Mã đơn hàng</th>
                <th scope="col">Tên người nhận</th>
                <th scope="col">Địa chỉ giao hàng</th>
                <th scope="col">Số điện thoại người nhận</th>
                <th scope="col">Thời gian đặt hàng</th>
                <th scope="col">Note</th>
                <th scope="col">Trạng thái đơn hàng</th>
                <th scope="col">Tổng tiền</th>
                <th scope="col">Phương thức thanh toán</th>
                <th scope="col">Chi tiết đơn hàng</th>
                <th scope="col">Hủy đơn hàng</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($arrOrder as $each) { ?>
                <tr class="table-light">
                    <td>
                        <?php echo $each->getId() ?>
                    </td>
                    <td>
                        <?php echo $customer->getName() ?>
                    </td>
                    <td>
                        <?php echo $customer->getAddress() ?>
                    </td>
                    <td>
                        <?php echo $each->getPhoneNumber() ?>
                    </td>
                    <td>
                        <?php echo $each->getOrderTime() ?>
                    </td>
                    <td>
                        <?php echo $each->getNote() ?>
                    </td>
                    <td>
                        <?php echo $each->getStatus() ?>
                    </td>
                    <td>
                        <?php echo number_format($each->getTotal()) ?>
                    </td>
                    <td>
                        <?php echo $each->getPaymentMethod() ?>
                    </td>
                    <td>
                        <a href="?action=detailOrder&id=<?php echo $each->getId() ?>">
                            Xem chi tiết
                        </a>
                    </td>
                    <td>
                        <a href="?action=destroyOrder&id=<?php echo $each->getId() ?>">
                            Hủy
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>


    </table>
</body>

</html>