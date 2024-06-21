<?php

include('../config/db.php');

if (isset($_POST['create'])) {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $developer = mysqli_real_escape_string($conn, $_POST['developer']);
    $console = mysqli_real_escape_string($conn, $_POST['console']);
    $note = mysqli_real_escape_string($conn, $_POST['note']);
    
    $sql = "INSERT INTO games (title, developer, console, note) VALUES ('$title', '$developer', '$console', '$note')";
    
    if (mysqli_query($conn, $sql)) {
        header("Location: /index.php");
    } else {
        die('Coś poszło nie tak');
    }
}


if (isset($_POST['edit'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $developer = mysqli_real_escape_string($conn, $_POST['developer']);
    $console = mysqli_real_escape_string($conn, $_POST['console']);
    $note = mysqli_real_escape_string($conn, $_POST['note']);
    
    $sql = "UPDATE games SET title='$title', developer='$developer', console='$console', note='$note' WHERE id=$id";
    
    if (mysqli_query($conn, $sql)) {
        header("Location: /view.php?id={$id}");
    } else {
        die('Coś poszło nie tak');
    }
}


