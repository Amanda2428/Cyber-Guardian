<?php
if (isset($_POST['btnSearch'])) :
    header("location:" . $_POST['searchIn'] . "&keyword=" . $_POST['searchKeyWord']);
    exit();
endif;
?>

<nav class="navbar navbar-expand-lg" id="nav">
    <a class="navbar-brand" href="#">
        <img src="images/logo.png" width="130px" height="70px" class="d-inline-block align-top" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="link" href="home.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="link" href="information.php">Information</a>
            </li>
            <li class="nav-item dropdown">
                <a class="link data-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Campaigns</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="popular-apps.php">Popular-app</a></li>
                    <li><a class="dropdown-item" href="parents-help.php">Parents Help</a></li>
                    <li><a class="dropdown-item" href="livestreaming.php">Livestreaming</a></li>
                </ul>
            </li>
            <!-- updating-->
            <li class="nav-item">
                <a class="link" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
                <a class="link" href="legislation.php">Legislation</a>
            </li>
        </ul>
        <div class="logout">
            <a class="d-flex flex-row mt-2" href="logout.php"><i class="fa-solid fa-user"></i><i class="fa-solid fa-right-from-bracket"></i></a>
        </div>
        <form action="#" method="POST" class="form-inline my-2 d-flex flex-row  align-items-center justify-content-center gap-3 mr-20 form-responsive w-75">
            <input name="searchKeyWord" class="form-control mr-sm-2 w-100" type="search" placeholder="Search" aria-label="Search" required>
            <select name="searchIn" class="form-control w-50" required>
                <option value="#" disabled selected>↓</option>
                <option value="home.php?search=1&table=newsletter">Newsletter</option>
                <option value="home.php?search=1&table=services">Service</option>
                <option value="popular-apps.php?search=1&table=socialmediaapps">Social-Media Apps</option>
                <option value="parents-help.php?search=1&table=howparenthelp">Parents Help</option>
            </select>
            <button name="btnSearch" class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        
        <div class="profile ">
            <img class="wh" src="<?= "images/" . $_SESSION['user']['profileImg'] ?>" alt="" />
        </div>
    </div>
</nav>
