<?php
    include("connection.php");
    include "db_conn.php";

    $full_name = $_POST['full_name'];
    $gender = $_POST['gender'];
    $date_of_birth = $_POST['date_of_birth'];
    $staff_ID = $_POST['staff_ID'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $password=$_POST['password'];
    $image = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];

   
    $sql = "SELECT * FROM users WHERE full_name='$full_name' ";
    $result = mysqli_query($conn, $sql);
    move_uploaded_file($tmp_name,"users/$image");
    $insert = mysqli_query($connect, "insert into users (full_name, gender, date_of_birth, staff_ID, email, contact, password, image) values('$full_name', '$gender', '$date_of_birth', '$staff_ID', '$email','$contact', '$password', '$image') ");
        
        if($insert){
            echo '<script>
                    alert("Registration Successful!");
                    window.location = "teacher_login.php";
                </script>';
        }
    else{
         echo '<script>
                    alert("Item Fails!");
                    window.location = "isell.php";     
                </script>';
    }
    
    
?>

