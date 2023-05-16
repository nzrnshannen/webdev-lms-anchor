

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="manage-accs-add.css">
    <title>Manage Accounts: Add User</title>
</head>
<body>
    <?php include "admin-navbar.html";?>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Add User</h1>
            </div>
            <div class="card-body">
                    <form action="acc-add.php" method="POST">
                        <label>First Name: </label>
                        <input type="text" name="first" placeholder="Firstname">
                        <br>
                        <label>Last Name: </label>
                        <input type="text" name="last" placeholder="Last Name">
                        <br>
                        <label>Date of Birth: </label>
                        <input type="date" name="date">
                        <br>
                        <label>Contact Number: </label>
                        <input type="text" name="contact" placeholder="09XXXXXXXXX">
                        <br>
                        <label>Email Address: </label>
                        <input type="email" name="email" placeholder="12@example.com">
                        <br>
                        <label>Password: </label>
                        <input type="password" name="pwd">
                        <br>
                        <br>
                        <center>
                        <label>Type: </label>
                        <label>Student</label>
                        <input type="radio" name="usertype" value="Student">
                        <label>Non-student</label>
                        <input type="radio" name="usertype" value="Non-student">
                        <br>
                        <label>Status: </label>
                        <label>Enable</label>
                        <input type="radio" name="status" value="Enabled">
                        <label>Disable</label>
                        <input type="radio" name="status" value="Disabled">
                        </center>
                        <br>
                        <div class="submit-btn">
                            <input type="submit">
                     </div>
                    </form>
            </div>
        </div>
    </div>
</body>
</html>