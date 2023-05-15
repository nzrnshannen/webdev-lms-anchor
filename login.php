<?php

    require_once('db.php');

    $email = $_POST["uname"];
    $pwd = $_POST["psw"];


    $adminquery = "select * from admin";
    $result = mysqli_query($conn, $adminquery);

    $adminverify = 0;

    while($row = mysqli_fetch_assoc($result))
    {
        if($row['admin_email'] == $email && $row['admin_pass'] == $pwd)
        {
            $adminverify++;
        }
    }

    if($adminverify == 1)
    {
        header("Location: admin-staff\admin-page.php");
    }
    else 
    {
        header("Location: index.php");
    }
?>