<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Giỏ hàng</h1>
    <?php
    $cartTotal = 0;
    ?>
    <table class="table">
        <thead>
            <tr class="table-secondary">
                <th scope="col">#</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col">Giá tiền</th>
                <th scope="col">Số lượng</th>
                <th scope="col"></th>
                <th scope="col">Tổng cộng</th>
            </tr>
        </thead>
        <tbody>
            <?php $index = 1;
            foreach ($arrObject as $each) { ?>
                <tr class="table-light">
                    <td>
                        <?php echo $index ?>
                    </td>
                    <td>
                        <img height="150px" src="./admin/view/photos/<?php echo $each->getImage() ?>" alt="...">
                    </td>
                    <td>
                        <?php echo $each->getName() . " " . $each->getDescription() ?>
                    </td>
                    <td>
                        <?php echo number_format($each->getPrice()) ?>
                    </td>
                    <td>
                        <?php echo $quantity ?>
                    </td>
                    <td>
                        <a href="?action=destroy&id=<?php echo $each->getId() ?>"><button
                                class="btn btn-warning">Remove</button></a>
                    </td>
                    <td>
                        <?php
                        $total = ($quantity * $each->getPrice());
                        echo number_format($total);
                        $cartTotal += $total;
                        ?>
                    </td>
                </tr>
                <?php $index++;
            } ?>
            <tr>
                <td colspan="7" align="right" style="font-size: 30px">
                    <?php echo number_format($cartTotal) . " VNĐ" ?>
                </td>
            </tr>
        </tbody>


    </table>
</body>

</html>