<!DOCTYPE html>
<?php
session_start();
$email = $_SESSION['user']['email'];
include("dbconnect.php");

if (isset($_GET['search'])) {
  $table = $_GET['table'];
  $keyword = $_GET['keyword'];
  $sql1 = "SELECT * FROM $table WHERE name LIKE '%$keyword%'";
} else {
  $sql1 = "SELECT * FROM socialmediaapps";
}

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
  <!-- AOS CSS -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <!-- Style CSS -->
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <!-- Navbar start -->
  <?php include("usernav.php"); ?>
  <!-- Navbar End -->
  <header class="web-service ">

    <h1 class="fs-3 p-3"><strong>How to Prevent Your Child from Dangerous Social Media Apps</strong></h1>
    <p class="p-3 fs-5">In today's digital age, social media can be a double-edged sword, offering both opportunities for connection and risks of exposure to harmful content. Studies show that a 
      significant percentage of teenagers encounter cyberbullying and privacy violations online. To protect your child, it's crucial to guide them on safe social media practices. Encourage open conversations about their online experiences and emphasize the importance of privacy settings. By regularly reviewing their social media accounts and teaching them how to block or report inappropriate behavior, you can help them navigate the digital world safely. Explore more about social media privacy and bullying prevention by clicking the links below.</p>
  
  </header>

  <main>
    <section id="popular-apps">
      <div class="container text-center mt-5">
        <?php if (isset($_GET['search'])) : ?>
          <h3>Search result for: <?= htmlspecialchars($keyword) ?></h3>
            <a href="popular-apps.php" class="btn btn-primary button">Clear Search</a>
        <?php endif; ?>
        
        <div class="row" data-aos="fade-up">
          <?php
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
          ?>
              <div class="col-md-4 mb-4">
                <div class="app-card">
                  <img src="<?php echo "images/" . htmlspecialchars($row['logo']); ?>" alt="App Logo" class="app-image">
                  <h3 class="mt-2"><strong><?php echo htmlspecialchars($row['name']); ?></strong></h3>
                  <div class="mt-3  ">
                    <a href="<?php echo htmlspecialchars($row['link']); ?>" class="btn btn-primary button w-50">App Link</a>
                    <a href="<?php echo htmlspecialchars($row['privacylink']); ?>" class="btn btn-secondary button w-50">Privacy Policy</a>
                  </div>
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
      </div>
    </section>
  </main>

  <?php include("userfooter.php") ?>
  
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <!-- AOS JS -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
    <script src="script.js"></script>
</body>

</html>
