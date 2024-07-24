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
include("dbconnect.php");
session_start();
$email = $_SESSION['user']['email'];

$sql = "SELECT COUNT(id) AS total FROM member";
$resMember = $conn->query($sql);
$row = $resMember->fetch_assoc();
$totalMembers = $row['total'];

$sql1 = "SELECT COUNT(id) AS total FROM services";
$resServices = $conn->query($sql1);
$row = $resServices->fetch_assoc();
$totalServices = $row['total'];

$sql2 = "SELECT COUNT(id) AS total FROM newsletter";
$resNews = $conn->query($sql2);
$row = $resNews->fetch_assoc();
$totalNews = $row['total'];

$sql3 = "SELECT COUNT(id) AS total FROM contactus";
$res = $conn->query($sql3);
$row = $res->fetch_assoc();
$totalFeedback = $row['total'];

$sql4 = "SELECT COUNT(id) AS total FROM howparenthelp";
$res = $conn->query($sql4);
$row = $res->fetch_assoc();
$totalHowparent = $row['total'];

$sql5 = "SELECT COUNT(id) AS total FROM socialmediaapps	";
$res = $conn->query($sql5);
$row = $res->fetch_assoc();
$totalSocialmedia = $row['total'];
?>

<body>
  <!-- Navbar start -->
  <?php include("adminnav.php"); ?>
  <!-- Navbar end -->
  <header>
    <h1 class="mt-3"><strong>Welcome Admins!</strong></h1>
    <div class="admin-container">
      <p class="mt-4 head-text d-flex flex-column align-items-center">Welcome to the admin dashboard! Here, you can manage our online safety resources, services, 
        and support to empower our community in navigating the digital world safely.</p>
      
    </div>
  </header>


  <main>
    <section id="admin-home">
      <div class="container-fluid">
        <h2><strong>Setting Guidelines of Cyber Guardian Website</strong></h2>
        <div class="row ">
          <div class="col admin-advice">
            <div class="admin-text">
              <h2><strong>Services</strong></h2>
              <p>We offer a variety of services focused on online safety, including workshops and webinars to educate teenagers and parents on best practices. Our goal is to empower users with knowledge to protect themselves online.</p>
              <p><strong>Goal:</strong> Empower users with knowledge to protect themselves online.</p>
              <p><strong>Current Total of Services: <?php echo $totalServices; ?></strong></p>
              <button type="button" class="btn btn-success"><a href="servicesSetup.php">Services</a></button>
            </div>
            <div class="admin-img">
              <img src="images/AdminPanelService.png" alt="" class="">
            </div>
          </div>
          <div class="col admin-advice">
            <div class="admin-text">
              <h2><strong>Newsletter</strong></h2>
              <p>Our monthly newsletter provides insights into the latest trends in online safety, featuring tips, news, and expert advice.</p>
              <p><strong>Purpose:</strong> Keep our community informed and engaged with relevant safety topics.</p>
              <p><strong>Current Total of Newsletter: <?php echo $totalNews; ?></strong></p>
              <button type="button" class="btn btn-success "><a href="newsletterSetup.php">NewsLetter</a></button>
            </div>
            <div class="admin-img">
              <img src="images/AdminPanelNews.png" alt="" class="">
            </div>
          </div>
        </div>
        <div class="row ">
          <div class="col admin-advice">
            <div class="admin-text">
              <h2><strong>How Parent Help</strong></h2>
              <p>This section offers resources for parents to help them support their children in maintaining safe online habits. We provide monitoring tools, conversation starters, and guidance on various platforms.</p>
              <p><strong>Objective:</strong> Equip parents with the knowledge to assist their children effectively.</p>
              <p><strong>Current Total of How Parent Help: <?php echo $totalHowparent; ?></strong></p>
              <button type="button" class="btn btn-success"><a href="howparenthelpSetup.php">How Parent Help</a></button>
            </div>
            <div class="admin-img">
              <img src="images/AdminPanelParent.png" alt="" class="">
            </div>
          </div>
          <div class="col admin-advice">
            <div class="admin-text">
              <h2><strong>Social Media Apps</strong></h2>
              <p>We provide detailed information on using popular social media apps safely, with a focus on privacy settings and digital etiquette.</p>
              <p><strong>Aim:</strong> Ensure users are aware of how to maintain privacy and safety while using these platforms.</p>
              <p><strong>Current Total of Social Media Apps: <?php echo $totalSocialmedia; ?></strong></p>
              <button type="button" class="btn btn-success "><a href="socialmediaappSetup.php">Social Media Apps</a></button>
            </div>
            <div class="admin-img">
              <img src="images/adminPanelApp.jpg" alt="" class="">
            </div>
          </div>
        </div>
        <div class="row ">
          <div class="col admin-advice">
            <div class="admin-text">
              <h2><strong>Help/Support</strong></h2>
              <p>Our support team is dedicated to providing assistance with any online safety concerns or questions, offering personalized guidance and solutions.</p>
              <p><strong>Support Offered:</strong> Direct help for users facing challenges in maintaining online safety.</p>
              <p><strong>Current Total of Feedback: <?php echo $totalFeedback; ?></strong></p>
              <button type="button" class="btn btn-success"><a href="contactList.php">Help/Support</a></button>
            </div>
            <div class="admin-img">
              <img src="images/AdminPanelContact.png" alt="" class="">
            </div>
          </div>
          <div class="col admin-advice">
            <div class="admin-text">
              <h2><strong>Member List</strong></h2>
              <p>By joining our community, members gain access to exclusive content, participate in events, and contribute to creating a safer online environment.</p>
              <p><strong>Benefit:</strong> A collaborative space for learning and sharing best practices.</p>
              <p><strong>Current Total of Members: <?php echo $totalMembers; ?></strong></p>
              <button type="button" class="btn btn-success "><a href="MemberList.php">Member List</a></button>
            </div>
            <div class="admin-img">
              <img src="images/AdminPanelMember.png" alt="" class="">
            </div>
          </div>
        </div>
      </div>

    </section>
  </main>

  <?php include("adminfooter.php") ?>
  <!-- Bootstrap 5 JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>