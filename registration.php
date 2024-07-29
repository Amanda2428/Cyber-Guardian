<!DOCTYPE html>
<?php
session_start();
include("dbconnect.php");
if (isset($_POST['btnReg'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $city = $_POST['city'];
  $sub = $_POST['sub'];


  if (isset($_FILES["nimg"]) && $_FILES["nimg"]["error"] == 0) {
    //Read file name
    $Filename = $_FILES["nimg"]["name"];
    //Read file path
    $Filepath = $_FILES["nimg"]["tmp_name"];
  }

  $sql = "INSERT INTO member (name,email,password,city,subscription,profileImg,usertype) VALUES ('$name','$email','$password','$city','$sub','$Filename',0) ";
  if ($conn->query($sql) == TRUE) {
    echo " Registration successfully ";
    move_uploaded_file($Filepath, "images/" . $Filename);
    $_SESSION['user'] = ["name" => $name, "email" => $email, "password" => $password, "city" => $city, "sub" => $sub, "profileImg" => $Filename];
    header("location:home.php");
    exit();
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

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required />

        <label for="city">City:</label>
        <input type="city" id="city" name="city" required />

        <label for="image" class="form-label">Image:</label>
        <input class="form-control" type="file" id="image" name="nimg" <?php echo isset($row['profileImg']) ? '' : 'required'; ?> />

        <div class="radio d-flex align-items-center justify-content-center gap-5 mt-2">
          <label for="Radio">Newsletter Subscription:</label>
          <div class="form-check form-check-inline ">
            <input class="form-check-input" type="radio" name="sub" id="Radio" value="option1">
            <label class="form-check-label" for="sub">Yes</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="sub" id="Radio" value="option2">
            <label class="form-check-label" for="sub">No</label>
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