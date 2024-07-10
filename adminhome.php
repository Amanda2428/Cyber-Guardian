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
  $email=$_SESSION['user']['email'];
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
    </ul>
    <div class="logout ">
    <a class=" " href="logout.php"><i class="fa-solid fa-user"></i><i class="fa-solid fa-right-from-bracket"></i></a>
    </div>
    <div class="profile">
      <img class="wh"src="<?= "images/" . $_SESSION['user']['profileImg'] ?>" alt="" />
    </div> 
  </div>
</nav>
    <header>
    <h1 class="mt-3"><strong>Online Safety Campaign</strong></h1>
      <!-- Custom Cursors and 3D Illustrations can be added here -->
    </header>
    <div class="searching container d-flex flex-column align-items-center  ">
        <form class="form-inline my-2  d-flex flex-row gap-3 mr-20  form-responsive">
          <input class="form-control mr-sm-2 w-100" type="search" placeholder="Search..." aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <p>Empowering teenagers to navigate the digital world safely.</p>
    </div>

    <main>
      <section id="home">
        <h2>Welcome to Our Campaign</h2>
        
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
   <!-- Bootstrap 5 JavaScript -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
