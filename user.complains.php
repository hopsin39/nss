
<?php
    include("connection.php");
    include "db_conn.php";
    session_start();

    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $user_msg = $_POST['user_msg'];
  
    
    $sql = "SELECT * FROM complains WHERE status='1' ";
    $result = mysqli_query($conn, $sql);
    
   $insert = mysqli_query($connect, "insert into complains (complain_msg, status, full_name, email ) values('$user_msg', '0', '$full_name', '$email') ");

       
        if($insert){

           $_SESSION['msg'] ="<div class='alert alert-info'>Successful</div>";
          header('location: user.complain.php');

        }
    
?>

