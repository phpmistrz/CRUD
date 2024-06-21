<?php


if (isset($_GET['id'])) {

    $id = $_GET['id'];

    include('config/db.php');
    $sql = "DELETE  FROM games WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        header("Location: /index.php");
    }
}