
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
   $update_email = mysqli_real_escape_string($conn, $_POST['update_email']);
   $update_contact = mysqli_real_escape_string($conn, $_POST['update_contact']);
   $update_staff_id = mysqli_real_escape_string($conn, $_POST['update_staff_id']);
    
   $user_id =$_POST['user_id'];
   mysqli_query($conn, "UPDATE `users` SET full_name = '$update_name', date_of_birth = '$update_dateofbirth', gender = '$update_gender', email = '$update_email', contact = '$update_contact',  staff_id = '$update_staff_id' WHERE user_id = '$user_id'") or die('query failed');

   
   $update_image = $_FILES['update_image']['name'];
   $update_image_size = $_FILES['update_image']['size'];
   $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
   $update_image_folder = 'staff/'.$update_image;

   if(!empty($update_image)){
      if($update_image_size > 2000000){
         $message[] = 'image is too large';
      }else{
         $image_update_query = mysqli_query($conn, "UPDATE `users` SET image = '$update_image' WHERE user_id = '$user_id'") or die('query failed');
         if($image_update_query){
            move_uploaded_file($update_image_tmp_name, $update_image_folder);
         }
        
      }
   }header('location:teacher.php');

}

?>





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TIME SCHEDULING SYSTEM </title>
   <link rel="icon" href="log.jpg">
	<link rel="stylesheet" href="styles.css">
</head>


<body style="background: whitesmoke;">
  <div class="wrapper">
    
    <div class="team">
    <div class="team_member" style="width: 60%">
       <p class="role" style="margin-bottom: 10px; font-size: 18px; color: black;">STAFF DETAILS</p>
       <hr>
       
    
        <img src="teachers/<?php echo $data['image']?>"  style="width: 250px;  height: 200px;  padding: 5px;">

        <form action="" method="post" enctype="multipart/form-data">

          <input type="text" name="user_id" value="<?php echo $data['user_id']; ?>" hidden>

         <span>UPDATE STAFF DETAILS</span><br>

          <table style="margin-left: 20%;"> 

        <h3 style="text-transform: uppercase; font-size: 20px; margin-top: 20px;"><b></b></h3>

         <tr><td><p style="color: darkred; font-size: 15px;">Full Name:</p><td>

          <td><input type="text" name="update_name" value="<?php echo $data['full_name']; ?>" style="height: 30px; text-transform: uppercase; padding-left: 10px; margin: 10px"></td></tr>


          <tr><td><p style="color: darkred; font-size: 15px;">Date of Birth:</p><td>

          <td> <input type="text" name="update_dateofbirth" value="<?php echo $data['date_of_birth']; ?>" style="height: 30px; text-transform: uppercase; padding-left: 10px; margin: 10px"></span></td></tr>


          <tr><td><p style="color: darkred; font-size: 15px;">Gender:</p><td>

          <td><input type="text" name="update_gender" value="<?php echo $data['gender']; ?>" style="height: 30px; text-transform: uppercase; padding-left: 10px; margin: 10px"></td></tr>



          <tr><td><p style="color: darkred; font-size: 15px; text-align: left;">Email:</p><td>

          <td><input type="text" name="update_email" value="<?php echo $data['email']; ?>" style="height: 30px; text-transform: uppercase; padding-left: 10px; margin: 10px"></td></tr>



          <tr><td><p style="color: darkred; font-size: 15px; text-align: left;">Contact:</p><td>

          <td><input type="text" name="update_contact" value="<?php echo $data['contact']; ?>" style="height: 30px; text-transform: uppercase; padding-left: 10px; margin: 10px"></span></td></tr>



          <tr><td><p style="color: darkred; font-size: 15px; text-align: left;">Staff ID:</p><td>

          <td><input type="text" name="update_staff_id" value="<?php echo $data['staff_ID']; ?>" style="height: 30px; text-transform: uppercase; padding-left: 10px; margin: 10px"></span></td></tr>
            </tr>

            <tr><td><p style="color: darkred; font-size: 15px; text-align: left;">Update Image:</p><td>

          <td>  <input type="file" name="update_image" accept="image/jpg, image/jpeg, image/png" style="margin-top: 10px; border: 1px solid; height: 30px; font-size: 14px; margin: 10px; width: 200px;"></span></td></tr>
            </tr>
            
        </table>



      <button id="loginbtn" type="submit" name="update_profile" style="padding: 10px; font-size: 15px; background-color: #3498db; color: white; border-radius: 5px; border: 0px;">UPDATE</button>
      

       <a href="teacher.php"  style="padding: 10px; font-size: 15px; background-color: darkred; color: white; border-radius: 5px; border: 0px; text-decoration: none;">CANCEL</a>
        </form>
     
    
    </div>
    </div>
  </div>


</body>
</html>