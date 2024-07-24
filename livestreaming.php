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
  <!-- AOS CSS -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Style CSS -->
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <!-- Navbar start -->
  <?php include("usernav.php"); ?>
  <!-- Navbar End -->
  <header>
    <h1 class="m-3"><strong>Online Safety Campaign</strong></h1>
  </header>
  <section id="livestreaming-tips">
      <div class="container-fluid mt-5">
        <div class="row align-items-center tips-container">
          <div class="col-md-5 text-center">
            <div class="img-placeholder" data-aos="fade-up">
              <img src="./images/camera.webp" alt="Camera icon" class="img-fluid">
            </div>
          </div>
          <div class="col-md-7" data-aos="fade-left">
            <h2>Top tips for live streaming & vlogging</h2>
            <h5>A parent’s guide to keep children safe</h5>
            <p>If your child wants to live stream or vlog, help them do so safely with our top tips below.</p>
            <div class="tips-button d-flex flex-start gap-3">
              <!-- Download Button -->
              <button class="btn btn-danger download-btn" onclick="window.location.href='pdf/Internet-Matters-Tips-Live-streaming-and-vlogging.pdf'">Download Tips</button>
              <!-- Share Button -->
              <button class="btn btn-success share-btn" data-bs-toggle="modal" data-bs-target="#shareModal">Share</button>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Modal -->
      <div class="modal fade" id="shareModal" tabindex="-1" role="dialog" aria-labelledby="shareModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="shareModalLabel">Share this content on</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
              <a href="https://www.facebook.com/" class="btn btn-primary"><i class="fab fa-facebook-f"></i></a>
              <a href="https://www.instagram.com/" class="btn btn-info"><i class="fab fa-twitter"></i></a>
              <a href="https://www.whatsapp.com/" class="btn btn-success"><i class="fab fa-whatsapp"></i></a>
              <a href="https://www.pinterest.com/" class="btn btn-danger"><i class="fab fa-pinterest"></i></a>
              <a href="http://linkedin.com/" class="btn btn-primary"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
  <main>
   

    <section id="livestreaming">
      <h2>Livestreaming</h2>
      <p>Explore an overview of livestreaming and learn how it can be done in a safe environment.</p>
      <p>Livestreaming is a popular way for individuals to share content in real-time. Here are some tips to ensure a safe livestreaming experience:</p>
      <ul>
        <li>Be mindful of the content you share – avoid sharing personal information.</li>
        <li>Use privacy settings to control who can view your livestreams.</li>
        <li>Interact responsibly with viewers and be aware of potential risks.</li>
        <li>Report and block any inappropriate comments or behavior.</li>
        <li>Educate yourself on the platform's guidelines and community standards.</li>
      </ul>
    </section>
  </main>
  
  <?php include("userfooter.php") ?>

  <!-- Bootstrap 5 JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS js -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>
