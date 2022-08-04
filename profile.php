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
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

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
        <i id="menu-close" class="fas fa-times"></i>
          <li><a  href="index.php">LogIn</a></li>
          <li><a  href="registration.php">Registration</a></li>
          <li><a href="information.php">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a  href="blog.html">Blog</a></li>
          <li><a  href="profile.php">User Profile</a></li>
      
      

      </ul>
      <img id="menu" src="images/menu.png" alt="" />
    </div>
  </nav>


  
    
  
    <section id="contact">
    <div class="conatiner-fluid">
      <div class="row justify-content-center ">
        <div class="col-lg-4 col-md-6 col-sm-12">
          <form action="insertProfile.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
              <h3>Insert Profile</h3>
            </div>
            <div class="mb-3">
              Username
              <input type="text" class="form-control" name="p_username">

            </div>
            <div class="mb-3">
              Mobile Number 
              <input type="text" class="form-control" name="p_mobile">
            </div>
            <div class="mb-3">
                
              Add Course
              <!-- <input type="text" class="form-control" name="p_course"> -->
           
              <select type="text" class="form-control" name="p_course">
             <option selected> </option>
             <option >Complete React Developer in 2022</option>
             <option >C Programming For Beginners</option>
             <option >The Complete Node.js Developer Course</option>
             <option >HP for Beginners - Become a PHP Master</option>

             </select>
            
</div>
             
            <div class="mb-3">
              Image 
              <input type="file" class="form-control" name="p_image">
            </div>

            <button type="submit" class="btn btn-primary col-12" name="submit">Insert</button>
           
          </form>
        </div>
      </div>
    </div>

    
    <div class="container pt-2">
    <table class="table table-dark table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Number</th>
      <th scope="col">Course</th>
      <th scope="col">image</th>
    </tr>
  </thead>
  <tbody>
       
      <?php
      include 'config.php';

      $allData=mysqli_query($conn,"SELECT * FROM `profile`");
      while($row = mysqli_fetch_array($allData)){
        echo  "<tr>
                 <td>$row[id]</td>
                 <td>$row[name]</td>
                 <td>$row[mobile]</td>
                 <td>$row[course]</td>
                 <td><img src='$row[image]' width='70'=</td>



                </tr>";
      }
      ?>


  </tbody>
</table>
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