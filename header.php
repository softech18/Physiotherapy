<?php
  // Get the current page file name, like 'about.php'
  $currentPage = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Physical Therapy Clinic</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">
  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- Top bar -->
<div class="top py-1">
  <div class="container">
    <div class="row">
      <div class="col d-flex align-items-center">
        <p class="mb-0"><a href="#">chiropractic@email.com</a> | <a href="#">Help Desk</a></p>
      </div>
      <div class="col-4 d-flex justify-content-end">
        <div class="social-media">
          <p class="mb-0 d-flex">
            <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
            <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
            <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a>
            <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"></span></a>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Branding and Contact -->
<div class="wrap">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-md-3 d-flex align-items-center">
        <a class="navbar-brand" href="index.php">Physical Therapy Clinic</a>
      </div>
      <div class="col-md-7">
        <div class="row">
          <div class="col-md-8">
            <div class="top-wrap d-flex">
              <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-location-arrow"></span></div>
              <div class="text"><span>Address</span><span>198 West 21th Street, New York NY</span></div>
            </div>
          </div>
          <div class="col">
            <div class="top-wrap d-flex">
              <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-phone"></span></div>
              <div class="text"><span>Call us</span><span>7008448569</span></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="fa fa-bars"></span> Menu
    </button>
    <div class="order-lg-last">
      <a href="#" class="btn btn-primary">Make an appointment</a>
    </div>
    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item <?php echo ($currentPage == 'index.php') ? 'active' : ''; ?>"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item <?php echo ($currentPage == 'about.php') ? 'active' : ''; ?>"><a href="about.php" class="nav-link">About</a></li>
        <li class="nav-item <?php echo ($currentPage == 'team.php') ? 'active' : ''; ?>"><a href="team.php" class="nav-link">Team</a></li>
        <li class="nav-item <?php echo ($currentPage == 'services.php') ? 'active' : ''; ?>"><a href="services.php" class="nav-link">Services</a></li>
        <li class="nav-item <?php echo ($currentPage == 'department.php') ? 'active' : ''; ?>"><a href="department.php" class="nav-link">Departments</a></li>
        <li class="nav-item <?php echo ($currentPage == 'gallery.php') ? 'active' : ''; ?>"><a href="gallery.php" class="nav-link">Gallery</a></li>
        <li class="nav-item <?php echo ($currentPage == 'blog.php') ? 'active' : ''; ?>"><a href="blog.php" class="nav-link">Blog</a></li>
        <li class="nav-item <?php echo ($currentPage == 'contact.php') ? 'active' : ''; ?>"><a href="contact.php" class="nav-link">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

  </body>
</html>
