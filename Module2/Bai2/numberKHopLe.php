<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function calculate($x, $y) {
    try {
        if ($y === 0) {
            throw new Exception("/ by zero");
        }
        
        echo "Tổng x + y = " . ($x + $y) . "<br>";
        echo "Hiệu x - y = " . ($x - $y) . "<br>";
        echo "Tích x * y = " . ($x * $y) . "<br>";
        echo "Thương x / y = " . ($x / $y) . "<br>";
    } catch (Exception $e) {
        echo "Xảy ra ngoại lệ: " . $e->getMessage();
    }
}

// Chạy chương trình và kiểm tra kết quả
calculate(5, 5); // Kết quả hợp lệ
calculate(0, 1); // Kết quả hợp lệ
calculate(0, 0); // Ngoại lệ: / by zero
?>
</body>
</html>