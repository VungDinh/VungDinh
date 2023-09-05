<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $description = $_POST["description"];
        $price = $_POST["price"];
        $discount = $_POST["discount"];

        $discountAmount = $price * ($discount / 100);
        $discountPrice = $price - $discountAmount;
        ?>

        <h1>Product Discount Calculator - Result</h1>
        <h2>Product Information:</h2>
        <p>Description: <?php echo $description; ?></p>
        <p>List Price: $<?php echo number_format($price, 2); ?></p>
        <p>Discount Percent: <?php echo $discount; ?>%</p>

        <h2>Discount Calculation:</h2>
        <p>Discount Amount: $<?php echo number_format($discountAmount, 2); ?></p>
        <p>Discount Price: $<?php echo number_format($discountPrice, 2); ?></p>

    <?php
    }
    ?>
</body>
</html>