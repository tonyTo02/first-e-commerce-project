<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thống kê</title>
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
</head>

<body>
    <h1>Đơn hàng của khách</h1>
    <?php
    $cartTotal = 0;
    $totalOrders = 0;
    $totalRevenue = 0;
    ?>
    <table class="table">
        <thead>
            <tr>
                <td colspan="12" align="center"><input id="searchInput" class="search" type="text"
                        placeholder="Search Something...">
                </td>
            </tr>
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
                <th scope="col">Cập nhật lại trạng thái đơn hàng</th>
            </tr>
        </thead>
        <tbody>
            <?php $index = 0;
            foreach ($arrOrder as $each) {
                $totalOrders++; // Tăng đếm số đơn hàng
                $totalRevenue += $each->getTotal();
                ?>
                <tr class="table-light">
                    <td>
                        <?php echo $each->getId() ?>
                    </td>
                    <td>
                        <?php echo $customer[$index]->getName() ?>
                    </td>
                    <td>
                        <?php echo $customer[$index]->getAddress() ?>
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
                        <?php echo $each->getStringStatus() ?>
                    </td>
                    <td>
                        <?php echo number_format($each->getTotal()) ?>
                    </td>
                    <td>
                        <?php echo $each->getPaymentMethod() ?>
                    </td>
                    <td>
                        <a class="btn btn-primary"
                            href="?controller=bill&action=detailOrder&id=<?php echo $each->getId() ?>">
                            Xem chi tiết
                        </a>
                    </td>
                    <td>
                        <a class="btn btn-warning"
                            href="?controller=bill&action=destroyOrder&id=<?php echo $each->getId() ?>">
                            Hủy
                        </a>
                    </td>
                    <td>
                        <a href="?controller=bill&action=updateOrder&id=<?php echo $each->getId() ?>"
                            class="btn btn-primary">
                            Cập nhật trạng thái đơn hàng
                        </a>
                    </td>
                </tr>
                <?php $index++;
            } ?>
        </tbody>
    </table>
    <div class="container">
        <div class="row">
            <!-- Biểu đồ thống kê số đơn hàng -->
            <div class="col-md-6">
                <div id="orderChart"></div>
            </div>

            <!-- Biểu đồ thống kê tổng doanh thu -->
            <div class="col-md-6">
                <div id="revenueChart"></div>
            </div>
        </div>
    </div>

    <script>
        // Dữ liệu cho biểu đồ số đơn hàng
        var orderData = [{
            type: 'bar',
            x: ['Tổng số đơn hàng'],
            y: [<?php echo $totalOrders ?>],
        }];

        // Cấu hình biểu đồ số đơn hàng
        var orderLayout = {
            title: 'Thống kê số đơn hàng',
        };

        // Vẽ biểu đồ số đơn hàng
        Plotly.newPlot('orderChart', orderData, orderLayout);

        var revenueData = [{
            type: 'bar',
            x: ['Tổng số tiền thu được'],
            y: [<?php echo $totalRevenue ?>],
        }];

        // Cấu hình biểu đồ tổng doanh thu
        var revenueLayout = {
            title: 'Thống kê tổng doanh thu',
        };
        // Vẽ biểu đồ tổng doanh thu
        Plotly.newPlot('revenueChart', revenueData, revenueLayout);

    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Get the input element and add an event listener
            var searchInput = document.getElementById("searchInput");
            searchInput.addEventListener("input", function () {
                // Get the value entered in the search input
                var searchValue = searchInput.value.toLowerCase();

                // Get all rows in the table body
                var rows = document.querySelectorAll(".table-light");

                // Loop through each row and hide/show based on the search value
                rows.forEach(function (row) {
                    var shouldShow = false;
                    // Loop through each cell in the row
                    row.querySelectorAll("td").forEach(function (cell) {
                        var cellText = cell.textContent.toLowerCase();
                        // Check if the cell text contains the search value
                        if (cellText.includes(searchValue)) {
                            shouldShow = true;
                        }
                    });

                    // Show/hide the row based on the search result
                    if (shouldShow) {
                        row.style.display = "";
                    } else {
                        row.style.display = "none";
                    }
                });
            });
        });
    </script>

</body>

</html>