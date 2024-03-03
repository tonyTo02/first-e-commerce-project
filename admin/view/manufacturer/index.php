<a href="?action=create&controller=manufacturer" class="btn btn-primary" style="margin:10px">
    + Thêm một nhà sản xuất
</a>
<br>
<table class="table">
    <thead>
        <tr>
            <td colspan="6" align="center">
                <input type="text" placeholder="Search Something...">
            </td>
        </tr>
        <tr class="table-secondary">
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">Phone</th>
            <th scope="col">Image</th>
            <th scope="col">Sửa</th>
            <th scope="col">Xóa</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($arr as $each) { ?>
            <tr class="table-light">
                <td>
                    <?php echo $each->getId(); ?>
                </td>
                <td>
                    <?php echo $each->getName(); ?>
                </td>
                <td>
                    <?php echo $each->getAddress(); ?>
                </td>
                <td>
                    <?php echo $each->getPhone(); ?>
                </td>
                <td>
                    <img height="100px" src="<?php echo $each->getImage(); ?>" alt="Đây là logo">
                </td>
                <td>
                    <a href="?action=edit&controller=manufacturer&id=<?php echo $each->getId() ?>">
                        Sửa
                    </a>
                </td>
                <td>
                    <a href="?action=delete&controller=manufacturer&id=<?php echo $each->getId() ?>">
                        Xóa
                    </a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>