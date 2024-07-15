<!DOCTYPE html>
<?php
session_start();
$email = $_SESSION['user']['email'];
?>
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

<body>
  <!-- Navbar start -->
  <?php include("usernav.php"); ?>
  <!-- Navbar End -->
  <header>
    <h1>Online Safety Campaign</h1>
    <!-- Custom Cursors and 3D Illustrations can be added here -->
  </header>

  <main>
    <section id="livestreaming">
      <h2>Livestreaming</h2>
      <p>
        Explore an overview of livestreaming and learn how it can be done in a
        safe environment.
      </p>
      <!-- Add content related to livestreaming and safety tips -->
      <p>
        Livestreaming is a popular way for individuals to share content in
        real-time. Here are some tips to ensure a safe livestreaming
        experience:
      </p>
      <ul>
        <li>
          Be mindful of the content you share – avoid sharing personal
          information.
        </li>
        <li>
          Use privacy settings to control who can view your livestreams.
        </li>
        <li>
          Interact responsibly with viewers and be aware of potential risks.
        </li>
        <li>Report and block any inappropriate comments or behavior.</li>
        <li>
          Educate yourself on the platform's guidelines and community
          standards.
        </li>
      </ul>
      <!-- Add more tips or content as needed -->
    </section>
  </main>
  <?php include("userfooter.php") ?>
  <!-- Bootstrap 5 JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>