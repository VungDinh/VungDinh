<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Bước 1: Khai báo và khởi tạo mảng số nguyên
$array = array(10, 4, 6, 7, 8, 0,0,0,);

// Bước 2: Nhập phần tử cần xoá
$elementToDelete = 7;

// Bước 3: Tìm phần tử trong mảng và chỉ ra vị trí của nó
$indexToDelete = array_search($elementToDelete, $array);
if ($indexToDelete !== false) {
    echo "Phần tử $elementToDelete được tìm thấy tại vị trí $indexToDelete.<br>";

    // Bước 4: Xoá phần tử khỏi mảng
    array_splice($array, $indexToDelete, 1);

    // Bước 5: In ra mảng sau khi xoá
    echo "Mảng mới sau khi xoá: ";
    foreach ($array as $value) {
        echo $value . " ";
    }
} else {
    echo "Phần tử $elementToDelete không xuất hiện trong mảng.";
}
?>
</body>
</html>