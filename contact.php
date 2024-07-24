<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Online Safety Campaign</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- AOS CSS -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <!-- Style CSS -->
  <link rel="stylesheet" href="style.css">
</head>

<?php
include('dbconnect.php');
session_start();
$email = $_SESSION['user']['email'];

if (isset($_POST['btnSubmit'])) {
  $message = $_POST['message'];

  // Insert Query
  $sql = "INSERT INTO contactus (message, email) VALUES ('$message', '$email')";
  if ($conn->query($sql) === TRUE) {
    $status = "success";
  } else {
    $status = "error";
  }
}
?>

<body>
  <!-- Navbar start -->
  <?php include("usernav.php"); ?>
  <!-- Navbar End -->
  <header>
    <h1 class="mt-3"><strong>Help/Support</strong></h1>
  </header>

  <main>
    <section id="contact" class="shadow back-color">
      <h2>Contact Us</h2>
      <p>Feel free to reach out to us using the contact form below. We appreciate your feedback and inquiries.</p>
      <!-- Contact Form -->
      <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" id="status" required>
        <label for="title">Message:</label>
        <textarea name="message" id="message" required></textarea>
        <button type="submit" name="btnSubmit" data-bs-toggle="modal" data-bs-target="#confirmationModal">Send Message</button>
      </form>
      <!-- Privacy Policy Link -->
      <p>Before sending a message, please review our <a href="privacy-policy.html" target="_blank">Privacy Policy</a>.</p>
    </section>
  </main>

  <!-- Confirmation Modal -->
  <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="confirmationModalLabel">Message Sent</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Your message has been successfully sent!
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer Start -->
  <?php include("userfooter.php") ?>
  <!-- Footer end -->
  
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- AOS js -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <!-- Link to the external JavaScript file -->
  <script src="script.js"></script>
</body>

</html>
