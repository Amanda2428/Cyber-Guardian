<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Online Safety Campaign</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- aos link -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <!-- Style CSS -->
  <link rel="stylesheet" href="style.css">
</head>
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



if (isset($_GET['search']) and $_GET['table'] == 'newsletter') :
  $keyword = $_GET['keyword'];
  $sql2 = "SELECT * FROM newsletter WHERE title LIKE '%$keyword%' OR content LIKE '%$keyword%'";
else :
  $sql2 = "SELECT * from newsletter";
endif;
$resNews = $conn->query($sql2);

if (isset($_GET['search']) and $_GET['table'] == '	socialmediaapps') :
  $keyword = $_GET['keyword'];
  $sql3 = "SELECT * from socialmediaapps WHERE name LIKE '%$keyword%'";
else :
  $sql3 = "SELECT * from socialmediaapps";
endif;
$resSocial = $conn->query($sql3);

$sub = 0;
$sql1 = "SELECT * from member WHERE email='$email'";
$resSub = $conn->query($sql1);
if ($resSub->num_rows > 0) {
  $row1 = $resSub->fetch_assoc();
  $sub = $row1['subscription'];
}

if (isset($_POST['btnSub'])) {
  $sub = $_POST['sub'];
  $sql3 = "UPDATE member SET subscription = '$sub' WHERE email= '$email' ";
  if ($conn->query($sql3) == TRUE) {
    echo " Newsletter subscribed";
    header("location:home.php");
  }
}
?>

<!-- Navbar start -->
<?php include("usernav.php"); ?>
<!-- Navbar End -->
<section id="carousel">
  <div id="carouselExampleIndicators" class="carousel slide carousel-fade " data-bs-ride="true">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active object-fit-cover" data-bs-interval="2000">
        <img src="images/iStock-1028057054.jpg" class="d-block w-100 object-fit-cover" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="imagest/pic2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="imagest/pic3.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="imagest/pic4.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="imagest/pic5.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>

<header>
  <div class="container">
    <div class="see-more row ">
      <div class="see-text col-lg-9 text-center">
        <h2 class="mb-4 "><strong>Welcome to <span class="headcolor">Our Campaign !</span></strong></h2>
        <p>
          Empowering teenagers to navigate the digital world safely.
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas et labore, eos recusandae
          laudantium explicabo eveniet sint ducimus reprehenderit adipisci perspiciatis reiciendis odit
          officiis. Eaque ipsam doloribus sapiente repudiandae consectetur.
        </p>
      </div>
      <div class="col-lg-3 d-flex align-items-center justify-content-center">
        <div class="see-more-btn">
          <a href="#newletters">See More</a>
        </div>
      </div>
    </div>
  </div>

</header>

<body>
  <main>
    <section id="services">
      <div class="container text-center">
        <h1 class="text-center mb-5"><strong>Our Services Are Here!</strong></h1>
        <div class="row d-flex align-item-center justify-content-center" data-aos="fade-up" data-aos-duration="1000">
          <?php
          if ($resService->num_rows > 0) {
            if (isset($_GET['search']) and $_GET['table'] == 'services') {
              echo '<button type="button " class="btn btn-warning mb-5 "><a href="home.php" >Clear Search</a></button>';
            }
            while ($rowSer = $resService->fetch_assoc()) {
          ?>

              <div class="col-lg-4  col-md-6 mb-5">
                <div class="icon-box d-flex flex-column align-content-center justify-content-center">
                  <div class="icon"><img src="<?php echo "images\\" . $rowSer['serviceImg']; ?>" alt="" class="rounded-circle"></div>
                  <h4 class="title mt-2">
                    <a href="" class=""><b><?php echo $rowSer['title']; ?></b></a>
                  </h4>
                  <p class="description custom-truncate "><strong><?php echo $rowSer['description']; ?></strong></p>
                  <p class="description custom-truncate "><strong><?php echo $rowSer['info']; ?></strong></p>
                  <p class="mt-3">Publish Date: <?php echo $rowSer['createdate']; ?></p>
                </div>
              </div>
            <?php
            }
          } else {
            ?>
            <h2><?= (isset($_GET['search']) and $_GET['table'] == 'services') ? "Nothing found on : " . $_GET['keyword'] : "No services yet.." ?></h2>
            <button class="btn btn-danger mb-5">
              <a href="home.php">Clear Search</a>
            </button>
          <?php
          }
          ?>
        </div>
      </div>
    </section>

    <!-- How to Stay Safe Online -->
    <section id="stay-safe-online">
      <div class="container-fluid">
        <div class="row stay-safe-online ">
          <div class="col stay-safe-img ">
            <img src="images/stay-safe.png" alt="" class="w-100 h-100">
          </div>
          <div class="col">
            <h1 class="mb-3 text-center"><strong>How to Stay Safe Online</strong></h1>
            <hr>
            <p class="mb-3 fs-5">Follow these tips to ensure a secure online experience:</p>
            <ul class="arrow-list fs-5">
              <li>Set strong, unique passwords</li>
              <li>Enable two-factor authentication</li>
              <li>Be cautious about sharing personal information</li>
              <li>Regularly update privacy settings</li>
              <li>Use antivirus software</li>
              <li>Verify the authenticity of online information</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- NewLetters -->
    <section id="newletters">
      <h1 class="mt-5 text-center"><strong>Newsletters</strong></h1>
      <div class="container py-5 text-center " data-aos="fade-up" data-aos-duration="1000">

        <?php
        if ($sub == 1) {
        ?>

          <div class="row d-flex align-item-center justify-content-center">
            <?php
            if ($resNews->num_rows > 0) {
              if (isset($_GET['search']) and $_GET['table'] == 'newsletter') {
                echo '<button type="button " class="btn btn-warning mb-5 "><a href="home.php" >Clear Search</a></button>';
              }
              while ($rowNews = $resNews->fetch_assoc()) {
            ?>
                <div class=" col-lg-4 col-md-6 pb-5 ">
                  <div class="portfolio-things ">
                    <img class="newsImg" src="images/<?php echo $rowNews['newsimg'] ?>" alt="Image not found">
                    <a href="news-card.php?id=<?php echo $rowNews['id']; ?>" class="portfolio-info"> 
                      <h4 class="custom-truncate"><b><?php echo $rowNews['title'] ?></b></h4>
                      <span class="custom-truncate"><?php echo $rowNews['content'] ?></span>
                    </a>
                  </div>
                </div>

              <?php
              }
            } else {
              ?>
              <h2><?= (isset($_GET['search']) and $_GET['table'] == 'newsletter') ? "Nothing found on: $keyword" : "No newsletter yet.." ?></h2>
              <button>
                <a href="home.php" class="">Clear Search</a>
              </button>
            <?php
            }
          } else if ($sub == 1) {
            ?>
            <form action="#" method="POST">
              <label for="name">Newsletter Subscription:</label>
              <input type="radio" id="name" name="sub" value="1" required />Yes
              <input type="radio" id="name" name="sub" value="0" required />No
              <button type="submit" name="btnSub">Subscribe</button>
            </form>


          <?php } ?>
          </div>
      </div>
    </section>
    <!-- Most Popular Social Media Apps -->
    <section class=" container  so-apps  rounded">
      <h2 class="mb-4 text-center"><strong>Most Popular<span class="headcolor"> Social Media Apps</span></strong></h2>
      <p class="text-center mb-3"> The following applications are currently the most popular social apps that allow users to communicate with one another.</p>
      <ul class="d-flex align-content-center justify-content-center">
        <?php
        if ($resSocial->num_rows > 0) {
          if (isset($_GET['search']) and $_GET['table'] == 'socialmediaapps') {
            echo '<button type="button " class="btn btn-warning mb-5 "><a href="home.php" >Clear Search</a></button>';
          }
          while ($rowSoc = $resSocial->fetch_assoc()) {
        ?>

            <li>
              <img src="<?php echo "images\\" . $rowSoc['logo']; ?>">
              <div class="app-name"><?php echo $rowSoc['name']; ?></div>
            </li>
          <?php
          }
        } else {
          ?>
          <h2><?= (isset($_GET['search']) and $_GET['table'] == 'socialmediaapps') ? "Nothing found on : " . $_GET['keyword'] : "No services yet.." ?></h2>
          <button class="btn btn-danger mb-5">
            <a href="home.php">Clear Search</a>
          </button>
        <?php
        }
        ?>
      </ul>
    </section>


  </main>
  <!-- Footer start -->
  <?php include("userfooter.php") ?>
  <!-- Footer End -->
  <!-- Js link -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <!-- aos js -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <!-- Bootstrap 5 JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="script.js"></script>
  <script>
    AOS.init();
  </script>

</body>

</html>