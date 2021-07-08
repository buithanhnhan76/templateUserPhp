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

    <section>  
       <!-- Background image -->
       <div
         class="p-5 text-center bg-image"
         style="
           background-image: url('../public/image/carosel1.jpg');
           height: 250px;
           margin-top: 50px;
         "
       >
         <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
           <div class="d-flex justify-content-center align-items-center h-100">
             <div class="text-white">
               <h1 class="mb-3">Giới thiệu</h1>
               <h4 class="mb-3">Trang chủ / Giới thiệu</h4>
             </div>
           </div>
         </div>
       </div>
       <!-- Background image -->
   </section>

<!-- introduce -->
   <section style="margin-top: 50px;">
       <div class="container main-main">
           <div class="row">
             <div class="col-lg-5">  
               <img class="img img-thumbnail img-logo" src="../public/image/image-product/12.jpg" alt="img">
             </div>
             <div class="col-lg-7">
               <div class="container-fluid">
                 <h5><b>GIỚI THIỆU</b></h5>
                 <p>Chào mừng bạn đã đến với ngôi nhà của HẺM nơi mà mỗi sản phẩm được cam kết với chất lượng hàng đầu nhằm đáp ứng nhu cầu thời trang của giới trẻ hiện nay. Chúng tôi luôn mang trong mình sứ mệnh xây dựng một cộng đồng về giày để tạo cơ hội cho mọi 
                     người ngày càng có cách ăn mặt thời trang hơn và bắt kịp với xu hướng mới nhất.
                 </p>
               </div>
               <br>
               <br>
               <br>
               <div class="container-fluid ">
                 <div class="row" style="margin-left: 0px;">
                   <h5><b>SẢN PHẨM GIÀY TỐT NHẤT</b></h5> 
                 </div>
                 <div class="row">
                   <div class="col-sm" >
                     <p>
                       Chúng tôi cam kết các sản phẩm tại gian hàng của chúng tôi là những sản phẩm chất lượng và đạt chuẩn.
                       Các sản phẩm được nhập khẩu chính hãng từ các nhãn hàng lớn, đảm bảo uy tín.
                     </p>
                   </div>
                   <div class="col-sm">
                     <p>
                       Tại gia đình của HẺM, chúng tôi đang xây dựng nên với nhiều mẫu mã giày phù hợp với nhiều lứa tuổi, có thể nói 
                       các sản phẩm được nhập khẩu chính hãng từ các nhãn hàng lớn như NIKE, CONVERSE, VANS,...
                     </p>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
       
   </section>

<!-- information -->
   <section class="information">
       <div style="margin:100px 0px" class="container main-footer"> 
           <div class="row">
             <div class="col-sm">
               <div class="row">
                 <div class="col-sm-3" class="svg-container">
                   <i style="font-size: 40px; color: #D28E4F;"
                   class="fas fa-luggage-cart"></i>
                 </div>
                 <div class="col-sm-9">
                   <b>Miễn phí giao hàng</b> 
                   <p>Tại đây, mỗi một dòng chữ, mỗi chi tiết và hình ảnh đều là những bằng chứng mang dấu ấn lịch sử Converse 100 năm, và đang không ngừng phát triển lớn mạnh</p>
                 </div>
               </div>
             </div>
             <div class="col-sm">
               <div class="row">
                 <div class="col-sm-3" class="svg-container">
                   <i style="font-size: 40px; color: #D28E4F;"
                   class="fab fa-connectdevelop"></i>
                 </div>
                 <div class="col-sm-9">
                   <b>Đổi trả trong vòng 7 ngày</b> 
                   <p>Tại đây, mỗi một dòng chữ, mỗi chi tiết và hình ảnh đều là những bằng chứng mang dấu ấn lịch sử Converse 100 năm, và đang không ngừng phát triển lớn mạnh</p>
                 </div>
               </div>
             </div>
           </div>
       
           <div class="row">
             <div class="col-sm">
               <div class="row">
                 <div class="col-sm-3" class="svg-container">
                   <i class="fas fa-archive"
                   style="font-size: 40px; color: #D28E4F;"
                   ></i>
                 </div>
                 <div class="col-sm-9">
                   <b>Sản phẩm mới 100%</b> 
                   <p>Tại đây, mỗi một dòng chữ, mỗi chi tiết và hình ảnh đều là những bằng chứng mang dấu ấn lịch sử Converse 100 năm, và đang không ngừng phát triển lớn mạnh</p>
                 </div>
               </div>
             </div>
             <div class="col-sm">
               <div class="row">
                 <div class="col-sm-3" class="svg-container">
                   <i style="font-size: 40px; color: #D28E4F";
                   class="fab fa-accusoft"></i>
                 </div>
                 <div class="col-sm-9">
                   <b>Chăm sóc khách hàng</b>
                   <p>Tại đây, mỗi một dòng chữ, mỗi chi tiết và hình ảnh đều là những bằng chứng mang dấu ấn lịch sử Converse 100 năm, và đang không ngừng phát triển lớn mạnh</p>
                 </div>
               </div>
             </div>
           </div>
       
           <div class="row">
             <div class="col-sm">
               <div class="row">
                 <div class="col-sm-3" class="svg-container">
                   <i style="font-size: 40px; color: #D28E4F"
                   class="fab fa-atlassian"></i>
                 </div>
                 <div class="col-sm-9">
                   <b>Hàng chính hãng</b> 
                   <p>Tại đây, mỗi một dòng chữ, mỗi chi tiết và hình ảnh đều là những bằng chứng mang dấu ấn lịch sử Converse 100 năm, và đang không ngừng phát triển lớn mạnh</p>
                 </div>
               </div>
             </div>
             <div class="col-sm">
               <div class="row">
                 <div class="col-sm-3" class="svg-container">
                   <i style="font-size: 40px; color: #D28E4F"
                    class="fas fa-box-open"></i>
                 </div>
                 <div class="col-sm-9">
                   <b>Thanh toán đa dạng</b>
                   <p>Tại đây, mỗi một dòng chữ, mỗi chi tiết và hình ảnh đều là những bằng chứng mang dấu ấn lịch sử Converse 100 năm, và đang không ngừng phát triển lớn mạnh</p>
                 </div>
               </div>
             </div>
           </div>
       
         </div>
                   
   </section>
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