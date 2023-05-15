<?php

require_once('../db.php');

$query = "select * from users";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="manage-accs.css">
    <title>Admin | Manage Accounts</title>
</head>
<body>
    <?php include "admin-navbar.html"?>
    <div class="container">
        <button>Add User</button>
        <div class="card">
            <table>
                <tr class="row">
                    <td>User ID</td>
                    <td>First Name</td>
                    <td>Last Name</td>
                    <td>Date of Birth</td>
                    <td>Email</td>
                    <td>Password</td>
                    <td>Contact Number</td>
                    <td>Status</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
                <tr>
                    <?php
                        while($row = mysqli_fetch_assoc($result))
                        {
                    ?>
                    <td><?php echo $row['user_id'];?></td>
                    <td><?php echo $row['user_first'];?></td>
                    <td><?php echo $row['user_last'];?></td>
                    <td><?php echo $row['dob'];?></td>
                    <td><?php echo $row['user_email'];?></td>
                    <td><?php echo $row['user_pass'];?></td>
                    <td><?php echo $row['contact_num'];?></td>
                    <td><?php echo $row['status'];?></td>
                    <?php
                        }
                    ?>
                    <td><button>Edit</button></td>
                    <td><button>Delete</button></td>
                </tr>
            </table>
        </div>
    </div>
    
</body>
</html>
