<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Jumawan Portfolio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!DOCTYPE html>

  <!-- Link Styles -->
  <link rel="stylesheet" href="style.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Mrs+Eaves:300,400,500,600,700|Oswald:wght@200..700&display=swap|DM+Serif+Display:ital@0;1&display=swap|DM+Serif+Display:ital@0;1&family=Lobster&display=swap|DM+Serif+Display:ital@0;1&family=Lobster&family=Madimi+One&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <?php
      include 'database.php';

      $sql = "SELECT * FROM `admindetail`";
      $result = mysqli_query($connect, $sql);
      if (mysqli_num_rows($result) == 0) {
        echo 'No Data Yet';
      } else {
        $row = mysqli_fetch_assoc($result);
      }
      ?>
      </div>

      <!-- <div class="sidebar">
    <div class="logo_details">
      <i class="bx bxl-audible icon"></i>
      <div class="logo_name">AJ Portfolio</div>
      <i class="bx bx-menu" id="btn"></i>
    </div>
    <ul class="nav-list">
      <li>
        <a href="#">
          <i class="bx bx-grid-alt"></i>
          <span class="link_name">Home</span>
        </a>
        <span class="tooltip">Home</span>
      </li>
      <li>
        <a href="#">
          <i class="bx bx-user"></i>
          <span class="link_name">About</span>
        </a>
        <span class="tooltip">About</span>
      </li>
      <li>
        <a href="#">
          <i class="bx bx-user"></i>
          <span class="link_name">Experiences</span>
        </a>
        <span class="tooltip">Experiences</span>
      </li>
      <li>
        <a href="#">
          <i class="bx bx-user"></i>
          <span class="link_name">Education</span>
        </a>
        <span class="tooltip">Education</span>
      </li>
      <li>
          <i class="bx bx-folder"></i>
          <span class="link_name">Skills</span>
        </a>
        <span class="tooltip">Skills</span>
      </li>
      <li>
          <i class="bx bx-book-content"></i>
          <span class="link_name">Portfolio</span>
        </a>
        <span class="tooltip">Portfolio</span>
      </li>
      <li>
          <i class="bx bx-envelope"></i>
          <span class="link_name">Contact</span>
        </a>
        <span class="tooltip">Contact</span>
      </li>
    </ul>
  </div>
  <section class="home-section">
    <div class="text">Dashboard</div>
  </section>
  Scripts
  <script src="main.js"></script> -->
      <nav id="navbar" class="nav-menu navbar">
        <div class="logo">
          <img src="assets/img/logo.jpg" alt="">
          <h1>AJ Portfolio</h1>
        </div>
        <ul class="nav-list">
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="#experience" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Experiences</span></a></li>
          <li><a href="#educ" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Education</span></a></li>
          <li><a href="#skill" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Skill</span></a></li>
          <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
          <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
          <li><a href="cv_jez.pdf" target="_blank" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
        </ul>
        <section class="home-section">
  </section>
      </nav>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
    <h1><?php echo $row['firstName'] ?> <?php echo $row['lastName'] ?>
  </h1>
      <p>I'm a <span class="typed" data-typed-items=<?php echo $row['occup'] ?>></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          <?php echo $row['aboutMe'] ?>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="assets/img/me.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">

            </p>
            <div style="padding-left: 30px; font-size: 30px; width: 100%; " class="row">
              <div class="col-lg-6">
                <ul style="width: 700px;">
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span><?php echo $row['birthday'] ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span><?php echo $row['web'] ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span><?php echo $row['contact'] ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span><?php echo $row['email'] ?></span></li>
                </ul>
              </div>
            </div>
           
           
          </div>
        </div>
        <br>
        <br>
  
        <div class="section-title">
          <h2>Experiences</h2>
          <?php echo $row['experience'] ?>
        </div>
      </div>
      
    </section><!-- End About Section -->

    <!-- ======= Resume Section ======= -->
    <section id="educ" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Education</h2>
        </div>



        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">

            <?php
            include 'database.php';

            $sql = "SELECT * FROM `education`";
            $result = mysqli_query($connect, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
            ?>

              <div class="resume-item">
                <h4><?php echo $row['course'] ?></h4>
                <h5><?php echo $row['year'] ?></h5>
                <p><?php echo $row['schoolName'] ?></p>
              </div>
            <?php
            }
            ?>
          </div>

        </div>



      </div>
    </section><!-- End Resume Section -->



    <!-- ======= Skills Section ======= -->
    <section id="skill" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Skills</h2>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6" data-aos="fade-up">

            <?php
            include 'database.php';

            $sql = "SELECT * FROM `skills`";
            $result = mysqli_query($connect, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
              <div class="progress" style="margin-top: 20px; height: 75px;">
                <span style="font-size: 20px;" class="skill"><?php echo $row['title'] ?><i class="val"><?php echo $row['perc'] ?>%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $row['perc'] ?>" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span style="font-size: 15px;"><?php echo $row['content'] ?> </span>
              </div>
            <?php
            }
            ?>

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Portfolio</h2>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

          <?php
          include 'database.php';

          $sql = "SELECT * FROM `portfolio`";
          $result = mysqli_query($connect, $sql);
          while ($row = mysqli_fetch_assoc($result)) {
          ?>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img style="width: 300px; height: 300px; " src="assets/img/portfolio/<?php echo $row['img'] ?>" class="img-fluid" alt="not available">
                <div class="resume-item">
                  <h4><?php echo $row['title'] ?></h4>
                  <p><?php echo $row['descript'] ?></p>
                </div>

              </div>
            </div>


          <?php
          }
          ?>



        </div>


    </section><!-- End Portfolio Section -->

    <?php
    include 'database.php';

    $sql = "SELECT * FROM `admindetail`";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) == 0) {
      echo 'No Data Yet';
    } else {
      $row = mysqli_fetch_assoc($result);
    }
    ?>
    <section id="contact" class="contact">
  <div class="container">

    <div class="section-title">
      <h2>Contact</h2>
    </div>

    <div class="row" data-aos="fade-in">

      <div class="col-lg-5 d-flex align-items-stretch">
      <div class="info-container">
  <div class="info">
    <div class="address">
      <i class="bi bi-geo-alt"></i>
      <h4>Location:</h4>
      <p><?php echo $row['address'] ?></p>
    </div>

    <div class="email">
      <i class="bi bi-envelope"></i>
      <h4>Email:</h4>
      <p><?php echo $row['email'] ?></p>
    </div>

    <div class="phone">
      <i class="bi bi-phone"></i>
      <h4>Call:</h4>
      <p><?php echo $row['contact'] ?></p>
    </div>
  </div>
  </div>
        </div>
      </div>
    </div>
</section>
</main><!-- End #main -->

 
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>