<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content= "IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <?php include "admin-navbar.html"?>
    <div class="container">
        <div class="card">
            <form method="POST" action="update.acc.php">
                <input type="hidden" name="id" value="" />
                <label for="">First Name:</label>
                <input type="text" name="first_name" value="">
                <br>
                <label for="">Last Name:</label>
                <input type="text" name="last_name" value="">
                <br>
                <label for="">DOB</label>:
                <input type="date" name="dob" value="">
                
                <br>
                <label for="">Email</label>:
                <input type="text" name="email" value="">
                <br>
                <label for="">Password</label>:
                <input type="password" name="pwd" value="">
                <br>
                <label for="">Contact</label>:
                <input type="text" name="contact" value="">
                <br>
                <label for="">Status</label>:
                <input type="text" name="status" value="">
                
                <input type="submit" value="Update">
            </form>
        </div>
    </div>
</body>
</html>
