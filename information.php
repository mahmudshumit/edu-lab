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

    <!-- <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script> -->
    <script src="script.js"></script>

  </head>
  <body>

    <!-- navigation -->

    <nav>
      <img src="images/studying.png" alt="" />

      <div class="navigation">
        <ul>
          <i id="menu-close" class="fas fa-times"></i>
          
          <li><a href="information.php">Home</a></li>
          <li><a href="about.html">About</a></li>
           
          <li><a  href="blog.html">Blog</a></li>
          <li><a  href="profile.php">User Profile</a></li>
          <li><a  href="index.php">LogIn</a></li>
          <li><a  href="registration.php">Registration</a></li>
          
          <li><a href='logout.php'>Log out </a></li>
         
        </ul>
        <img id="menu" src="images/menu.png" alt="" />
      </div>
    </nav>

    <!-- home-section -->

    <section id="home">
      <h2>Enhance Your Skills with EDU-LAB</h2>
      <p>
        Edu-Lab makes learning engaging & effective by leveraging deep pedagogy
        & cutting edge technology. With offerings ranging from adaptive
        self-learning courses on apps & web to personalised.
      </p>

      <div class="btn">
        <a class="yellow" href="index.php">LogIn Here</a>
        <a class="blue" href="registration.php">Register Here</a>
      </div>
    </section>

    <!-- features -->

    <section id="features">
      <h1>World Class Facilities</h1>
      <p>Ask The Question, Learn With Perfection, Lead With Conviction</p>
      <div class="feature-base">
        <div class="feature-box">
          <i class="far fa-graduation-cap"></i>
          <h3>Scholarship Facilities</h3>
          <p>
            It is our goal to provide you, the international student, with the
            best study abroad and international student scholarship search
            online.
          </p>
        </div>
        <div class="feature-box">
          <i class="far fa-users-class"></i>
          <h3>Online Course</h3>
          <p>
            Online education are famous now days. This is because, it creates
            flexibility so that a working person also can get his post-grad
            degree education completed.
          </p>
        </div>
        <div class="feature-box">
          <i class="far fa-file-certificate"></i>
          <h3>Certification</h3>
          <p>
            Our specialist certificate programs are designed to give you
            job-role training and formal workplace skills.
          </p>
        </div>
      </div>
    </section>

    <!-- Course -->

    <section id="course">
      <h1>Our Popular Courses</h1>
      <p>Engaging courses across subjects</p>
      <div class="course-box">
        <div class="courses">
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
        <div class="courses">
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
        <div class="courses">
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
        <div class="courses">
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
        <div class="courses">
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
        <div class="courses">
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
