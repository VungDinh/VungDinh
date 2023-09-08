<?php
include_once("./handle/function.php");
$users = readFileToData("./data/user.json");
$products = readFileToData("./data/products.json");
// kiem tra method request
// $_SERVER bien toan cuc, chua thong tin server
$getDataForId = [];
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // get data tu request
    $id = $_REQUEST['id'];
    foreach ($products as $key => $product) {
        if ($product['id'] == $id) {
            $getDataForId = $product;
        }
    }
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // get data tu request
    $keyCheck = 0;
    $id = $_REQUEST['id'];
    $productName = $_REQUEST['product_name'];
    $productPrice = $_REQUEST['price'];
    $productImage = $_REQUEST['image'];
    $productRemarks = $_REQUEST['remarks'];

    foreach ($products as $key => $product) {
        if ($product['id'] == $id) {
            $keyCheck = $key;
        }
    }
    $products[$key] = [
        "id" => $id,
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

<body class="edit-background">
    <div class="container">
        <style>
            .form-row {
                display: flex;
                align-items: center;
                margin-bottom: 10px;
            }

            .form-row label {
                width: 100px;
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
        <form action="edit.php?id=<?php echo $getDataForId['id'] ?>" method="post">
            <input type="hidden" name="product_name" value="<?php echo $getDataForId['id'] ?>"> <br>
            <label>ProductName</label>
            <input type="text" name="product_name" value="<?php echo $getDataForId['name'] ?>"> <br>
            <label>Price</label>
            <input type="text" name="price" value="<?php echo $getDataForId['price'] ?>"> <br>
            <label>Image</label>
            <input type="text" name="image" value="<?php echo $getDataForId['image'] ?>"><br>
            <label>Remark</label>
            <input type="text" name="remarks" value="<?php echo $getDataForId['remarks'] ?>">
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</body>

</html>