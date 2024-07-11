<!DOCTYPE html>
<html lang="en">
<?php 
require_once("dbconnect.php");

$wrongPassword = false;
$invalidCredentials = false;

if(isset($_POST['btnLogin'])) :
  session_start(); 
  $email = $_POST['email'];
  $sql = "SELECT * FROM member WHERE email = '$email'";
  
  try {
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    if(isset($row) and $row['password'] == $_POST['password']) : 
      $_SESSION['user'] = $row;
      if($row['usertype'] == 1) : 
        header("location:adminhome.php");
        exit();
      else : 
        $_SESSION['email']=$email;
        header("location:home.php");
        exit();
      endif;
    else : 
      $wrongPassword = true;
    endif;
  } catch (Exception $err) {
    $invalidCredentials = true;
  }
endif;

?>
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
  <h1 class="mt-3"><strong>Social Media Apps Set up</strong></h1>
  </header>
  <main>
      <section id="contact" class="shadow back-color">
        <h2>Login</h2>

          <!-- Contact Form -->
          <form action="#" method="POST" enctype="multipart/form-data">
              <label for="email">Email:</label>
              <input type="email" id="email" name="email" required />

              <label for="password">Password:</label>
              <input type="password" id="password" name="password" required />
              <?= ($wrongPassword or $invalidCredentials) ? '<span class="text-danger">Invalid Credentials</span>' : "" ?>
              <button type="submit" name="btnLogin">Login</button>
          </form>      
          <br>
              Not a member register <a href="registration.php"> here </a>

              <p>
                Before sending a message, please review our
                <a href="privacy-policy.html" target="_blank">Privacy Policy</a>.
              </p>
        <section>
    </main>

     <!-- Footer Start -->
     <?php include("defaultfooter.php")?>
    <!-- Footer End -->
   <!-- Bootstrap 5 JavaScript -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>