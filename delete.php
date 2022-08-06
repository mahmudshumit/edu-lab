<?php

include 'config.php';
      
   $id= $_GET['id'];

   echo $id;

    $delete_query="DELETE FROM `profile` where id='$id'";

    mysqli_query($conn,$delete_query);

    header("location:profile.php");



?>