<?php
include('include/header.php');
include('include/sidebar.php');

include('C:\xampp\htdocs\job\connection\db.php');

if(isset($_POST['submit'])){
  $emailid = $_POST['emailid'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $first_name=$_POST['first_name'];
  $last_name = $_POST['last_name'];
  $admin_type = $_POST['admin_type'];

  $query = "SELECT * FROM admin_login WHERE admin_email='$emailid' ";
  $result1 = mysqli_query($conn, $query);
  if(mysqli_num_rows($result1)>0){
    $error[] = 'user already exists !!';
  }
  else{
  $insert = "INSERT INTO admin_login(admin_email, admin_pass, admin_username, first_name, last_name, admin_type) VALUES('$emailid', '$password', '$username', '$first_name', '$last_name', '$admin_type') ";
  $result= mysqli_query($conn, $insert);
  if($result){
    ?>
    <script>
      alert("Data inserted sucessfully!");
    </script>
    <?php
  }
  else{
    ?>
    <script>
      alert("Data not inserted sucessfully !!!");
    </script>
    <?php
  }
}
}
?>




<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="Customers.php">Customer</a></li>
      <li class="breadcrumb-item"><a href="add_customers.php">Add Customer</a></li>
    </ol>
  </nav>
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2"> Add Customer</h1>

    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group mr-2">

      </div>
      <!-- <a class="btn btn-primary" herf="add_customers.php">Add customer</a> -->
    </div>
  </div>
  <div style="width: 60%; margin-left:25%; background-color:#F2F4F4;">
    <div id="msg"> </div>
    
    <form action="" method="POST" style="margin:5%; padding:5%;" name="customer_form" id="customer_form">
         <?php
            if(isset($error)){
              foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
              }
            }

          ?>
      <div class="from-group">
        <lebel for=" customer email">Enter Email</lebel>
        <input type="email" name="emailid" id="email" class="form-control" placeholder="enter customer email">
      </div>

      <div class="from-group">
        <lebel for=" customer username"> Enter Username</lebel>
        <input type="text" name="username" id="username" class="form-control" placeholder="enter customer username">
      </div>

      <div class="from-group">
        <lebel for=" first name">Enter Password</lebel>
        <input type="pass" name="password" id="password" class="form-control" placeholder="enter password">
      </div>

      <div class="from-group">
        <lebel for=" first name">Enter First Nmae</lebel>
        <input type="text" name="first_name" id="first_name" class="form-control" placeholder="enter first name">
      </div>

      <div class="from-group">
        <lebel for=" last name">Enter Last Name</lebel>
        <input type="text" name="last_name" id="last_name" class="form-control" placeholder="enter last name">
      </div>

      <div class="from-group">
        <lebel for="admin type"> Admin type</lebel>
        <select name="admin_type" class="form-control" id="admin_type">
          <option value="1">super admin</option>
          <option value="2">customer admin</option>
        </select>
      </div>

      <div class="from-group">

        <input type="submit" class="btn btn-block btn-success" placeholder="submit" name="submit" id="submit" onclick="submitForm();">
      </div>


    </form>
  </div>


  <canvas class="my-4" id="myChart" width="900" height="380"></canvas>

  <!-- <h2>Section title</h2> -->
  <div class="table-responsive">

  </div>
</main>
</div>
</div>

<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>
  window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
</script>
<script src="../../assets/js/vendor/popper.min.js"></script>
<script src="../../dist/js/bootstrap.min.js"></script>

<!-- Icons -->
<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
<script>
  feather.replace()
</script>

<!-- database plugin -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready(function() {
    $('#example').DataTable();
  });
</script>
<!-- <script type="text/javascript">
  function submitForm() {
    var email = $('input[name=email]').val();
    var username = $('input[name=username]').val();
    var password = $('input[name=password]').val();
    var firstname = $('input[name=first_name]').val();
    var lastname = $('input[name=last_name]').val();
    var admintype = $('input[name=admin_type]').val();


    if (email != '' && username != '' && password != '' && firstname != '' && lastname != '' && admintype != '') {
      var formData = {
        email: email,
        username: username,
        password: password,
        firstname: firstname,
        lastname: lastname,
        admin_type: admintype
      };
      $('#message').html('<span style="color: red">Processing form. . . please wait. . .</span>');
      $.ajax({
        url: "http://localhost/job/admin/customer_add.php",
        type: 'POST',
        data: job,
        success: function(response) {
          var res = JSON.parse(response);
          console.log(res);
          if (res.success == true)
            $('#message').html('<span style="color: green">Form submitted successfully</span>');
          else
            $('#message').html('<span style="color: red">Form not submitted. Some error in running the database query.</span>');
        }
      });
    } else {
      $('#message').html('<span style="color: red">Please fill all the fields</span>');
    }


  }
</script> -->

</body>


</html>