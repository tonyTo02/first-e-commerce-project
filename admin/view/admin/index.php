<a href="?action=create&controller=admin" class="btn btn-primary" style="margin: 10px">
    Thêm một admin
</a>

<table class="table">
    <thead>
        <tr class="table-secondary">
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Level</th>
            <th scope="col">Status</th>
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
                    <?php echo $each->getEmail(); ?>
                </td>
                <td>
                    <?php echo $each->getPassword(); ?>
                </td>
                <td>
                    <?php echo $each->getLevel(); ?>
                </td>
                <td>
                    <?php echo $each->getStatus(); ?>
                </td>
                <td>
                    <a href="?action=edit&controller=admin&id=<?php echo $each->getId() ?>">
                        Sửa
                    </a>
                </td>
                <td>
                    <a href="?action=delete&controller=admin&id=<?php echo $each->getId() ?>">
                        Xóa
                    </a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>