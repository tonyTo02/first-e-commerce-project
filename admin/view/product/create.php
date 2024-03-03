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
                <form class="custom-border" action="?action=store&controller=product" method="post"
                    enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="name" class="form-label">Tên sản phẩm</label>
                        <input type="text" class="form-control" name="name" placeholder="Nhập tên sản phẩm">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Mô tả</label>
                        <input type="text" class="form-control" name="description" placeholder="Nhập mô tả">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Giá tiền</label>
                        <input type="text" class="form-control" name="price" placeholder="Nhập giá tiền">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Hình ảnh</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div class="mb-3">
                        <label for="manufacturer_id" class="form-label">Nhà sản xuất</label>
                        <select name="manufacturer_id" class="form-control">
                            <?php foreach ($manufacturers as $each) { ?>
                                <option value="<?php echo $each->getId() ?>">
                                    <?php echo $each->getName() ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Tạo mới</button>
                    <a href="?action=index&controller=product" class="btn btn-primary float-end">Quay về</a>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>