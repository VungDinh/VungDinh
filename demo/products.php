<?php

include_once("./handle/function.php");
$products = readFileToData("./data/products.json");
if (isset($_GET['key_search'])) {
    // var_dump($_GET['key_search']);die;
    $products =  searchProduct($_GET['key_search'], $products);
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    foreach ($products as $key => $product) {
        if ($product['id'] == $id) {
            $keyCheck = $key;
        }
    }
    unset($products[$keyCheck]);
    $jsonData = json_encode($products);
    file_put_contents("./data/products.json", $jsonData);
    header("Location: http://localhost/VungDinh/demo/products.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>



    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.0/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.3/css/select.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">

    <script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
</head>


<body>

    <body class="products-background">
        <div class="container">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row mt-3">
                        <div class="col-sm-9">
                            <h2>PRODUCTS LIST</h2>
                        </div>
                        <div class="col-sm-3">
                            <a href="create.php" class="btn btn-success" data-toggle="modal"><i class="material-icons"></i> <span>Add New Products</span></a>
                            <a href="#deleteProdcutModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons"></i> <span>Delete</span></a>
                            <br></br>
                            <form action="" method="GET">
                                <div class="input-group rounded">
                                    <input type="search" class="form-control rounded" placeholder="Search" name="key_search" aria-label="Search" aria-describedby="search-addon" />
                                    <button type="submit" class="input-group-text border-0" id="search-addon">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <table border="0" id="selectedColumn" class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">
                                <span class="custom-checkbox">
                                    <input type="checkbox" id="selectAll">
                                    <label for="selectAll"></label>
                                </span>
                            </th>
                            <th scope="col">No</th>
                            <th scope="col">Product name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Picture</th>
                            <th scope="col">Remarks</th>
                            <th scope="col">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($products as $product) {
                        ?>
                            <tr>
                                <td scope="row">
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="selectAll">
                                        <label for="selectAll"></label>
                                    </span>
                                </td>
                                <td><?php echo $product['id'] ?></td>
                                <td><?php echo $product['name'] ?></td>
                                <td><?php echo $product['price'] ?></td>
                                <td><img src="<?php echo $product['image'] ?>" style="width:50px" class="img-responsive"></td>
                                <td><?php echo $product['remarks'] ?></td>
                                <td><a href="http://localhost/VungDinh/demo/edit.php?id=<?php echo $product['id'] ?>"><i class="fas fa-pen " style="color: #f86b0d;"></i></a>&nbsp;
                                    <a href="products.php?id=<?php echo $product['id'] ?>">
                                        <i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>

    </body>
    <script src="js/script.js"></script>

</html>