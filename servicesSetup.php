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

  <!-- php for insert, update and delete -->
  <?php 
    include('dbconnect.php');
    // defining of the values
    if(isset($_POST['btnSubmit']))
    {
      $title=$_POST['title'];
      $des =$_POST['description'];
      $info=$_POST['info'];

    // Insert Query
      $sql="INSERT INTO services (title, description, info) VALUES ('$title', '$des', '$info')";
      if ($conn->query($sql) === TRUE) {
        header("location:servicesSetup.php");
      } else {
        echo "Error: " . $conn->error;
      }
    }
    // Showing of text for inserted data
    if (isset($_POST['btnUpdate'])) {
      $id = $conn->real_escape_string($_POST['id']);
      $title = $conn->real_escape_string($_POST['title']);
      $des = $conn->real_escape_string($_POST['description']);
      $info = $conn->real_escape_string($_POST['info']);
      $sql = "UPDATE services SET title='$title', description='$des', info = '$info' WHERE id='$id'";

    
      if ($conn->query($sql) === TRUE) {
        header("location:servicesSetup.php");
      } else {
        echo "Error: " . $conn->error;
      }
    }
    // Delete Query
    if(isset($_GET['deleteid'])){
      $did=$_GET['deleteid'];
      $sql="DELETE from services where id='$did'";
      if($conn->query($sql)==True){
          echo"<div> Delete One Record Successfully</div>";
          header("location:servicesSetup.php");
      }
    }
    // Edit Query
    if (isset($_GET['editid'])) {
      $eid = $_GET['editid'];
      $sql = "SELECT * FROM services WHERE id='$eid'";
      $result = $conn->query($sql);
      $row = $result->fetch_assoc();
    } 
    else {
      $sql = "SELECT * FROM services";
      $result = $conn->query($sql);
    }

  ?>
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
            <a class="link " href="adminhome.php">Home <span class="sr-only"></span></a>
          </li>
          <li class="nav-item">
            <a class="link " href="servicesSetup.php">Services</a>
          </li>
          <li class="nav-item">
            <a class="link " href="newsletterSetup.php">NewsLetter</a>
          </li>
          <li class="nav-item">
            <a class="link " href="howparenthelpSetup.php">HowParentHelp</a>
          </li>
          <li class="nav-item">
            <a class="link " href="socialmediaappSetup.php">SocialMediaApps</a>
          </li>
          <li class="nav-item">
            <a class="link " href="contactList.php">Help/Support</a>
          </li>
          <li class="nav-item">
            <a class="link " href="MemberList.php">MemberList</a>
          </li>
          <li class="nav-item ms-auto">
            <a class="link " href="logout.php"><i class="fa-solid fa-user"></i><i class="fa-solid fa-right-from-bracket"></i></a>
          </li>
        </ul>
        <!-- <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> -->
      </div>
    </nav>
  <header>
      <h1 class="mt-3"><strong>Services Set up</strong></h1>
      <!-- Custom Cursors and 3D Illustrations can be added here -->
  </header>

  <main>
      <section id="contact" class="shadow back-color">
        <h2>Contact Us</h2>
        <p>
          Feel free to reach out to us using the contact form below. We
          appreciate your feedback and inquiries.
        </p>
        <!-- Contact Form -->
        <form action="#" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?php echo isset($row['id']) ? $row['id'] : ''; ?>">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="<?php echo isset($row['title'])? $row['title']:"";?>"required />
            
            <label for="description">Description:</label>
            <textarea name="description" id="description" required><?php echo isset($row['description']) ? $row['description'] : ''; ?></textarea>

            <label for="info">info:</label>
            <textarea name="info" id="info" required><?php echo isset($row['info']) ? $row['info'] : ''; ?></textarea>
         
            <?php if(isset($_GET['editid'])) { ?>
              <button type="submit" name="btnUpdate">Update</button>
            <?php } else { ?>
              <button type="submit" name="btnSubmit">Create Post</button>
            <?php } ?>
        </form>      
        <!-- Privacy Policy Link -->
        <p>
          Before sending a message, please review our
          <a href="privacy-policy.html" target="_blank">Privacy Policy</a>.
        </p>
      <section>
    </main>
<!-- Table Start -->
<section id="newsletters rad" >
        <div class="container table-responsive">
          <?php
          if($result->num_rows > 0 && !isset($_GET['editid'])) {
          ?>
            <table  class="table table-hover  table-info  overflow-hidden rounded">
              <tr class="">
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Information</th>
                <th scope="col">Publish Date</th>
                <th scope="col action">Action</th>
              </tr>
              <?php
                while($row = $result->fetch_assoc()) {
              ?>
                <tr>
                  <td class="responsive-text"><?php echo $row['id']; ?></td>
                  <td class="responsive-text"><?php echo $row['title']?></td>
                  <td class="responsive-text "><?php echo $row['description']?></td>
                  <td class="responsive-text "><?php echo $row['info']?></td>
                  <td class="responsive-text "><?php echo $row['createdate']?></td>
                  <td class="action h-100">
                  <a href="servicesSetup.php?editid=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm mt-1 mb-2  w-100">Edit</a>
                  <a href="servicesSetup.php?deleteid=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm w-100">Delete</a>
                  </td>
                  
                </tr>
              <?php
                }
              ?>
            </table>
            <?php
              }
            ?>
        </div>
      </section>
      <!-- Table End -->
    <footer>
      <p>You are here: Services</p>
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
  </body>
</html>
