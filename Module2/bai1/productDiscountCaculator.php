<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Product Discount Calculator</h1>
    <form method="post" action="discount.php">
        <label for="description">Product Description:</label>
        <input type="text" id="description" name="description" required><br><br>

        <label for="price">List Price:</label>
        <input type="number" id="price" name="price" step="0.01" required><br><br>

        <label for="discount">Discount Percent:</label>
        <input type="number" id="discount" name="discount" step="0.01"required><br><br>

        <input type="submit" value="Calculate Discount">
    </form>
</body>
</html>