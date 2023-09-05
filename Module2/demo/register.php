<?php
$connect = mysqli_connect('localhost', 'root', '', 'demo');
mysqli_set_charset($connect, "utf8");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <!-- Liên kết tệp CSS Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $form['name'] = $_POST['name'];
    $form['email'] = $_POST['email'];
    $form['phone'] = $_POST['telephone_number'];
    $form['address'] = $_POST['address'];
    $form['password'] = $_POST['password'];
    $form['confirmPassword'] = $_POST['confirmPassword'];
    //check validate
    if ($form['password'] != $form['confirmPassword']) {
        header("location:register.php");
        setcookie("Error", "Đăng ký không thành công!", time() + 1, "/", "", 0);
    }
    if (!$form['name']) {
        header("location:register.php");
        setcookie("Error", "bạn phải nhập trường Name!", time() + 1, "/", "", 0);
    }
    if (!$form['email']) {
        header("location:register.php");
        setcookie("Error", "bạn phải nhập trường Email!", time() + 1, "/", "", 0);
    }
    if (!$form['phone']) {
        header("location:register.php");
        setcookie("Error", "bạn phải nhập trường Telephone number!", time() + 1, "/", "", 0);
    }
    if (!$form['address']) {
        header("location:register.php");
        setcookie("Error", "bạn phải nhập trường Address!", time() + 1, "/", "", 0);
    }
    if (!$form['password']) {
        header("location:register.php");
        setcookie("Error", "bạn phải nhập trường Password!", time() + 1, "/", "", 0);
    }
    if (!$form['confirmPassword']) {
        header("location:register.php");
        setcookie("Error", "bạn phải nhập trường Confirm Password!", time() + 1, "/", "", 0);
    }
    $pass = md5($form['password']);
    $query = "INSERT INTO users (name, email, phone, address, password) 
                    VALUES ('" . $form['name'] . "', '" . $form['email'] . "', '" . $form['phone'] . "', '" . $form['address'] . "', '" . $pass . "')";
    mysqli_query($connect, $query);
    header("location:login.php");
    setcookie("Success", "Đăng ký thành công!", time() + 1, "/", "", 0);
}
?>

<body class="register-background">
    <div class="container mt-5 mr-20">
        <div class="row">
            <!-- 'start nếu xảy ra lỗi thì hiện thông báo:' -->
            <?php
            if (isset($_COOKIE["error"])) {
            ?>
                <div class="alert alert-danger">
                    <strong>'Có lỗi!'</strong> <?php echo $_COOKIE["error"]; ?>
                </div>
            <?php } ?>
            <div class="col-6">
                <img src="images/register.png" width="100%">
            </div>
            <div class="col-6">
                <h1 class="register-background-h1">Registration Form</h1>
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                    </div>
                    <div class="mb-3">
                        <label for="telephone number" class="form-label">Telephone Number</label>
                        <input type="number" class="form-control" id="telephone number" name="telephone_number" placeholder="Enter your number">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Enter your address">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
                    </div>
                    <div class="mb-3">
                        <label for="confirmPassword" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm your password">
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
        </div>

    </div>


</html>