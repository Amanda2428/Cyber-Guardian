<!DOCTYPE html>
<?php
include('dbconnect.php');
session_start();
$email = $_SESSION['user']['email'];
if(isset($_GET['btnSearch'])) : 
  $keyword = $_GET['keyword'];
  $sql1 = "SELECT * from contactus WHERE email LIKE '%$keyword%'";
else : 
  $sql1 = "SELECT * from contactus";
endif;

$result = $conn->query($sql1);

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
  <?php
  // Delete Query
  if (isset($_GET['deleteid'])) {
    $did = $_GET['deleteid'];
    $sql = "DELETE from contactus where id='$did'";
    if ($conn->query($sql) == True) {
      echo "<div> Delete One Record Successfully</div>";
      header("location:contactList.php");
    }
  }
  ?>
  <!-- Navbar start -->
  <?php include("adminnav.php"); ?>
  <!-- Navbar end -->
  <!-- Header Start -->
  <header>
    <h1 class="mt-3"><strong>Help/Support Messaging</strong></h1>
    <!-- Custom Cursors and 3D Illustrations can be added here -->
  </header>

  <div class="searching container d-flex flex-column align-items-center  ">
    <form method="GET" class="form-inline my-2  d-flex flex-row gap-3 mr-20  form-responsive">
      <input class="form-control mr-sm-2 w-100" type="search" name="keyword" placeholder="Search..." aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" name="btnSearch" type="submit">Search</button>
    </form>
    <p class="mt-4">Guiding teenagers to explore the digital world securely.</p>
    <?php if(isset($_GET['btnSearch'])) : ?>
      <p>Search result on: <span class="fw-bold"><?= $keyword ?></span></p>
      <a href="contactList.php" class="btn btn-danger ms-2 text-decoration-none">
    Clear Search
  </a>
    <?php endif; ?>
  </div>
  <main>
    <!-- Table Start -->
    <section id="newsletters ">

      <div class="container table-responsive ">
        <?php
        if ($result->num_rows > 0) {
        ?>
          <table class="table table-striped table-hover  table-info  overflow-hidden rounded align-items-center text-center">
            <tr class="table-dark">
              <th scope="col">ID</th>
              <th scope="col">Message</th>
              <th scope="col">Email</th>
              <th scope="col">Received Date</th>
              <th scope="col action">Action</th>
            </tr>
            <?php
            while ($row = $result->fetch_assoc()) {
            ?>

              <tr>
                <td class="responsive-text"><?php echo $row['id']; ?></td>
                <td class="responsive-text"><?php echo $row['message'] ?></td>
                <td class="responsive-text "><?php echo $row['email'] ?></td>
                <td class="responsive-text"> <?php echo $row['sentdate']; ?></td>
                <td class="action h-100">
                  <a href="contactList.php?deleteid=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm w-100">Delete</a>
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