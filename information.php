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
    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">
  </head>
  <?php 
  session_start();
  $email=$_SESSION['user']['email'];
  ?>
  <body>
  <!-- Navbar start -->
  <?php include("usernav.php");?>
  <!-- Navbar End -->
    <header>
      <h1>Online Safety Campaign</h1>
      <!-- Custom Cursors and 3D Illustrations can be added here -->
    </header>

    <main>
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

    <?php include("userfooter.php")?>
    <!-- Bootstrap 5 JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
