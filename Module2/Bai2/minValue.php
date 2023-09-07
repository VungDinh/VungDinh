<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function minValueIndex($array) {
    $min = $array[0]; // Giả sử phần tử đầu tiên là nhỏ nhất
    $index = 0; // Vị trí của phần tử có giá trị nhỏ nhất

    for ($i = 1; $i < count($array); $i++) {
        if ($array[$i] < $min) {
            $min = $array[$i];
            $index = $i;
        }
    }

    return $index;
}

// Tạo một mảng số nguyên
$numbers = [15, 6, 8, 1, 19, 2];

// Gọi phương thức để tìm vị trí của phần tử có giá trị nhỏ nhất trong mảng
$smallestIndex = minValueIndex($numbers);

// In ra kết quả
echo "Vị trí của phần tử có giá trị nhỏ nhất là: " . $smallestIndex;
?>
</body>
</html>