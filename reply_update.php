<?php
    session_start();
    include("connection.php");

    $staff_ID = $_POST['staff_ID'];

    $check = mysqli_query($connect, "select * from complains where complain_id='$staff_ID' ");

    if(mysqli_num_rows($check)>0){
       
        $data = mysqli_fetch_array($check);
        $_SESSION['id'] = $data['complain_id'];
    
        $_SESSION['data'] = $data;
        echo '<script>
                window.location = "reply_updates.php";
            </script>';
    }
    else{
        echo '<script>
                alert("Invalid credentials!");
                window.location = "teacher.php";
            </script>';
    }
    
?>