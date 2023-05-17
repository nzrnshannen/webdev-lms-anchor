<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Arvo" />
    <link rel="icon" type="image\x-icon" href="images\Anchor_Logo.png">
    <title>Anchor</title>
</head>

<body>
    <div class="nav">
        <a href="index.php" target="_self" class="anchor-logo home">
            <div class="title-anchor">
                    <img src="images\Anchor_Logo.png" alt="img" style="max-width: 47px;">
                    <h1>ANCHOR</h1>
            </div>
        </a>
        <div class="item about"><a href="#about-container">About</a></div>
        <div class="item contact-us"><a href="#contact-us">Contact Us</a></div>
        <div class="item log-in"><a href="login-page.php" target="_self">Log in</a></div>
    </div>

    <div class="container">
            <div class="create-account">
                <a href="registration-page.php" target="_blank" title="Click to register">Create an account — it's totally free!</a>
            </div>
            <div class="body-container">
                <div class="img-gallery-container">
                    <div class="img-gallery">
                        <center><img src="images\library-index.jpg" style="max-width: 65rem; "></center>
                    </div>
                </div>
                <div class="divider">
                </div>
                <div id="about-container">
                    <h2>About</h2>
                    <div class="about-divider">

                    </div>
                    <div id="services-section" class="about-item">
                        <h2>Our Services</h2>
                        <p>Get to know more about our site's services!</p>
                        <div class="services-container">
                            <div class="service-a">
                                <h3>Search Without Inconvenience</h3>
                                <p>Our management system is designed to save you time and effort.</p>
                            </div>
                            <div class="service-b">
                                <h3>Say Goodbye To Manual Entry</h3>
                                <p>Maximize the use of the library's resources with our powerful analytics and reporting tools.</p>
                            </div>
                        
                            <div class="service-c">
                                    <h3>Keep Track With Your Records</h3>
                                    <p>View your borrowing history and track due date with our digital library card! Convenient, right?</p>
                            </div>
                        </div>
                    </div>
                    <div class="divider">

                    </div>
                    <div id="developers-section" class="about-item">
                        <h2>Meet the Developers</h2>
                        <div class="dev-list">
                            <div class="dev">
                                <div class="circle-border">
                                    <img src="images\nazareno_developer.jpg" alt="Developer's Picture: Shannen Nazareno">
                                </div>
                                <p>Shannen T. Nazareno</p>
                            </div>
                            <div class="dev">
                                <div class="circle-border"><img src="images\englis_developer.jpg" alt = "Developer's Picture: Clint Laurence Englis"></div>
                                <p>Clint Laurence Englis</p>
                            </div>
                            <div class="dev">
                                <div class="circle-border">
                                    <img src="images\test.jpg">
                                </div>
                                <p>Lanz Kirby Codilla</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <footer>
        <div id="contact-us">
            <h2>Contact Us</h2>
            <div class="icons">
                <p>Get to know more about us!</p>
                <div class="icon-links">
                    <a href="https://facebook.com" target="_blank">
                        <div class="social-links">
                            <img src="images\facebook.png">
                        </div>
                    </a>
                    <a href="https://instagram.com" target="_blank">
                        <div class="social-links">
                            <img src = "images\instagram.png">
                        </div>
                    </a>
                    <a href="https://linkedin.com" target="_blank">
                        <div class="social-links">
                            <img src="images\linkedin.png">
                        </div>
                    </a>
                </div>
            </div>
            <form>
                <div>
                    <label>Name: </label>
                    <input type="text" class="input-name" placeholder="Enter name here..." required>
                    
                    <label>Email Address: </label>
                    <input type="email" class="input-email" placeholder="12345@example.com" required>
                    <textarea placeholder="Type your message here!" maxlength="4000" class="input-msg" required></textarea>
                    
                    <input type="submit" class="form-btn">
                </div>
            </form>
         
        </div>

    </footer>
</body>
</html>