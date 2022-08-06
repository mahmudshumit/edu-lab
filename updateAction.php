<?php


include 'config.php';
$id =$_POST['id'];

$Updatename=$_POST['p_username'];
$Updatemobile=$_POST['p_mobile'];
$Updatecourse=$_POST['p_course'];
$Updateimage=$_FILES['p_image'];

$imageLocation=$Updateimage['tmp_name'];
$imageName=$Updateimage['name'];


$image_des ="images/" .$imageName;

move_uploaded_file($imageLocation,$image_des);

$updateQuery="UPDATE `profile` SET `name`='$Updatename',`mobile`='$Updatemobile',`course`='$Updatecourse',`image`='$image_des' WHERE id='$id'";

if(!mysqli_query($conn,$updateQuery)){
    //   echo "<script>alert('Product Not Inserted !')</script>";
     echo "<script>location.href='profile.php'</script>";
}
else{
    //   echo "<script>alert('Product  Inserted !')</script>";
     echo "<script>location.href='profile.php'</script>";
}


?>