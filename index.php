<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Online Safety Campaign</title>
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
          <img src="images/slide-1.jpg" class="d-block w-100 object-fit-cover" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="images/slide-2.jpg" class="d-block w-100 object-fit-cover" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="images/slide-3.jpg" class="d-block w-100 object-fit-cover" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="images/slide-4.jpg" class="d-block w-100 object-fit-cover" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="images/slide-5.jpg" class="d-block w-100 object-fit-cover" alt="...">
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
          We're dedicated to empowering teenagers to navigate the digital world safely. Our mission is to equip you with essential tools and knowledge to protect yourself online and make informed decisions. 
          Explore our resources and join us in creating a safer digital environment for everyone.
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
                  <button type="button" class="btn btn-success "><a href="login.php">For More Details!</a></button>
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
              <a href="login.php">
              <img src="<?php echo "images\\" . $rowSoc['logo']; ?>">
              <div class="app-name"><?php echo $rowSoc['name']; ?></div>
              </a>
            </li>
        <?php
          }
        } ?>
      </ul>
    </section>
    <section id="teen-brain">
      <hr>
      <h1 class="m-5 text-center ">Teenage <strong class="headcolor">Vs</strong> Social Media</h1>
      <hr>
      <div class="card-group mt-5 p-4">
        <div class="card">
          <img class="card-img-top" src="images/Teenage-brain.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><strong>Impact on Teenage Brain Development</strong></h5>
            <p class="card-text ">The teenage brain is particularly sensitive to social media influences due to its ongoing development in areas related to impulse control, decision-making, and emotional regulation. Social media platforms, with their instant rewards and feedback mechanisms, can stimulate the brain's reward system, sometimes leading to addictive behaviors and changes in attention span. This heightened sensitivity can affect how teenagers process rewards and consequences,
              making them more susceptible to the immediate gratification provided by likes, comments, and shares.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted"><strong>Created Date:</strong> April 29, 2024 </small>
          </div>
        </div>
        <div class="card ">
          <img class="card-img-top" src="images/body.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><strong>Effects on Self-Esteem and Body Image</strong></h5>
            <p class="card-text">Social media can significantly impact teenagers' self-esteem and body image. The constant exposure to curated and often unrealistic images can lead to unfavorable comparisons and negative self-perception. Teenagers may feel pressured to meet idealized standards of beauty and success, which can affect their mental health and overall self-worth. It's crucial to foster a healthy self-image by promoting positive and realistic
              representations and encouraging critical thinking about the content consumed online.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted"><strong>Created Date:</strong>June 1, 2024</small>
          </div>
        </div>
        <div class="card ">
          <img class="card-img-top" src="images/social-media-risk.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><strong> Managing Social Media Use and Risks</strong></h5>
            <p class="card-text">Effective management of social media use is essential to mitigate its risks and enhance its benefits. Setting time limits on social media use and encouraging participation in offline activities can help prevent addiction and ensure a balanced lifestyle. Promoting privacy education and awareness about cyberbullying can protect teenagers from potential online threats. By establishing healthy online habits and maintaining open communication about digital experiences,
              both teenagers and their parents can navigate the social media landscape more safely and effectively.</p>

          </div>
          <div class="card-footer">
            <small class="text-muted"><strong>Created Date:</strong> July 30, 2024</small>
          </div>
        </div>
      </div>
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
    <!-- Internal Script -->
    <script src="script.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>