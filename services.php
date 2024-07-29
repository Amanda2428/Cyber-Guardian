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
  <!-- AOS CSS -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <!-- Style CSS -->
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php
  session_start();
  $email = $_SESSION['user']['email'];
  include("dbconnect.php");

  if (isset($_GET['search']) and $_GET['table'] == 'services') :
    $keyword = $_GET['keyword'];
    $sql = "SELECT * FROM services WHERE title LIKE '%$keyword%' OR description LIKE '%$keyword%' OR info LIKE '%$keyword%'";
  else :
    $sql = "SELECT * from services";
  endif;
  $resService = $conn->query($sql);

  ?>

  <!-- Navbar start -->
  <?php include("usernav.php"); ?>
  <!-- Navbar End -->
<header>
<h1 class="text-center m-5"><strong>Our Services Are Here!</strong></h1>
</header>

  <main >
    <section id="main-services">
      <div class="container text-center">

        <div class="row d-flex align-item-center justify-content-center" data-aos="fade-up" data-aos-duration="1000">
          <?php
          if ($resService->num_rows > 0) {
            if (isset($_GET['search']) and $_GET['table'] == 'services') {
              echo '<button type="button" class="btn btn-warning mb-5"><a href="home.php">Clear Search</a></button>';
            }
            while ($rowSer = $resService->fetch_assoc()) {
          ?>

              <div class="col-lg-4 col-md-6 mb-5">
                <div class="icon-box d-flex flex-column align-content-center justify-content-center">
                  <div class="icon"><img src="<?php echo "images\\" . $rowSer['serviceImg']; ?>" alt="" class="rounded-circle"></div>
                  <h4 class="title m-5 headcolor">
                    <b><?php echo $rowSer['title']; ?></b></a>
                  </h4>
                  <p class="description "><strong><?php echo $rowSer['description']; ?></strong></p>
                  <p class="description  "><strong><?php echo $rowSer['info']; ?></strong></p>
                  <p class="mt-3">Publish Date: <?php echo $rowSer['createdate']; ?></p>
                </div>
              </div>
            <?php
            }
          } else {
            ?>
            <h2><?= (isset($_GET['search']) and $_GET['table'] == 'services') ? "Nothing found on : " . htmlspecialchars($_GET['keyword']) : "No services yet.." ?></h2>
            <button class="btn btn-danger mb-5">
              <a href="home.php">Clear Search</a>
            </button>
          <?php
          }
          ?>
        </div>
      </div>
    </section>

    
  </main>
  <!-- Footer start -->
  <?php include("userfooter.php") ?>
  <!-- Footer End -->


  <!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <!-- AOS js -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
    <script src="script.js"></script>
</body>

</html>
