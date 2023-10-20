<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .container {
            width: 1024px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <a href="index.php">View list</a>
        <?php
        include_once "../handle/handle.php";

        $page = $_REQUEST['page'] ?? null;
        $action = $_REQUEST['action'] ?? null;
        
        switch ($page) {
            case 'groups':
                if ($action == 'add') {
                    showFormAdd();
                }else if ($action == 'store') {
                    $name = $_REQUEST['name'];
                    $country = $_REQUEST['country'];
                    $square = $_REQUEST['square'];
                    $gdp = $_REQUEST['gdp'];
                    $decription = $_REQUEST['decription'];
                    insert($name, $country, $square, $gdp, $decription);
                    header('Location: index.php');
                }else if ($action == 'delete') {
                    $id = $_REQUEST['id'];
                    delete($id);
                    header('Location: index.php');
                }else if($action == 'edit'){
                    $id = $_REQUEST['id'];
                    showFormEdit($id);
                }else if($action == 'update'){
                    $id = $_REQUEST['id'];
                    $name = $_REQUEST['name'];
                    $country = $_REQUEST['country'];
                    $square = $_REQUEST['square'];
                    $gdp = $_REQUEST['gdp'];
                    $decription = $_REQUEST['decription'];
                    update($id, $name, $country, $square, $gdp, $decription);
                    header('Location: index.php');
                } else if($action == 'detail'){
                    $id = $_REQUEST['id'];
                    showFormDetail($id);
                }

                break;
            default:
                showPageListGroup();
                break;
        }

        ?>
    </div>



</body>

</html>