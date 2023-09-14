<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Bước 1: Khai báo và gán giá trị cho chuỗi
$string = "Welcome to my page";

// Bước 2: Nhập hoặc gán giá trị cho biến ký tự
$character = 'e';

// Bước 3: Khai báo và gán giá trị 0 cho biến đếm
$count = 0;

// Bước 4: Duyệt từng ký tự trong chuỗi và tăng biến đếm nếu ký tự trùng khớp
for ($i = 0; $i < strlen($string); $i++) {
    if ($string[$i] === $character) {
        $count++;
    }
}

// Bước 5: In ra giá trị biến đếm
echo "Số lần xuất hiện của ký tự '$character' trong chuỗi là: $count";
?>
</body>
</html>