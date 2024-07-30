<!DOCTYPE html>
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
    <h1 class="mt-3"><strong>Help/Support</strong></h1>
  </header>

  <main>
    <section id="contact" class="shadow back-color">
      <h2>Contact Us</h2>
      <p>Feel free to reach out to us using the contact form below. We appreciate your feedback and inquiries.</p>
      <!-- Contact Form -->
      <form id="contactForm" action="" method="POST" enctype="multipart/form-data">
        <label for="title">Message:</label>
        <textarea name="message" id="message" required></textarea>
        <button type="button" id="sendMessageBtn" data-bs-toggle="modal" data-bs-target="#confirmationModal">Send Message</button>
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
          <h5 class="modal-title" id="confirmationModalLabel">Thank You!</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Your message has been successfully sent!
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" id="closeModalBtn" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer Start -->
  <?php include("userfooter.php") ?>
  <!-- Footer end -->

  <!-- Bootstrap 5 JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- AOS js -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();

    document.addEventListener('DOMContentLoaded', () => {
      const sendMessageBtn = document.getElementById('sendMessageBtn');
      const contactForm = document.getElementById('contactForm');
      const closeModalBtn = document.getElementById('closeModalBtn');

      sendMessageBtn.addEventListener('click', () => {
        // Trigger the modal to show
        new bootstrap.Modal(document.getElementById('confirmationModal')).show();
      });

      closeModalBtn.addEventListener('click', () => {
        // Submit the form data after closing the modal
        contactForm.submit();
      });
    });
  </script>
  <!-- Internal Script -->
  <script src="script.js"></script>
</body>

</html>
