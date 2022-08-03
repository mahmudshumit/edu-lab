<?php


include 'config.php';

$r_username=$_POST['r_username'];
$r_pass=$_POST['r_pass'];
$r_con_pass=$_POST['r_con_pass'];
$r_email=$_POST['r_email'];
$r_mobile=$_POST['r_mobile'];

$mobilePattern="/(\+88)?-?01[3-9]\d{8}/";
$emailPattern="/(cse|eee|law)_\d{10}@lus\.ac\.bd/";
$passpattern="/((?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[!@#$%&*?><+_-])).{8,20}/";

if(strlen($r_username)<3|| strlen($r_username)> 20){
    echo "<script>alert('3-20 char username is allowed')";
}
elseif(!preg_match($passpattern,$r_pass)){
    echo "<script>alert('Valid Password is required')";

}
elseif($r_pass!==$_r_con_pass){
    echo "<script>alert(' Password and Confirm Password is not matching')";

}
elseif(!preg_match($emailPattern,$r_email)){
    echo "<script>alert('Valid Email is required')";
}
elseif(!preg_match($mobilePattern,$r_mobile)){
    echo "<script>alert('Valid Mobile Number is required')";
}
else{
      $insert_query="INSERT INTO `register`( `username`, `pass`, `email`, `mobile`) VALUES ('$r_username','$r_pass','$r_email','$r_mobile')";
      if(! mysqli_query($conn,$insert_query)){
        die("Not Inserted");
      }else{
        echo "<script>alert('Invalid')";
        echo "<script>location.href='login.php'</script>";

      }
    }

   












?>

