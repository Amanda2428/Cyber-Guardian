<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Online Safety Campaign</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- aos link -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <!-- Style CSS -->
  <link rel="stylesheet" href="style.css">
</head>
<?php
include("dbconnect.php");

$sql = "SELECT * from services";
$resService = $conn->query($sql);

$sql2 = "SELECT * from newsletter LIMIT 2";
$resNews = $conn->query($sql2);

$sql3 = "SELECT * from socialmediaapps";
$resSocial = $conn->query($sql3);


?>

<body>
  <nav class="navbar navbar-expand-lg " id="nav">
    <a class="navbar-brand  " href="#">
      <img src="images/logo.png" width="130px" height="70px" class="d-inline-block align-top" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ">
        <li class="nav-item  ">
          <a class="link " href="index.php">Home</span></a>
        </li>
        <li class="nav-item">
          <a class="link " href="binformation.php">Information</a>
        </li>
        <li class="nav-item">
          <a class="link " href="blegislation.php">Legislation</a>
        </li>
        <li class="nav-item">
          <a class="link " href="login.php">Login</a>
        </li>
      </ul>
    </div>
  </nav>
  <section id="carousel">
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade " data-bs-ride="true">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active object-fit-cover" data-bs-interval="2000">
          <img src="images/iStock-1028057054.jpg" class="d-block w-100 object-fit-cover" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="imagest/pic2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="imagest/pic3.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="imagest/pic4.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="imagest/pic5.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>
  <header>
    <div class="container">
      <div class="see-more row ">
        <div class="see-text col-lg-9 text-center">
          <h2 class="mb-4 "><strong>Welcome to <span class="headcolor">Our Campaign !</span></strong></h2>
          <p>
            Empowering teenagers to navigate the digital world safely.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas et labore, eos recusandae
            laudantium explicabo eveniet sint ducimus reprehenderit adipisci perspiciatis reiciendis odit
            officiis. Eaque ipsam doloribus sapiente repudiandae consectetur.
          </p>
        </div>
        <div class="col-lg-3 d-flex align-items-center justify-content-center">
          <div class="see-more-btn">
            <a href="#newletters">See More</a>
          </div>
        </div>
      </div>
    </div>

  </header>

  <main>



    <section id="services">
      <div class="container text-center">
        <h1 class="text-center mb-5"><strong>Our Services Are Here!</strong></h1>
        <div class="row d-flex align-item-center justify-content-center" data-aos="fade-up" data-aos-duration="1000">
          <?php
          if ($resService->num_rows > 0) {

            while ($rowSer = $resService->fetch_assoc()) {
          ?>

              <div class="col-lg-4  col-md-6 mb-5">
                <div class="icon-box d-flex flex-column align-content-center justify-content-center">
                  <div class="icon"><img src="<?php echo "images\\" . $rowSer['serviceImg']; ?>" alt="" class="rounded-circle"></div>
                  <h4 class="title mt-2">
                    <a href="" class=""><b><?php echo $rowSer['title']; ?></b></a>
                  </h4>
                  <p class="description custom-truncate "><strong><?php echo $rowSer['description']; ?></strong></p>
                  <p class="description custom-truncate "><strong><?php echo $rowSer['info']; ?></strong></p>
                  <p class="mt-3">Publish Date: <?php echo $rowSer['createdate']; ?></p>
                </div>
              </div>
          <?php
            }
          } ?>
        </div>
      </div>
    </section>

    <!-- How to Stay Safe Online -->
    <section id="stay-safe-online">
      <div class="container-fluid">
        <div class="row stay-safe-online ">
          <div class="col stay-safe-img ">
            <img src="images/stay-safe.png" alt="" class="w-100 h-100">
          </div>
          <div class="col">
            <h1 class="mb-3 text-center"><strong>How to Stay Safe Online</strong></h1>
            <hr>
            <p class="mb-3 fs-5">Follow these tips to ensure a secure online experience:</p>
            <ul class="arrow-list fs-5">
              <li>Set strong, unique passwords</li>
              <li>Enable two-factor authentication</li>
              <li>Be cautious about sharing personal information</li>
              <li>Regularly update privacy settings</li>
              <li>Use antivirus software</li>
              <li>Verify the authenticity of online information</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- NewLetters -->
    <section id="newletters">
      <h1 class="mt-5 text-center"><strong>Newsletters</strong></h1>
      <div class="container py-5 text-center " data-aos="fade-up" data-aos-duration="1000">


        <div class="row d-flex align-item-center justify-content-center">
          <?php

          if ($resNews->num_rows > 0) {
            while ($rowNews = $resNews->fetch_assoc()) {
          ?>
              <div class=" col-lg-4 col-md-6 pb-5 ">
                <div class="portfolio-things ">
                  <img class="newsImg" src="images/<?php echo $rowNews['newsimg'] ?>" alt="Image not found">
                  <a href="login.php" class="portfolio-info">
                    <h4 class="custom-truncate"><b><?php echo $rowNews['title'] ?></b></h4>
                    <span class="custom-truncate"><?php echo $rowNews['content'] ?></span>
                  </a>
                </div>
              </div>

          <?php
            }
          }
          ?>
        </div>
    </section>
    <!-- Most Popular Social Media Apps -->
    <section class=" container  so-apps  rounded">
      <h2 class="mb-4 text-center"><strong>Most Popular<span class="headcolor"> Social Media Apps</span></strong></h2>
      <p class="text-center mb-3"> The following applications are currently the most popular social apps that allow users to communicate with one another.</p>
      <ul class="d-flex align-content-center justify-content-center">
        <?php
        if ($resSocial->num_rows > 0) {
          while ($rowSoc = $resSocial->fetch_assoc()) {
        ?>

            <li>
              <img src="<?php echo "images\\" . $rowSoc['logo']; ?>">
              <div class="app-name"><?php echo $rowSoc['name']; ?></div>
            </li>
        <?php
          }
        } ?>
      </ul>
    </section>
    <!-- Help Section -->
    <section id="help">
      <div class="row  mt-3">
        <div class="col">
          <!-- Web Service 1 -->
          <div class="web-service">
            <h3>Online Safety Workshops</h3>
            <p>
              Join our interactive workshops to learn about online safety and
              responsible social media use.
            </p>
            <p><strong>Date:</strong> November 15, 2024</p>
            <p><strong>Location:</strong> Virtual Event</p>
            <a href="registration.php">Register Now</a>
          </div>
        </div>
        <div class="col">
          <!-- Web Service 2 -->
          <div class="web-service">
            <h3>Anonymous Helpline</h3>
            <p>
              Need assistance or advice? Connect with our anonymous helpline for
              support regarding online challenges.
            </p>
            <p><strong>Helpline:</strong> 1-800-123-4567</p>
            <p><strong>Email:</strong> help@onlinesafety.org</p>
          </div>
        </div>
      </div>
    </section>


    <div id="goTop">
    <a href="#nav" id="goTopBtn">
        <i class="fa-solid fa-arrow-up"></i>
    </a>
</div>
  </main>
  <!-- Footer Start -->
  <?php include("defaultfooter.php") ?>
  <!-- Footer End -->
  <!-- Js link -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <!-- aos js -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <!-- Bootstrap 5 JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="script.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>