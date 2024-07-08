<!DOCTYPE html>
<html lang="en">
<?php 
require_once("dbconnect.php");
session_start();
$wrongPassword = false;
$invalidCredentials = false;

if(isset($_POST['btnLogin'])) : 
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
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <nav>
    <ul>
      <li class="link"><a href="index.php">Home</a></li>
      <li class="link"><a href="binformation.php">Information</a></li>
      <li class="link"><a href="blegislation.php">Legislation</a></li>
      <li class="link"><a href="login.php">Login</a></li>
    </ul>

  </nav>
  <header>
    <h1>Online Safety Campaign</h1>

  </header>

  <main>
    <section id="contact">
      <h2>Login</h2>
      <form action="#" method="POST">

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
    </section>
  </main>

  <footer>
    <p>You are here: Login</p>
    <div class="footer-content">
      <p>&copy; 2024 Online Safety Campaign</p>

      <a href="#" style="color: white">Facebook</a>
      <a href="#" style="color: white; margin-left: 10px">Twitter</a>
      <a href="#" style="color: white; margin-left: 10px">Instagram</a>
    </div>
  </footer>
</body>

</html>