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
  <!-- content -->
  <section id="main-content">
    <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-table"></i> Category Management</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="../Admin/CategoryManagement">Category</a></li>
            <li><i class="fa fa-table"></i>Category Management</li>
          </ol>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <a href="addcategory.php">
            <button class="btn btn-primary" style="margin-bottom: 15px;">Add New Category</button>
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
              List of Categories
            </header>
            <table class="table">
              <thead>
                <tr>
                  <th style="width:100px;">STT</th>
                  <th>Category Name</th>
                  <th style="width:100px;"></th>
                  <th style="width:100px;"></th>
                </tr>
              </thead>
              <tbody>
                <?php
                //Lay danh sach danh muc tu database
                $limit = 2;
                $page  = 1;
                if (isset($_GET['page'])) {
                  $page = $_GET['page'];
                }
                if ($page <= 0) {
                  $page = 1;
                }
                $firstIndex = ($page - 1) * $limit;

                $s = '';
                if (isset($_GET['s'])) {
                  $s = $_GET['s'];
                }

                //trang can lay san pham, so phan tu tren 1 trang: $limit
                $additional = '';

                if (!empty($s)) {
                  $additional = ' and name like "%' . $s . '%" ';
                }
                $sql = 'select * from danhmucsanpham where 1 ' . $additional . ' limit ' . $firstIndex . ', ' . $limit;

                $categoryList = executeResult($sql);

                $sql         = 'select count(id) as total from danhmucsanpham where 1 ' . $additional;
                $countResult = executeSingleResult($sql);
                $number      = 0;
                if ($countResult != null) {
                  $count  = $countResult['total'];
                  $number = ceil($count / $limit);
                }

                foreach ($categoryList as $item) {
                  echo '<tr>
                          <td>' . (++$firstIndex) . '</td>
                          <td>' . $item['name'] . '</td>
                          <td>
                            <a href="addcategory.php?id=' . $item['id'] . '"><button class="btn btn-warning">Modify</button></a>
                          </td>
                          <td>
                            <button class="btn btn-danger" onclick="deleteCategory(' . $item['id'] . ')">Delete</button>
                          </td>
                        </tr>';
                }
                ?>

              </tbody>
            </table>
        </div>
      </div>
      <!-- Bai toan phan trang -->
      <?= paginarion($number, $page, '&s=' . $s) ?>
      

      <script type="text/javascript">
        function deleteCategory(id) {
          var option = confirm('Bạn có chắc chắn muốn xoá danh mục này không?')
          if (!option) {
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