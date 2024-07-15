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
$email = $_SESSION['user']['email'];
?>

<body>
  <!-- Navbar start -->
  <?php include("usernav.php"); ?>
  <!-- Navbar End -->

  <header>
    <h1>Online Safety Campaign</h1>
    <!-- Custom Cursors and 3D Illustrations can be added here -->
  </header>

  <main>
    <section class="legislation-content">
      <h2>Legislation and Guidance</h2>

      <p>
        Stay informed about the legal aspects and best practices when it comes
        to online social media use.
      </p>

      <!-- Information about Legislation and Guidance -->
      <h3>Relevant Legislation</h3>
      <p>
        Understanding the legal framework is crucial. Here are some key pieces
        of legislation related to online safety:
      </p>
      <ul>
        <li>The Online Safety Act</li>
        <li>Data Protection Regulations</li>
        <li>Child Online Privacy Act (COPA)</li>
        <!-- Add more legislation items as needed -->
      </ul>

      <h3>Best Practice Guidance</h3>
      <p>
        Follow these best practices to ensure a safe and responsible online
        experience:
      </p>
      <ul>
        <li>Teach responsible social media use from a young age</li>
        <li>
          Encourage open communication with children about their online
          activities
        </li>
        <li>
          Use privacy settings to control the visibility of personal
          information
        </li>
        <li>Report and block inappropriate content or users</li>
        <!-- Add more best practice guidance items as needed -->
      </ul>
    </section>
  </main>

  <?php include("userfooter.php") ?>
  <!-- Bootstrap 5 JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Link to the external JavaScript file -->
  <script src="script.js"></script>
</body>

</html>