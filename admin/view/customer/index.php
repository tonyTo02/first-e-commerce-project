<a href="?action=create&controller=customer" class="btn btn-primary" style="margin: 10px">
    + Thêm tài khoản khách hàng
</a>
<br>
<table class="table">
    <thead>
        <tr>
            <td align="center" colspan="8">
                <input type="text" placeholder="Search something..." class="">
            </td>
        </tr>
        <tr class="table-secondary">
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Gender</th>
            <th scope="col">Birthday</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Address</th>
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
                    <?php echo $each->getGender(); ?>
                </td>
                <td>
                    <?php echo $each->getDob(); ?>
                </td>
                <td>
                    <?php echo $each->getEmail(); ?>
                </td>
                <td>
                    <?php echo $each->getPassword(); ?>
                </td>
                <td>
                    <?php echo $each->getAddress(); ?>
                </td>
                <td>
                    <a href="?action=edit&controller=customer&id=<?php echo $each->getId() ?>">
                        Sửa
                    </a>
                </td>
                <td>
                    <a href="?action=delete&controller=customer&id=<?php echo $each->getId() ?>">
                        Xóa
                    </a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>