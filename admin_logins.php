<?php
    session_start();
    include("connection.php");

    $email = $_POST['email'];
    $password = $_POST['password'];
    $check = mysqli_query($connect, "SELECT * from admin WHERE email='$email' and password ='$password' ");

    if(mysqli_num_rows($check)>0){
        
        $data = mysqli_fetch_array($check);
        $_SESSION['id'] = $data['id'];
        $_SESSION['status'] = $data['status'];
        $_SESSION['data'] = $data;

        // $_SESSION['msg'] ="<div class='alert alert-info'>Login Successful</div>";
          header('location: admin_index.php');
    }
    else{
          $_SESSION['msg'] ="<div class='alert alert-danger'>Incorrect staff ID or Password </div>";
          header('location: admin_login.php');
       
    }
    
?>