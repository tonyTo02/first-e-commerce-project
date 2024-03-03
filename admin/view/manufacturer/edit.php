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
    <title>Tạo mới nhà sản xuất</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <form class="custom-border" action="?action=update&controller=manufacturer" method="post">
                    <input type="hidden" name="id" value="<?php echo $each->getId() ?>">
                    <div class="mb-3">
                        <label for="name" class="form-label">Tên nhà sản xuất</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $each->getName() ?>"
                            placeholder="Nhập tên nhà sản xuất">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Địa chỉ</label>
                        <input type="text" class="form-control" name="address" value="<?php echo $each->getAddress() ?>"
                            placeholder="Nhập địa chỉ">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Số điện thoại</label>
                        <input type="text" class="form-control" name="phone" value="<?php echo $each->getPhone() ?>"
                            placeholder="Nhập số điện thoại">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Logo</label>
                        <input type="text" class="form-control" name="image" value="<?php echo $each->getImage() ?>"
                            placeholder="Nhập link ảnh">
                    </div>
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                    <a href="?action=index&controller=manufacturer" class="btn btn-primary float-end">Quay về</a>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>