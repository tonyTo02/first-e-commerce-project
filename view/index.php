<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container-fluid {
            margin: 10px;
        }

        #carouselInterval .carousel-inner img {
            width: 100%;
            height: auto;
        }

        /* Optional: If you want to set a maximum height for the carousel */
        #carouselInterval .carousel-inner {
            max-height: 600px;
            /* Adjust the value as needed */
        }

        .col {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class=row>
            <div class="card">
                <div id="carouselInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="./view/photos/1.webp">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="./view/photos/2.webp">
                        </div>
                        <div class="carousel-item">
                            <img src="./view/photos/3.webp">

                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselInterval"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselInterval"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <div class=row>
            <h1 style="padding: 10px">Category</h1>
            <?php $index = 0;
            foreach ($arrCategory as $each) {
                if ($index < 4) { ?>

                    <div class="card col-3">
                        <img height="250px" src="<?php echo $each->getImage() ?>" class="card-img-top" alt="AnhDienThoai">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo $each->getName() ?>
                            </h5>
                            <a href="?action=<?php echo $each->getName() ?>" class="btn btn-primary">Xem chi
                                tiết</a>
                        </div>
                    </div>
                <?php }
                $index++;
            } ?>
        </div>
        <br>
        <div class="row" style="padding: 10px">
            <h1 style="padding: 10px">Latest Product</h1>
            <?php foreach ($arrProduct as $each) { ?>
                <div class="card col-3">
                    <img height="300px" src="./admin/view/photos/<?php echo $each->getImage() ?>" class="card-img-top"
                        alt="AnhDienThoai">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php echo $each->getName() ?>
                        </h5>
                        <p class="card-text">
                            <?php echo number_format($each->getPrice()) . " VNĐ" ?>
                        </p>
                        <a href="?action=detail&id=<?php echo $each->getId() ?>" class="btn btn-primary">Xem chi
                            tiết</a>
                    </div>
                </div>

            <?php } ?>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
</body>

</html>