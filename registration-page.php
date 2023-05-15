<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-registration.css">
    <link rel="icon" type="image\x-icon" href="images\Anchor_Logo.png">
    <title>Registration | Anchor</title>
</head>
<body>
    <div class="nav">
        <a href="index.php" target="_self" class="anchor-logo home">
            <div class="title-anchor">
                    <img src="images\Anchor_Logo.png" alt="img" style="max-width: 47px;">
                    <h1>ANCHOR</h1>
            </div>
        </a>
        <div class="item log-in"><a href="login-page.php" target="_self">Log-in here instead</a></div>
    </div>


    <div class="body-container">

    <div class="inside-container-1">
    </div>

      <div class="inside-container-2">

        <div class="anchor-icon">
            
            
         </div>

         <div class=".quote-1">
            <h2>
                <center>Sign in for a free access to our service!</center>
            </h2>
         </div>


        <div class="form-1">
        
                <form action="register.php" method="POST">
                    <div class="form-section">
                        <input type="text" id="fname" name="fname" placeholder="First Name" >
                        <input type="text" id="lname" name="lname" placeholder="Last Name" >
                        <br>
                        <input type="date" id="dob" name="dob" placeholder="Date of Birth">
                        <input type="text" id="contact-num" name="contact-num" placeholder="Contact Number">
                        <br>
                        <input type="text" id="email" name="email" placeholder="Email Address">
                        <br>
                        <input type="password" id="password" name="password" placeholder="Password">
                        <br>
                        <input type="password" id="repassword" name="repassword" placeholder="Re-enter Password">
                        <br>
                        <input type="radio" id="student" name="student">
                        <label for="student">Student</label>
                        <input type="radio" id="non-student" name="student">
                        <label for="student">Non-Student</label>
                    </div>
                    <br>
                    <input class="id-1" type="button" value="Upload ID">
                    <br><br><br><input class="submit-1" type="submit" value="Create Account">
                </form>  
        </div>

      </div>

    </div>
</body>
</html>