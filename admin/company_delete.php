<?php
 include('C:\xampp\htdocs\job\connection\db.php');
 $del=$_GET['del'];

 $query=mysqli_query($conn,"delete from company where id ='$del'");

 if($query) {
    echo "<script>alert('record have been successfully deleted !!!')</script>" ;
    header("location:create_company.php");
 }else{
    echo "<script>alert('record have been successfully deleted !!!')</script>" ;
 }

 ?>