<?php
    session_start();
    include("connection.php");

    $staff_ID = $_POST['staff_ID'];
    $password = $_POST['password'];

    $check = mysqli_query($connect, "select * from users where staff_ID='$staff_ID' and password ='$password'");

    if(mysqli_num_rows($check)>0){
        
        // $_SESSION['msg'] ="<div class='alert alert-info'>Successful</div>";

        $data = mysqli_fetch_array($check);
        $_SESSION['id'] = $data['id'];
        $_SESSION['status'] = $data['status'];
        $_SESSION['data'] = $data;


          header('location: user.index.php');

    }
    else{
         $_SESSION['msg'] ="<div class='alert alert-danger'>Incorrect staff_ID or Password <br> Click forgot password to reset</div>";
          header('location: teacher_login.php');
    }
    
?>