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
    include('dbconnect.php');
    // defining of the values
    session_start();
    $email=$_SESSION['user']['email'];
    if(isset($_POST['btnSubmit']))
    {
      $message=$_POST['message'];
      $email=$_SESSION['email'];

   // Insert Query
   $sql="INSERT INTO contactus (message, email) VALUES ('$message', '$email')";
   if ($conn->query($sql) === TRUE) {
     $status = "success";
   } else {
     $status = "error";
   }
    }
    
    

  ?>
  <body>

  <!-- Navbar start -->
  <?php include("usernav.php");?>
  <!-- Navbar End -->
    <header>
    <h1 class="mt-3"><strong>Help/Support</strong></h1>
    <!-- Custom Cursors and 3D Illustrations can be added here -->
    </header>

    <main>
      <section id="contact" class="shadow back-color">
        <h2>Contact Us</h2>
        <p>
          Feel free to reach out to us using the contact form below. We
          appreciate your feedback and inquiries.
        </p>
        <!-- Contact Form -->
        <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" id="status"   required>
            <label for="title">Message:</label>
            <textarea name="message" id="message" required></textarea>
      
            <button type="submit" name="btnSubmit" onclick="alertbox()">Send Message</button>
        
        </form>      
        <!-- Privacy Policy Link -->
        <p>
          Before sending a message, please review our
          <a href="privacy-policy.html" target="_blank">Privacy Policy</a>.
        </p>
      <section>
    </main>

    <footer>
      <p>You are here: Home</p>
      <div class="footer-content">
        <p>&copy; 2024 Online Safety Campaign</p>
        <!-- Add social media buttons with relevant links -->
        <a href="#" style="color: white">Facebook</a>
        <a href="#" style="color: white; margin-left: 10px">Twitter</a>
        <a href="#" style="color: white; margin-left: 10px">Instagram</a>
      </div>
    </footer>
    <!-- Bootstrap 5 JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Link to the external JavaScript file -->
    <script src="script.js"></script>
   <script>
    function alertbox() {
    var message = document.getElementById('message').value.trim();
    if (message === '') {
      alert('Please enter a message.');
    } else {
      alert('Click confirm to submit your message!');
      // Optionally, you can submit the form here if needed
      // document.querySelector('form').submit();
    }
  }
   </script>

  </body>
</html>
