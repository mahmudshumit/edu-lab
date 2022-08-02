<?php
session_start();

if(isset($_SESSION['username'])){
    echo "Now you are welcome to this page <br>";
    echo "<br><a href='logout.php'><input type='button' value='logout'> </a><br>";
}
else{
     
    echo "<script>alert('Access Denied')</script>";
    echo "<script>location.href='login.php'</script>";
}