<?php
    include_once'../db.php';

    $title = $_POST["title"];
    $author = $_POST["author"];
    $no_of_pages = $_POST["no_of_pages"];
    $status = $_POST["status"];

    $sql = "INSERT INTO books(title, author, no_of_pages, status) VALUES ('$title', '$author', '$no_of_pages', '$status');";

    mysqli_query($conn, $sql);

    header("Location: manage-books.php?success=true");
?>