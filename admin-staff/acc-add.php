<?php
    include_once '../db.php';

    $first = $_POST["first"];
    $last = $_POST["last"];
    $type = $_POST["usertype"];
    $dob = $_POST["date"];
    $contact = $_POST["contact"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $status = $_POST["status"];

    $sql = "INSERT INTO users(user_type, user_first, user_last, dob, user_email, user_pass, contact_num, status) VALUES ('$type', '$first', '$last', '$dob', '$email', '$pwd', '$contact', '$status');";

    mysqli_query($conn, $sql);

    header("Location: manage-accs.php?success=true");
?>