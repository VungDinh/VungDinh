<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Bước 1: Tạo 2 mảng số nguyên cho trước
$array1 = [1,2,3,4,5];
$array2 = [6,7,8,9,10];

// Bước 2: Tạo mảng thứ 3 rỗng
$array3 = [];

// Bước 3: Gộp mảng
// Gán các phần tử của mảng 1 vào mảng 3
foreach ($array1 as $element) {
    $array3[] = $element;
}

// Gán các phần tử của mảng 2 vào mảng 3
foreach ($array2 as $element) {
    $array3[] = $element;
}

// Bước 4: In ra mảng thứ 3
echo "Mảng sau khi gộp: ";
print_r($array3);
?>
</body>
</html>