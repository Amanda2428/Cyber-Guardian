<!DOCTYPE html>

<?php 
  session_start();
  $email=$_SESSION['email'];
  include("dbconnect.php");
  if(isset($_POST['btnMsg']))
  {
     $msg=$_POST['msg'];
     $sql=" INSERT INTO contactus (message,email) VALUES ('$msg','$email') ";
     if($conn->query($sql))
     {
      echo " Send Message successfully";
      header("location:contact.php");
     }
  }

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
            <a class="link " href="adminhome.php">Home <span class="sr-only"></span></a>
          </li>
          <li class="nav-item">
            <a class="link " href="servicesSetup.php">Services</a>
          </li>
          <li class="nav-item">
            <a class="link " href="newsletterSetup.php">NewsLetter</a>
          </li>
          <li class="nav-item">
            <a class="link " href="howparenthelpSetup.php">HowParentHelp</a>
          </li>
          <li class="nav-item">
            <a class="link " href="socialmediaappSetup.php">SocialMediaApps</a>
          </li>
          <li class="nav-item">
            <a class="link " href="contactList.php">Help/Support</a>
          </li>
          <li class="nav-item">
            <a class="link " href="MemberList.php">MemberList</a>
          </li>
          <div class="search  ms-auto d-flex  align-items-center">
            <form class="form-inline my-2 my-lg-0 d-flex flex-row gap-3 ">
            <input class="form-control mr-sm-2 " type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
          </div>
          <li class="nav-item ms-auto">
            <a class="link " href="logout.php"><i class="fa-solid fa-user"></i><i class="fa-solid fa-right-from-bracket"></i></a>
          </li>
        </ul>
      </div>
    </nav>
    <header>
      <h1>Online Safety Campaign</h1>
      <!-- Custom Cursors and 3D Illustrations can be added here -->
    </header>

    <main>
      <section id="contact">
        <h2>Contact Us</h2>
        <p>
          Feel free to reach out to us using the contact form below. We
          appreciate your feedback and inquiries.
        </p>

        <!-- Contact Form -->
        <form action="#" method="post">
    
          <label for="message">Message:</label>
          <textarea id="message" rows="4" name="msg" required></textarea>

          <button type="submit" name="btnMsg">Send Message</button>
        </form>

        <!-- Privacy Policy Link -->
        <p>
          Before sending a message, please review our
          <a href="privacy-policy.html" target="_blank">Privacy Policy</a>.
        </p>
      </section>
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
  </body>
</html>
