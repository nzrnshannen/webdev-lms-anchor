<?php

require_once('../db.php');

$query = "SELECT * from users";
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
        <button><a href="manage-accs-add.php">Add User</a></button>
        <div class="card">
            <table>
                <tr class="row">
                    <td>User ID</td>
                    <td>Type</td>
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
                    <td><?php echo $row['user_type'];?></td>
                    <td><?php echo $row['user_first'];?></td>
                    <td><?php echo $row['user_last'];?></td>
                    <td><?php echo $row['dob'];?></td>
                    <td><?php echo $row['user_email'];?></td>
                    <td><?php echo $row['user_pass'];?></td>
                    <td><?php echo $row['contact_num'];?></td>
                    <td><?php echo $row['status']; echo "<br>"?></td>
                    <td><a href="edit-acc.php?id=<?php echo $row['user_id'];?>"><button>Edit</button></a></td>
                    <td><a href="delete-acc.php?id=<?php echo $row['user_id'];?>"><button>Delete</button></a></td>
                </tr>
                    <?php

                        }
                    ?>
                    
            </table>
        </div>
    </div>
    
</body>
</html>
