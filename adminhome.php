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
$email = $_SESSION['user']['email'];
?>

<body>
  <!-- Navbar start -->
  <?php include("adminnav.php"); ?>
  <!-- Navbar end -->
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

  <?php include("adminfooter.php") ?>
  <!-- Bootstrap 5 JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>