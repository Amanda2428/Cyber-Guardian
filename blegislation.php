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
  <nav class="navbar navbar-expand-lg " id="nav">
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
        <section id="hero">
            <div class="container-fluid">
                <div class="hero-section">
                    <h5 class="text-uppercase">Blog Post</h5>
                    <h1>Showtime for Social Media Laws</h1>
                    <p>by Anni Carlsson</p>
                </div>
            </div>
        </section>
    </header>

    <main>
        <div class="container content-section">
            <div class="row">
                <div class="col-md-4">
                    <img src="./images/ph-using.jpg" alt="Social Media" class="img-fluid mb-3 rounded">
                    <div class="info-card mb-3">
                        <p>Project Bluebird: Innovation in the (AI)r</p>
                        <p>📅 June 12, 2024</p>
                    </div>
                    <div class="info-card mb-3">
                        <p>DPDPA 2023 vs. GDPR: A Comparative Analysis of India’s & EU’s Data Privacy Laws</p>
                        <p>📅 May 15, 2024</p>
                    </div>
                    <div class="info-card mb-3">
                        <p>Post-doc Position – Digital surveillance and technological sovereignty</p>
                        <p>📅 May 8, 2024</p>
                    </div>

                </div>
                <div class="col-md-8 web-service fs-6 ">
                    <h3><strong>From Take-Down Duties to Obligations to Uphold Free Speech</strong></h3>
                    <p>Calls for harder regulation of social media platforms have echoed worldwide for a while. In particular, the effect of platforms’ content moderation on freedom of expression has recently engaged lawmakers in Europe and the US. What is particularly salient with this fresh wave of social media legislation is that it does not just require platforms to remove specific content. On the contrary, the novel social media laws can demand that platforms do not remove particular content. This blog post will present the recent social media laws adopted in Europe and the US that protect users’
                        free speech exercise against platforms and discuss the challenges they face in the coming year.</p>
                    <h3><strong>Platform Laws in the Limelight on Both Sides of the Atlantic</strong></h3>
                    <p>In Europe, the EU adopted the Digital Services Act (DSA) in 2022. The regulation imposes various duties related to content moderation on social media
                        platforms and will become fully effective in February 2024.</p>
                    <br>
                    <p>There are several ways in which the DSA safeguards users’ free speech interests against platforms. It imposes obligations on platforms to include clear information about content restrictions in their terms of service and pay due regard to free speech rights of users when applying and enforcing these restrictions (Art. 14). Platforms must also provide a statement of reasons to users whose content has been restricted or whose account has been suspended or terminated (Art. 17). Furthermore, platforms are required to set up an internal complaint-handling system, which
                        nables users to complain about platforms’ decisions to limit their content or accounts (Art. 20).</p>
                    <br>
                    <p>In the US, legislative offensives against social media platforms accelerated after the major platforms blocked former president Donald Trump from their services in January 2021 following the storming of the US Capitol in Washington, D.C. Two social media laws that have received the most attention are the bills passed by lawmakers in Florida and Texas in 2021.</p>

                    <section class="legislation-content mt-4">
                        <h3><strong>Legislation and Guidance</strong></h3>
                        <p>Stay informed about the legal aspects and best practices when it comes to online social media use.</p>

                        <h3><strong>Relevant Legislation</strong></h3>
                        <p>Understanding the legal framework is crucial. Here are some key pieces of legislation related to online safety:</p>
                        <ul class="arrow-list ">
                            <li>The Online Safety Act: Protects users from harmful content.</li>
                            <li>Data Protection Regulations: Ensures privacy and data security.</li>
                            <li>Child Online Privacy Act (COPA): Protects children's online data.</li>
                            <li>Digital Services Act (DSA): Regulates platform responsibilities.</li>
                        </ul>
                        <img src="./images/law.jpg" alt="Related Topic" class="img-fluid mb-3 rounded">
                        <h3><strong>Best Practice Guidance</strong></h3>
                        <p>Follow these best practices to ensure a safe and responsible online experience:</p>
                        <ul class="arrow-list ">
                            <li>Teach responsible social media use from a young age.</li>
                            <li>Encourage open communication with children about their online activities.</li>
                            <li>Use privacy settings to control the visibility of personal information.</li>
                            <li>Report and block inappropriate content or users.</li>
                            <li>Regularly update passwords and use two-factor authentication.</li>
                        </ul>
                    </section>
                </div>
            </div>
        </div>
    </main>

  <!-- Footer Start -->
  <?php include("defaultfooter.php") ?>
  <!-- Footer End -->
  <!-- Bootstrap 5 JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>