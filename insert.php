<?php






$r_username=$_POST['r_username'];
$r_pass=$_POST['r_pass'];
$r_con_pass=$_POST['r_con_pass'];
$r_email=$_POST['r_email'];
$r_mobile=$_POST['r_mobile'];

$mobilePattern="/(\+88)?-?01[3-9]\d{8}/";
$emailPattern="/(cse|eee|law)_\d{10}@lus\.ac\.bd/";
$passpattern="/((?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[!@#$%&*?><+_-])).{8,20}/";

if(strlen($r_username)<3|| strlen($r_username)>20){
    echo "<script>alert('3-20 char username is allowed')";
}elseif(!preg_match($passpattern,$r_pass)){
    echo "<script>alert('3-20 char username is allowed')";

}

   








?>

