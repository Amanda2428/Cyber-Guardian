<!DOCTYPE html>
<?php 
    include('dbconnect.php');

    $sql1="SELECT * from member";
    $result=$conn->query($sql1);

    if(isset($_GET['changeRole'])) : 
      $roleToUpdate = $_GET['roleToChange'];
      $userId = $_GET['userId'];
      $sql = "UPDATE member SET usertype = $roleToUpdate WHERE id = $userId";
      $conn->query($sql);
      header("location:MemberList.php");
      exit();
    endif;  

    if(isset($_GET['deleteUser']) and isset($_GET['userId'])) : 
      $userId = $_GET['userId'];
      $conn->query("
        DELETE FROM member WHERE id = $userId
      ");
      header("location:MemberList.php");
    endif;
  ?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Online Safety Campaign</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <nav>
  <ul>
  <li class="link"><a href="adminhome.php">Home</a></li>
        <li class="link"><a href="servicesSetup.php">Services</a></li>
        <li class="link"><a href="newsletterSetup.php">NewsLetter</a></li>
        <li class="link"><a href="howparenthelpSetup.php">HowParentHelp</a></li>
        <li class="link"><a href="socialmediaappSetup.php">SocialMediaApps</a></li>
        <li class="link"><a href="contactList.php">Help/Support</a></li>
        <li class="link"><a href="MemberList.php">MemberList</a></li>
        <li class="link"><a href="logout.php">Logout</a></li>
      </ul>
    
    </nav>
    <header>
      <h1>MemberList</h1>
      <!-- Custom Cursors and 3D Illustrations can be added here -->
    </header>

    <main>
      <section id="contact">
        
        <?php 
          if($result->num_rows>0)
          {
        ?>
        <h2>Member List</h2>
        <table border="1" cellspacing="5" cellpadding="5px">
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>City</th>
            <th>Newsletter Subscription</th>
            <th>User Type</th>
            <th></th>
          </tr>
           <?php 
            while($row=$result->fetch_assoc())
           {
           ?>

          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['password']; ?></td>
            <td><?php echo $row['city']; ?></td>
            <td><?php echo $row['subscription']==1? "Yes":"No"; ?></td>
            <td><?php echo $row['usertype']==1? "Admin":"User"; ?></td>
            <td>
              <button>
                <a href="MemberList.php?deleteUser=1&userId=<?= $row['id'] ?>">Ban User</a>
              </button>
              <button>
                <?php if($row['usertype'] == 1) : ?>
                <a href="MemberList.php?changeRole=1&userId=<?= $row['id'] ?>&roleToChange=0">Demote to User</a>
                <?php else : ?>
                <a href="MemberList.php?changeRole=1&userId=<?= $row['id'] ?>&roleToChange=1">Promote to Admin</a>
                <?php endif; ?>
              </button>
            </td>
           
          </tr>
          <?php 
           }
           ?>
        </table>
        <?php 
          }
          else{
            echo " There is no data";
          }
        ?>
       
      </section>
    </main>

    <footer>
      <p>You are here: MemberList</p>
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
