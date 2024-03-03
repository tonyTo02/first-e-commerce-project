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

<div class="container">
    <h1 style="padding: 10px">Samsung</h1>
    <div class="row" style="padding: 10px">
        <?php foreach ($arr as $each) { ?>
            <div class="card col-3" data-name="<?php echo $each->getName() ?>"
                data-description="<?php echo $each->getDescription() ?>" data-price="<?php echo $each->getPrice() ?>">
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
    </div>
</div>