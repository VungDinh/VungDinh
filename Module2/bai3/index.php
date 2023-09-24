<?php
//kết nối csdl
$dsn = 'mysql:host:127.0.0.1;dbname=classicmodels;port= 8111';
$user = 'root';

$password = "123456@ABC";
try{
    //tao ket noi
    $connection = new PDO($dsn,$user, $password);
    echo "connect DB";
}catch (PDOException $e){
    echo "Error";
}

//doc db
$sql = "SELECT*FROM classicmodels.customers LIMIT 5";
//dua sql vao PDO
$stmt = $connection ->prepare ($sql);
//thuc hien truy van csdl
$stmt->execute();
// get ket qua
$result = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=tab, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <caption>danh sach khach hang</caption>
        <tr>
        <td>STT</td>
        <td>Full name</td>
        <td>Phone</td>
        <td>City</td>
        </tr>
        <?php foreach ($result as $key =>$customer):?>
            <tr>
                <td><?php echo $key +1?></td>
                <td><?php echo $customer['customerName'] ?></td>
                <td><?php echo $customer['phone'] ?></td>
                <td><?php echo $customer['city'] ?></td>
            </tr>
            <?php endforeach; ?>
    </table>
</body>
</html>