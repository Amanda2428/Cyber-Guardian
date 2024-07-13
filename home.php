<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Online Safety Campaign</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- aos link -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">
  </head>
  <?php 
  session_start();
  $email=$_SESSION['user']['email'];
  include("dbconnect.php");

  $sql="SELECT * from services";
  $resService=$conn->query($sql);

  $sql2="SELECT * from newsletter";
  $resNews=$conn->query($sql2);

  $sub=0;
  $sql1="SELECT * from member WHERE email='$email'";
  $resSub=$conn->query($sql1);
  if($resSub->num_rows>0)
  {
    $row1=$resSub->fetch_assoc();
    $sub=$row1['subscription'];
  }

  if(isset($_POST['btnSub']))
  {
    $sub=$_POST['sub'];
  $sql3="UPDATE member SET subscription = '$sub' WHERE email= '$email' ";    
  if($conn->query($sql3)==TRUE)
  {
   echo " Newsletter subscribed";
   header("location:home.php");
  }
}
?>

  <!-- Navbar start -->
  <?php include("usernav.php");?>
  <!-- Navbar End -->
   <section id="carousel" >
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade " data-bs-ride="true">
              <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                      aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                      aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                      aria-label="Slide 3"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                      aria-label="Slide 4"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                      aria-label="Slide 5"></button>
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
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                  data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                  data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
              </button>
        </div>
  </section>
 
  <header>
    <h1 class="mt-3"><strong> Welcome to Our Campaign</strong></h1>
    <div class="searching container d-flex flex-column align-items-center  ">
        <form class="form-inline my-2  d-flex flex-row gap-3 mr-20  form-responsive">
          <input class="form-control mr-sm-2 w-100" type="search" placeholder="Search..." aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <p>Empowering teenagers to navigate the digital world safely.</p>
    </div>
    
  </header>

    <main>
        <section id="services">
          <div class="container text-center">
            <div class="row" data-aos="fade-up" data-aos-duration="1000">
            <?php 
            if($resService->num_rows>0)
            {
              while($rowSer=$resService->fetch_assoc())
              {
            ?>

              <div class="col-lg-4  col-md-6 mb-5">
                <div class="icon-box d-flex flex-column align-content-center justify-content-center">
                  <div class="icon"><img src="<?php echo "images\\" . $rowSer['serviceImg']; ?>" alt="" class="rounded-circle"></div>
                  <h4 class="title mt-2">
                  <a href="" class="mt-5"><b><?php echo $rowSer['title']; ?></b></a>
                  </h4>
                  <p class="description custom-truncate"><strong><?php echo $rowSer['description']; ?></strong></p>
                  <p class="description "><strong><?php echo $rowSer['info']; ?></strong></p>
                  <p>Publish Date: <?php echo $rowSer['createdate']; ?></p>
                </div>
              </div>
              <?php 
                }
              }
              ?>  
            </div>
          </div>
        </section>
        <!-- Most Popular Social Media Apps -->
        <section class="popular-apps">
          <h3>Most Popular Social Media Apps</h3>
          <ul>
            <li>Instagram</li>
            <li>Facebook</li>
            <li>Twitter</li>
            <li>Snapchat</li>
            <li>TikTok</li>
            <li>WhatsApp</li>
            <!-- Add more social media apps as needed -->
          </ul>
        </section>
        <!-- How to Stay Safe Online -->
        <section class="stay-safe-online">
          <h3>How to Stay Safe Online</h3>
          <p>Follow these tips to ensure a secure online experience:</p>
          <ul>
            <li>Set strong, unique passwords</li>
            <li>Enable two-factor authentication</li>
            <li>Be cautious about sharing personal information</li>
            <li>Regularly update privacy settings</li>
            <li>Use antivirus software</li>
            <li>Verify the authenticity of online information</li>
          </ul>
        </section>
        <section id="contact">
          <?php 
            if($sub==1)
            {
          ?>
           <h2>News</h2>
           <?php 
         if($resNews->num_rows>0)
         {
          while($rowNews=$resNews->fetch_assoc())
          {
       ?>
        <!--  Service 1 -->
        <div class="web-service">
          <h3><?php echo $rowNews['title']; ?></h3>
          <p>
          <?php echo $rowNews['content']; ?>
          </p>
          <p><img src="<?php echo "images\\" . $rowNews['newsimg']; ?>" width="200px"  ></p>
          <p><strong><?php echo $rowNews['publishdate']; ?></strong></p>
          
        </div>
        <?php 
          }
         }
            }
            else {
           ?>
             <!-- Contact Form -->
        <form action="#" method="POST">
          <label for="name">Newsletter Subscription:</label>
            <input type="radio" id="name" name="sub" value="1" required />Yes
            <input type="radio" id="name" name="sub" value="0" required />No
          <button type="submit" name="btnSub">Subscribe</button>
        </form>

          <?php }
          ?>
        </section>
      </section>

    </main>
   <!-- Footer start -->
    <?php include("userfooter.php")?>
    <!-- Footer End -->
    <!-- Js link -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
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
