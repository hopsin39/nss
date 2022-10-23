


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HEALTH SCHEDULING SYSTEM</title>
  <link rel="icon" href="wat.jpg">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="icon" href="log.jpg">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>

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
                    <a class="active" aria-current="page" href="admin_index.php">Dashboard</a> </li>
                    <li><a href="teacher.php">Staff</a></li>
                    <li><a href="students.php">Schedules</a></li>
                    <li><a href="accounts_list.php">Complain</a></li>
                    <li><a href="admin_login.php">LogOut</a></li>
                </ul>
            </div>
        </div>
    </header>
   
     <div class="container mt-5">
         <div class="container text-center">
             <div class="row row-cols-5">
               <a href="teacher.php"  style="width: 400px;" 
                  class="col btn btn-dark m-2 py-3">
                 <i class="fa fa-user-md fs-1" aria-hidden="true"></i><br>
                  Staff
               </a> 
               <a href="students.php" class="col btn btn-dark m-2 py-3" style="width: 400px;">
                 <i class="fa fa-calendar fs-1" aria-hidden="true"></i><br>
                  Schedules
               </a> 

                <a href="accounts_list.php" class="col btn btn-dark m-2 py-3"style="width: 400px;">
                 <i class="fa fa-cubes fs-1" aria-hidden="true"></i><br>
                  Complain
               </a> 

               <a href="teacher.php" class="col btn btn-dark m-2 py-3" style="width: 400px;">
                 <i class="fa fa-cogs fs-1" aria-hidden="true"></i><br>
                  Setting
               </a><br> 
              
             </div>
         </div>
     </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>	
    <script>
        $(document).ready(function(){
             $("#navLinks li:nth-child(1) a").addClass('active');
        });
    </script>

</body>
</html>
