<?php

require_once "../DB/dbhelper.php";
require_once "../common/utility.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once "./main/main.php" ?>
</head>

<body>
    <?php require_once "./main/header.php"; ?>
    <div style="margin-top: 50px" class="container">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a style="color: black;" href="">TRANG CHỦ</a></li>
                        <li class="breadcrumb-item "><a style="color: black;" href="">NỮ</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">


            <div class="col-12 col-sm-3">
                <div class="card bg-light mb-3">
                    <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-list"></i> Thể Loại</div>
                    <ul class="list-group category_block">
                    <?php //Lay danh sach danh muc tu database
$sql          = 'select * from danhmucsanpham';
$categoryList = executeResult($sql);

$index = 1;
foreach ($categoryList as $item) {
	echo '
    <li class="list-group-item"><a href="brand_product.php?id='.$item['id'].'">'.$item['name'].'</a></li>
			';
}
?>
                    </ul>

                </div>
                <div class="card bg-light mb-3">
                    <div class="card-header bg-success text-white text-uppercase">Sản phẩm mới nhất</div>
                    <div class="card-body">
                        <img class="img-fluid" src="../public/image/image-product/12.jpg" />
                        <h6 class="card-title">Converse 1970 Sun Flower</h6>
                        <p class="card-text">Cá tính, Phong cách, Thời trang là những gì đôi giày này mang đến cho bạn</p>
                        <p class="bloc_left_price">1.220.000đ</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="row">
                    <?php
                    
                    require_once "brand_product.php";
                    ?>
                </div>
                <?= paginarion($number, $page, '') ?>
            </div>

        </div>
    </div>

    <section style="margin-top: 100px;">
        <div class="container text-center">
            <div class="text-center">
                <h5><strong>SẢN PHẨM GIẢM GIÁ</strong></h5>
                <hr class="my-3" style="height: 2px; background-color: #cdcdcd;">
            </div>
            <div class="row">
                <?php
                require_once "product.php";
                ?>
            </div>
            <?= paginarion($number, $page, '') ?>
        </div>
    </section>

    <?php require_once "./main/footer.php"; ?>

</body>

</html>