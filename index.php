<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>EDU-LAB</title>

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css" />

  <!-- <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script> -->
  <script src="script.js"></script>
  <style>
    form {
      background-color: #fff;
      padding: 15px;
      box-shadow: 0px 0px 10px 0px;
      border-radius: 10px;
    }
  </style>
</head>

<body>

  <!-- navigation -->

  <nav>
    <img src="images/studying.png" alt="" />

    <div class="navigation">
      <ul>
        <i id="menu-close" class="fas fa-times"></i>
    
        
        <li><a class="active" href="index.php">LogIn</a></li>
        <li><a  href="registration.php">Registration</a></li>

      </ul>
      <img id="menu" src="images/menu.png" alt="" />
    </div>
  </nav>


  
    
  
    <section id="contact">
    <div class="conatiner-fluid">
      <div class="row justify-content-center mt-5">
        <div class="col-lg-4 col-md-6 col-sm-12">
          <form action="loginAction.php" method="post">
            <div class="mb-3">
              <h3>Login Form</h3>
            </div>
            <div class="mb-3">
              username
              <input type="text" class="form-control" name="l_username">

            </div>
            <div class="mb-3">
              Password
              <input type="text" class="form-control" name="l_pass">
            </div>

            <button type="submit" class="btn btn-primary col-12" name="login">LogIn</button>
            Not registered? <a href="registration.php"style="text-decoration: none">Register Here</a>
          </form>
        </div>
      </div>
    </div>
    </section>
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
          <a href="#" class="blue">SUBSCRIBE Now!!!!!</a>
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
    </script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>




</body>

</html>