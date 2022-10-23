<?php
    session_start();
    include("connection.php");

    $email = $_POST['email'];
    $password = $_POST['password'];
    $check = mysqli_query($connect, "select * from users where email='$email' and password ='$password' ");

    if(mysqli_num_rows($check)>0){
        
        $data = mysqli_fetch_array($check);
        $_SESSION['id'] = $data['id'];
        $_SESSION['data'] = $data;
        


        
          header('location: user.index.php');
    }
    else{
          $_SESSION['msg'] ="<div class='alert alert-danger'>Incorrect Email or Password </div>";
          header('location: user_login.php');
       
    }
    
?>


