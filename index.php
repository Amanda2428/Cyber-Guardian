<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Online Safety Campaign</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <nav>
      <ul>
        <li class="link"><a href="index.php">Home</a></li>
        <li class="link"><a href="binformation.php">Information</a></li>
        <li class="link"><a href="blegislation.php">Legislation</a></li>
        <li class="link"><a href="login.php">Login</a></li>
      </ul>
      <form action="/search" method="get" class="search-input">
        <input type="text" id="search" name="search" placeholder="Search..." />
        <button type="submit">Search</button>
      </form>
      
    </nav>
    <header>
      <h1>Online Safety Campaign</h1>
      <!-- Custom Cursors and 3D Illustrations can be added here -->
    </header>

    <main>
      <section id="home">
        <h2>Welcome to Our Campaign</h2>
        <form class="row g-3" action="/search" method="get">
          <div class="col-auto">
            <label for="inputPassword2" class="visually-hidden">Search</label>
            <input type="password" class="form-control" id="search" name="search"placeholder="Search...">
          </div>
          <div class="col-auto">
            <button type="submit" class="btn btn-secondary mb-3">Search</button>
          </div>
        </form>
        <p>Empowering teenagers to navigate the digital world safely.</p>

        <!-- Web Service 1 -->
        <div class="web-service">
          <h3>Online Safety Workshops</h3>
          <p>
            Join our interactive workshops to learn about online safety and
            responsible social media use.
          </p>
          <p><strong>Date:</strong> November 15, 2024</p>
          <p><strong>Location:</strong> Virtual Event</p>
          <a href="#">Register Now</a>
        </div>

        <!-- Web Service 2 -->
        <div class="web-service">
          <h3>Anonymous Helpline</h3>
          <p>
            Need assistance or advice? Connect with our anonymous helpline for
            support regarding online challenges.
          </p>
          <p><strong>Helpline:</strong> 1-800-123-4567</p>
          <p><strong>Email:</strong> help@onlinesafety.org</p>
        </div>
      
        <!-- Most Popular Social Media Apps -->
      <section class="popular-apps">
      <div class="container text-center parteners" data-aos="fade-up" data-aos-duration="1000">
          <h1 class="pb-3">Most Popular<strong> Social Media Apps</strong></h1>
        <div class="row no-gutters clients-wrap clearfix justify-content-center">
            <div class="col-lg-3 col-md-4 col-6 gy-3 text-center">
                  <span class="text-green text-uppercase  ">Instagram</span>
                  <div class="client-logo mt-2">
                      <img src="./images/instagram.jpg" class="img-fluid" alt="" />
                  </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 gy-3 text-center">
                  <span class="text-green text-uppercase">Facebook</span>
                  <div class="client-logo">
                      <img src="./imagest/partners-2.jpg" class="img-fluid" alt="" />
                  </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 gy-3 text-center">
                  <span class="text-green text-uppercase">Twitter</span>
                  <div class="client-logo">
                      <img src="./imagest/partners-3.jpg" class="img-fluid" alt="" />
                  </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 gy-3 text-center">
                  <span class="text-green text-uppercase">Snapchat</span>
                  <div class="client-logo">
                      <img src="./imagest/partners-4.jpg" class="img-fluid" alt="" />
                  </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 gy-3 text-center">
                  <span class="text-green text-uppercase">TikTok</span>
                  <div class="client-logo">
                      <img src="./imagest/partners-5.jpg" class="img-fluid" alt="" />
                  </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 gy-3 text-center">
                  <span class="text-green text-uppercase">WhatsApp</span>
                  <div class="client-logo">
                      <img src="./imagest/partners-6.jpg" class="img-fluid" alt="" />
                  </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 gy-3 text-center">
                  <span class="text-green text-uppercase">WhatsApp</span>
                  <div class="client-logo">
                      <img src="./imagest/partners-6.jpg" class="img-fluid" alt="" />
                  </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 gy-3 text-center">
                  <span class="text-green text-uppercase">WhatsApp</span>
                  <div class="client-logo">
                      <img src="./imagest/partners-6.jpg" class="img-fluid" alt="" />
                  </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 gy-3 text-center">
                  <span class="text-green text-uppercase">WhatsApp</span>
                  <div class="client-logo">
                      <img src="./imagest/partners-6.jpg" class="img-fluid" alt="" />
                  </div>
            </div>
        </div>
      </section>

        <!-- How to Stay Safe Online -->
        <section class="stay-safe-online">
          <h3>How to Stay Safe Online</h3>
          <p>Follow these tips to ensure a secure online experience:</p>
          <ul>
            <li>Set strong, unique passwords</li>
            <li>Enable two-factor authentication</li>
            <li>Be cautious about sharing personal information</li>
            <li>Regularly update privacy settings</li>
            <li>Use antivirus software</li>
            <li>Verify the authenticity of online information</li>
          </ul>
        </section>
    </main>

    <footer>
      <p>You are here: Home</p>
      <div class="footer-content">
        <p>&copy; 2024 Online Safety Campaign</p>
        <!-- Add social media buttons with relevant links -->
        <a href="#" style="color: white">Facebook</a>
        <a href="#" style="color: white; margin-left: 10px">Twitter</a>
        <a href="#" style="color: white; margin-left: 10px">Instagram</a>
      </div>
    </footer>
  </body>
</html>
