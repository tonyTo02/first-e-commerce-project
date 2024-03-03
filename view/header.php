<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>

<body>

    <ul class="nav nav-pills flex-column flex-sm-row nav-justified">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="?">Sellphones</a>
        </li>

        <li class="nav-item">
            <input type="text" class="form-control" id="myInput" onkeyup="filterCards()" placeholder="Tìm kiếm...">
        </li>
        <li class="nav-item">
            <?php
            if (!isset($_SESSION['id'])) {
                echo "
            <a class=\"nav-link\" href=\"?action=signIn\">Đăng nhập</a>
            ;";
            } else {
                echo "Xin chào " . $_SESSION['name'] . " <a href=\"?action=logOut\">Log out</a>" . "<br> </li>";
                echo "<li class=\"nav-item\">
                <a class=\"nav-link bg-red-100\" href=\"?action=viewOrder\" tabindex=\"-1\">Profile</a>
            </li>";
            }
            ?>
        </li>
        <?php
        if (!isset($_SESSION['id'])) {
            echo "<li class=\"nav-item\">
            <a class=\"nav-link\" href=\"?action=signUp\">Đăng ký</a>
            </li>
            ";
        }
        ?>
        <li class="nav-item">
            <a class="nav-link active" href="?action=viewCart" tabindex="-1">Giỏ hàng</a>
        </li>
    </ul>
    <script>
        function filterCards() {
            var input, filter, cards, card, name, description, price, i;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            cards = $(".card");
            cards.each(function () {
                card = $(this);
                name = card.attr("data-name").toUpperCase();
                description = card.attr("data-description").toUpperCase();
                price = card.attr("data-price").toUpperCase();

                if (name.indexOf(filter) > -1) {
                    card.show();
                } else {
                    card.hide();
                }
            });
        }
    </script>
</body>

</html>