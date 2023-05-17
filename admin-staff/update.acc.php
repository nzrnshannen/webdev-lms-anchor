<?php
include_once('../db.php');

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $dob = mysqli_real_escape_string($conn, $_POST['dob']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);

    $update = "UPDATE users SET user_first='$first_name',user_last='$last_name', dob='$dob', user_email='$email', user_pass= $pwd', contact_num='$contact', status='$status' WHERE user_id= $id";
    if (mysqli_query($conn, $update)) {
        echo "Record updated successfully.";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}

$row = null; 
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $id = mysqli_real_escape_string($conn, $id);
    $result = mysqli_query($conn, "SELECT * FROM users WHERE user_id = $id");
    if ($result) {
        $row = mysqli_fetch_array($result);
        // Process the fetched data here
    } else {
        echo "Error retrieving the record: " . mysqli_error($conn);
    }
}
?>
