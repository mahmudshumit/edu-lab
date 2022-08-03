<?php



  echo "Welcome to this page";
  
  session_start();
  

   if(isset($_SESSION['username'])){

    echo "<h2> hello ".$_SESSION['username']."</h2><br>";

    echo "<a href='information.php'>Information </a><br>";

    echo "<br><a href='logout.php'><input type='button' value='logout'> </a><br>";
   }
  else{
    if($_POST['username']==$username && $_POST['pass']==$pass){

      $_SESSION['username']=$username;
      echo "<script>location.href='home.php'</script><br>";

      echo "Home page";
  
    }
   
    else 
    {
        
        echo "<script>alert('Invalid User')</script>";
        echo "<script>location.href='login.php'</script>";
    }
  
  }


?>