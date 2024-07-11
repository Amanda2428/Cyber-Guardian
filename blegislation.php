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
            <a class="link " href="index.php">Home</span></a>
          </li>
          <li class="nav-item">
            <a class="link " href="binformation.php">Information</a>
          </li>
          <li class="nav-item">
            <a class="link " href="blegislation.php">Legislation</a>
          </li>
          <li class="nav-item">
            <a class="link " href="login.php">Login</a>
          </li>
        </ul>

        <form class="form-inline my-2  d-flex flex-row gap-3 mr-20 w-35 form-responsive">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
       
      </div>
    </nav>
    <header>
      <h1>Online Safety Campaign</h1>
      <!-- Custom Cursors and 3D Illustrations can be added here -->
    </header>

    <main>
      <section class="legislation-content">
        <h2>Legislation and Guidance</h2>

        <p>
          Stay informed about the legal aspects and best practices when it comes
          to online social media use.
        </p>

        <!-- Information about Legislation and Guidance -->
        <h3>Relevant Legislation</h3>
        <p>
          Understanding the legal framework is crucial. Here are some key pieces
          of legislation related to online safety:
        </p>
        <ul>
          <li>The Online Safety Act</li>
          <li>Data Protection Regulations</li>
          <li>Child Online Privacy Act (COPA)</li>
          <!-- Add more legislation items as needed -->
        </ul>

        <h3>Best Practice Guidance</h3>
        <p>
          Follow these best practices to ensure a safe and responsible online
          experience:
        </p>
        <ul>
          <li>Teach responsible social media use from a young age</li>
          <li>
            Encourage open communication with children about their online
            activities
          </li>
          <li>
            Use privacy settings to control the visibility of personal
            information
          </li>
          <li>Report and block inappropriate content or users</li>
          <!-- Add more best practice guidance items as needed -->
        </ul>
      </section>
    </main>

        <!-- Footer Start -->
        <?php include("defaultfooter.php")?>
    <!-- Footer End -->
    <!-- Bootstrap 5 JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
