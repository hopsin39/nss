<?php

 include("connection.php");
    include "db_conn.php";

 $id = $_POST['id'];
$sql = "DELETE FROM users WHERE user_id ='$id'";

if(mysqli_query($conn, $sql)){

    echo '<script>
                window.location = "teacher.php";
            </script>';
   
}else{
    echo '<script>
      alert("Candidate Failed to Delete");
                
                window.location = "teacher.php";
            </script>';
}

?>