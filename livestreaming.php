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
  </header>


  <main>
    <section id="livestreaming">
      <div class="container-fluid mt-5">
        <hr>
        <h1 class="live-head"><strong>10 tips for live streaming and vlogging safely</strong></h1>
        <div class="row">
          <div class="col-12 col-md-6 mb-3">
            <!-- Accordion -->
            <div class="accordion" id="tipsAccordion">
              <!-- Tip 1 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Tip 1: Check Platform Privacy Settings
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#tipsAccordion">
                  <div class="accordion-body">
                    Check privacy settings to see who the video will be shared with – ensure the only friends and followers option is selected.
                  </div>
                </div>
              </div>

              <!-- Tip 2 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Tip 2: Follow Their Account
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#tipsAccordion">
                  <div class="accordion-body">
                    Follow or friend your child's account so you'll be able to see their live streams and videos.
                  </div>
                </div>
              </div>

              <!-- Tip 3 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Tip 3: Learn About the App
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#tipsAccordion">
                  <div class="accordion-body">
                    Educate yourself on the app's features and safety settings to ensure a secure experience.
                  </div>
                </div>
              </div>

              <!-- Tip 4 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Tip 4: Use Strong Passwords
                  </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#tipsAccordion">
                  <div class="accordion-body">
                    Always use strong, unique passwords for your accounts and change them regularly.
                  </div>
                </div>
              </div>

              <!-- Tip 5 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    Tip 5: Enable Two-Factor Authentication
                  </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#tipsAccordion">
                  <div class="accordion-body">
                    Enable two-factor authentication on your accounts to add an extra layer of security.
                  </div>
                </div>
              </div>

              <!-- Tip 6 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    Tip 6: Be Mindful of Personal Information
                  </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#tipsAccordion">
                  <div class="accordion-body">
                    Avoid sharing personal information such as your address or phone number during streams.
                  </div>
                </div>
              </div>

              <!-- Tip 7 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingSeven">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    Tip 7: Monitor Your Live Streams
                  </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#tipsAccordion">
                  <div class="accordion-body">
                    Keep an eye on your live streams to moderate comments and interactions.
                  </div>
                </div>
              </div>

              <!-- Tip 8 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingEight">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                    Tip 8: Be Aware of Screen Sharing
                  </button>
                </h2>
                <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#tipsAccordion">
                  <div class="accordion-body">
                    Be cautious about what is displayed on your screen when sharing it during a live stream.
                  </div>
                </div>
              </div>

              <!-- Tip 9 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingNine">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                    Tip 9: Review Platform Guidelines
                  </button>
                </h2>
                <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#tipsAccordion">
                  <div class="accordion-body">
                    Regularly review the platform’s guidelines and policies to ensure compliance.
                  </div>
                </div>
              </div>

              <!-- Tip 10 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTen">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                    Tip 10: Report Suspicious Activity
                  </button>
                </h2>
                <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#tipsAccordion">
                  <div class="accordion-body">
                    Report any suspicious or inappropriate activity to the platform immediately.
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 video-section">
            <iframe src="https://www.youtube.com/embed/UUvhA8FnlDA" allowfullscreen></iframe>
          </div>
        </div>
      </div>


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