
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

  <body class="text-center" >
    <form class="form-signin" id="admin_login" method="post" action="" name="admin_login">
      <img class="mb-4" src="../image/job-logo.jpg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>

      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" name="email" id="email" class="form-control" placeholder="Email address" required autofocus>

      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password"  name="pass" id="pass" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <input class="btn btn-lg btn-primary btn-block" name="submit" id="submit" type="submit" placeholder="passward" required>
      <p class="mt-5 mb-3 text-muted">&copy; 2022-2023</p>
    </form>
    </body>
</html>
  
<?php
include('C:\xampp\htdocs\job\connection\db.php');

if(isset($_POST['submit'])){ 
$email=$_POST['email'];
$pass=$_POST['pass'];

$query=mysqli_query($conn,"select * from admin_login where admin_email='$email' and admin_pass='$pass' and admin_type=2");
if(mysqli_num_rows($query)>0) {
  $_SESSION['IS_LOGIN']="YES";
  $row=mysqli_fetch_array($query);
  $_SESSION['TYPE']=$row['admin_type'];
  $_SESSION['EMAIL']=$row['admin_email'];
  echo "Success";
  // print_r($_SESSION);
  // die();
  ?>
 
  <script>
  window.location.href="dashboard.php";
  </script>
   <?php
  //header('location:C:\xampp\htdocs\job\admin\dashboard.php');
}else{
  //echo "Error";
}
}

?>

