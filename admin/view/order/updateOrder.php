<h1>Cập nhật trạng thái đơn hàng</h1>

<div class="container">
    <form action="?controller=bill&action=update" method="post">
        <input type="hidden" name="id" value="<?php $id = $_GET['id'];
        echo $id ?>">
        <div class="row">
            <div class="col">
                Đơn hàng mới
            </div>
            <div class="col">
                <input type="radio" name=status value="0">
            </div>
        </div>
        <div class="row">
            <div class="col">
                Đang giao hàng
            </div>
            <div class="col">
                <input type="radio" name=status value="1">
            </div>
        </div>
        <div class="row">
            <div class="col">
                Đã giao hàng
            </div>
            <div class="col">
                <input type="radio" name=status value="2">
            </div>
        </div>
        <br>
        <button class="btn btn-primary" type="submit">Cập nhật</button>
    </form>
</div>