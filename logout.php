<?php

session_start();


session_unset();

  
header("location:index.php");
// include('C:\xampp\htdocs\job\connection\db.php');

// $query=mysqli_query($conn,"select * from admin_login where admin_email='{$_SESSION['email']}' and  admin_type='2'");

// if ($query) {
//     header('location: ');
// }

// else{
//     header('location:');
// }
?>