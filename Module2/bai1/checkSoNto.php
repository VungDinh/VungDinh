<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Bước 1: Nhập số lượng số nguyên tố cần hiển thị
    $numbers = (int) readline("Nhập số lượng số nguyên tố cần hiển thị: ");

    // Bước 2: Khởi tạo biến count và N
    $count = 0;
    $N = 2;

    // Bước 3: Hiển thị số nguyên tố
    while ($count < $numbers) {
        $isPrime = true;

        // Kiểm tra xem N có phải là số nguyên tố không
        for ($i = 2; $i <= sqrt($N); $i++) {
            if ($N % $i == 0) {
                $isPrime = false;
                break;
            }
        }

        // Nếu N là số nguyên tố, in ra giá trị của N và tăng giá trị của count lên 1
        if ($isPrime) {
            echo $N . " ";
            $count++;
        }

        // Tăng giá trị của N lên 1 để kiểm tra số tiếp theo
        $N++;
    }
    ?>
</body>

</html>