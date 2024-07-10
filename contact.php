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

    <nav class="navbar navbar-expand-lg ">
    <a class="navbar-brand  " href="#">
    <img src="images/logo.png" width="130px" height="70px" class="d-inline-block align-top" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ">
      <li class="nav-item  ">
        <a class="link " href="home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="link " href="information.php">Information</a>
      </li>
      <li class="nav-item dropdown">
        <a class="link data-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Campaigns</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="popular-apps.php">Popular-app</a></li>
          <li><a class="dropdown-item" href="parents-help.php">Parents Help</a></li>
          <li><a class="dropdown-item" href="livestreaming.php">Livestreaming</a></li>
        </ul>
      </li>
      <!-- updateing-->
      <li class="nav-item">
        <a class="link " href="contact.php">Contact</a>
      </li>
      <li class="nav-item">
        <a class="link " href="legislation.php">Legislation</a>
      </li>

    </ul>
    <div class="logout ">
    <a class=" " href="logout.php"><i class="fa-solid fa-user"></i><i class="fa-solid fa-right-from-bracket"></i></a>
    </div>
    
    <div class="profile">
      <img class="wh"src="<?= "images/" . $_SESSION['user']['profileImg'] ?>" alt="" />
    </div> 
    <!-- <form class="form-inline my-2 d-flex flex-row gap-3 mr-20 w-35 form-responsive">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
   
  </div>
</nav>
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
