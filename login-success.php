<?php
    session_start();
    include("dbconnect.php")  ;  
    $email= $_POST['email'];
    $password= $_POST['password'];
    $admin=1;
    $user=0;

    $sql = "SELECT * FROM member WHERE email='$email' AND password='$password'";
    $output = $conn->query($sql);
    if($output->num_rows > 0){
        $row = $output->fetch_assoc();
        if($row["usertype"]== 1){
            header("location:adminhome.php");
    }
    else{
        header("location:home.php");
    }

}
else{
    echo "Invalid email or password";
}
  
?>