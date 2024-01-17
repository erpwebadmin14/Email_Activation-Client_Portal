<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Portal | Email Activation</title>

    <!--CSS-->
    <link href="assets/css/home-002.css" rel="stylesheet">

    <!-- FONT STYLE -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,600,700,800,900' rel='stylesheet'>

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <!--LOGO OF MEGAWORLD HERE-->
        <img src="public/img/MEG-Logo.png" class="logo" alt="Logo Here">
    </header>
    
    <div class="container">
        <div class="column left">
            <div class="header">
                <img src="../public/img/OTP.png" class="otp-logo" alt="Logo Here">
                <h2>One-Time Password</h2>
                <p>Please provide the OTP that was sent to (client's email address) </p>
            </div>
            <form>
                <div id="inputs" class="inputs"> 
                    <input class="input" type="text" inputmode="numeric" maxlength="1" /> 
                    <input class="input" type="text" inputmode="numeric" maxlength="1" disabled/> 
                    <input class="input" type="text" inputmode="numeric" maxlength="1" disabled/> 
                    <input class="input" type="text" inputmode="numeric" maxlength="1" disabled/> 
                    <input class="input" type="text" inputmode="numeric" maxlength="1" disabled/> 
                    <input class="input" type="text" inputmode="numeric" maxlength="1" disabled/>
                </div> 
                <div class="sub-btn">
                    <a href="home-003.php"><button type="button" id="submit-btn"  class="submit-btn hide text-center" onclick="validateOTP()">Submit</button></a>
                </div>
                <div class="resend-btn">
                    <buton type="button" class="">Resend Code (60)</button>
                </div>
            </form>
        </div>

        <div class="column right">
            
        </div>
    </div>

    <footer>
        <p>© 2024 Megaworld Corporation</p>
        <p>All rights reserved.</p>
        <a href="https://www.megaworldcorp.com/privacy-policy" target="_BLANK">Privacy Policy </a>
        <a href="https://www.megaworldcorp.com/contact" target="_BLANK">Contact Us </a>
        <a href="#">Report a Bug </a>
    </footer>

    <script src="assets/js/otp-script.js"></script> 
</body>
</html>