<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <div class="container">
        <form action="?action=order" method="post">
            <div class="row">
                <div class="col-3">
                    Tên người nhận
                </div>
                <div class="col">
                    <input type="text" name="name" value="<?php echo $customer->getName() ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    Số điện thoại người nhận
                </div>
                <div class="col">
                    <input type="text" name="phoneNumber" value="<?php echo $customer->getPhoneNumber() ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    Địa chỉ người nhận
                </div>
                <div class="col">
                    <input type="text" name="address" value="<?php echo $customer->getAddress() ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    Ghi chú cho người giao hàng (nếu có)
                </div>
                <div class="col">
                    <textarea name="note"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    Chọn phương thức thanh toán
                </div>
                <div class="col">
                    <input type="radio" name="payment_method" value="1" checked>Thanh toán khi nhận hàng
                    <br>
                    <input type="radio" name="payment_method" value="2">Thanh toán bằng VNPay
                </div>
            </div>
            <input type="hidden" name="total" value="<?php echo $cartTotal ?>">
            <input type="hidden" name="customer_id" value="<?php echo $_SESSION['id'] ?>">
            <input type="hidden" name="status" value="0">
            <button class="btn btn-primary">Đặt hàng</button>
        </form>
    </div>

</body>

</html>