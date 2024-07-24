<!DOCTYPE html>
<?php
include('dbconnect.php');
session_start();
$email = $_SESSION['user']['email'];
if(isset($_GET['btnSearch'])) : 
  $keyword = $_GET['keyword'];
  $sql1 = "SELECT * from member WHERE email LIKE '%$keyword%' OR name LIKE '%$keyword%'";
else : 
  $sql1 = "SELECT * from member";
endif;

$result = $conn->query($sql1);

if (isset($_GET['changeRole'])) :
  $roleToUpdate = $_GET['roleToChange'];
  $userId = $_GET['userId'];
  $sql = "UPDATE member SET usertype = $roleToUpdate WHERE id = $userId";
  $conn->query($sql);
  header("location:MemberList.php");
  exit();
endif;

if (isset($_GET['deleteUser']) and isset($_GET['userId'])) :
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
  <!-- Navbar start -->
  <?php include("adminnav.php"); ?>
  <!-- Navbar end -->
  <header>
    <h1 class="mt-3"><strong>Member List </strong></h1>
    <!-- Custom Cursors and 3D Illustrations can be added here -->
  </header>
  <div class="searching container d-flex flex-column align-items-center  ">
    <form class="form-inline my-2  d-flex flex-row gap-3 mr-20  form-responsive">
      <input class="form-control mr-sm-2 w-100" name="keyword" type="search" placeholder="Search..." aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" name="btnSearch" type="submit">Search</button>
    </form>
    <p class="mt-4">Guiding teenagers to explore the digital world securely.</p>
    <?php if(isset($_GET['btnSearch'])) : ?>
      <p>Search result on: <span class="fw-bold"><?= $keyword ?></span></p>
      <button type="button" class="btn btn-outline-danger ms-2">
        <a class="text-decoration-none text-danger" href="MemberList.php">Clear Search</a>
      </button>
    <?php endif; ?>
  </div>
  <main>
    <!-- Table Start -->
    <section id="newsletters rad">

      <div class="container table-responsive ">
        <?php
        if ($result->num_rows > 0) {
        ?>
          <table class="table table-striped table-hover  table-info  overflow-hidden rounded align-items-center text-center">
            <tr class="table-dark">
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
            while ($row = $result->fetch_assoc()) {
            ?>
              <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td><?php echo $row['city']; ?></td>
                <td><?php echo $row['subscription'] == 1 ? "Yes" : "No"; ?></td>
                <td><?php echo $row['usertype'] == 1 ? "Admin" : "User"; ?></td>
                <td class="promote h-100">
                  <?php if ($row['usertype'] == 1) : ?>
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

  <!-- Footer Start -->
  <?php include("adminfooter.php") ?>
  <!-- Footer End -->
  <!-- Bootstrap 5 JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>