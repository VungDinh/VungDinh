<?php
// ket noi csdl
$dsn = 'mysql:host:127.0.0.1;dbname=brse;port=3306';
$user = 'root';
$password = "";
$connection = null;
try {
    // tao ket noi csdl
    $connection = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo "Error";

    die(500);
}

function getOrderByCustomerId($customerId)
{
    // tu khoa global truy xuat bien ngoai ham
    global $connection;
    $sql = "SELECT * FROM brse.orders 
            WHERE orders.customerNumber = $customerId";
    // dua sql vao pdo
    $stmt = $connection->prepare($sql);
    // thuc hien truy van csdl
    $stmt->execute();
    // get ket qua
    return $stmt->fetchAll();
}

function getCustomer()
{
    // tu khoa global truy xuat bien ngoai ham
    global $connection;
    // doc du lieu database
    $sql = "SELECT * FROM brse.customers LIMIT 10";
    // dua sql vao pdo
    $stmt = $connection->prepare($sql);
    // thuc hien truy van csdl
    $stmt->execute();
    // get ket qua
    return $stmt->fetchAll();
}
function getProduct()
{
    // tu khoa global truy xuat bien ngoai ham
    global $connection;
    // doc du lieu database
    $sql = "SELECT * FROM brse.products LIMIT 5";
    // dua sql vao pdo
    $stmt = $connection->prepare($sql);
    // thuc hien truy van csdl
    $stmt->execute();
    // get ket qua
    return $stmt->fetchAll();
}
