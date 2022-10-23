<?php
    session_start();
    include("connection.php");

    $name = $_POST['name'];
    $id = $_POST['id'];
    $check = mysqli_query($connect, "select * from users where full_name='$name' and user_id='$id' ");

    if(mysqli_num_rows($check)>0){
       
        $data = mysqli_fetch_array($check);
        $_SESSION['user_id'] = $data['user_id'];
        
        $_SESSION['data'] = $data;
        echo '<script>
                window.location = "user.update.php";
            </script>';
    }
    else{
        echo '<script>
                alert("Invalid credentials!");
                window.location = "user.profile.php";
            </script>';
    }
    
?>