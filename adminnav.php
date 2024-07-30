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
    </ul>
    <div class="logout ">
      <a class="d-flex flex-row" href="logout.php"><i class="fa-solid fa-user"></i><i class="fa-solid fa-right-from-bracket"></i></a>
    </div>
    <div class="profile" onclick="toggleProfileCard()">
      <img class="rounded-circle" src="<?= 'images/' . $_SESSION['user']['profileImg'] ?>" alt="Profile" width="60" height="60" />
    </div>
    <div id="profileCard" class="profile-card position-absolute rounded">
      <div class="card-body d-flex flex-column align-items-center justify-content-center">
        <img class="rounded-circle mb-3" src="<?= 'images/' . $_SESSION['user']['profileImg'] ?>" alt="Profile" width="70" height="70" />
        <p class="card-text fs-5"><strong><?= $_SESSION['user']['name'] ?></strong></p>
        <p class="card-text "><?= $_SESSION['user']['email'] ?></p>
        <a href="edit-profile.php?editid=<?= $_SESSION['user']['id'] ?>" class="btn btn-success">Edit Profile</a>
      </div>
    </div>
  </div>
</nav>