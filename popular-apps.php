<!DOCTYPE html>

<?php
session_start();
$email = $_SESSION['user']['email'];
include("dbconnect.php");

if (isset($_GET['search'])) :
  $table = $_GET['table'];
  $keyword = $_GET['keyword'];
  $sql1 = "SELECT * from $table WHERE name LIKE '%$keyword%'";
else :
  $sql1 = "SELECT * from socialmediaapps";
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
  <!-- Navbar start -->
  <?php include("usernav.php"); ?>
  <!-- Navbar End -->
  <header>
    <h1>Online Safety Campaign</h1>
    <!-- Custom Cursors and 3D Illustrations can be added here -->
  </header>

  <main>
    <section id="popular-apps">
      <h2>Most Popular Social Media Apps</h2>
      <?php if(isset($_GET['search'])) : ?>
      <h3>Search result on : <?= $keyword ?></h3>
      <button>
        <a href="popular-apps.php">Clear Search</a>
      </button>
      <?php
      endif;
      if ($result->num_rows > 0) {
        
        while ($row = $result->fetch_assoc()) {
      ?>
          <!--  Service 1 -->
          <div class="web-service">
            <h3><?php echo $row['name']; ?></h3>
            <p><img src="<?php echo "images\\" . $row['logo']; ?>" width="100px" height="100px"></p>
            <p>
              <a href="<?php echo $row['link']; ?>"> Facebook Login </a>
            </p>
            <p><strong><a href="<?php echo $row['privacylink']; ?>"> Privacy Settings </a></strong> </p>

          </div>
      <?php
        }
      } else {
        echo isset($_GET['search']) ? "<p>Nothing found on $keyword. </p>" : "<p>No results.</p>";
      }
      ?>


    </section>
  </main>

  <?php include("userfooter.php") ?>
  <!-- Bootstrap 5 JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>