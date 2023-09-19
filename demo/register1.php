<!DOCTYPE HTML>
<html>

<head>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
    <!-- Liên kết tệp CSS Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="register1-background">
    <div class="container mt-5 mr-20">
        <div class="row">
            <!-- 'start nếu xảy ra lỗi thì hiện thông báo:' -->
            <div class="col-6">
                <img src="layouts/register.png" width="50%">
            </div>
            <?php
            include_once "./handle/function.php";
            // define variables and set to empty values
            $nameErr = $emailErr = $facebookErr = $passwordErr = "";
            $name = $email = $facebook = $password = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["name"])) {
                    $nameErr = "Name is required";
                } else {
                    $name = test_input($_POST["name"]);
                    // check if name only contains letters and whitespace
                    if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                        $nameErr = "Only letters and white space allowed";
                    }
                }
            }
            if (empty($_POST["email"])) {
                $emailErr = "Email is required";
            } else {
                $email = test_input($_POST["email"]);
                // check if e-mail address is well-formed
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Invalid email format";
                }
            }

            if (empty($_POST["facebook"])) {
                $facebookErr = "Invalid URL";;
            } else {
                $facebook = test_input($_POST["facebook"]);
                // check if URL address syntax is valid
                if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $facebook)) {
                }
            }

            if (empty($_POST["password"])) {
                $passwordErr = "Password is required";
            } else {
                $password = test_input($_POST["password"]);
                if (!preg_match("/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/", $password)) {
                }
            }

            function test_input($data)
            {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
            ?>
            <div class="col-6">
                <h2 class="text-primary">REGISTER FORM</h2>
                <p><span class="error">* Required field</span></p>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div class="row">
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-2 text-light">Name</div>
                                <div class="col-10">
                                    <input type="text" name="name">
                                    <span class="error">* <?php echo $nameErr; ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-2 text-light">E-mail</div>
                                <div class="col-10">
                                    <input type="text" name="email">
                                    <span class="error">* <?php echo $emailErr; ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-2 text-light">Facebook</div>
                                <div class="col-10">
                                    <input type="text" name="facebook">
                                    <span class="error">*<?php echo $facebookErr; ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="row">
                                <div class="col-2 text-light">Password</div>
                                <div class="col-10">
                                    <input type="text" name="password">
                                    <span class="error">*<?php echo $passwordErr; ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-10 mt-2">
                            <div class="row mx-auto" style="text-align: center;">
                                <div class="col-12"><input type="submit" name="submit" class="btn btn-primary" value="Submit"></div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>        
    </div>        

</body>

</html>