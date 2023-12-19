<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Admin login</title>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="admin.css" rel="stylesheet">
   
  </head>

  <body class="text-center">
    <form class="form-signin"  method="post" action="sign_up.php" >
      <img class="mb-4" src="../image/job-logo.jpg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>

      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" name="email" id="email" class="form-control" placeholder="Email address" required autofocus>

      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password"  name="password" id="pass" class="form-control" placeholder="Password" required>
      
      <label for="first_name" class="sr-only">First name</label>
      <input type="first_name" name="first_name" id="first_name" class="form-control" placeholder="enter first name" required autofocus>

      <label for="last_name" class="sr-only">Last name</label>
      <input type="last_name" name="last_name" id="last_name" class="form-control" placeholder="enter last name" required autofocus>

      <label for="inputEmail" class="sr-only">Mobile Number</label>
      <input type="Number" name="mobile_number" id="mobile_number" class="form-control" placeholder="enter your mobile number" required autofocus>

      <label for="inputEmail" class="sr-only">Date of Birth</label>
      <input type="date" name="dob" id="dob" class="form-control" placeholder="enter your date of birth" required autofocus>

      <input class="btn btn-lg btn-primary btn-block" name="submit" id="submit" value="submit" type="submit">
      <a href="new-post.php"> Already have an account </a>
      <p class="mt-5 mb-3 text-muted">&copy; 2022-2023</p>
    </form>
    </body>
</html>

<?php
include('C:\xampp\htdocs\job\connection\db.php');

if(isset($_POST['submit'])){ 
$email=$_POST['email'];
$password=$_POST['password'];
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$dob=$_POST['dob'];
$mobile_number=$_POST['mobile_number'];
$query=mysqli_query($conn,"insert into jobskeer (email,password,first_name,last_name,dob,mobile_number) values('$email','$password','$first_name','$last_name','$dob','$mobile_number')");  
var_dump($query);
if($query) {
echo"<script>alert('now you can login!')</script>";
}else{
    echo "<script>alert('some error pls try again')</script>";
}

?>

?>
  <script>
  window.location.href="../new-post.php";
  </script>
  <?php
}
?>