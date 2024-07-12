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
    <header>
      <h1 class="mt-3"><strong> CYBER GURADIAN </strong></h1>
      <!-- Custom Cursors and 3D Illustrations can be added here -->
    </header>

    <main>
      <section id="home">
        <h2>Welcome to Our Campaign</h2>
        
        <form id="home" class="form-inline my-2 d-flex flex-row gap-3 mr-20 w-25 form-responsive" action="/search" method="get">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
        <p>Empowering teenagers to navigate the digital world safely.</p>
       <?php 
         if($resService->num_rows>0)
         {
          while($rowSer=$resService->fetch_assoc())
          {
       ?>
        <!--  Service 1 -->
        <div class="web-service">
          <h3><?php echo $rowSer['title']; ?></h3>
          <p>
          <?php echo $rowSer['description']; ?>
          </p>
          <p><strong><?php echo $rowSer['info']; ?></strong> </p>
          <p><strong><?php echo $rowSer['createdate']; ?></strong></p>
          <a href="#">Register Now</a>
        </div>
        <?php 
          }
         }
        ?>
   
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
   
    <?php include("userfooter.php")?>

    <!-- Bootstrap 5 JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
