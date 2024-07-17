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
    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<?php 
session_start();
$email = $_SESSION['user']['email'];
?>
<body>
    <!-- Navbar start -->
    <?php include("usernav.php"); ?>
    <!-- Navbar End -->
    <header>
        <h1 class="mt-3"><strong>Online Safety Campaign</strong></h1>
        <!-- Custom Cursors and 3D Illustrations can be added here -->
    </header>
    <main>
        <section id="about-us" class="about-us">
            <div class="container">
                <div class="row no-gutters d-flex align-item-center justify-content-center">
                    <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right">
                        <img src="./images/logo.png" alt="">
                    </div>
                    <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch">
                        <div class="content px-2 gap-2 d-flex flex-column justify-content-center text-center">
                            <h3 data-aos="fade-up" class="mb-3"><b>Our Aims</b></h3>
                            <p data-aos="fade-up">
                                Our aim is to educate and empower individuals, especially teenagers, 
                                to navigate the digital world safely. We strive to provide comprehensive
                                resources and guidance to help people understand the importance of online safety and how to protect themselves from potential threats.
                            </p>
                            <h3 data-aos="fade-up" class="mb-3"><b>Our Missions</b></h3>
                            <p data-aos="fade-up">
                                Our aim is to educate and empower individuals, especially teenagers, to navigate the digital world safely. We strive to provide comprehensive resources and guidance to help people understand the importance of online
                                safety and how to protect themselves from potential threats.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="information">
            <h2>Information</h2>
            <p>
                Welcome to the Information page of the Online Safety Campaign. Here,
                we provide details about our social media campaigns and their aims and
                vision to keep teenagers safe online.
            </p>
            <h3>Social Media Campaigns</h3>
            <p>
                Our campaigns focus on empowering teenagers to navigate the digital
                world safely. We aim to create awareness about online risks and
                promote responsible use of social media platforms.
            </p>
            <h3>Aims and Vision</h3>
            <p>
                Our primary aim is to foster a secure online environment for
                teenagers, promoting positive interactions and preventing
                cyberbullying. We envision a future where young individuals can
                explore the digital space without compromising their safety and
                well-being.
            </p>
        </section>
    </main>
    <!-- Footer start -->
    <?php include("userfooter.php"); ?>
    <!-- Footer End -->

    <!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <!-- AOS js -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>
