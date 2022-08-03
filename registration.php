<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EDU-LAB</title>

    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    />

    <link rel="stylesheet" href="style.css" />

    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <!-- navigation -->
    <nav>
      <img src="images/studying.png" alt="" />

      <div class="navigation">
        <ul>
          <i id="menu-close" class="fas fa-times"></i>
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="course.html">Courses</a></li>
          <li><a href="contact.html">Contact</a></li>
          <li><a href="blog.html">Blog</a></li>
          
          <li><a  href="login.php">LogIn</a></li>
          <li><a class="active" href="registration.php">Registration</a></li>
         
        </ul>
        <img id="menu" src="images/menu.png" alt="" />
      </div>
    </nav>

    <!-- registration-section -->

    <section id="registration">
     
      <div class="container">
        <form id="form" action="insert.php" method="post" >
          <h2>Registration</h2>
          <div class="input-control">
            <label for="username">Username</label>
            <input id="username" name="r_username" type="text" />
            <div class="error"></div>
          </div>
          <div class="input-control">
            <label for="password">Password</label>
            <input id="password" name="r_pass" type="text" />
            <div class="error"></div>
          </div>
          <div class="input-control">
            <label for="confirmpassword">Confirm Password</label>
            <input id="confirmpassword" name="r_con_pass" type="text" />
            <div class="error"></div>
          </div>
          <div class="input-control">
            <label for="email">Email</label>
            <input id="email" name="r_email" type="text" />
            <div class="error"></div>
          </div>
          <div class="input-control">
            <label for="phone">Phone-Number</label>
            <input id="phone" name="r_mobile" type="text" />
            <div class="error"></div>
          </div>

          <button type="submit">Register</button>
          Already registered? <a href="login.php"style="text-decoration: none">Login Here</a>
        </form>
      </div>
    </section>

    <!-- footer -->

    <footer>
      <div class="footer-col">
        <h3>Top Courses</h3>
        <li>Web Development Course</li>
        <li>C Programming Course</li>
        <li>CodeX</li>
      </div>
      <div class="footer-col">
        <h3>Quick Links</h3>
        <li>Jobs</li>
        <li>Brand Assest</li>
        <li>Terms of Service</li>
      </div>
      <div class="footer-col">
        <h3>Resources</h3>
        <li>Guides</li>
        <li>Research</li>
        <li>Experts</li>
      </div>
      <div class="footer-col">
        <h3>Newsletter</h3>
        <div class="subscribe">
          <p>you can trust us, we only send promo offer</p>
          <input type="text" placeholder="Your Email Address" />
          <a href="#" class="blue">SUBSCRIBE</a>
        </div>
      </div>
      <div class="copyright">
        <p>©2022, EDU-LAB. All Rights Reserved</p>
      </div>
    </footer>

    <!-- JavaScript for navbar closing -->
    <script>
      $("#menu").click(function () {
        $("nav .navigation ul").addClass("active");
      });
      $("#menu-close").click(function () {
        $("nav .navigation ul").removeClass("active");
      });

      //  Form Validation
      

      // const form = document.getElementById("form");
      // const username = document.getElementById("username");
      // const email = document.getElementById("email");
      // const phone = document.getElementById("phone");
      // const password = document.getElementById("password");
      // const confirmpassword = document.getElementById("confirmpassword");


      // form.addEventListener("submit", (e) => {
      //   e.preventDefault();

      //   validateInputs();
      // });

      // const setError = (element, message) => {
      //   const inputControl = element.parentElement;
      //   const errorDisplay = inputControl.querySelector(".error");

      //   errorDisplay.innerText = message;
      //   inputControl.classList.add("error");
      //   inputControl.classList.remove("success");
      // };

      // const setSuccess = (element) => {
      //   const inputControl = element.parentElement;
      //   const errorDisplay = inputControl.querySelector(".error");

      //   errorDisplay.innerText = "";
      //   inputControl.classList.add("success");
      //   inputControl.classList.remove("error");
      // };
      // const isValidPassword = (password) => {
      //   const re = /((?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[!@#$%&*?><+_-])).{8,20}/;
      //   return re.test(String(password).toLowerCase());
      // };
      // const isValidConfirmPassword = (confirmpassword) => {
      //   const re = /((?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[!@#$%&*?><+_-])).{8,20}/;
      //   return re.test(String(confirmpassword).toLowerCase());
      // };
      // const isValidEmail = (email) => {
      //   const re = /(cse|eee|law)_\d{10}@lus\.ac\.bd/;
      //   return re.test(String(email).toLowerCase());
      // };
      // const isValidNumber = (phone) => {
      //   const re = /(\+88)?-?01[3-9]\d{8}/;
      //   return re.test(String(phone));
      // };

      // const validateInputs = () => {
      //   const usernameValue = username.value.trim();
      //   const emailValue = email.value.trim();
      //   const phoneValue = phone.value.trim();
      //   const passwordValue = password.value.trim();
      //   const confirmpasswordValue = confirmpassword.value.trim();

      //   if (usernameValue === "") {
      //     setError(username, "Username is required");
      //   } else {
      //     setSuccess(username);
      //   }
      //   if (passwordValue!==confirmpasswordValue) {
      //     setError(password, "Same Password is required");
      //   } else if (passwordValue==confirmpasswordValue){
      //     setSuccess(password);
      //   }
      //   if (passwordValue!==confirmpasswordValue) {
      //     setError(confirmpassword, "Same Password is required");
      //   } else if (passwordValue==confirmpasswordValue){
      //     setSuccess(confirmpassword);
      //   }
        
     

      //   if (emailValue === "") {
      //     setError(email, "Email is required");
      //   } else if (!isValidEmail(emailValue)) {
      //     setError(email, "Provide a valid email address");
      //   } else {
      //     setSuccess(email);
      //   }
      //   if (phoneValue === "") {
      //     setError(phone, "Number is required");
      //   } else if (!isValidNumber(phoneValue)) {
      //     setError(phone, "Provide a valid Phone-Number");
      //   } else {
      //     setSuccess(phone);
      //   }
      // };
    </script>
  </body>
</html>
