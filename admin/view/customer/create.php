<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Thêm border cho form */
        .custom-border {
            border: 2px solid #ced4da;
            border-radius: 8px;
            padding: 20px;
        }
    </style>
    <title>Tạo mới khách hàng</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <form class="custom-border" action="?action=store&controller=customer" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Họ và tên</label>
                        <input type="text" class="form-control" name="name" placeholder="Nhập họ và tên">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Địa chỉ email</label>
                        <input type="email" class="form-control" name="email" placeholder="Nhập địa chỉ email">
                    </div>
                    <div class="mb-3">
                        <label for="dob" class="form-label">Ngày sinh</label>
                        <input type="date" class="form-control" name="dob" placeholder="Nhập địa chỉ email">
                    </div>
                    <div class="mb-3">
                        <label for="phoneNumber" class="form-label">Số điện thoại</label>
                        <input type="text" class="form-control" name="phoneNumber" placeholder="Nhập địa chỉ email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Mật khẩu</label>
                        <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Địa chỉ</label>
                        <input type="text" class="form-control" name="address" placeholder="Nhập địa chỉ">
                    </div>
                    <div class="mb-3 form-radio">
                        <input type="radio" class="form-radio-input" name="gender" value="0">Nữ
                        <input type="radio" class="form-radio-input" name="gender" value="1">Nam
                    </div>
                    <button type="submit" class="btn btn-primary">Tạo mới</button>
                    <a href="?action=index&controller=customer" class="btn btn-primary float-end">Quay về</a>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>