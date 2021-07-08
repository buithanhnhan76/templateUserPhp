<?php
require_once('../../DB/dbhelper.php');
require_once('../../common/utility.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once "../main/main.php"
    ?>
</head>

<body>
    <!-- header -->
    <?php
    require_once "../main/header.php"
    ?>
    <!-- sidebar -->
    <?php
    require_once "../main/sidebar.php"
    ?>


    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-table"></i> Product Management</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="index.html">Product</a></li>
                        <li><i class="fa fa-table"></i>Product Management</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <a href="addproduct.php">
                        <button class="btn btn-primary" style="margin-bottom: 15px;">Add New Product</button>
                    </a>
                </div>
                <div class="col-lg-6">
                    <form method="get">
                        <div class="form-group" style="width: 300px; float: right;">
                            <input type="text" class="form-control" placeholder="Searching..." id="s" name="s">
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">
                            List of Products
                        </header>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width:50px;">#</th>
                                    <th>Product Image</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Category</th>
                                    <th>Updated time</th>
                                    <th style="width:100px;"></th>
                                    <th style="width:100px;"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                //Lay danh sach danh muc tu database
                                $limit = 10;
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
                                    echo '<tr>
                                            <td>' . (++$firstIndex) . '</td>
                                            <td><img src="' . $item['Hinhanh'] . '" style="max-width: 100px"/></td>
                                            <td>' . $item['TenSanPham'] . '</td>
                                            <td>' . $item['gia'] . '</td>
                                            <td>' . $item['category_name'] . '</td>
                                            <td>' . $item['updated_at'] . '</td>
                                            <td>
                                                <a href="addproduct.php?id=' . $item['id'] . '"><button class="btn btn-warning">Modify</button></a>
                                            </td>
                                            <td>
                                                <button class="btn btn-danger" onclick="deleteProduct(' . $item['id'] . ')">Delete</button>
                                            </td>
                                        </tr>';
                                }
                                ?>

                            </tbody>
                        </table>

                    </section>
                </div>
            </div>
            <?=paginarion($number, $page, '')?>
        </section>
    </section>

    <!-- delete product function -->

    
	<script type="text/javascript">
		function deleteProduct(id) {
			var option = confirm('Bạn có chắc chắn muốn xoá sản phẩm này không?')
			if(!option) {
				return;
			}

			console.log(id)
			//ajax - lenh post
			$.post('ajax.php', {
				'id': id,
				'action': 'delete'
			}, function(data) {
				location.reload()
			})
		}
	</script>

    <!-- javascripts -->
    <?php
    require_once "../main/js.php"
    ?>
</body>

</html>