<?php
    include_once 'db.php';
    
    $first = $_POST["fname"];
    $last = $_POST["lname"];
    $type = $_POST["usertype"];
    $dob = $_POST["dob"];
    $contact = $_POST["contact-num"];
    $email = $_POST["email"];
    $password = $_POST ["password"];
    $repassword = $_POST["repassword"];


    if($password!=$repassword)
    {
        header("Location: registration-page.php?=error");
    }
    else
    {
        $sql = "INSERT INTO confirm_acc(fname, lname, usertype, birth_date, contact_num, user_email, user_pwd) VALUES ('$first', '$last', '$type', '$dob', '$contact', '$email', '$password');";

        mysqli_query($conn, $sql);

        header("Location: registration-page.php?=success");
    }    
?>