<?php

include_once "../db/dbConnect.php";
function showPageListGroup() {
    global $conn;
    $sql = "SELECT * FROM test.cities";
    $statement = $conn->prepare($sql);
    $statement->execute();
    $result = $statement->fetchAll();
    include_once "../view/list.php";
}

function showFormAdd()
{
    include_once "../view/add.php";
}

function showFormDetail($id)
{
    global $conn;
    $sql = "SELECT * FROM cities WHERE id = :id";
    $statement = $conn->prepare($sql);
    $statement->bindParam(':id', $id, PDO::PARAM_INT);
    $statement->execute();
    $result = $statement->fetch(PDO::FETCH_ASSOC);
    include_once "../view/detail.php";
}

function showFormEdit($id)
{
    global $conn;
    $sql = "SELECT * FROM cities WHERE id = :id";
    $statement = $conn->prepare($sql);
    $statement->bindParam(':id', $id, PDO::PARAM_INT);
    $statement->execute();
    $result = $statement->fetch(PDO::FETCH_ASSOC);
    include_once "../view/edit.php";
}

function insert($name, $country, $square, $gdp, $decription)
{
    global $conn;
    $sql = "INSERT INTO test.cities(name, country, square, gdp, decription) 
            VALUES (?, ?, ?, ?, ?)";
    $statement = $conn->prepare($sql);
    $statement->bindParam(1, $name);
    $statement->bindParam(2, $country);
    $statement->bindParam(3, $square);
    $statement->bindParam(4, $gdp);
    $statement->bindParam(5, $decription);
    $statement->execute();
}

function update($id, $name, $country, $square, $gdp, $description) {
    global $conn; // Assuming you have established a database connection elsewhere
    $sql = "UPDATE cities SET name = '".$name."', country = '".$country."', square = '".$square."', gdp = '".$gdp."', decription = '".$description."' WHERE id = ". $id;

    // $sql = "UPDATE cities SET name = :name, country = :country, square = :square, gdp = :gdp, decription = :decription WHERE id = :id";
    $statement = $conn->prepare($sql);
    // $statement->bindParam(':name', $name);
    // $statement->bindParam(':country', $country);
    // $statement->bindParam(':square', $square);
    // $statement->bindParam(':gdp', $gdp);
    // $statement->bindParam(':decription', $decription);
    // $statement->bindParam(':id', $id, PDO::PARAM_INT);
    $statement->execute();
}


function delete($id)
{
    global $conn;
    $sql = "DELETE FROM test.cities WHERE id = ?";
    $statement = $conn->prepare($sql);
    $statement->bindParam(1, $id);
    $statement->execute();
}