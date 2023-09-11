<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Hàm kiểm tra số nguyên tố
    function isPrime($number)
    {
        if ($number < 2) {
            return false;
        }

        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }

        return true;
    }

    // Nhập số lượng số nguyên tố cần hiển thị
    $numbers = (int) readline("Nhập số lượng số nguyên tố cần hiển thị: ");

    $count = 0; // Đếm số lượng số nguyên tố đã hiển thị
    $N = 2; // Giá trị ban đầu để kiểm tra

    while ($count < $numbers) {
        if (isPrime($N)) {
            echo $N . " ";
            $count++;
        }
        $N++;
    }
    ?>
</body>

</html>