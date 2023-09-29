<?php

include_once "../db/dbConnect.php";
function showPageListGroup() {
    global $conn;
    $sql = "SELECT * FROM student_manager.st_groups";
    $statement = $conn->prepare($sql);
    $statement->execute();
    $result = $statement->fetchAll();
    include_once "../view/list-group.php";
}

function showFormAdd()
{
    include_once "../view/add-group.php";
}

function showFormDetail()
{
    include_once "../view/detail.php";
}

function showFormEdit()
{
    include_once "../view/edit.php";
}

function insertGroup($name)
{
    global $conn;
    $sql = "INSERT INTO student_manager.st_groups(name) 
            VALUES (?)";
    $statement = $conn->prepare($sql);
    $statement->bindParam(1, $name);
    $statement->execute();
}

function deleteGroup($id)
{
    global $conn;
    $sql = "DELETE FROM student_manager.st_groups WHERE id = ?";
    $statement = $conn->prepare($sql);
    $statement->bindParam(1, $id);
    $statement->execute();
}