<?php
$sql         = "select  * from sanpham";
$productList = executeResult($sql);

$limit = 12;
$page  = 1;
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}
if ($page <= 0) {
    $page = 1;
}
$firstIndex = ($page - 1) * $limit;

$sql         = 'select sanpham.id, sanpham.TenSanPham, sanpham.gia, sanpham.Hinhanh, sanpham.updated_at, danhmucsanpham.name category_name from sanpham left join danhmucsanpham on sanpham.ID_DanhMuc = danhmucsanpham.id ' . ' limit ' . $firstIndex . ', ' . $limit;
$productList = executeResult($sql);

$sql         = 'select count(id) as total from sanpham where 1 ';
$countResult = executeSingleResult($sql);
$number      = 0;
if ($countResult != null) {
    $count  = $countResult['total'];
    $number = ceil($count / $limit);
}
$index = 1;

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
