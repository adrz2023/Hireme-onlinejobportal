<?php
include('C:\xampp\htdocs\job\connection\db.php');
$query = mysqli_query($conn, "select * from job_category");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>JobPortal - Hire me</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/ionicons.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">


  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <div class="navlogo">

        <img src=".\image\logo.png" alt="" height="55" width="50">


        <a class="navbar-brand" href="index.php">HIRE ME</a>

      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
          <li class="nav-item"><a href="" class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
          <?php if(!isset($_SESSION['USER_EMAIL'])){
            ?><li class="nav-item cta mr-md-2" ><a href="./admin/job-post.php" class="nav-link">Post a Job</a></li><?php
          } ?>


          <div style="margin-top:0.5rem; padding-left:0.8rem; " class="dropdown">


            <button  class="btn btn-success " dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             <?php if(isset($_SESSION['USER_EMAIL'])) echo $_SESSION['USER_EMAIL'];else echo "Want a job" ?>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="./admin/new-post.php">Login</a>
              <a class="dropdown-item" href="./admin/sign_up.php">Register</a>
              <a class="dropdown-item" href="./logout.php">Logout</a>
            </div>
          </div>



        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->

  <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
        <div class="col-xl-10 ftco-animate mb-5 pb-5" data-scrollax=" properties: { translateY: '70%' }">
          <p class="mb-4 mt-5 pt-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">We have <span class="number" data-number="850000">0</span> great job offers you deserve!</p>
          <h1 class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Your Dream <br><span>Job is Waiting</span></h1>

          <div class="ftco-search">
            <div class="row">
              <div class="col-md-12 nav-link-wrap">
                <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Find a Job</a>

                  <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Find a Candidate</a>

                </div>
              </div>
              <div class="col-md-12 tab-wrap">

                <div class="tab-content p-4" id="v-pills-tabContent">

                  <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
                    <form action="#" class="search-job">
                      <div class="row">
                        <div class="col-md">
                          <div class="form-group">
                            <div class="form-field">
                              <div class="icon"><span class="icon-briefcase"></span></div>
                              <input type="text" class="form-control" placeholder="eg. Garphic. Web Developer">
                            </div>
                          </div>
                        </div>
                        <div class="col-md">
                          <div class="form-group">
                            <div class="form-field">
                              <div class="select-wrap">
                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                <select name="" id="" class="form-control">
                                  <option value="">Category</option>
                                  <option value="">Full Time</option>
                                  <option value="">Part Time</option>
                                  <option value="">Freelance</option>
                                  <option value="">Internship</option>
                                  <option value="">Temporary</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- <div class="col-md">
			              				<div class="form-group">
			              					<div class="form-field">
				              					<div class="icon"><span class="icon-map-marker"></span></div>
								                <input type="text" class="form-control" placeholder="Location">
								              </div>
							              </div>
			              			</div> -->
                        <div class="col-md">
                          <div class="form-group">
                            <div class="form-field">
                              <input type="submit" value="Search" class="form-control btn btn-primary">
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>

                  <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-performance-tab">
                    <form action="#" class="search-job">
                      <div class="row">
                        <div class="col-md">
                          <div class="form-group">
                            <div class="form-field">
                              <div class="icon"><span class="icon-user"></span></div>
                              <input type="text" class="form-control" placeholder="eg. Adam Scott">
                            </div>
                          </div>
                        </div>
                        <div class="col-md">
                          <div class="form-group">
                            <div class="form-field">
                              <div class="select-wrap">
                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                <select name="" id="" class="form-control">
                                  <option value="">Category</option>
                                  <option value="">Full Time</option>
                                  <option value="">Part Time</option>
                                  <option value="">Freelance</option>
                                  <option value="">Internship</option>
                                  <option value="">Temporary</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- <div class="col-md">
			              				<div class="form-group">
			              					<div class="form-field">
				              					<div class="icon"><span class="icon-map-marker"></span></div>
								                <input type="text" class="form-control" placeholder="Location">
								              </div>
							              </div>
			              			</div> -->
                        <div class="col-md">
                          <div class="form-group">
                            <div class="form-field">
                              <input type="submit" value="Search" class="form-control btn btn-primary">
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section services-section bg-light">
    <div class="container">
      <div class="row d-flex">
        <div class="col-md-3 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services d-block">
            <div class="icon"><span class="flaticon-resume"></span></div>
            <div class="media-body">
              <h3 class="heading mb-3">Search Millions of Jobs</h3>
              <p>A small river named Duden flows by their place and supplies.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services d-block">
            <div class="icon"><span class="flaticon-collaboration"></span></div>
            <div class="media-body">
              <h3 class="heading mb-3">Easy To Manage Jobs</h3>
              <p>A small river named Duden flows by their place and supplies.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services d-block">
            <div class="icon"><span class="flaticon-promotions"></span></div>
            <div class="media-body">
              <h3 class="heading mb-3">Top Careers</h3>
              <p>A small river named Duden flows by their place and supplies.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services d-block">
            <div class="icon"><span class="flaticon-employee"></span></div>
            <div class="media-body">
              <h3 class="heading mb-3">Search Expert Candidates</h3>
              <p>A small river named Duden flows by their place and supplies.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section ftco-counter">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
          <span class="subheading">Categories work wating for you</span>
          <h2 class="mb-4"><span>Current</span> Job Posts</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 ftco-animate">
          <ul class="category">
            <li><a href="#">Web Development <span class="number" data-number="1000">0</span></a></li>
            <li><a href="#">Graphic Designer <span class="number" data-number="1000">0</span></a></li>
            <li><a href="#">Multimedia <span class="number" data-number="2000">0</span></a></li>
            <li><a href="#">Advertising <span class="number" data-number="900">0</span></a></li>
          </ul>
        </div>
        <div class="col-md-3 ftco-animate">
          <ul class="category">
            <li><a href="#">Education &amp; Training <span class="number" data-number="3500">0</span></a></li>
            <li><a href="#">English <span class="number" data-number="1560">0</span></a></li>
            <li><a href="#">Social Media <span class="number" data-number="1000">0</span></a></li>
            <li><a href="#">Writing <span class="number" data-number="2500">0</span></a></li>
          </ul>
        </div>
        <div class="col-md-3 ftco-animate">
          <ul class="category">
            <li><a href="#">PHP Programming <span class="number" data-number="5500">0</span></a></li>
            <li><a href="#">Project Management <span class="number" data-number="2000">0</span></a></li>
            <li><a href="#">Finance Management <span class="number" data-number="800">0</span></a></li>
            <li><a href="#">Office &amp; Admin <span class="number" data-number="7000">0</span></a></li>
          </ul>
        </div>
        <div class="col-md-3 ftco-animate">
          <ul class="category">
            <li><a href="#">Web Designer <span><span class="number" data-number="8000">0</span></span></a></li>
            <li><a href="#">Customer Service <span class="number" data-number="4000">0</span></a></li>
            <li><a href="#">Marketing &amp; Sales <span class="number" data-number="3300">0</span></a></li>
            <li><a href="#">Software Development <span class="number" data-number="1356">0</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
          <span class="subheading">Recently Added Jobs</span>
          <h2 class="mb-4"><span>Recent</span> Jobs</h2>
        </div>
      </div>
      <div class="row">
        <?php
        $query = mysqli_query($conn, "SELECT all_jobs.*,company.company from all_jobs,company WHERE company.customer_email=all_jobs.customer_email;");
        while ($row = mysqli_fetch_array($query)) {
        ?>
          <div class="col-md-12 ftco-animate">

            <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
                <div class="job-post-item-header d-flex align-items-center">
                  <h2 class="mr-3 text-black h3"><?php echo $row['job_title'] ?></h2>
                  <div class="badge-wrap">
                    <span class="bg-primary text-white badge py-2 px-3">Partime</span>
                  </div>
                </div>
                <div class="job-post-item-body d-block d-md-flex">
                  <div class="mr-3"><span class="icon-layers"></span> <a href="#"><?php echo $row['company'] ?></a></div>
                  <div><span class="icon-my_location"></span> <span><?php echo $row['district'] ?>,<?php echo $row['state'] ?>,<?php echo $row['country'] ?></span></div>
                </div>
              </div>

              <div class="ml-auto d-flex">
                <a href="blog-single.php?id=<?php echo $row['job_id'] ?>" class="btn btn-primary py-2 mr-1">Apply Job</a>
                <a href="#" class="btn btn-secondary rounded-circle btn-favorite d-flex align-items-center icon">
                  <span class="icon-heart"></span>
                </a>
              </div>
            </div>
          </div><!-- end -->
        <?php } ?>

      </div>
      <div class="row mt-5">
        <div class="col text-center">
          <div class="block-27">
            <ul>
              <li><a href="#">&lt;</a></li>
              <li class="active"><span>1</span></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">&gt;</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="row">
            <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18 text-center">
                <div class="text">
                  <strong class="number" data-number="14500">0</strong>
                  <span>Jobs</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18 text-center">
                <div class="text">
                  <strong class="number" data-number="4000">0</strong>
                  <span>Members</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18 text-center">
                <div class="text">
                  <strong class="number" data-number="3000">0</strong>
                  <span>Resume</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18 text-center">
                <div class="text">
                  <strong class="number" data-number="1050">0</strong>
                  <span>Company</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="ftco-section testimony-section">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 text-center heading-section ftco-animate">
          <span class="subheading">Testimonial</span>
          <h2 class="mb-4"><span>Happy</span> candidates </h2>
        </div>
      </div>
      <div class="row ftco-animate">
        <div class="col-md-12">
          <div class="carousel-testimony owl-carousel ftco-owl">
            <div class="item">
              <div class="testimony-wrap py-4 pb-5">
                <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                </div>
                <div class="text">
                  <p class="mb-4"> We Appreciate HIRE ME ease of searching candidates and timely support. we feel using HIRE me is really easy and would highly recommend this to all recruiters.</p>
                  <p class="name">kran </p>
                  <span class="position">job seekers</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap py-4 pb-5">
                <div class="user-img mb-4" style="background-image: url(images/person_2.jpg)">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                </div>
                <div class="text">
                  <p class="mb-4">HIRE ME is the best portal to search relevant jobs. We Appreciate HIRE ME's ease of searching jobs and timely support. we feel HIRE ME is really easy and would highly recommend this to all jobseekers..</p>
                  <p class="name">sandy</p>
                  <span class="position">Jobseekers</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap py-4 pb-5">
                <div class="user-img mb-4" style="background-image: url(images/person_3.jpg)">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                </div>
                <div class="text">
                  <p class="mb-4">HIRE ME is the best portal to search relevant jobs. We Appreciate HIRE ME's ease of searching jobs and timely support. we feel HIRE ME is really easy and would highly recommend this to all jobseekers..</p>
                  <p class="name">Aditya</p>
                  <span class="position">UI Designer</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap py-4 pb-5">
                <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                </div>
                <div class="text">
                  <p class="mb-4">HIRE ME is the best portal to search relevant jobs. We Appreciate HIRE ME's ease of searching jobs and timely support. we feel HIRE ME is really easy and would highly recommend this to all jobseekers..</p>
                  <p class="name">Rohit</p>
                  <span class="position">Web Developer</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap py-4 pb-5">
                <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                </div>
                <div class="text">
                  <p class="mb-4">We literally could not find our job in this tough time until we searched HIRE ME. This portal helped us with everything from selection process to get the floor.s.</p>
                  <p class="name">Roger Scott</p>
                  <span class="position">System Analyst</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Our Blog</span>
            <h2><span>Recent</span> Blog</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
              </a>
              <div class="text mt-3">
              	<div class="meta mb-2">
                  <div><a href="#">December 2, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias architecto enim non iste maxime optio, ut com</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text mt-3">
              	<div class="meta mb-2">
                  <div><a href="#">December 2, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet nobis natus incidunt officia assumenda.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text mt-3">
              	<div class="meta mb-2">
                  <div><a href="#">December 2, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi obcaecati praesentium,</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_4.jpg');">
              </a>
              <div class="text mt-3">
              	<div class="meta mb-2">
                  <div><a href="#">December 2, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor minima, dolores quis, dolorum accusamu</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

  <!-- <section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Subcribe to our Newsletter</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
              <div class="row d-flex justify-content-center mt-4 mb-4">
                <div class="col-md-8">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

  <footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">About</h2>
            <p>"Discover, Connect, Succeed:
              Unleash Your Career Potential.
              The Ultimate Online Job Portal.".</p>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Employers</h2>
            <ul class="list-unstyled">
              <li><a href="#" class="py-2 d-block">How it works</a></li>
              <li><a href="#" class="py-2 d-block">Register</a></li>
              <li><a href="#" class="py-2 d-block">Post a Job</a></li>
              <li><a href="#" class="py-2 d-block">Advance Skill Search</a></li>
              <li><a href="#" class="py-2 d-block">Recruiting Service</a></li>
              <li><a href="#" class="py-2 d-block">Blog</a></li>
              <li><a href="#" class="py-2 d-block">Faq</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4 ml-md-4">
            <h2 class="ftco-heading-2">Workers</h2>
            <ul class="list-unstyled">
              <li><a href="#" class="py-2 d-block">How it works</a></li>
              <li><a href="#" class="py-2 d-block">Register</a></li>
              <li><a href="#" class="py-2 d-block">Post Your Skills</a></li>
              <li><a href="#" class="py-2 d-block">Job Search</a></li>
              <li><a href="#" class="py-2 d-block">Emploer Search</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Have a Questions?</h2>
            <div class="block-23 mb-3">
              <ul>
                <li><span class="icon icon-map-marker"></span><span class="text">203 sd block,Purba Medinipur, Kolaghat, India</span></li>
                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+91 6297 52 8867</span></a></li>
                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">hireme@gmail.com</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">

          <p>
            Copyright &copy;<script>
              document.write(new Date().getFullYear());
            </script> All rights reserved | <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">HIRE ME</a>
            </p>
        </div>
      </div>
    </div>
  </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
    </svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

</body>

</html>