
<?php
    session_start();
    $data = $_SESSION['data'];
?>



<?php
include 'config.php';

if(isset($_POST['update_profile'])){

   $reply = mysqli_real_escape_string($conn, $_POST['reply']);
 
    
   $complain_id =$_POST['complain_id'];
   mysqli_query($conn, "UPDATE `complains` SET  admin_response = '$reply' WHERE complain_id = '$complain_id'") or die('query failed');

   
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
   }header('location:accounts_list.php');

}

?>





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TIME SCHEDULING SYSTEM </title>
	<link rel="stylesheet" href="styles.css">
   <link rel="icon" href="log.jpg">
</head>

<style>
.wrapper{
   margin-top: 100px;
   margin-left: 10%;
   background: white;
   margin-right: 40%;
}
.btns{
   margin-left: 200px;
}

</style>



<body style="background: url('img.png'); background-size: cover;">
  <div class="wrapper">
    
    <div class="team">
    <div class="team_member" style="width: 100%">
       <p class="role" style="margin-bottom: 10px; font-size: 18px; color: black; text-align: center;">REPLY STAFF MESSAGE</p>
       <hr>
       
        <form action="" method="post" enctype="multipart/form-data">

          <input type="text" name="complain_id" value="<?php echo $data['complain_id']; ?>" hidden>

         <span  style="padding-left: 45%;">Reply: <?php echo $data['full_name']; ?></span><br>

          <table style="margin-left: 20%;"> 

        <h3 style="text-transform: uppercase; font-size: 20px; margin-top: 20px;"><b></b></h3>

         



          <tr><td><p style="color: darkred; font-size: 15px; text-align: left;">Complain:</p><td>

             <td colspan="2"><textarea name="update_staff_id" style="height: 80px; width: 300px; resize: none;  text-transform: capitalize; padding-left: 10px; margin: 10px"><?php echo $data['complain_msg']; ?></textarea><td> 

        
          <tr><td><p style="color: darkred; font-size: 15px; text-align: left; padding-left: 20px;">Reply:</p><td>

          <td colspan="2"><textarea name="reply" style="height: 80px; resize: none; width: 300px;  text-transform: capitalize; padding-left: 10px; margin: 10px"></textarea><td>          
            </tr>

            
        </table>

        <div class="btns">
         <button id="loginbtn" type="submit" name="update_profile" style="background: darkgreen; color: white; padding: 8px; border: none; margin: 5px; padding-top: 10px; padding-bottom: 10px; padding-right: 60px; padding-left: 60px;">Send</button>
      
      

       <a href="accounts_list.php"  style="padding: 10px; font-size: 15px; background-color: darkred; color: white; border-radius: 5px; border: 0px; text-decoration: none;">CANCEL</a>
    </div>
        </form>
     
    
    </div>
    </div>
  </div>


</body>
</html>