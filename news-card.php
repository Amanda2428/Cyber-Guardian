<!DOCTYPE html>
<html lang="en">
<?php
session_start();
$email = $_SESSION['user']['email'];
include("dbconnect.php");
// Your PHP code for fetching newsletter data
$sql2 = "SELECT * from newsletter";
$resNews = $conn->query($sql2);


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM newsletter WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $newsItem = $result->fetch_assoc();
    } else {
        echo "No news item found.";
    }
} else {
    echo "No ID provided.";
}
?>

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

    <header>
    </header>

    <main>

        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up" data-aos-duration="1000">
                <div class="blog-div">
                    <div class="blog-1">
                        <?php if (isset($newsItem)) : ?>
                            <div class="card">
                            <div class="card-img-top">
                            <img src="images/<?php echo $newsItem['newsimg']; ?>" class="" alt="News Image">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title single-head"><b>Title။ ။ <?php echo $newsItem['title']; ?></b></h5>
                                <p class="card-text single-text ">
                                    <b>Content။ ။ </b><?php echo $newsItem['content']; ?>
                                </p>
                            </div>
                        </div>
                        <?php else : ?>
                            <p>No news item to display.</p>
                        <?php endif; ?>
                        
                    </div>
                    <div class="blog-2 col-lg-4">
                        <h3 class="sidebar-title">Recent Posts</h3>
                        <div class="sidebar-item categories">
                            <?php
                            if ($resNews->num_rows > 0) {
                                while ($rowNew = $resNews->fetch_assoc()) {
                            ?>
                                    <div class="post-item clearfix">
                                        <div class="post-item-img mb-3">
                                            <img class="  mb-3 mr-20" src="images/<?php echo $rowNew['newsimg'] ?>" alt="Image not found">
                                        </div>
                                        <div class="post-item-text">
                                            <h4>
                                                <a href="#"><b><?php echo $rowNew['title']; ?></b></a>
                                            </h4>
                                            <i><?php echo $rowNew['publishdate']; ?></i>
                                        </div>
                                    </div>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer start -->
    <?php include("userfooter.php"); ?>
    <!-- Footer End -->

    <!-- Js links -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- AOS js -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="script.js"></script>
</body>

</html>