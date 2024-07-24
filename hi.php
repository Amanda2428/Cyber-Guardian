<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Online Safety Campaign</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<?php
include ('dbconnect.php');
session_start();
?>

<body>
  <nav>
    <ul>
      <li class="link"><a href="home.php">Home</a></li>
      <li class="link"><a href="information.php">Information</a></li>
      <li>
        Campaigns
        <ul>
          <li class="link"><a href="popular-apps.php">Popular Apps</a></li>
          <li class="link"><a href="parents-help.php">Parents Help</a></li>
          <li class="link"><a href="livestreaming.php">Livestreaming</a></li>
        </ul>
      </li>
      <li class="link"><a href="contact.php">Contact</a></li>
      <li class="link"><a href="legislation.php">Legislation</a></li>
      <li class="link"><a href="logout.php">Logout</a></li>
    </ul>
    <form action="https://www.google.com/search" method="get" class="search-input">
      <input type="text" id="search" name="q" placeholder="Search Google..." />
      <button type="submit">Search</button>
    </form>
  </nav>

  <header>
    <h1 class="text-center my-5">Online Safety Campaign</h1>
  </header>

  <main>
    <section class="container mt-5">
      <div class="row">
        <div class="col-md-12 mb-4">
          <div class="card shadow-sm">
            <div class="card-body">
              <h2 class="card-title">Legislation and Guidance</h2>
              <p class="card-text">
                Stay informed about the legal aspects and best practices related to online safety. Understanding the
                legal framework and adhering to best practices is crucial for ensuring a safer online experience for
                everyone. Understanding the legislation surrounding online safety is crucial for creating a safer
                digital environment.
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-12 mb-6">
          <div class="card shadow-sm">
            <img src="images/bully4.jpg" class="card-img-top" alt="Legislation">
            <div class="card-body">
              <p class="card-text">
                Being aware of the laws that govern online safety is important. Here are some key pieces of legislation:
              </p>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Mandates quick removal of harmful content and protection for children</li>
                <li class="list-group-item">Ensures secure handling of personal data and user control.</li>
                <li class="list-group-item">Requires parental consent for collecting info from children under 13.</li>
                <li class="list-group-item">Handles copyright issues and removal of unauthorized content.</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-12 mb-4">
          <div class="card shadow-sm">
            <div class="card-body">
              <h2 class="card-title">Legislation and Guidance</h2>
              <p class="card-text">
                Stay informed about the legal aspects and best practices related to online safety. Understanding the
                legal framework and adhering to best practices is crucial for ensuring a safer online experience for
                everyone. Understanding the legislation surrounding online safety is crucial for creating a safer
                digital environment.
              </p>
            </div>
          </div>
        </div>

        
      </div>
    </section>
  </main>

  <?php
  include ("footer.php");
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>