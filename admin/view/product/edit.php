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
                <form class="custom-border" action="?action=update&controller=product" method="post"
                    enctype="multipart/form-data">
                    <div class="mb-3">
                        <input type="hidden" name="id" value="<?php echo $each->getId() ?>">
                        <label for="name" class="form-label">Tên sản phẩm</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $each->getName() ?>"
                            placeholder="Nhập tên sản phẩm">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Mô tả</label>
                        <input type="text" class="form-control" name="description"
                            value="<?php echo $each->getDescription() ?>" placeholder="Nhập mô tả">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Giá tiền</label>
                        <input type="text" class="form-control" value="<?php echo $each->getPrice() ?>" name="price"
                            placeholder="Nhập giá tiền">
                    </div>
                    <div class="mb-3">
                        <label for="old_image" class="form-label">Hình ảnh cũ</label>
                        <img height="100" src="./view/photos/<?php echo $each->getImage() ?>" alt="Old_image">
                        <input type="hidden" name="old_image" value="<?php echo $each->getImage() ?>">
                    </div>
                    <div class="mb-3">
                        <label for="new_image" class="form-label">Hình ảnh mới</label>
                        <input type="file" class="form-control" name="new_image">
                    </div>
                    <div class="mb-3">
                        <label for="manufacturer_id" class="form-label">Nhà sản xuất</label>
                        <select name="manufacturer_id" class="form-control">
                            <?php foreach ($manufacturers as $manu) { ?>
                                <option value="<?php echo $manu->getId() ?>" <?php if ($manu->getId() == $each->getManufacturerId())
                                       echo "selected"; ?>>
                                    <?php echo $manu->getName() ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                    <a href="?action=index&controller=product" class="btn btn-primary float-end">Quay về</a>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>