<?php
require_once('../../DB/dbhelper.php');

$id = $gia = $TenSanPham = $Hinhanh = $Mota = $ID_DanhMuc = '';
if (!empty($_POST)) {
    if (isset($_POST['TenSanPham'])) {
        $TenSanPham = $_POST['TenSanPham'];
        $TenSanPham = str_replace('"', '\\"', $TenSanPham);
    }
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
    }
    if (isset($_POST['gia'])) {
        $gia = $_POST['gia'];
        $gia = str_replace('"', '\\"', $gia);
    }
    if (isset($_POST['Hinhanh'])) {
        $Hinhanh = $_POST['Hinhanh'];
        $Hinhanh = str_replace('"', '\\"', $Hinhanh);
    }
    if (isset($_POST['Mota'])) {
        $Mota = $_POST['Mota'];
        $Mota = str_replace('"', '\\"', $Mota);
    }
    if (isset($_POST['ID_DanhMuc'])) {
        $ID_DanhMuc = $_POST['ID_DanhMuc'];
    }

    if (!empty($TenSanPham)) {
        $created_at = $updated_at = date('Y-m-d H:s:i');
        //Luu vao database
        if ($id == '') {
            $sql = 'insert into sanpham(TenSanPham, Hinhanh, gia, Mota, ID_DanhMuc, created_at, updated_at) values ("' . $TenSanPham . '", "' . $Hinhanh . '", "' . $gia . '", "' . $Mota . '", "' . $ID_DanhMuc . '", "' . $created_at . '", "' . $updated_at . '")';
        } else {
            $sql = 'update sanpham set TenSanPham = "' . $TenSanPham . '", updated_at = "' . $updated_at . '", Hinhanh = "' . $Hinhanh . '", gia = "' . $gia . '", Mota = "' . $Mota . '", ID_DanhMuc = "' . $ID_DanhMuc . '" where id = ' . $id;
        }

        execute($sql);

        header('Location: productmanage.php');
        die();
    }
}

if (isset($_GET['id'])) {
    $id      = $_GET['id'];
    $sql     = 'select * from sanpham where id = ' . $id;
    $product = executeSingleResult($sql);
    if ($product != null) {
        $TenSanPham       = $product['TenSanPham'];
        $gia       = $product['gia'];
        $Hinhanh   = $product['Hinhanh'];
        $ID_DanhMuc = $product['ID_DanhMuc'];
        $Mota     = $product['Mota'];
    }
}
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

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-files-o"></i> Add Product</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                        <li><i class="icon_document_alt"></i>Product</li>
                        <li><i class="fa fa-files-o"></i>Add Product</li>
                    </ol>
                </div>
            </div>
            <!-- Form validations -->
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Add Product
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                <div class="form-validate form-horizontal">
                                    <form method="post">
                                        <div class="form-group ">
                                            <label  class="control-label col-lg-2">Product Name <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input type="text" name="id" value="<?= $id ?>" hidden="true">
                                                <input class="form-control" id="TenSanPham" name="TenSanPham" value="<?= $TenSanPham ?>" minlength="5" type="text" required />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="price" class="control-label col-lg-2">Choose Category<span class="required">*</span></label>
                                            <div class="col-lg-10">
                                            <select class="form-control" name="ID_DanhMuc" id="ID_DanhMuc">
                                                <option>-- Choose Category --</option>
                                                <?php
                                                $sql          = 'select * from danhmucsanpham';
                                                $categoryList = executeResult($sql);

                                                foreach ($categoryList as $item) {
                                                    if ($item['id'] == $id_category) {
                                                        echo '<option selected value="' . $item['id'] . '">' . $item['name'] . '</option>';
                                                    } else {
                                                        echo '<option value="' . $item['id'] . '">' . $item['name'] . '</option>';
                                                    }
                                                }
                                                ?>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label  class="control-label col-lg-2">Price <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input class="form-control" id="gia" name="gia" value="<?= $gia ?>" minlength="5" type="number" required />
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label  class="control-label col-lg-2">Thumnail <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input class="form-control" id="Hinhanh" name="Hinhanh" minlength="5" type="text" required="true" value="<?= $Hinhanh ?>" onchange="updateThumbnail()" />
                                                <img src="<?= $Hinhanh ?>" style="max-width: 200px" id="img_thumbnail">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="content" class="control-label col-sm-2">Describe<span class="required">*</span></label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control ckeditor" name="Mota" id="Mota" rows="5"><?= $Mota ?></textarea>
                                            </div>
                                        </div>
                                        <button style="float:right;" class="btn btn-primary">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </section>

    <!-- update thumnail immediately -->
    <script type="text/javascript">
        function updateThumbnail() {
            $('#img_thumbnail').attr('src', $('#Hinhanh').val())
        }

        $(function() {
            //doi website load noi dung => xu ly phan js
            $('#content').summernote({
                height: 350
            });
        })
    </script>
    <!-- javascripts -->
    <?php
    require_once "../main/js.php"
    ?>
</body>

</html>