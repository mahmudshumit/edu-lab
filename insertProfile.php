<?php
 include 'config.php';


 

$profileName=$_POST['p_username'];
$profileNumber=$_POST['p_mobile'];
$profileCourse=$_POST['p_course'];
$profileImage=$_FILES['p_image'];


// echo gettype($profileName)."<br>";
// echo gettype($profileNumber)."<br>";
// echo gettype($profileCourse)."<br>";
// echo gettype($profileImage)."<br>";

// print_r($profileImage['name' ]);


$profileImageLocation= $profileImage['tmp_name'];
$profileImageName=$profileImage['name'];


$profileImage_des="images/".$profileImageName;

move_uploaded_file($profileImageLocation,$profileImage_des);//server folder save





// echo $profileImage_des ;








$profileInsertQuery="INSERT INTO `profile`( `name`, `mobile`, `course`, `image`) VALUES ('$profileName','$profileNumber','$profileCourse','$profileImage_des')";
if(mysqli_query($conn,$profileInsertQuery)){
    // echo "<script>alert('Product Inserted !')</script>";
    echo "<script>location.href='profile.php'</script>";

}
else{
    echo "<script>alert('Product Not Inserted !')</script>";
    
}





?>