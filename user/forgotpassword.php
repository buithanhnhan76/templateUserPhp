<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quên Mật Khẩu</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <style>
        .form-gap {
            padding-top: 70px;
        }
    </style>
</head>

<body>
    <div class="form-gap"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="text-center">
                            <h3><i class="fa fa-lock fa-4x"></i></h3>
                            <h2 class="text-center">Quên mật khẩu !</h2>
                            <p>Bạn có thể khởi tạo lại mật khẩu tại đây.</p>
                            <div class="panel-body">
                                <form id="register-form" role="form" autocomplete="off" class="form" method="post">

                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                            <input id="email" name="email" placeholder="Điền email của bạn" class="form-control" type="email" required>
                                        </div>
                                        <small>Email chứa mật khẩu mới sẽ gửi tới hộp thư của bạn</small>
                                    </div>
                                    <div class="form-group">
                                        <input name="submit" class="btn btn-lg btn-primary btn-block" value="Phục hồi mật khẩu" type="submit">
                                        <br>
                                        <a href="../user/" class="btn btn-primary mt-3">Về Trang Chủ</a>
                                    </div>
                                    <div id="noti" style="display:none;"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<?php

// Hash mot chuoi ki tu ngau nhien, $length la do dai chuoi
function rand_string($length)
{
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $size = strlen($chars);
    $str = "";
    for ($i = 0; $i < $length; $i++) {
        $str .= $chars[rand(0, $size - 1)];
    }
    return $str;
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mvc";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $hash = rand_string(5);
    $to_email = $email;
    $subject = 'Reset Password';
    $message = 'This is your new password: ' . $hash . ' !';
    $headers = 'From: webbangiay';
    mail($to_email, $subject, $message, $headers);

    $sql = "update usser
        set password = '" . $hash . "'
        where Email ='" . $email . "'";

    if ($conn->query($sql) === TRUE) {
        echo "<script>document.getElementById('noti').innerHTML='Mật Khẩu Mới Đã Được Chuyển Vào Hộp Thư';
            document.getElementById('noti').style.display='block';</script>";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
}


?>