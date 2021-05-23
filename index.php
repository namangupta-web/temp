<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Electrolize&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Contact</title>
</head>
<body>
    <!-- Nav Bar Start-->
    <div class="nav-container">
        <div class="logo">
            <h1 class="logo-text">Vizion Z Renewables</h1>
        </div>
        <ul class="nav-list">
            <li><a href="../home/index.html">Back to Home</a></li>
        </ul>
    </div>
    <!-- Nav bar End-->

    <main>
        <div class="form-container">
            <h1>Contact Us</h1>
            <h3>Send us your valueable feedbacks and suggestions.</h3>
            <form class="contact-form" method="post" action="contactform.php">            
                <input name="name" autocomplete="off" type="text" class="form-controls text-input" placeholder="Your Name"
                required><br>
                <input name="mail" autocomplete="off" type="text" class="form-controls text-input" placeholder="Your Email Adress"
                required><br>
                <textarea name="message" autocomplete="off" class="form-controls message" placeholder="Message" rows="4"
                required></textarea>
                <br>
                <input name="submit" type="submit" class="form-controls submit-btn" value="SEND MEASSAGE">
            </form>
        </div>
        <div class="contact-container">
            <div class="contact">
                <img src="./images/email.png">
                <div class="text">
                    <h3>Email Adress</h3>
                    <p>infovision90@gmail.com</p>
                </div>
                
            </div>
            <div class="contact">
                <img src="./images/phone-call.png">
                <div class="text">
                    <h3>Mobile Number</h3>
                    <p>+91 9643403374, +91 9650046998</p>
                </div>
                
            </div>
            <div class="contact">
                <img src="./images/social-media.png">
                <div class="text">
                    <h3>Social Media Handles</h3>
                    <ul class="social-list">
                        <li>Twitter - heythere</li>
                        <li>Facebook - heythere </li>
                        <li>Youtube - heythere </li>
                        <li>Instagram - heythere </li>
                    </ul>
                </div>
            </div>

        </div>
    </main>
</body>
</html>