<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Client Portal | Email Activation</title>

    <!-- FONT STYLE -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,600,700,800,900' rel='stylesheet'>

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

    <link href="assets/css/home-001.css" rel="stylesheet">
</head>
<body>

  <header>
    <img src="public/img/MEG-Logo.png" class="logo" alt="Logo Here">
  </header>

  <div class="container">
    <div class="column left">
      <form>
          <div class="form-header">
              <h1 class="header"><b> ACTIVATE ACCOUNT </b></h1>
              <h6 class="subheader"> To create your account, please fill out the following fields: </h6>
          </div>
          <div class="inputs">
              <div class="row g-3" id="row1">
                  <div class="col-md-6">
                      <input type="text" class="form-control" placeholder="First Name" id="inputFirstName">
                  </div>
                  <div class="col-md-6">
                      <input type="text" class="form-control" placeholder="Last Name" id="inputSurname">
                  </div>
                  <div class="col-md-12">
                      <input type="date" class="form-control" placeholder="Birth Date" id="inputBirthdate">
                  </div>
                  <div class="col-md-12">
                      <input type="text" class="form-control" placeholder="+63 | Mobile No." id="inputMobile">
                  </div>
              </div>

              <div class="row g-3" id="row2">
                  <div class="col-md-12">
                      <label for="inputEmail" class="form-label">Email Address</label>
                      <input type="text" class="form-control" id="inputEmail">
                  </div>
                  <div class="col-md-12">
                      <label for="inputPassword" class="form-label">Password</label>
                      <div class="input-group">
                          <input type="password" class="form-control" id="inputPassword">
                          <button class="btn-outline-secondary toggle-icon" type="button" id="togglePassword">
                              <i class="bi bi-eye-slash"></i>
                          </button>
                      </div>
                  </div>
                  <div class="col-md-12">
                      <label for="inputConfirmPassword" class="form-label">Confirm Password</label>
                      <div class="input-group">
                          <input type="password" class="form-control" id="inputConfirmPassword">
                          <button class="btn-outline-secondary toggle-icon" type="button" id="toggleConfirmPassword">
                              <i class="bi bi-eye-slash"></i>
                          </button>
                      </div>
                  </div>
              </div>

              <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="gridCheck1">
                  <p class="form-check-label" for="gridCheck1">
                      I understand and agree to Megaworld Corporation's <u> Privacy Statement </u>
                  </p>
              </div>

              <a href="home-002.php"><button type="button" class="activate-btn text-center">Activate</button></a>
          </div>
      </form>
    </div>
    <div class="column right">
      <div class="phone">
        <img src="public/img/phone-2.png" class="cellphone" alt="">
        <div class="glow"></div>
      </div>
    </div>
  </div>

    <footer>
      <p>© 2024 Megaworld Corporation</p>
      <p>All rights reserved.</p>
      <a href="https://www.megaworldcorp.com/privacy-policy" target="_BLANK">Privacy Policy </a>
      <a href="https://www.megaworldcorp.com/contact" target="_BLANK">Contact Us </a>
      <a href="#">Report a Bug </a>
    </footer>


    <script> 
        const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#inputPassword");
        const toggleConfirmPassword = document.querySelector("#toggleConfirmPassword");
        const confirmPassword = document.querySelector("#inputConfirmPassword");

        togglePassword.addEventListener("click", function() {
          const type = password.getAttribute("type") === "password" ? "text" : "password";
          password.setAttribute("type", type);

          if(password.getAttribute('type') === 'text'){
            togglePassword.innerHTML = '<i class="bi bi-eye"></i>'
          } else{
            togglePassword.innerHTML = '<i class="bi bi-eye-slash"></i>'
          }
        });

        toggleConfirmPassword.addEventListener("click", function() {
          const type = confirmPassword.getAttribute("type") === "password" ? "text" : "password";
          confirmPassword.setAttribute("type", type);

          if(confirmPassword.getAttribute('type') === 'text'){
            toggleConfirmPassword.innerHTML = '<i class="bi bi-eye"></i>'
          } else{
            toggleConfirmPassword.innerHTML = '<i class="bi bi-eye-slash"></i>'
          }
        })

        const form = document.querySelector("form");
          form.addEventListener("submit", function(e){
            e.preventDefault();
        });
    </script>
</body>
</html>
