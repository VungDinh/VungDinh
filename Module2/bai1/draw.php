<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
while (true) {
    // Hiển thị menu
    echo "Menu:\n";
    echo "1. Print the rectangle\n";
    echo "2. Print the square triangle\n";
    echo "3. Print the isosceles triangle\n";
    echo "4. Exit\n";

    $choice = readline("Enter your choice: ");

    if ($choice == "1") {
        // In hình chữ nhật
        $width = readline("Enter the width of the rectangle: ");
        $height = readline("Enter the height of the rectangle: ");
        $symbol = readline("Enter the symbol for the rectangle: ");

        for ($i = 0; $i < $height; $i++) {
            for ($j = 0; $j < $width; $j++) {
                echo $symbol . " ";
            }
            echo "\n";
        }

    } elseif ($choice == "2") {
        // In hình tam giác vuông
        $size = readline("Enter the size of the square triangle: ");
        $symbol = readline("Enter the symbol for the square triangle: ");

        for ($i = 0; $i < $size; $i++) {
            for ($j = 0; $j <= $i; $j++) {
                echo $symbol . " ";
            }
            echo "\n";
        }

    } elseif ($choice == "3") {
        // In hình tam giác cân
        $size = readline("Enter the size of the isosceles triangle: ");
        $symbol = readline("Enter the symbol for the isosceles triangle: ");

        for ($i = 0; $i < $size; $i++) {
            for ($j = 0; $j < $size - $i - 1; $j++) {
                echo "  ";
            }
            for ($k = 0; $k < 2 * $i + 1; $k++) {
                echo $symbol . " ";
            }
            echo "\n";
        }

    } elseif ($choice == "4") {
        // Thoát khỏi chương trình
        echo "Exiting the program...\n";
        break;

    } else {
        echo "Invalid choice. Please enter a valid option.\n";
    }
}
?>
</body>
</html>