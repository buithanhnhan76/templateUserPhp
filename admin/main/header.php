<!-- container section start -->
<section id="container" class="">

<header class="header dark-bg">
  <div class="toggle-nav">
    <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
  </div>

  <!--logo start-->
  <a href="../Admin/Main" class="logo">HEM <span class="lite">ADMIN</span></a>
  <!--logo end-->

  <div class="nav search-row" id="top_menu">
    <!--  search form start -->
    <ul class="nav top-menu">
      <li>
        <form class="navbar-form">
          <input class="form-control" placeholder="Search" type="text">
        </form>
      </li>
    </ul>
    <!--  search form end -->
  </div>

  <div class="top-nav notification-row">
    <!-- notificatoin dropdown start-->
    <ul class="nav pull-right top-menu">
      <!-- user login dropdown start-->
      <li class="dropdown">
        <?php
        session_start();
        if(isset($_SESSION['adminname']))
        echo '
        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
          <span class="profile-ava">
            <img alt="" src="../../public/image/administrator.png">
          </span>
          <span class="username">'.$_SESSION["adminname"] .'</span>
          <b class="caret"></b>
        </a>
        <ul class="dropdown-menu extended logout">
          <div class="log-arrow-up"></div>
          <li class="eborder-top">
            <a href="#"><i class="icon_profile"></i> My Profile</a>
          </li>
          <li>
            <a href="../logout.php"><i class="icon_key_alt"></i> Log Out</a>
          </li>
        </ul>
        ';
        else 
          echo "<a href='../login.php' >Đăng Nhập</a>";
        ?>
      </li>
      <!-- user login dropdown end -->
    </ul>
    <!-- notificatoin dropdown end-->
  </div>
</header>
<!--header end-->