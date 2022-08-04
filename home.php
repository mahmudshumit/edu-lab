<?php



  // echo "Welcome to this page";
  
  session_start();
  

   if(isset($_SESSION['username'])){

    // echo "<h2> hello ".$_SESSION['username']."</h2><br>";

   

    // echo "<br><a href='logout.php'><input type='button' value='logout'> </a><br>";
    include 'information.php';
   }
  
   
    else 
    {
        
        // echo "<script>alert('Invalid User')</script>";
        echo "<script>location.href='index.php'</script>";
    }
  


?>