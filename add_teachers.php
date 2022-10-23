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
    $secret_code = $_POST['secret_code'];
    $subject = $_POST['subject'];
    $qualification =$_POST['qualification'];
    $subject_code =$_POST['subject_code'];
    

    $image = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];

   
    $sql = "SELECT * FROM teachers WHERE staff_ID='$staff_ID' ";
    $result = mysqli_query($conn, $sql);

    move_uploaded_file($tmp_name,"teachers/$image");
    $insert = mysqli_query($connect, "insert into teachers (full_name, gender, date_of_birth, staff_ID, email, contact, password, image, secret_code, qualification, subject, subject_code) values('$full_name', '$gender', '$date_of_birth', '$staff_ID', '$email','$contact', '$password', '$image', '$secret_code' , '$qualification', '$subject','$subject_code') ");
        
        if($insert){
            echo '<script>
                    alert("Registration Successful!");
                    window.location = "add_teacher.php";
                </script>';
        }
    else{
         echo '<script>
                    alert("Item Fails!");
                    window.location = "add_teacher.php";     
                </script>';
    }
    
    
?>

