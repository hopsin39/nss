<?php 
session_start();
$data = $_SESSION['data'];
include ("config.php");
?>

<!DOCTYPE html>
<html class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>H . S . S</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <style type="text/css">
        .container {
            width: auto;
            max-width: 680px;
            padding: 0 15px;
        }

        .bd-lead {
            font-size: calc(1.275rem + .3vw);
            font-weight: 300;
        }


	body {
		background: beige;
		background-size: cover;	
	}


    </style>
</head>
<body class="d-flex flex-column h-100">


	 <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Tenth navbar example">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="index.php"></a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link text-secondary" href="viewAdmin.php">Contact Admins</a>
                        </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin.index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="admin.schedule.php">Schedule</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="admin.complains.php">Complain</a>
                    </li>
                    
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="javascript:;" id="dropdown08" data-bs-toggle="dropdown" aria-expanded="false"><?php echo $data['full_name'] ?></a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown08">
                            <li>
                                <a class="dropdown-item" href="profile.php">Profile</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="admin.settings.php">Settings</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="logout.php">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        
    </nav>

   
	<!-- Begin page content -->
	<main class="flex-shrink-0">
    	<div class="container">
		    <h1 class="mt-5">Complains</h1>
		    <p class="bd-lead">Current time is ...</p>
		    <p class="bd-lead"><span id="show_date" class="text-danger"></span>.</p>
	
			<form method="POST">
<div class="team">
<div style="display: flex; margin-left: 10px; margin-right: 10px;">
<div style="border: 1px solid black; width: 200px; padding-left: 5px;"><b>FULL NAME</div>
<div style="border: 1px solid black; width: 150px; padding-left: 5px;">COMPLAIN</b></div>
<div style="border: 1px solid black; width: 200px; padding-left: 5px;"><b>RESPONSE</div>
<div style="border: 1px solid black; width: 300px; padding-left: 5px;">DATE</b></div>
</div>

<?php 
$stmt=$db_conn->prepare('SELECT * FROM complains');
$stmt->execute();
if($stmt->rowCount()>0)
{
    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
    extract($row);
?>

	
    <div style="display: flex; margin-left: 10px; margin-right: 10px;">

    <div style="border: 1px solid black; width: 200px; padding-left: 5px;"><?php echo $full_name ?></div>

    <div style="border: 1px solid black; width: 150px; padding-left: 5px;"><?php echo $complain_msg ?></div>

    <div style="border: 1px solid black; width: 200px; padding-left: 5px;"><?php echo $admin_response ?></div>

    <div style="border: 1px solid black; width: 300px; padding-left: 5px;"><?php echo $complain_date ?></div>

    </div>
  
      
            <?php 

                }
            }
             else
          {   
            ?>
                 <div class="not_registered">
                 <b>No voter registered.</b>    
                 </div>
                        <?php
      }
      ?>
      </div>

                       
                        </form>


		    

	    </div>

<?php include ("includes/footer.php"); ?>

<script>
	function startTime() {
	  	const today = new Date();
	  	let h = today.getHours();
	  	let m = today.getMinutes();
	  	let s = today.getSeconds();
	  	h = checkTime(h);
	 	m = checkTime(m);
	  	s = checkTime(s);
	  	document.getElementById('show_date').innerHTML =  h + " : " + m + " : " + s;
	  	console.log(h + ":" + m + ":" + s);
	  	setTimeout(startTime, 1000);
	}

	function checkTime(i) {
		// add zero in front of numbers < 10
	  	if (i < 10) {
	  		i = "0" + i
	  	};
	  	return i;
	}
	startTime();
</script>