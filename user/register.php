<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- bootstrap -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- jQuery -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <!-- internal style from template -->
    <style>
        .divider-text {
            position: relative;
            text-align: center;
            margin-top: 15px;
            margin-bottom: 15px;
        }

        .divider-text span {
            padding: 7px;
            font-size: 12px;
            position: relative;
            z-index: 2;
        }

        .divider-text:after {
            content: "";
            position: absolute;
            width: 100%;
            border-bottom: 1px solid #ddd;
            top: 55%;
            left: 0;
            z-index: 1;
        }

        .btn-facebook {
            background-color: #405D9D;
            color: #fff;
        }

        .btn-twitter {
            background-color: #42AEEC;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <br>
        <p class="text-center">Đăng Kí Tài Khoản</p>
        <hr>
        <div class="card bg-light">
            <article class="card-body mx-auto" style="max-width: 400px;">
                <h4 class="card-title mt-3 text-center">Tạo Tài Khoản</h4>
                <p class="text-center">Bắt Đầu Với Tài Khoản Miễn Phí</p>
                <!-- register form -->
                <form method="POST">
                    <!-- form-group -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                        </div>
                        <input name="email" type="email" class="form-control" placeholder="Nhập Email" type="email" required>
                    </div>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                        </div>
                        <input name="username" class="form-control" placeholder="Nhập username" type="text" required>
                    </div>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input class="form-control" name="password" placeholder="Nhập password" type="password" required>
                    </div>
                    <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input class="form-control" name="repeatpassword" placeholder="Nhập lại password" type="password" required>
                    </div>
                    <!-- form-group// -->
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary btn-block"> Tạo tài khoản </button>
                    </div>
                    <!-- form-group// -->
                    <p class="text-center">Đã có tài khoản? <a href="./login.php">Đăng nhập</a> </p>
                    <div id="error" class="alert alert-danger" style="display: none"></div>
                    <div id="success" class="alert alert-success" style="display: none"></div>
                </form>
            </article>
        </div> <!-- card.// -->

    </div>

    <br><br>
</body>

</html>
<!-- handle register form -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webbangiay";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $repeatpassword = $_POST["repeatpassword"];

     // check if user exists
     $checkusername = "select * from usser where username='".$username ."'";
     $result = $conn->query($checkusername);
     if ($result->num_rows > 0)
     {
         echo "<script>document.getElementById('error').innerHTML='Username đã tồn tại !';
         document.getElementById('error').style.display='block'</script>";
         die();
     };

     // check if email exists
     $checkemail = "select * from usser where email='".$email ."'";
     $result = $conn->query($checkemail);
     if ($result->num_rows > 0)
     {
         echo "<script>document.getElementById('error').innerHTML='Email đã được dùng !';
         document.getElementById('error').style.display='block'</script>";
         die();
     };

    // if password and repeatpassword are not same
    if ($password != $repeatpassword)
        echo "<script>document.getElementById('error').innerHTML='Password khác nhau, vui lòng kiểm tra lại'</script>
        <script>document.getElementById('error').style.display='block'</script>";
    else {
    // insert to database
        $sql = "INSERT INTO usser(username,password,email)
        VALUES ('$username', '$password', '$email')";
    // register successfully
        if ($conn->query($sql) === TRUE) {
            echo "<script>document.getElementById('success').innerHTML='Đăng Kí Thành Công'</script>
        <script>document.getElementById('success').style.display='block'</script>";
        } else {
            echo "Đã xảy ra lỗi trong quá trình tạo tài khoản, vui lòng liên hệ admin để được hỗ trợ";
        }

        $conn->close();
    }
}


?>

<!-- done register -->