<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-login.css" />
    <link rel="icon" type="image\x-icon" href="images\Anchor_Logo.png">
    <title>Log-in | Anchor</title>
</head>
<body>
    <div class="nav">
        <a href="index.php" target="_self" class="anchor-logo home">
            <div class="title-anchor">
                    <img src="./images/Anchor_Logo.png" alt="img" style="max-width: 47px;">
                    <h1>ANCHOR</h1>
            </div>
        </a>
        <div class="item log-in"><a href="registration-page.php" target="_blank">I don't have an account yet</a></div>
    </div>
    <div class="body-container">
        <div class="inside-container">
            <form action="login.php" method="POST">
                <div class="title-login">
                    <h2><strong>LOG IN</strong></h2>
                </div>
                <div class="form-1">
                    <input type="text" placeholder="Email or username" style="width: 28.5rem" id="uname" name="uname" required><br>
                    <input type="password" placeholder="Password" name="psw" style="width: 28.5rem" id="pass" required><br>
    
                    <button type="submit" id="submit-1">Submit</button><br>
                    <div class="admin-1"><a href="#" target="_blank">Forgot Password</a></div>   
                </div>
            </form>
    </div>
    </div>
</body>
</html>