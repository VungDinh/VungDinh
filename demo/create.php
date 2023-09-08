<?php
include_once("./handle/function.php");
$users = readFileToData("./data/user.json");
$products = readFileToData("./data/products.json");
// kiem tra method request
// $_SERVER bien toan cuc, chua thong tin server
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // get data tu request
    $keyCheck = 0;
    $productName = $_REQUEST['product_name'];
    $productPrice = $_REQUEST['price'];
    $productImage = $_REQUEST['image'];
    $productRemarks = $_REQUEST['remarks'];

    $productEnd  = end($products);
    $newId = $productEnd['id'] + 1;

    $products[] = [
        "id" => $newId,
        "name" => $productName,
        "price" => $productPrice,
        "image" => $productImage,
        "remarks" => $productRemarks,
    ];

    $jsonData = json_encode($products);
    file_put_contents("./data/products.json", $jsonData);
    header("Location: http://localhost/VungDinh/demo/products.php");
    // $getDataForId = [
    //     "id"=> $id,
    //     "name" => $productName,
    //     "price" => $productPrice,
    //     "image" => $productImage,
    //     "remarks" => $productRemarks,
    // ];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css">

</head>

<body class="create-background">
    <div class="container">
        <style>
            .form-row {
                display: flex;
                align-items: center;
                margin-bottom: 10px;
            }

            .form-row label {
                width: 50px;
                text-align: right;
                margin-right: 10px;
            }

            .form-row input[type="text"] {
                flex: 1;
                height: 30px;
                border: 1px solid #ccc;
                padding: 5px;
                box-sizing: border-box;
            }
        </style>
        <form action="" method="post">
            <div class="form-row">
                <label for="product_name">Product Name </label>
                <input type="text" name="product_name" id="product_name" value="">
            </div>
            <div class="form-row">
                <label for="price">Price</label>
                <input type="text" name="price" id="price" value="">
            </div>
            <div class="form-row">
                <label for="image">Image </label>
                <input type="text" name="image" id="image" value="">
            </div>
            <div class="form-row">
                <label for="remarks">Remarks </label>
                <input type="text" name="remarks" id="remarks" value="">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</body>

</html>