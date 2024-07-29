<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include("dbconnect.php");

// Check if editid is provided
if (!isset($_GET['editid']) || empty($_GET['editid'])) {
    die("No ID specified.");
}

// Handle form submission for profile update
if (isset($_POST['btnSave'])) {
    $id = $conn->real_escape_string($_POST['id']);
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);
    $city = $conn->real_escape_string($_POST['city']);

    $Filename = $_FILES["image"]["name"] ?? null;
    $Filepath = $_FILES["image"]["tmp_name"] ?? null;

    if ($Filename && $Filepath) {
        move_uploaded_file($Filepath, "images/" . $Filename);
        $sql = "UPDATE member SET name=?, email=?, profileImg=?, password=?, city=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssi", $name, $email, $Filename, $password, $city, $id);
    } else {
        $sql = "UPDATE member SET name=?, email=?, password=?, city=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssi", $name, $email, $password, $city, $id);
    }

    if ($stmt->execute()) {
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
}

$eid = $_GET['editid'];

// Prepare and execute SQL query
$stmt = $conn->prepare("SELECT * FROM member WHERE id = ?");
$stmt->bind_param("i", $eid);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

// Check if record was found
if (!$row) {
    die("No record found for ID: $eid");
}
?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Profile</title>
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
        <section id="contact" class="shadow back-color">
            <h2><strong>Edit Profile</strong></h2>

            <form action="edit-profile.php?editid=<?php echo $eid; ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($row['id']); ?>">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($row['name']); ?>" required />

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" value="<?php echo htmlspecialchars($row['password']); ?>" required />

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($row['email']); ?>"required />

                <label for="city">City:</label>
                <input type="text" id="city" name="city" value="<?php echo htmlspecialchars($row['city']); ?>" required />

                <label for="image" class="form-label">Image:</label>
                <input class="form-control" type="file" id="image" name="image" />

                <label for="col" class="form-label">Previous Image:</label>
                <img src="<?php echo "images/" . htmlspecialchars($row['profileImg']); ?>" width="100%" height="300px" alt="">

                <button type="submit" name="btnSave" class="btn btn-primary">Save</button>
            </form>

            <p>
                Before sending a message, please review our
                <a href="privacy-policy.html" target="_blank">Privacy Policy</a>.
            </p>
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