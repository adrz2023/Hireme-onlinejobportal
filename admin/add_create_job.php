<?php
include('include/header.php');
include('include/sidebar.php');


if (isset($_POST['submit'])) {

  $customer_email = $_SESSION['EMAIL'];
  $job_title = $_POST['job_title'];
  $des = $_POST['des'];
  $country = $_POST['country'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $category = $_POST['category'];
  $keyword = $_POST['keyword'];

  $query = "SELECT * FROM all_jobs WHERE customer_email='$customer_email' and job_title='$job_title'";
  $result1 = mysqli_query($conn, $query);
  if (mysqli_num_rows($result1) > 0) {
    $error[] = 'company already exists !!';
  } else {
    $insert = "INSERT INTO all_jobs(customer_email, job_title, des, country, district,state,category,keyword) VALUES('$customer_email','$job_title','$des','$country','$city','$state','$category','$keyword') ";
    $result = mysqli_query($conn, $insert);
    if ($result) {
?>
      <script>
        alert("Data inserted sucessfully!");
      </script>
    <?php
    } else {
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
      <li class="breadcrumb-item"><a href="job_create.php">All jobs</a></li>
      <li class="breadcrumb-item"><a href="add_customers.php">Add Job</a></li>
    </ol>
  </nav>
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2"> Add job </h1>

    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group mr-2">

      </div>
      <!-- <a class="btn btn-primary" herf="add_customers.php">Add customer</a> -->
    </div>
  </div>
  <div style="width: 60%; margin-left:25%; background-color:#F2F4F4;">

    <form action="" method="POST" style="margin:5%; padding:5%;" name="company_form" id="company_form">
      <?php
      if (isset($error)) {
        foreach ($error as $error) {
          echo '<span class="error-msg">' . $error . '</span>';
        }
      }

      ?>
      <div class="from-group">
        <lebel for=" customer email">job title</lebel>
        <input type="text" name="job_title" id="job_title" class="form-control" placeholder="enter job title">
      </div>

      <div class="from-group">
        <lebel for=" customer username"> Description</lebel>
        <textarea name="des" id="des" class="form-control" placeholder="enter job description" cols="30" rows="10"></textarea>
      </div>

      <div class="from-group">
        <lebel for=" customer username"> Keyword</lebel>
        <input type="text" class="form-control" name="keyword" id="keyword" placeholder="enter keyword">
      </div>

      <div class="from-group">
        <lebel for="">Country</lebel>
        <select name="country" class="countries form-control" id="countryId">
          <option value="">Select Country</option>
          <option value="India">India</option>
        </select>
      </div>

      <div class="from-group">
        <lebel for="">State</lebel>
        <select name="state" class="states form-control" id="stateId" onchange="getDistricts()">
          <option value="">Select State</option>
        </select>
      </div>

      <div class="from-group">
        <lebel for="">District</lebel>
        <select name="city" class="cities form-control" id="cityId">
          <option value="">Select District</option>
        </select>
      </div>
        <br>
      <div class="from-group">
        <lebel for=""> Select Category</lebel>
        <select name="category" class="categories from-control" id="categoryid">
        <?php
        $q=mysqli_query($conn,'select * from job_category');
                    while ($row=mysqli_fetch_array($q)){
                      ?>
                      <option value="<?php echo $row['id'] ?>"><?php echo $row['category']; ?></option>
                      <?php
                    }
                    ?>
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
<!-- <script>
  $(document).ready(function(){
    $("submit").click(function(){
      var Description=$("#Description").val();
      var Company=$("#Company").val();

      if (Description==''){
        alert("please enter description");
        return false;
      }

      if (Description==''){
        alert("please enter Company name");
        return false;
      var data=$("#Company_form").serialize();

     $.ajax({
      type:"post",
      url:"customer_add.php",
      data:data,
      success:function(data){
        alert(data);
      }

    });
  });
});
</script> -->
</body>

</html>