<?php
require_once ('../../DB/dbhelper.php');

$id = $name = '';
if (!empty($_POST))
// kiểm tra có tồn tại phương thức post hay ko
 {
	if (isset($_POST['name'])) {
		$name = $_POST['name'];
		$name = str_replace('"', '\\"', $name);
	}
	if (isset($_POST['id'])) {
		$id = $_POST['id'];
	}

	if (!empty($name)) {
		$created_at = $updated_at = date('Y-m-d H:s:i');
		//Luu vao database
		if ($id == '') 
		// nếu mà id nó rỗng thì ta thêm vào
		{
			$sql = 'insert into danhmucsanpham(name, created_at, updated_at) values ("'.$name.'", "'.$created_at.'", "'.$updated_at.'")';
		} else
		// nếu mà nó có thì ta sửa 
		 {
			$sql = 'update danhmucsanpham set name = "'.$name.'", updated_at = "'.$updated_at.'" where id = '.$id;
		}

		execute($sql);

		header('Location: categorymanage.php');
		// này là điều hướng trang 
		die();
		// dùng die() là để dừng xử lý vì đã chuyển trang
	}
}

if (isset($_GET['id'])) {
	$id       = $_GET['id'];
	$sql      = 'select * from danhmucsanpham where id = '.$id;
	$category = executeSingleResult($sql);
	if ($category != null) {
		$name = $category['name'];
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
            <h3 class="page-header"><i class="fa fa-files-o"></i> Add Category</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="icon_document_alt"></i>Category</li>
              <li><i class="fa fa-files-o"></i>Add Category</li>
            </ol>
          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Add Category
              </header>
              <div class="panel-body">
                <div class="form">
                  <div class="form-validate form-horizontal" id="" >
                  <!-- form co chuc nang them moi 1 danh muc moi -->
                  <form method="post">
                    <div class="form-group ">
                      <label for="name" class="control-label col-lg-2">Category Name <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input type="text" name="id" value="<?=$id?>" hidden="true">
                        <!-- nhiem vu o input nay la dung de luu cai id ma chung ta dang sua -->
                        <input class="form-control" id="name" name="name" minlength="5" type="text" required  value="<?=$name?>">
                      </div>
                    </div>
                    <button style="float: right;" class="btn btn-primary">Save</button>
                  </form>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </section>
    </section>

     <!-- javascripts -->
     <?php
      require_once "../main/js.php"
      ?>
</body>

</html>