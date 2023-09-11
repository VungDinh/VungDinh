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

    // Lặp qua các số từ 2 đến 100
    for ($i = 2; $i < 100; $i++) {
        if (isPrime($i)) {
            echo $i . " ";
        }
    }
    ?>
</body>

</html>