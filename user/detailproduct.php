<?php

require_once "../DB/dbhelper.php";
$id = '';
if (isset($_GET['id'])) {
	$id      = $_GET['id'];
	$sql     = 'select * from sanpham where id = '.$id;
	$product = executeSingleResult($sql);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once "./main/main.php" ?>
</head>

<body>
    <?php require_once "./main/header.php"; ?>
    <section>

        <!-- Background image -->
        <div style="margin-top: 30px" class="container-fluid">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a style="color: black;" href="">TRANG CHỦ</a></li>
                            <li class="breadcrumb-item "><a style="color: black;" href="">NAM</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Background image -->
    </section>

    <div style="margin-top: 50px" class="container-fluid">
        <!--Section: Block Content-->
        <section class="mb-5">

            <div class="row">
                <div class="col-md-6 mb-4 mb-md-0">

                    <div id="mdb-lightbox-ui"></div>

                    <div class="mdb-lightbox">

                        <div class="row product-gallery mx-1">
                            <div style="margin: auto; text-align: center" class="col-8 mb-0">
                                <figure class="view overlay rounded z-depth-1 main-img">
                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="<?=$product['Hinhanh']?>" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="<?=$product['Hinhanh']?>" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="<?=$product['Hinhanh']?>" class="d-block w-100" alt="...">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-2">
                                    </div>
                                    <div class="col-8">
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="view overlay rounded z-depth-1 gallery-item">
                                                    <img src="<?=$product['Hinhanh']?>" class="img-fluid">
                                                    <div class="mask rgba-white-slight"></div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="view overlay rounded z-depth-1 gallery-item">
                                                    <img src="<?=$product['Hinhanh']?>" class="img-fluid">
                                                    <div class="mask rgba-white-slight"></div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="view overlay rounded z-depth-1 gallery-item">
                                                    <img src="<?=$product['Hinhanh']?>" class="img-fluid">
                                                    <div class="mask rgba-white-slight"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-md-6">

                    <h5><?=$product['TenSanPham']?></h5>
                    <p class="mb-2 text-muted text-uppercase small">Shoes</p>
                    <ul style="display: flex;" class="rating">
                        <li>
                            <i class="fas fa-star fa-sm text-primary"></i>
                        </li>
                        <li>
                            <i class="fas fa-star fa-sm text-primary"></i>
                        </li>
                        <li>
                            <i class="fas fa-star fa-sm text-primary"></i>
                        </li>
                        <li>
                            <i class="fas fa-star fa-sm text-primary"></i>
                        </li>
                        <li>
                            <i class="far fa-star fa-sm text-primary"></i>
                        </li>
                    </ul>
                    <p><span class="mr-1"><strong><?=$product['gia']?></strong></span></p>
                    <p class="pt-1"><?=$product['Mota']?></p>
                    <div class="table-responsive">
                        <table class="table table-sm table-borderless mb-0">
                            <tbody>
                                <tr>
                                    <th class="pl-0 w-25" scope="row"><strong>Model</strong></th>
                                    <td>Shoes Low</td>
                                </tr>
                                <tr>
                                    <th class="pl-0 w-25" scope="row"><strong>Color</strong></th>
                                    <td>Black</td>
                                </tr>
                                <tr>
                                    <th class="pl-0 w-25" scope="row"><strong>Delivery</strong></th>
                                    <td>USA, VietNam</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <div class="table-responsive mb-2">
                        <table class="table table-sm table-borderless">
                            <tbody>
                                <tr>
                                    <td class="pl-0 pb-0 w-25">Quantity</td>
                                    <td class="pb-0">Select size</td>
                                </tr>
                                <tr>
                                    <td class="pl-0">
                                        <div style="display: flex" class="def-number-input number-input safari_only mb-0">
                                            <button style="width: 30px; border: none;" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus">-</button>
                                            <input style="width: 50px; text-align: center;" class="quantity" min="0" name="quantity" value="1" type="number">
                                            <button style="width: 30px; border: none;" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus">+</button>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="mt-1">
                                            <div class="form-check form-check-inline pl-0">
                                                <input type="radio" class="form-check-input" id="small" name="materialExampleRadios" checked>
                                                <label class="form-check-label small text-uppercase card-link-secondary" for="small">Small</label>
                                            </div>
                                            <div class="form-check form-check-inline pl-0">
                                                <input type="radio" class="form-check-input" id="medium" name="materialExampleRadios">
                                                <label class="form-check-label small text-uppercase card-link-secondary" for="medium">Medium</label>
                                            </div>
                                            <div class="form-check form-check-inline pl-0">
                                                <input type="radio" class="form-check-input" id="large" name="materialExampleRadios">
                                                <label class="form-check-label small text-uppercase card-link-secondary" for="large">Large</label>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <button type="button" class="btn btn-primary btn-md mr-1 mb-2">Buy now</button>
                    <button type="button" class="btn btn-light btn-md mr-1 mb-2"><i class="fas fa-shopping-cart pr-2"></i>Add to cart</button>
                </div>
            </div>

        </section>
        <!--Section: Block Content-->
    </div>


    <!-- Classic tabs -->
    <div class="classic-tabs border rounded px-4 pt-1">

        <ul class="nav tabs-primary nav-justified" id="advancedTab" role="tablist">
            <li class="nav-item">
                <a style="font-size: 20px; font-weight: 100;" class="nav-link active show" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Mô tả sản phẩm</a>
            </li>
            <li class="nav-item">
                <a style="font-size: 20px; font-weight: 100;" class="nav-link" id="info-tab" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">Thông tin sản phẩm</a>
            </li>
            <li class="nav-item">
                <a style="font-size: 20px; font-weight: 100;" class="nav-link" id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Đánh giá</a>
            </li>
        </ul>
        <div class="tab-content" id="advancedTabContent">
            <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                <h5>Mô tả sản phẩm</h5>
                <p class="small text-muted text-uppercase mb-2">Shoes</p>
                <ul style="display: flex;" class="rating">
                    <li>
                        <i class="fas fa-star fa-sm text-primary"></i>
                    </li>
                    <li>
                        <i class="fas fa-star fa-sm text-primary"></i>
                    </li>
                    <li>
                        <i class="fas fa-star fa-sm text-primary"></i>
                    </li>
                    <li>
                        <i class="fas fa-star fa-sm text-primary"></i>
                    </li>
                    <li>
                        <i class="far fa-star fa-sm text-primary"></i>
                    </li>
                </ul>
                <h6><?=$product['gia']?></h6>
                <p class="pt-1"><?=$product['Mota']?>Được kế thừa những chi tiết của những đôi Chuck 70 đình đám. Giày Converse Chuck 70 Popped Colour cũng được làm từ chất liệu vải Canvas nhưng kỹ thuật dệt hoàn hảo khiến mặt giày đẹp như một bức tranh vừa bắt mắt vừa tạo ra sự ôm sát cho đôi chân người dùng.Được kế thừa những chi tiết của những đôi Chuck 70 đình đám. Giày Converse Chuck 70 Popped Colour cũng được làm từ chất liệu vải Canvas nhưng kỹ thuật dệt hoàn hảo khiến mặt giày đẹp như một bức tranh vừa bắt mắt vừa tạo ra sự ôm sát cho đôi chân người dùng.Được kế thừa những chi tiết của những đôi Chuck 70 đình đám. Giày Converse Chuck 70 Popped Colour cũng được làm từ chất liệu vải Canvas nhưng kỹ thuật dệt hoàn hảo khiến mặt giày đẹp như một bức tranh vừa bắt mắt vừa tạo ra sự ôm sát cho đôi chân người dùng.</p>
            </div>
            <div class="tab-pane fade" id="info" role="tabpanel" aria-labelledby="info-tab">
                <h5>Thông tin sản phẩm</h5>
                <table class="table table-striped table-bordered mt-3">
                    <thead>
                        <tr>
                            <th scope="row" class="w-150 dark-grey-text h6">Cân nặng</th>
                            <td><em>0.5 kg</em></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" class="w-150 dark-grey-text h6">Kích cỡ</th>
                            <td><em>14 × 24.5 cm</em></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                <h5><span>1</span> Phản hồi cho <span><?=$product['TenSanPham']?></span></h5>
                <div class="media mt-3 mb-4">
                    <img class="d-flex mr-3 z-depth-1" src="https://mdbootstrap.com/img/Photos/Others/placeholder1.jpg" width="62" alt="Generic placeholder image">
                    <div class="media-body">
                        <div class="d-sm-flex justify-content-between">
                            <p class="mt-1 mb-2">
                                <strong>VietNam </strong>
                                <span>– </span><span><?=$product['created_at']?></span>
                            </p>
                            <ul style="display: flex;" class="rating mb-sm-0">
                                <li>
                                    <i class="fas fa-star fa-sm text-primary"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-primary"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-primary"></i>
                                </li>
                                <li>
                                    <i class="fas fa-star fa-sm text-primary"></i>
                                </li>
                                <li>
                                    <i class="far fa-star fa-sm text-primary"></i>
                                </li>
                            </ul>
                        </div>
                        <p class="mb-0">Giày đẹp chất lượng, hợp giá tiền, đáng mua!</p>
                    </div>
                </div>
                <hr>
                <h5 class="mt-4">Thêm đánh giá</h5>
                <p>thông tin email của bạn sẽ không bị công khai</p>
                <div class="my-3">
                    <ul style="display: flex;" class="rating mb-0">
                        <li>
                            <a href="#!">
                                <i class="fas fa-star fa-sm text-primary"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#!">
                                <i class="fas fa-star fa-sm text-primary"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#!">
                                <i class="fas fa-star fa-sm text-primary"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#!">
                                <i class="fas fa-star fa-sm text-primary"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#!">
                                <i class="far fa-star fa-sm text-primary"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <!-- Your review -->
                    <div class="md-form md-outline">
                        <textarea id="form76" class="md-textarea form-control pr-6" rows="4"></textarea>
                        <label for="form76">Đánh giá của bạn</label>
                    </div>
                    <!-- Name -->
                    <div class="md-form md-outline">
                        <input type="text" id="form75" class="form-control pr-6">
                        <label for="form75">Họ và Tên:</label>
                    </div>
                    <!-- Email -->
                    <div class="md-form md-outline">
                        <input type="email" id="form77" class="form-control pr-6">
                        <label for="form77">Email:</label>
                    </div>
                    <div class="text-right pb-2">
                        <button type="button" class="btn btn-primary">Thêm đánh giá</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Classic tabs -->



    <section style="margin-top: 100px;">
        <div class="container text-center">
            <div class="text-center">
                <h5><strong>SẢN PHẨM LIÊN QUAN</strong></h5>
                <hr class="my-3" style="height: 2px; background-color: #cdcdcd;">
            </div>
        </div>
    </section>
    <div class="row">
        <!-- roll du lieu len -->
        <?php
        $sql         = "select  * from sanpham";

        $productList = executeResult($sql);

        foreach ($productList as $item) {

            echo '<div class="col-md-3 col-sm-6">
            <div class="product">
                <div class=" banner-fill text-center">
                    <div class="text-center">
                    <a href="detailproduct.php?id=' . $item['id'] . '">
                        <img src="' . $item['Hinhanh'] . '" class="img-fluid">
                    </a>
                    </div>
                </div>
                <div class="card__content text-center">
                    <p>
                    <a href="detailproduct.php?id=' . $item['id'] . '"><p>' . $item['TenSanPham'] . '</p></a>
                    </p>
                    <p><span><strong>' . $item['gia'] . '</strong></span></p>
                    <a href="#" class="btn btn-red btn-sm"><strong>THÊM VÀO GIỎ</strong></a> 
                </div>
            </div>
        </div>';
        }
        ?>
    </div>
    <?php require_once "./main/footer.php"; ?>

</body>

</html>