<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Tạo một mảng hai chiều chứa các số nguyên
$array = array(
    array(1, 2, 3),
    array(14, 5, 6),
    array(7, 8, 20)
);

// Khởi tạo biến max với giá trị là phần tử đầu tiên của mảng
$max = $array[0][0];

// Duyệt qua từng phần tử của mảng và so sánh với giá trị max
foreach ($array as $row) {
    foreach ($row as $value) {
        if ($value > $max) {
            $max = $value;
        }
    }
}

// Hiển thị giá trị lớn nhất
echo "Giá trị lớn nhất trong mảng là: " . $max;
?>
</body>
</html>