
<?php
    session_start();
    $data = $_SESSION['data'];
?>



<?php
include 'config.php';

if(isset($_POST['update_profile'])){

   $update_name = mysqli_real_escape_string($conn, $_POST['update_name']);
   $id =$_POST['id'];
   $update_email = $_POST['update_email'];
   $update_dateofbirth = $_POST['update_dateofbirth'];
   $update_staff_ID = $_POST['update_staff_ID'];
   $update_contact = $_POST['update_contact'];
      

   mysqli_query($conn, "UPDATE `users` SET full_name = '$update_name', email = '$update_email' , date_of_birth = '$update_dateofbirth' , staff_ID = '$update_staff_ID', contact = '$update_contact' WHERE user_id = '$id'") or die('query failed');

   
   $update_image = $_FILES['update_image']['name'];
   $update_image_size = $_FILES['update_image']['size'];
   $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
   $update_image_folder = 'users/'.$update_image;

   if(!empty($update_image)){
      if($update_image_size > 2000000){
         $message[] = 'image is too large';
      }else{
         $image_update_query = mysqli_query($conn, "UPDATE `users` SET image = '$update_image' WHERE user_id = '$id'") or die('query failed');
         if($image_update_query){
            move_uploaded_file($update_image_tmp_name, $update_image_folder);
         }
        
      }
   }header('location:user_login.php');

}

?>





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TIME SCHEDULING SYSTEM</title>
  <link rel="icon" href="log.jpg">
	<link rel="stylesheet" href="styles.css">
</head>

<style>

.wrapper{
  margin-top: 10%;
}

.wrapper h1{
  font-family: 'Allura', cursive;
  font-size: 52px;
  margin-bottom: 60px;
  text-align: center;
}

.team{
  display: flex;
  justify-content: center;
  width: auto;
  text-align: center;
  flex-wrap: wrap;
}

.team .team_member{
  background: #fff;
  margin: 5px;
  margin-bottom: 50px;
  width: 300px;
  padding: 20px;
  line-height: 20px;
  color: #8e8b8b;  
  position: relative;
}

.team .team_member h3{
  color: #81c644;
  font-size: 26px;
  margin-top: 50px;
}

.team .team_member p.role{
  color: #ccc;
  margin: 12px 0;
  font-size: 12px;
  text-transform: uppercase;
}

.team .team_member .team_img{
  position: absolute;
  top: -50px;
  left: 50%;
  transform: translateX(-50%);
  width: 100px;
  height: 100px;
  border-radius: 50%;
  background: #fff;
}

.team .team_member .team_img img{
  width: 100px;
  height: 100px;
  padding: 5px;
}
</style>

<body style="background: whitesmoke;">
  <div class="wrapper">
    
    <div class="team">
    <div class="team_member">
       <p class="role" style="margin-bottom: 10px; font-size: 18px; color: black;">CANDIDATE'S DETAILS</p>
       <hr>
       
    
        <img src="users/<?php echo $data['image']?>"  style="width: 250px;  height: 200px;  padding: 5px;">

        <form action="" method="post" enctype="multipart/form-data">

        <h3 style="text-transform: uppercase; font-size: 20px; margin-top: 20px;"><b></b></h3>

        <input type="text" name="id" value="<?php echo $data['user_id']; ?>" hidden>

         <span>UPDATE NAME</span><br>
          <input type="text" name="update_name" value="<?php echo $data['full_name']; ?>" style="height: 30px; text-transform: uppercase; padding-left: 10px; margin: 10px">
          <br>
          <span>EMAIL</span><br>
          <input type="text" name="update_email" value="<?php echo $data['email']; ?>" style="height: 30px; text-transform: uppercase; padding-left: 10px; margin: 10px">
          <br>
          <span>DATE OF BIRTH</span><br>
          <input type="date" name="update_dateofbirth" value="<?php echo $data['date_of_birth']; ?>" style="height: 30px; text-transform: uppercase; padding-left: 10px; margin: 10px">
          <br>
          <span>STAFF ID</span><br>
          <input type="text" name="update_staff_ID" value="<?php echo $data['staff_ID']; ?>" style="height: 30px; text-transform: uppercase; padding-left: 10px; margin: 10px">
          <br>
          <span>CONTACT</span><br>
          <input type="text" name="update_contact" value="<?php echo $data['contact']; ?>" style="height: 30px; text-transform: uppercase; padding-left: 10px; margin: 10px">
          <br>
          <span>CREATE NEW PASSWORD</span><br>
          <input type="text" name="update_contact" value="<?php echo $data['password']; ?>" style="height: 30px; text-transform: uppercase; padding-left: 10px; margin: 10px">
          <br>
        <span style="margin-bottom: 10px;">Update Profile Image</span><br>
            <input type="file" name="update_image" accept="image/jpg, image/jpeg, image/png" style="margin-top: 10px; border: 1px solid; height: 30px; font-size: 14px; margin: 10px; width: 200px;">
        
        <br><br>


      <button id="loginbtn" type="submit" name="update_profile" style="padding: 10px; font-size: 15px; background-color: #3498db; color: white; border-radius: 5px; border: 0px;">UPDATE</button>
      

       <a href="user.profile.php"  style="padding: 10px; font-size: 15px; background-color: darkred; color: white; border-radius: 5px; border: 0px; text-decoration: none;">CANCEL</a>
        </form>
     
    
    </div>
    </div>
  </div>


</body>
</html>