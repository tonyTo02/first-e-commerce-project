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
                <form class="custom-border" action="?action=update&controller=customer" method="post">
                    <div class="mb-3">
                        <input type="hidden" name="id" value="<?php echo $each->getId() ?>">
                        <label for="name" class="form-label">Họ và tên</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $each->getName() ?>"
                            placeholder="Nhập họ và tên">
                    </div>
                    <div class="mb-3">
                        <label for="dob" class="form-label">Ngày sinh</label>
                        <input type="date" class="form-control" name="dob" value="<?php echo $each->getDob() ?>"
                            placeholder=" Nhập địa chỉ email">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Địa chỉ email</label>
                        <input type="email" class="form-control" name="email" value="<?php echo $each->getEmail() ?>"
                            placeholder="Nhập địa chỉ email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Mật khẩu</label>
                        <input type="password" class="form-control" name="password"
                            value="<?php echo $each->getPassword() ?>" placeholder="Nhập mật khẩu">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Địa chỉ</label>
                        <input type="text" class="form-control" name="address" value="<?php echo $each->getAddress() ?>"
                            placeholder="Nhập địa chỉ">
                    </div>
                    <div class="mb-3 form-radio">
                        <input type="radio" class="form-radio-input" name="gender" value="0" <?php if ($each->getGender() == 0) {
                            echo "checked";
                        } ?>>Nữ
                        <input type="radio" class="form-radio-input" name="gender" value="1" <?php if ($each->getGender() == 1) {
                            echo "checked";
                        } ?>>Nam
                    </div>
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                    <a href="?action=index&controller=customer" class="btn btn-primary float-end">Quay về</a>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>