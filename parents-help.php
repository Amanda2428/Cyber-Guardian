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
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <!-- Style CSS -->
  <link rel="stylesheet" href="style.css">
</head>
<?php
session_start();
$email = $_SESSION['user']['email'];
include("dbconnect.php");

if (isset($_GET['search'])) {
  $table = $_GET['table'];
  $keyword = $_GET['keyword'];
  $sql1 = "SELECT * FROM $table WHERE heading LIKE '%$keyword%'";
} else {
  $sql1 = "SELECT * FROM howparenthelp";
}

$result = $conn->query($sql1);
?>

<body>
  <!-- Navbar start -->
  <?php include("usernav.php"); ?>
  <!-- Navbar End -->
  <header>
    <h1 class="mt-3"><strong>How Parents Can Help</strong></h1>
    <!-- Custom Cursors and 3D Illustrations can be added here -->
  </header>

  <main>
    <section id="parent-head">
      <div class="row d-flex flex-column p-5 align-items-center">
        <div class="col parent-img" data-aos="fade-right">
          <img src="./images/parent.png" alt="">
        </div>
        <div class="col parent-note" data-aos="fade-up">
          <h2 class="mb-3"><strong>Welcome to the My Body Is My Body Musical Child Abuse Prevention Program</strong></h2>
          <p>Helping children protect themselves while protecting their innocence through music, songs, lessons and fun
            activities - all for zero cost to program presenters.</p>
        </div>
      </div>

      
    
    </section>
    <section id="parents-help">
      <div class="container mb-5">
        <?php if (isset($_GET['search'])) : ?>
          <h3>Search result for: <?= htmlspecialchars($keyword) ?></h3>
          <a href="popular-apps.php" class="btn btn-primary button">Clear Search</a>
        <?php endif; ?>
        <?php
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
        ?>
            <div class="row swiper-contain" data-aos="fade-up">
              <div class="col w-50 ">
                <div class="swiper mySwiper">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="<?php echo "images/" . htmlspecialchars($row['image1']); ?>" alt=""></div>
                    <div class="swiper-slide"><img src="<?php echo "images/" . htmlspecialchars($row['image2']); ?>" alt=""></div>
                  </div>
                </div>
              </div>
              <div class="col d-flex flex-column justify-content-center">
                <h2><strong><?php echo htmlspecialchars($row['heading']); ?></strong></h2>
                <p><?php echo htmlspecialchars($row['messaging']); ?></p>
                <p class="text-uppercase">Publish Date: <?php echo htmlspecialchars($row['date']); ?></p>
              </div>
            </div>
              
      <div class=" container-fluid row d-flex p-3 align-items-center ">
        <div class="col-sm logo-line">
          <hr >
        </div>
        <div class="col-sm logo-image text-center ">
        <img decoding="async" src="images/logo.png" alt="" />
        </div>
        <div class="col-sm logo-line">
          <hr>
        </div>
      </div>  

        <?php
          }
        } else {
          if (isset($_GET['search'])) {
            echo "<p>Nothing found for " . htmlspecialchars($keyword) . ".</p>";
          } else {
            echo "<p>No results.</p>";
          }
        }
        ?>

      </div>
    </section>
    <section id="parents-help 2">
      <h2>How Parents Can Help</h2>
      <p>
        Discover top tips for parents to support healthy teen use of social
        media.
      </p>
      <!-- Add content with tips for parents -->
      <ul>
        <li>Stay involved and communicate openly with your teenager.</li>
        <li>
          Set boundaries and establish clear rules for social media use.
        </li>
        <li>
          Teach the importance of privacy settings and online etiquette.
        </li>
        <li>
          Monitor your teen's online activities without invading their
          privacy.
        </li>
        <li>
          Encourage a healthy balance between online and offline activities.
        </li>
      </ul>
      <!-- Add more tips or content as needed -->
    </section>
  </main>
  <!-- Footer Start -->
  <?php include("userfooter.php") ?>
  <!-- Footer end -->
  <!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <!-- AOS js -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      effect: "cards",
      grabCursor: true,
    });
  </script>
  <!-- <script>
    var swiper2 = new Swiper(".mySwiper2", {
      grabCursor: true,
      effect: "creative",
      creativeEffect: {
        prev: {
          shadow: true,
          translate: ["-120%", 0, -500],
        },
        next: {
          shadow: true,
          translate: ["120%", 0, -500],
        },
      },
    });
  </script> -->
</body>

</html>