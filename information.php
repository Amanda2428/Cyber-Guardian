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
            <div class="container-fluid ">
                <div class="row no-gutters d-flex align-item-center justify-content-center">
                    <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right">
                        <img src="./images/logo.png" alt="">
                    </div>
                    <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch">
                        <div class="content px-2 gap-2 d-flex flex-column justify-content-center text-center">
                            <h3 data-aos="fade-up" class="mb-3"><b>Our Aims</b></h3>
                            <p data-aos="fade-up">
                            At Cyber Guardian, our aim is to empower children and parents 
                            with the knowledge and tools they need to navigate the online world safely. We are dedicated to creating a secure digital environment
                            where families can explore, learn, and communicate without fear.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="aim">

            <h1 class="text-center p-5"><strong>Latest Campaign</strong></h1>
            <div class="card-group">
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
                        <h5 class="card-title"><strong>Cyber Guardian's Latest Event: Tackling Cyberbullying</strong></h5>
                        <p class="card-text">Our school event focused on listening to students' experiences with cyberbullying and offering free solutions. We provided tools and strategies 
                            to help children navigate and resolve online conflicts safely.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Celebrated in July 1</small>
                    </div>
                </div>
            </div>
            <div class="container-fluid mission-section  ">
                <h1 class="mission-title "data-aos="fade-up" class="mb-3"><strong>Our Mission</strong></h1>
                <p class="mission-text" data-aos="fade-up">
                    Our mission is to empower individuals with the knowledge and
                    tools necessary to stay safe online. We aim to raise awareness
                    about potential online threats and promote responsible digital
                    behavior to ensure a secure and positive internet experience for everyone.
                </p>
            </div>
        </section>
        <section id="information">
                <div class="row text-center d-flex align-items-center justify-content-center ">
                    <div class="col-6">
                        <h1>Hi</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio repellat iure minus reprehenderit magnam dolore fuga consequuntur fugiat quo officiis? Corporis ipsa pa
                            riatur eligendi in rem repellat illo quae quia.</p>
                            <hr>
                        <h1>Hi</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio repellat iure minus reprehenderit magnam dolore fuga consequuntur fugiat quo officiis? Corporis ipsa pa
                            riatur eligendi in rem repellat illo quae quia.</p>
                    </div>
                    <div class="col-6 info-img">
                        <img src="images/1.jpg" alt="" >
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