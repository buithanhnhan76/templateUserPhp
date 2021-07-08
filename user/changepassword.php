<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đổi mật khẩu</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
</head>

<body>

    <!------ Include the above in your HEAD tag ---------->
    <div class="container mt-3">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <p class="text-center">Đổi Mật Khẩu.</p>
                <form method="post" id="passwordForm">
                    <input type="password" class="input-lg form-control" name="password" id="password1" placeholder="New Password" autocomplete="off">
                    <input type="password" class="input-lg form-control mt-3 mb-3" name="repeatpassword" id="password2" placeholder="Repeat Password" autocomplete="off">
                    <input type="submit" name="submit" class="col-xs-12 btn btn-primary btn-load btn-lg" data-loading-text="Changing Password..." value="Đổi Mật Khẩu">
                    <br>
                    <br>
                    <a href="../user/" class="btn btn-primary">Về trang chủ</a>
                    <div id="noti" style="display:none"></div>
                </form>
            </div>
            <!--/col-sm-6-->
        </div>
        <!--/row-->
    </div>
</body>

</html>
<?php
session_start();
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
    $password = $_POST["password"];
    $repeatpassword = $_POST["repeatpassword"];
    if ($password != $repeatpassword)
        echo "<script>document.getElementById('noti').innerHTML='Password khác nhau, vui lòng kiểm tra lại'</script>
    <script>document.getElementById('noti').style.display='block'</script>";
    else {
        $sql = "update usser
        set password='" . $password . "'
        where username='" . $_SESSION['username'] . "'";

        if ($conn->query($sql) === TRUE) {
            echo "<script>document.getElementById('noti').innerHTML='Đổi Mật Khẩu Thành Công'</script>
        <script>document.getElementById('noti').style.display='block'</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
}


?>