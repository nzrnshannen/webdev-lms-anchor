<?php

    include_once '../db.php';

    if (isset($_GET['id'])) {
    $user_id = $_GET['id'];

    $sql = "DELETE FROM users WHERE user_id = '" . $user_id . "'";
    
    $result=mysqli_query($conn, $sql);

    header("Location: manage-accs.php");
    exit();
    }
?>
