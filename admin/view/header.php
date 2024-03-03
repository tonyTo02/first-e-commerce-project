<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trang Quản Trị</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="?controller=menu">
                <img height="100px"
                    src="https://cdn4.iconfinder.com/data/icons/science-and-technology-2-20/65/66-1024.png" alt="logo">
            </a>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="?controller=customer" style="color: #FFF">Quản lý Người Dùng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?controller=product" style="color: #FFF">Quản lý Sản Phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?controller=manufacturer" style="color: #FFF">Quản lý Nhà Cung Cấp</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?controller=bill" style="color: #FFF">Quản lý Đơn Hàng</a>
                    </li>
                    <li class="nav-item">
                        <?php echo "<p class=\"nav-link\" style=\"color: #FFF\">Xin chào " . $_SESSION['name'] . "</p>" ?>

                    </li>
                    <li class="nav-item">
                        <?php echo "<a class=\"nav-link\" href=\"?action=logOut\" style=\"color: #FFF\">Log out</a>"; ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>