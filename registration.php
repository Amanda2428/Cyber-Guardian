<!DOCTYPE html>
<?php 

include("dbconnect.php");
if(isset($_POST['btnReg']))
{
   $name=$_POST['name'];
   $email=$_POST['email'];
   $password=$_POST['password'];
   $city=$_POST['city'];
   $sub=$_POST['sub'];

   $sql="INSERT INTO member (name,email,password,city,subscription,usertype) VALUES ('$name','$email','$password','$city','$sub',0) ";

   if($conn->query($sql))
   {
    session_start();
    $_SESSION['email'] =$email;
     header("location:home.php");
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
            <a class="link " href="index.php">Home</span></a>
          </li>
          <li class="nav-item">
            <a class="link " href="binformation.php">Information</a>
          </li>
          <li class="nav-item">
            <a class="link " href="blegislation.php">Legislation</a>
          </li>
          <li class="nav-item">
            <a class="link " href="login.php">Login</a>
          </li>
        </ul>

        
        <!-- <form class="form-inline my-2  d-flex flex-row gap-3 mr-20 w-35 form-responsive">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        -->
      </div>
    </nav>
    <header>
      <h1 class="mt-3"><strong> CYBER GURADIAN </strong></h1>
      <!-- Custom Cursors and 3D Illustrations can be added here -->
    </header>



    <main>
      <section id="contact" class="shadow back-color">
        <h2><strong>Registration</strong></h2>

          <!-- Contact Form -->
          <form action="#" method="POST" enctype="multipart/form-data">
              <label for="name">Name:</label>
              <input type="text" id="name" name="name" required />

              <label for="email">Email:</label>
              <input type="email" id="email" name="email" required />

              <label for="name">Password:</label>
              <input type="password" id="name" name="password" required />

              <label for="name">City:</label>
              <input type="text" id="name" name="city" required />

              <div class="radio d-flex align-items-center justify-content-center gap-5 mt-2">
                <label for="Radio">Newsletter Subscription:</label>
                <div class="form-check form-check-inline ">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Radio" value="option1">
                  <label class="form-check-label" for="inlineRadio1">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Radio" value="option2">
                  <label class="form-check-label" for="inlineRadio2">No</label>
                </div>
              </div>
              
              <button type="submit" name="btnReg">Register</button>
          </form>      

              <p>
                Before sending a message, please review our
                <a href="privacy-policy.html" target="_blank">Privacy Policy</a>.
              </p>
        <section>
    </main>

    <footer>
      <p>You are here: Registration</p>
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
  </body>
</html>
