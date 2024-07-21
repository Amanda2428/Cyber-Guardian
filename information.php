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
    </header>
    <main>
        <section id="about-us" class="about-us">
            <div class="container-fluid ">
                <div class="row no-gutters d-flex align-item-center justify-content-center">
                    <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right">
                        <img src="./images/logo.png" alt="">
                    </div>
                    <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch">
                        <div class="content px-2 gap-2 d-flex flex-column justify-content-center text-center">
                            <h3 data-aos="fade-up" class="mb-3"><b> Welcome to Cyber Guradian</b></h3>
                            <p data-aos="fade-up">
                                Cyber Guardian empowers teenagers to navigate the online world safely through our impactful campaigns. We promote awareness of digital risks, foster positive interactions, and provide resources for responsible behavior.
                                Join us in creating a secure online environment for young people everywhere.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="aim">
            <div class="container-fluid mission-section  ">
                <h1 class="mission-title ">Latest Campaign: <strong class="headcolor">"Stay Safe, Stay Smart" </strong></h1>
                <p class="mission-text" data-aos="fade-up">
                    Our latest campaign, "Stay Safe, Stay Smart," aims to educate teenagers about the critical importance of online privacy and the lasting impact of their digital footprints. As technology becomes an integral part of daily life, understanding how to protect personal information and navigate the digital world responsibly is essential. Through interactive workshops, engaging social media challenges, and community-building activities, we strive to empower young individuals to make informed decisions
                    online, fostering a safe and supportive environment for everyone.
                </p>
            </div>
            <div class="card-group" data-aos="fade-up">
                <div class="card rounded-4">
                    <img class="card-img-top" src="images/1.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><strong>Empowering Families: The 'Stay Safe Online' Campaign</strong></h5>
                        <p class="card-text ">Our recent event brought together families and experts to explore digital safety through interactive workshops and expert panels,
                            boosting confidence and awareness in online practices.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Celebrated in April 24</small>
                    </div>
                </div>
                <div class="card rounded-4">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><strong>Cyber Guardian's Latest Event: A Success Story</strong></h5>
                        <p class="card-text">We recently celebrated our school event, focusing on the risks of social media for children. Through engaging activities and discussions, students learned about
                            online dangers and how to stay safe in the digital world.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Celebrated in June 3</small>
                    </div>
                </div>
                <div class="card rounded-4">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><strong>COur "Stay Safe, Stay Smart" campaign educates teens on online privacy and digital footprints. Through workshops, social media challenges, and community activities, we empower them to make informed decisions,
                                ensuring a safe digital environment and promoting responsible online behavior.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Celebrated in July 1</small>
                    </div>
                </div>
            </div>

        </section>
        <section id="information" class="mt-5">
            <div class="row text-center d-flex align-items-center justify-content-center ">
                <div class="col-6">
                    <h1><strong>Our Aims</strong></h1>
                    <p>At Cyber Guardian, our aim is to empower children and parents
                        with the knowledge and tools they need to navigate the online world safely. We are dedicated to creating a secure digital environment
                        where families can explore, learn, and communicate without fear.
                        Welcome to the Information page of Cyber Guardian. </p>
                    <hr>
                    <h1><strong>Our Mission</strong></h1>
                    <p>Our mission is to empower individuals with the knowledge and
                        tools necessary to stay safe online. We aim to raise awareness
                        about potential online threats and promote responsible digital
                        behavior to ensure a secure and positive internet experience for everyone.</p>
                </div>
                <div class="col-6 info-img">
                    <img src="images/1.jpg" alt="">
                </div>
            </div>
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