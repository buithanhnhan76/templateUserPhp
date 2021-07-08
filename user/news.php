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
                        <li class="breadcrumb-item "><a style="color: black;" href="">TIN TỨC</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-3">
                <div class="card bg-light mb-3">
                    <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-list"></i> BÀI VIẾT MỚI</div>
                    <ul class="list-group category_block">
                        <li class="list-group-item">
                            <a href="#">Converse sẽ mang Goft le Fleur Chuck 70 về Việt Nam?....</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#">Xinh nhất những ngày này là những mẫu giày của....</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#">Fashionnista Việt đua nhau sống "ngược" theo trào lưu....</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#">Commedes Garcons Play x Converse nhá hàng mẫu giày...</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#">Hội thần kinh giày xôn xao với hình ảnh 18 ngàn lượt like....</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#">Đế giày converse có thiết kế rất đặc biệt, nhưng lí do thì chắc....</a>
                        </li>

                    </ul>
                </div>

            </div>
            <div class="col">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card">
                            <img class="card-img-top " src="../public/image/image-product/Thiết kế không tên.png" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"><a href="" title="View Product">Converse sẽ mang Goft le Fleur Chuck 70 về Việt... </a></h4>
                                <p class="card-text">Nhớ cú leak vừa rồi từ nơi sản sinh ra các sản phẩm.....</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card">
                            <img class="card-img-top " src="../public/image/image-product/Thiết kế không tên (1).png" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"><a href="" title="View Product">Xinh nhất những ngày này là những mẫu giày của....</a></h4>
                                <p class="card-text">Phải tới ngày 27 tới, BST này mới chính thức ra mắt nhưng giờ nó...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card">
                            <img class="card-img-top " src="../public/image/image-product/Thiết kế không tên (2).png" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"><a href="" title="View Product">Fashionnista Việt đua nhau sống "ngược" theo trào lưu....</a></h4>
                                <p class="card-text">Trước thách thức của Kaylee và Brian, giới trẻ Việt Nam ... </p>
                            </div>
                        </div>
                    </div>
                    <div style="margin-top: 30px;" class="col-12 col-md-6 col-lg-4">
                        <div class="card">
                            <img class="card-img-top " src="../public/image/image-product/Thiết kế không tên (3).png" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"><a href="" title="View Product">Commedes Garcons Play x Converse nhá hàng ...</a></h4>
                                <p class="card-text">Không phụ lòng của các fan, Commdes Play.... </p>

                            </div>
                        </div>
                    </div>
                    <div style="margin-top: 30px;" class="col-12 col-md-6 col-lg-4">
                        <div class="card">
                            <img class="card-img-top " src="../public/image/image-product/Thiết kế không tên (4).png" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"><a href="" title="View Product">Đế giày converse có thiết kế rất đặc biệt, nhưng lí do...</a></h4>
                                <p class="card-text">Nếu bạn để ý, đế giày converse sẽ có một lớp nỉ cao su...</p>
                            </div>
                        </div>
                    </div>
                    <div style="margin-top: 30px;" class="col-12 col-md-6 col-lg-4">
                        <div class="card">
                            <img class="card-img-top " src="../public/image/image-product/Thiết kế không tên (5).png" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"><a href="" title="View Product">Hội thần kinh giày xôn xao với hình ảnh 18 ngàn lượt like...</a></h4>
                                <p class="card-text">Có lẻ bức hình cô nhóc xinh xắn cùng đôi converse trắng đã..</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <nav aria-label="...">
                            <ul class="pagination">
                                <li class="page-item disabled ">
                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item ">
                                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
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