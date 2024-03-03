<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Product</title>
    <link rel="stylesheet" href="./view/styles.css">
</head>

<body>
    <div class="container" style="padding: 30px">
        <div class=row>
            <div class="col">
                <div class="card">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img height="600px" src="./admin/view/photos/<?php echo $each->getImage() ?>" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="product-content">
                    <h2 class="product-title">
                        <?php echo $each->getName() ?>
                    </h2>
                    <div class="product-price">
                        <p class="price" style="color: green; font-size: 30px;">Price:
                            <?php echo number_format($each->getPrice()) ?> VNĐ
                        </p>
                    </div>
                    <div class="product-detail">
                        <p>
                            <?php echo $each->getDescription() ?>
                        </p>
                    </div>
                    <div class="purchase-info">
                        <input type="number" min="0" value="1">
                        <a href="?action=addCart&id=<?php echo $each->getId() ?>">
                            <button type="button" class="btn btn-primary">
                                Add to Cart
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>