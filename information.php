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
          <li><a  href="index.php">LogIn</a></li>
          <li><a  href="registration.php">Registration</a></li>
          <li><a href="home.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="information.php">Courses</a></li>
          <li><a href="contact.html">Contact</a></li>
          <li><a  href="blog.html">Blog</a></li>
          
          
       
        </ul>
        <img id="menu" src="images/menu.png" alt="" />
      </div>
    </nav> 
    <!-- course home section -->

    <section id="about-home">
      <h2>Courses</h2>
    </section>

   

    <section id="course">
      <h1>Our Popular Courses</h1>
      <p>Engaging courses across subjects</p>
      <div class="course-box">
        <div
          
          class="courses"
        >
          <img src="images/c1.png" alt="" />
          <div class="details">
            <h6>Complete Guide In HTML, CSS & JavaScript Bootcamp</h6>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
          </div>
          <div class="cost">$120.99</div>
        </div>
        <div
         
          class="courses"
        >
          <img src="images/c2.png" alt="" />
          <div class="details">
            <h6>Java Programming for Complete Beginners</h6>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
          </div>
          <div class="cost">$70.99</div>
        </div>
        <div
          
          class="courses"
        >
          <img src="images/c3.png" alt="" />
          <div class="details">
            <h6>C Programming For Beginners - Master the C Language</h6>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
          </div>
          <div class="cost">$34.99</div>
        </div>
        <div
         
          class="courses"
        >
          <img src="images/c4.png" alt="" />
          <div class="details">
            <h6>Complete React Developer in 2022 (w/ Redux, Hooks, GraphQL)</h6>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
          </div>
          <div class="cost">$47.99</div>
        </div>
        <div
         
          class="courses"
        >
          <img src="images/c5.png" alt="" />
          <div class="details">
            <h6>The Complete Node.js Developer Course</h6>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
          </div>
          <div class="cost">$60.99</div>
        </div>
        <div
        
          class="courses"
        >
          <img src="images/c6.jpg" alt="" />
          <div class="details">
            <h6>PHP for Beginners - Become a PHP Master</h6>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
          </div>
          <div class="cost">$70s.99</div>
        </div>
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
    <!-- <br><a href='logout.php'><input type='button' value='logout'> </a><br> -->
    <!-- JavaScript for navbar closing -->
    
    <script>
      $("#menu").click(function () {
        $("nav .navigation ul").addClass("active");
      });
      $("#menu-close").click(function () {
        $("nav .navigation ul").removeClass("active");
      });
    </script>
  </body>
</html>

<!-- onclick="window.location.href='course-inner.html';" -->