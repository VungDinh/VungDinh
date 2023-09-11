<!DOCTYPE html>
<html>

<head>
    <title>Chuyển đổi tiền tệ</title>
</head>

<body>
    <h1>Chuyển đổi tiền tệ</h1>

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="usd_amount">Nhập số tiền USD:</label>
        <input type="text" id="usd_amount" name="usd_amount">
        <input type="submit" value="Chuyển đổi">
    </form>

    <?php
    // Kiểm tra xem người dùng đã submit form chưa
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Khai báo biến tỉ giá
        $rate = 23000;

        // Lấy giá trị tiền USD từ form
        $usd_amount = $_POST["usd_amount"];

        // Kiểm tra xem giá trị nhập vào có hợp lệ không
        if (is_numeric($usd_amount)) {
            // Tính giá trị tiền VND
            $vnd_amount = $usd_amount * $rate;

            // Hiển thị kết quả
            echo "<p>{$usd_amount} USD = {$vnd_amount} VND</p>";
        } else {
            // Hiển thị thông báo lỗi nếu giá trị nhập vào không hợp lệ
            echo "<p>Giá trị nhập vào không hợp lệ. Vui lòng nhập số tiền USD.</p>";
        }
    }
    ?>
</body>

</html>