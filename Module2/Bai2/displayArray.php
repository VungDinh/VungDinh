<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Bước 1: Tạo mảng 100 số nguyên ngẫu nhiên
$array = array();
for ($i = 0; $i < 100; $i++) {
    $array[] = rand(0, 99);
}

// Bước 2: Nhập chỉ số từ người dùng
$index = readline("Nhập chỉ số của phần tử (0-99): ");

// Bước 3: Thực hiện chương trình
try {
    if ($index < 0 || $index >= 100) {
        throw new Exception("Chỉ số vượt quá giới hạn của mảng");
    }
    $value = $array[$index];
    echo "Giá trị của phần tử có chỉ số $index là: $value";
} catch (Exception $e) {
    echo "Output Exception: " . $e->getMessage();
}
?>
</body>
</html>