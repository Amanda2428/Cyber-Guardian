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
  <?php 
    include('dbconnect.php');
    // defining of the values
    if(isset($_POST['btnSubmit']))
    {
      $message=$_POST['message'];
      $email=$_POST['email'];

    // Insert Query
      $sql="INSERT INTO contactus (message, email) VALUES ('$message', '$email')";
      if ($conn->query($sql) === TRUE) {
        header("location:contactList.php");
      } else {
        echo "Error: " . $conn->error;
      }
    }
    // Showing of text for inserted data
    if (isset($_POST['btnUpdate'])) {
      $id = $conn->real_escape_string($_POST['id']);
      $message = $conn->real_escape_string($_POST['message']);
      $email = $conn->real_escape_string($_POST['email']);
      $sql = "UPDATE contactus SET message='$message', email='$email' WHERE id='$id'";

    
      if ($conn->query($sql) === TRUE) {
        header("location:contactList.php");
      } else {
        echo "Error: " . $conn->error;
      }
    }
    // Delete Query
    if(isset($_GET['deleteid'])){
      $did=$_GET['deleteid'];
      $sql="DELETE from contactus where id='$did'";
      if($conn->query($sql)==True){
          echo"<div> Delete One Record Successfully</div>";
          header("location:contactList.php");
      }
    }
    // Edit Query
    if (isset($_GET['editid'])) {
      $eid = $_GET['editid'];
      $sql = "SELECT * FROM contactus WHERE id='$eid'";
      $result = $conn->query($sql);
      $row = $result->fetch_assoc();
    } 
    else {
      $sql = "SELECT * FROM contactus";
      $result = $conn->query($sql);
    }

  ?>
  <body>
  <nav>
      <ul>
        <li class="link"><a href="home.php">Home</a></li>
        <li class="link"><a href="information.php">Information</a></li>
        <li>
          Campaigns
          <ul>
            <li class="link">
              <a href="popular-apps.php">Popular Apps</a>
            </li>
            <li class="link">
              <a href="parents-help.php">Parents Help</a>
            </li>
            <li class="link">
              <a href="livestreaming.php">Livestreaming</a>
            </li>
          </ul>
        </li>

        <li class="link"><a href="contact.php">Contact</a></li>
        <li class="link"><a href="legislation.php">Legislation</a></li>
        <li class="link"><a href="logout.php">Logout</a></li>
      </ul>
      <form action="/search" method="get" class="search-input">
        <input type="text" id="search" name="search" placeholder="Search..." />
        <button type="submit">Search</button>
      </form>
    </nav>
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
          <div class="search ml-20px d-flex  align-items-center">
            <form class="form-inline my-2 my-lg-0 d-flex flex-row gap-3 ">
            <input class="form-control mr-sm-2 " type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
          </div>
          <li class="nav-item ms-auto">
            <a class=" " href="logout.php"><i class="fa-solid fa-user"></i><i class="fa-solid fa-right-from-bracket"></i></a>
          </li>
        </ul>
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
        <form action="#" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?php echo isset($row['id']) ? $row['id'] : ''; ?>">
            <label for="title">Message:</label>
            <textarea name="message" id="message" required><?php echo isset($row['message']) ? $row['message'] : ''; ?></textarea>
      
            <label for="">Description:</label>
            <input type="email" id="email" name="email" value="<?php echo isset($row['email'])? $row['email']:"";?>"required />

   
            <?php if(isset($_GET['editid'])) { ?>
              <button type="submit" name="btnUpdate">Update</button>
            <?php } else { ?>
              <button type="submit" name="btnSubmit">Create Post</button>
            <?php } ?>
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
  </body>
</html>
