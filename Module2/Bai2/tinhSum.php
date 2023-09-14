<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Bước 1: Tạo mảng hai chiều với các phần tử đã cho
$array = array(
    array(5, 2, 3),
    array(4, 1, 6),
    array(7, 2, 9)
);

// Bước 2: Tính tổng của một cột xác định
function calculateColumnSum($array, $columnIndex) {
    $sum = 0;
    for ($i = 0; $i < count($array); $i++) {
        if (isset($array[$i][$columnIndex])) {
            $sum += $array[$i][$columnIndex];
        }
    }
    return $sum;
}

// Bước 3: Nhập vào thứ tự cột và tính tổng
$columnIndex = 1; // Ví dụ: tính tổng của cột thứ 1
$columnSum = calculateColumnSum($array, $columnIndex);

// In ra kết quả
echo "Tổng của cột $columnIndex là: $columnSum";
?>
</body>
</html>