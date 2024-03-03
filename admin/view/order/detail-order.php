<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Chi tiết đơn hàng</h1>
    <table class="table">
        <thead>
            <tr class="table-secondary">
                <th scope="col">Mã đơn hàng</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Mô tả</th>
                <th scope="col">Giá tiền</th>
                <th scope="col">Nhà sản xuất</th>
                <th scope="col">Số lượng</th>
            </tr>
        </thead>
        <tbody>
            <?php $index = 0;
            foreach ($arrOrderDetail as $each) { ?>
                <tr class="table-light">
                    <td>
                        <?php echo $each->getOrderId() ?>
                    </td>
                    <td>
                        <img height="200px" src="./view/photos/<?php echo $arrProductDetail[$index]->getImage() ?>"
                            alt="Hình ảnh điện thoại">
                    </td>
                    <td>
                        <?php echo $arrProductDetail[$index]->getName() ?>
                    </td>
                    <td>
                        <?php echo $arrProductDetail[$index]->getDescription() ?>
                    </td>
                    <td>
                        <?php echo number_format($arrProductDetail[$index]->getPrice()) ?>
                    </td>
                    <td>
                        <?php echo $arrProductDetail[$index]->getNameManufacturer() ?>
                    </td>
                    <td>
                        <?php echo $each->getQuantity() ?>
                    </td>
                </tr>
                <?php $index++;
            } ?>
            <tr>
                <td colspan="7" align="right">
                    <a href="?controller=bill&action=index" class="btn btn-primary">Quay về</a>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>