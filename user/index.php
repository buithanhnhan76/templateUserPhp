<!-- master layout 1-->

<?php

require_once "../DB/dbhelper.php";
require_once "../common/utility.php"

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once "./main/main.php" ?>
</head>

<body>
    <?php require_once "./main/header.php"; ?>
    <?php require_once "./main/carousel.php"; ?>
    <?php require_once "./main/brand.php"; ?>
    <section class="" style="margin-top: 100px;">

        <div class="container text-center">
            <!-- btn choose -->
            <div>
                <ul class="choose">
                    <li class="choose-item"><a href="#" class="btn btn-dark btn-choose"><strong>SẢN PHẨM
                                MỚI</strong></a></li>
                    <li class="choose-item"><a href="#" class="btn btn-dark btn-choose"><strong>SẢN PHẨM BÁN
                                CHẠY</strong></a></li>
                    <li class="choose-item"><a href="#" class="btn btn-dark btn-choose"><strong>SẢN PHẨM PHỔ
                                BIẾN</strong></a></li>
                </ul>
            </div>
            <hr class="my-3" style="height: 2px; background-color: #cdcdcd;">
            <!-- Draggable Slides -->
            <div class="slider_container">
                <div class="slider_inner">
                    <div class="slider_img">
                        <img class="img-fluid" src="../public/image/image-product/5.jpg" alt="" />
                        <div class="card__content text-center">
                            <p>
                                Chuck Taylor Classic
                            </p>
                            <p><span><strong>1,250,000 đ</strong></span></p>

                        </div>
                    </div>
                    <div class="slider_img">
                        <img class="img-fluid" src="../public/image/image-product/6.jpg" alt="" />
                        <div class="card__content text-center">
                            <p>
                                Chuck Taylor Classic
                            </p>
                            <p><span><strong>1,250,000 đ</strong></span></p>

                        </div>
                    </div>
                    <div class="slider_img">
                        <img class="img-fluid" src="../public/image/image-product/7.jpg" alt="" />
                        <div class="card__content text-center">
                            <p>
                                Chuck Taylor Classic
                            </p>
                            <p><span><strong>1,250,000 đ</strong></span></p>

                        </div>
                    </div>
                    <div class="slider_img">
                        <img class="img-fluid" src="../public/image/image-product/8.jpg" alt="" />
                        <div class="card__content text-center">
                            <p>
                                Chuck Taylor Classic
                            </p>
                            <p><span><strong>1,250,000 đ</strong></span></p>

                        </div>
                    </div>
                    <div class="slider_img">
                        <img class="img-fluid" src="../public/image/image-product/9.jpg" alt="" />
                        <div class="card__content text-center">
                            <p>
                                Chuck Taylor Classic
                            </p>
                            <p><span><strong>1,250,000 đ</strong></span></p>

                        </div>
                    </div>
                    <div class="slider_img">
                        <img class="img-fluid" src="../public/image/image-product/10.jpg" alt="" />
                        <div class="card__content text-center">
                            <p>
                                Chuck Taylor Classic
                            </p>
                            <p><span><strong>1,250,000 đ</strong></span></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- section 3 -->
    <section style="margin-top: 50px;">
        <div class="container text-center">
            <div class="text-center">
                <h5><strong>NHỮNG SẢN PHẨM NỔI BẬT TRONG TUẦN</strong></h5>
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
    <!-- khuyến mãi giảm giá -->
    <section style="margin-top: 100px;">
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                </ol>
                <div class="carousel-inner carousel-inner-bottom" style="max-height: 460px; ">
                    <div class="carousel-item active">
                        <img class="d-block w-100 img-fluid" src="../public/image/banner.png" alt="First slide">
                    </div>
                    <!-- btn -->
                    <a href="" class="btn btn-outline-dark font-weight-bold mt-5">Xem tất cả</a>
                </div>
            </div>
        </div>
    </section>
    <!-- section 4 / sản phẩm giảm giá -->
    <section style="margin-top: 100px;">
        <div class="container text-center">
            <div class="text-center">
                <h5><strong>SẢN PHẨM GIẢM GIÁ</strong></h5>
                <hr class="my-3" style="height: 2px; background-color: #cdcdcd;">
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="product">
                        <img class="img-fluid" src="../public/image/image-product/8.jpg" alt="" />
                        <div class="card__content text-center">
                            <p>
                                Chuck Taylor Classic
                            </p>
                            <p> <span class="text-decoration-line-through"><strong>2,000,000 đ </strong></span>
                                <span><strong>950,000 đ</strong></span>
                            </p>
                            <a href="#" class="btn btn-red btn-sm"><strong>THÊM VÀO GIỎ</strong></a>
                        </div>
                        <div class="discount"><span>30%</span></div>
                        <div class="discount"><span>30%</span></div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product">
                        <img class="img-fluid" src="../public/image/image-product/9.jpg" alt="" />
                        <div class="card__content text-center">
                            <p>
                                Chuck Taylor Classic
                            </p>
                            <p> <span class="text-decoration-line-through"><strong>2,000,000 đ </strong></span>
                                <span><strong>1,400,000 đ</strong></span>
                            </p>
                            <a href="#" class="btn btn-red btn-sm"><strong>THÊM VÀO GIỎ</strong></a>
                        </div>
                        <div class="discount"><span>30%</span></div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product">
                        <img class="img-fluid" src="../public/image/image-product/10.jpg" alt="" />
                        <div class="card__content text-center">
                            <p>
                                Chuck Taylor Classic
                            </p>
                            <p> <span class="text-decoration-line-through"><strong>2,000,000 đ </strong></span>
                                <span><strong>750,000 đ</strong></span>
                            </p>
                            <a href="#" class="btn btn-red btn-sm"><strong>THÊM VÀO GIỎ</strong></a>
                        </div>
                        <div class="discount"><span>30%</span></div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product">
                        <img class="img-fluid" src="../public/image/image-product/11.jpg" alt="" />
                        <div class="card__content text-center">
                            <p>
                                Chuck Taylor Classic
                            </p>
                            <p> <span class="text-decoration-line-through"><strong>2,000,000 đ </strong></span>
                                <span><strong>650,000 đ</strong></span>
                            </p>
                            <a href="#" class="btn btn-red btn-sm"><strong>THÊM VÀO GIỎ</strong></a>
                        </div>
                        <div class="discount"><span>30%</span></div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product">
                        <img class="img-fluid" src="../public/image/image-product/12.jpg" alt="" />
                        <div class="card__content text-center">
                            <p>
                                Chuck Taylor Classic
                            </p>
                            <p> <span class="text-decoration-line-through"><strong>2,000,000 đ </strong></span>
                                <span><strong>750,000 đ</strong></span>
                            </p>
                            <a href="#" class="btn btn-red btn-sm"><strong>THÊM VÀO GIỎ</strong></a>
                        </div>
                        <div class="discount"><span>30%</span></div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product">
                        <img class="img-fluid" src="../public/image/image-product/6.jpg" alt="" />
                        <div class="card__content text-center">
                            <p>
                                Chuck Taylor Classic
                            </p>
                            <p> <span class="text-decoration-line-through"><strong>2,000,000 đ </strong></span>
                                <span><strong>750,000 đ</strong></span>
                            </p>
                            <a href="#" class="btn btn-red btn-sm"><strong>THÊM VÀO GIỎ</strong></a>
                        </div>
                        <div class="discount"><span>30%</span></div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product">
                        <img class="img-fluid" src="../public/image/image-product/5.jpg" alt="" />
                        <div class="card__content text-center">
                            <p>
                                Chuck Taylor Classic
                            </p>
                            <p> <span class="text-decoration-line-through"><strong>2,000,000 đ </strong></span>
                                <span><strong>750,000 đ</strong></span>
                            </p>
                            <a href="#" class="btn btn-red btn-sm"><strong>THÊM VÀO GIỎ</strong></a>
                        </div>
                        <div class="discount"><span>30%</span></div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product">
                        <img class="img-fluid" src="../public/image/image-product/4.jpg" alt="" />
                        <div class="card__content text-center">
                            <p>
                                Chuck Taylor Classic
                            </p>
                            <p> <span class="text-decoration-line-through"><strong>2,000,000 đ </strong></span>
                                <span><strong>1,000,000 đ</strong></span>
                            </p>
                            <a href="#" class="btn btn-red btn-sm"><strong>THÊM VÀO GIỎ</strong></a>
                        </div>
                        <div class="discount"><span>30%</span></div>
                    </div>
                </div>
            </div>
            <a href="" class="btn btn-outline-dark font-weight-bold mt-5">Xem tất cả</a>
        </div>
    </section>


    <?php require_once "./main/footer.php"; ?>

</body>

</html>