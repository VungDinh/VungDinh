<?php
//ktra method request
//$_SERVER bien toan cuc, chua thong tin server
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //get data tu Request
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    if (
        $email == 'admin@example.com'
        && $password == '12345'
    ) {
        //chuyen huong
        header('Location: home.php');
    } else {
        $errMsg = 'Account not exist';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="login-background">
    <div class="container">
        <?php
        if (isset($_COOKIE["success"])) {
        ?>
            <div class="alert alert-success">
                <strong>Chúc mừng!</strong> <?php echo $_COOKIE["success"]; ?>
            </div>
        <?php } ?>

        <form action="" method="post">


            <div class="panel panel-primary">
                <div class="panel-body">
                    <div class="form-group">
                        <label for="email">Tài khoản:</label>
                        <input type="text" class="form-control" name="email" placeholder="Nhập tên đăng nhập...">
                    </div>

                    <div class="form-group">
                        <label for="pwd">Mật khẩu:</label>
                        <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu..." required>
                    </div>

                    <button type="submit" class="btn btn-primary mt-2" name="dangnhap">Đăng nhập</button>
                </div>
                <?php
                //isset ham ktra ton tai
                if (isset($errMsg)) {
                    echo $errMsg;
                }
                ?>
            </div>
        </form>

    </div>

</body>

</html>