<?php

    include_once '../db.php';

    if(isset($_GET['id'])){
        $book_id = $_GET['id'];

        $sql = "DELETE FROM books WHERE book_id = '" . $book_id . "'";

        $result = mysqli_query($conn, $sql);

        header("Location: manage-books.php");
    }

?>