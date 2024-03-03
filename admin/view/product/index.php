<a href="?action=create&controller=product" class="btn btn-primary" style="margin:10px">
    Thêm một sản phẩm
</a>
<br>
<table class="table">
    <thead>
        <tr>
            <td colspan="7" align="center"><input id="searchInput" class="search" type="text"
                    placeholder="Search Something..."></td>
        </tr>
        <tr class="table-secondary">
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Image</th>
            <th scope="col">Manufacturer</th>
            <th scope="col">Xóa</th>
            <th scope="col">Sửa</th>
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
                    <?php echo $each->getDescription(); ?>
                </td>
                <td>
                    <?php echo number_format($each->getPrice()); ?>
                </td>
                <td>
                    <img height="100" src="./view/photos/<?php echo $each->getImage() ?>">
                </td>
                <td>
                    <?php echo $each->getNameManufacturer(); ?>
                </td>
                <td>
                    <a href="?action=edit&controller=product&id=<?php echo $each->getId() ?>">
                        Sửa
                    </a>
                </td>
                <td>
                    <a href="?action=delete&controller=product&id=<?php echo $each->getId() ?>">
                        Xóa
                    </a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
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