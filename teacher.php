<?php

    include 'config.php';
    session_start();
   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIME SCHEDULING SYSTEM</title>
   <link rel="icon" href="wat.jpg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="log.jpg">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>

th, td {
  padding: 8px;
  text-align: left;
   border-bottom: 2px solid #ddd;
}

tr:hover {
    background-color: whitesmoke;
}


.header-area {
    background: #142440;
    width: 100%;
    padding: 12px 30px;
    z-index: 999;
}
.header-container {
    display: table;
    width: 100%;
    margin: auto;
}
.site-logo {
    float: left;
    padding: 17px 0px;
}
.site-logo a {
    color: #fff;
    text-decoration: none;
    font-size: 24px;
    font-weight: 600;
    padding: 15px;
}
.site-logo span {
    color: #ff4a04;
}
.site-nav-menu {
    float: right;
}
.primary-menu{
    list-style: none;
}
.primary-menu li {
    display: inline-block;
    margin: 21px 5px;
}
.primary-menu a {
    color: #fff;
    position: relative;
    text-decoration: none;
    text-transform: uppercase;
    font-weight: 500;
    letter-spacing: 1px;
    padding: 15px 10px;
    transition: .5s;
}
.primary-menu a:hover,
.primary-menu .active {
    color:#ff4a04;   
}
.primary-menu li a:after {
    content: "";
    position: absolute;
    width: 0%;
    height: 2px;
    background: #ff4a04;
    bottom: 0px;
    left: 0;
    transition: all .5s;
}
.primary-menu li a:hover:after {
    width: 100%;
}
.primary-menu li .active:after{
    width: 100%;
}
.mobile-nav{
    display: none;
}
.mobile-nav i{
    float: right;
    margin: 10px;
    padding: 10px;
    font-size: 24px;
    color: #fff;
    outline: none;
    cursor: pointer;
}


/* Responsive css */

@media only screen and (max-width: 900px) {
    .site-nav-menu {
        float: none;
        position: absolute;
        background: #142440;
        width: 100%;
        left: 0;
        top: 85px;
        padding: 30px 0px 150px 0px;
        border-top: 1px solid #4a4848;
        clip-path: circle(0% at 100% 0%);
        transition: all .8s;
    }
    .primary-menu li {
        display: block;
        text-align: center;
        margin: 25px 5px;
    }
    .mobile-nav{
        display: block;
    }
    .mobile-menu {
        clip-path: circle(112% at 100% 0%);
    }
    .primary-menu li a:after{
        display: none;
    }
</style>

<body>
  <header class="header-area" style="background-image: url('wat.jpg');">
        <div class="header-container">
            <div class="site-logo">
                <img src="log.jpg" height="30px;">
            </div>

            <div class="mobile-nav">
                <i class="fas fa-bars"></i>
            </div>
           <div class="site-nav-menu">
                <ul class="primary-menu">
                    <li>
                    <a href="admin_index.php">Dashboard</a> </li>
                    <li><a class="active" aria-current="page" href="teacher.php">Staff</a></li>
                    <li><a href="students.php">Schedules</a></li>
                    <li><a href="accounts_list.php">Complain</a></li>
                    <li><a href="admin_login.php">LogOut</a></li>
                </ul>
            </div>
        </div>
    </header>
   



<div class = "container">
<div class = "row">
    <div class = "col-xl-12">
        <h1 class = "text-center pt-5"> REGISTERED STAFF </h1>
        <!-- <a href="add_teacher.php"><button style="background: darkblue; color: white; padding: 8px; border: none;">Add New Staff</button></a>  -->
        <table class="table table-bordered">
        <thead>
            <tr>
                <th>S/N</th>
                <th>Image</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

<?php 
 $n=1;
$stmt=$db_conn->prepare('SELECT * FROM users');
$stmt->execute();
if($stmt->rowCount()>0)
{
    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
    extract($row);
?>
    
     <tr>
    <td><?php echo $n; ?></td>
     <td><img src="users/<?php echo $row['image']?>" style="height: 50px;"></td>
    <td style="text-transform:uppercase;"><?php echo $row['full_name']; ?></td>
    <td style="text-transform:uppercase;"><?php echo $row['email']; ?></td>
    <td style="text-transform:uppercase;"><?php echo $row['contact']; ?></td>
    <td>
    <div style="display:flex;">

    <form action="view_teacher.php" method="POST" enctype="multipart">
    <input type="text" name="staff_ID" value="<?php echo $row['staff_ID']; ?>" hidden>
    <button style="background: darkblue; color: white; padding: 8px; border: none; margin: 5px;"> View</button>
    </form>

            <form action="teacher_update.php" method="POST" enctype="multipart">
            <input type="text" name="staff_ID" value="<?php echo $row['staff_ID']; ?>" hidden>
            <button style="background: darkgreen; color: white; padding: 8px; border: none; margin: 5px;">Edit</button>
            </form>
                         
             
            
            <form action="delete_teacher.php" method="POST" enctype="multipart">
            <input type="number" name="id" value="<?php echo $row['user_id']; ?>" hidden>
            <button style="background: darkred; color: white; padding: 8px; border: none; margin: 5px;">Delete</button>
        </form>
                </div>               
                </td>
        </tr>
  
  
   
    
            <?php 
            $n++;

                }
            }
             else
          {   
            ?>  <tr><td colspan="8"> 
                 <div class="not_registered" style="text-align: center;">
                 <b>No Student Registered</b>    
                 </div><td><tr>
                        <?php
      }
      ?>
                     
         </tbody>
    </table>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>    
    <script>
        $(document).ready(function(){
             $("#navLinks li:nth-child(1) a").addClass('active');
        });
    </script>

</body>
</html>
