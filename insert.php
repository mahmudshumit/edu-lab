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

 $duplicate_username=mysqli_query($conn,"SELECT * FROM `register` WHERE username='$r_username'");


if(strlen($r_username)<3|| strlen($r_username)> 20){
    echo "<script>alert('3-20 char username is allowed')</script>";
    echo "<script>location.href='registration.php'</script>";
}
elseif( preg_match($passpattern,$r_pass)){
    echo "<script>alert('Valid Password is required')</script>";
    echo "<script>location.href='registration.php'</script>";

}
elseif($r_pass!==$r_con_pass){
    echo "<script>alert(' Password and Confirm Password is not matching')</script>";
    echo "<script>location.href='registration.php'</script>";

}
elseif(!preg_match($emailPattern,$r_email)){
    echo "<script>alert('Valid Email is required')</script>";
    echo "<script>location.href='registration.php'</script>";
}
elseif(!preg_match($mobilePattern,$r_mobile)){
    echo "<script>alert('Valid Mobile Number is required')</script>";
    echo "<script>location.href='registration.php'</script>";
}
 elseif(mysqli_num_rows($duplicate_username)>0){
    echo "<script>alert('User Name taken')</script>";
    echo "<script>location.href='registration.php'</script>";
 }

       $insert_query="INSERT INTO `register`( `username`, `pass`, `email`, `mobile`) VALUES ('$r_username','$r_pass','$r_email','$r_mobile')";
    if(!mysqli_query($conn,$insert_query)){
        die("Not Inserted");
    }else{
        // echo "<script>alert('Inserted')</script>";
        echo "<script>location.href='index.php'</script>";
    }
       
    

   












?>

