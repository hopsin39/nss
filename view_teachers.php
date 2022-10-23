
<?php
    session_start();
    $data = $_SESSION['data'];
?>



<?php
include 'config.php';

if(isset($_POST['update_profile'])){

   $update_name = mysqli_real_escape_string($conn, $_POST['update_name']);
   $update_dateofbirth = mysqli_real_escape_string($conn, $_POST['update_dateofbirth']);
   $update_gender = mysqli_real_escape_string($conn, $_POST['update_gender']);
   $update_qualification = mysqli_real_escape_string($conn, $_POST['update_qualification']);
   $update_subject = mysqli_real_escape_string($conn, $_POST['update_subject']);
   $update_class = mysqli_real_escape_string($conn, $_POST['update_class']);
   $update_contact = mysqli_real_escape_string($conn, $_POST['update_contact']);
   $update_email = mysqli_real_escape_string($conn, $_POST['update_email']);
   $update_secret_code = mysqli_real_escape_string($conn, $_POST['update_secret_code']);
    
   $id =$_POST['id'];

   mysqli_query($conn, "UPDATE `student` SET full_name = '$update_name', date_of_birth = '$update_dateofbirth', gender = '$update_gender', class = '$update_qualification', house = '$update_subject', address = '$update_class', student_ID = '$update_contact', parent_name = '$update_email', parent_contact = '$update_secret_code' WHERE id = '$id'") or die('query failed');

   
   $update_image = $_FILES['update_image']['name'];
   $update_image_size = $_FILES['update_image']['size'];
   $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
   $update_image_folder = 'students/'.$update_image;

   if(!empty($update_image)){
      if($update_image_size > 2000000){
         $message[] = 'image is too large';
      }else{
         $image_update_query = mysqli_query($conn, "UPDATE `student` SET image = '$update_image' WHERE id = '$id'") or die('query failed');
         if($image_update_query){
            move_uploaded_file($update_image_tmp_name, $update_image_folder);
         }
        
      }
   }header('location:students.php');

}

?>





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
<title>TIME SCHEDULING SYSTEM</title>
    <link rel="icon" href="log.jpg">
	<link rel="stylesheet" href="styles.css">
   <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>


<body style="background: whitesmoke;">
  <div class="wrapper">
    
    <div class="team">
    <div class="team_member" style="width: 60%">
       <p class="role" style="margin-bottom: 10px; font-size: 18px; color: black;">STAFF PROFILE</p>
       <hr>
       
    
        <img src="media/<?php echo $data['image']?>"  style="width: 250px;  height: 200px;  padding: 5px;">

        <form action="" method="post" enctype="multipart/form-data">

         <table style="margin-left: 20%;"> 

        <h3 style="text-transform: uppercase; font-size: 20px; margin-top: 20px;"><b></b></h3>

         <tr><td><p style="color: darkred; font-size: 15px;">Full Name:</p><td>

          <td><span style="height: 30px; text-transform: uppercase; padding-left: 3px; margin: 2px"><?php echo $data['full_name']; ?></span></td></tr>

          <tr><td><p style="color: darkred; font-size: 15px;">Date of Birth:</p><td>

          <td><span style="height: 30px; text-transform: uppercase; padding-left: 3px; margin: 2px"><?php echo $data['date_of_birth']; ?></span></td></tr>


          <tr><td><p style="color: darkred; font-size: 15px;">Gender:</p><td>

          <td style="height: 30px; text-transform: uppercase; padding-left: 3px; margin: 2px"> <?php echo $data['gender']; ?></td></tr>



          <tr><td><p style="color: darkred; font-size: 15px; text-align: left;">Email:</p><td>

          <td><span style="height: 30px; text-transform: lowercase; padding-left: 3px; margin: 2px"><?php echo $data['email']; ?></span></td></tr>



          <tr><td><p style="color: darkred; font-size: 15px; text-align: left;">Contact:</p><td>

          <td><span style="text-align: left; height: 30px; padding-left: 3px; margin: 2px"><?php echo $data['contact']; ?></span></td></tr>



          <tr><td><p style="color: darkred; font-size: 15px; text-align: left;">Date Registered:</p><td>

          <td><span style="height: 30px;  padding-left: 3px; margin: 2px"><?php echo $data['joined_date']; ?></span></td></tr>
            </tr>
            
        </table>
                <div style="margin-top: 25px;">
                       <a href="teacher.php"  style="padding: 10px; font-size: 15px; background-color: black; color: white; border-radius: 5px; border: 0px; text-decoration: none; padding-left: 30px; padding-right: 30px;">BACK</a>
                   </div>
        </form>
        
    
    </div>
    </div>
  </div>


</body>
</html>