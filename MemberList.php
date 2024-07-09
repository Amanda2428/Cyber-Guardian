<!DOCTYPE html>
<?php 
    include('dbconnect.php');

    $sql1="SELECT * from member";
    $result=$conn->query($sql1);

    if(isset($_GET['changeRole'])) : 
      $roleToUpdate = $_GET['roleToChange'];
      $userId = $_GET['userId'];
      $sql = "UPDATE member SET usertype = $roleToUpdate WHERE id = $userId";
      $conn->query($sql);
      header("location:MemberList.php");
      exit();
    endif;  

    if(isset($_GET['deleteUser']) and isset($_GET['userId'])) : 
      $userId = $_GET['userId'];
      $conn->query("
        DELETE FROM member WHERE id = $userId
      ");
      header("location:MemberList.php");
    endif;
  ?>
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
      <li class="nav-item">
    
      </li>
      
    </ul>
    <div class="logout ">
    <a class=" " href="logout.php"><i class="fa-solid fa-user"></i><i class="fa-solid fa-right-from-bracket"></i></a>
    </div>
    
    
    <!-- <form class="form-inline my-2  d-flex flex-row gap-3 mr-20 w-35 form-responsive">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    -->
  </div>
</nav>
    <header>
      <h1 class="mt-3"><strong>Member List </strong></h1>
      <!-- Custom Cursors and 3D Illustrations can be added here -->
    </header>

    <main>
      <!-- Table Start -->
      <section id="newsletters rad" >
        <div class="container table-responsive ">
          <?php
          if($result->num_rows > 0 ) {
          ?>
            <table class="table table-hover  table-info  overflow-hidden rounded align-items-center">
              <tr class="">
              <th>Id</th>
              <th>Name</th>
              <th>Email</th>
              <th>Password</th>
              <th>City</th>
              <th>Newsletter Subscription</th>
              <th>User Type</th>
              <th>Action</th>
              </tr>
              <?php
                while($row = $result->fetch_assoc()) {
              ?>
                <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['password']; ?></td>
            <td><?php echo $row['city']; ?></td>
            <td><?php echo $row['subscription']==1? "Yes":"No"; ?></td>
            <td><?php echo $row['usertype']==1? "Admin":"User"; ?></td>
            <td class="action h-100">
                <?php if($row['usertype'] == 1) : ?>
                <a href="MemberList.php?changeRole=1&userId=<?= $row['id'] ?>&roleToChange=0 " class="btn btn-primary btn-sm mt-1 mb-2  w-100">Demote to User</a>
                <?php else : ?>
                <a href="MemberList.php?changeRole=1&userId=<?= $row['id'] ?>&roleToChange=1" class="btn btn-primary btn-sm mt-1 mb-2  w-100">Promote to Admin</a>
                <?php endif; ?>
                <a href="MemberList.php?deleteUser=1&userId=<?= $row['id'] ?>" class="btn btn-danger btn-sm w-100">Ban User</a>
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
    </main>

    <footer>
      <p>You are here: MemberList</p>
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
