<?php 

session_start();
$data = $_SESSION['data'];

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
		background-image: url(media/nan.jpg);
		background-size: cover;
		background-repeat: no-repeat;
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
		    <h1 class="mt-5"><?php echo $data['full_name'] ?></h1>
		    <p class="bd-lead">Current time is ...</p>
		    <p class="bd-lead"><span id="show_date" class="text-danger"></span>.</p>
		    <p class="bd-lead"><span id="show_date" class="text-danger"></span>.</p>
	
			<div class="row justify-content-center">
				<div class="col-md-10">
					<div class="card mb-3">
						<div class="row g-0">
						    <div class="col-md-4">
						      	<img src="media/profile.jpg" class="img-fluid rounded-start" alt="...">
						    </div>
						    <div class="col-md-8">
						      	<div class="card-body">
						        	<h5 class="card-title">Admin profile</h5>
						        	<ul class="list-group list-group-flush">
									    <li class="list-group-item">
									    Full name: <h3 style="text-transform: uppercase; font-size: 20px; margin-top: 20px;"><b><?php echo $data['full_name'] ?></h3></b>
									    </li>
									    <li class="list-group-item">
									    	Email: <p class="role"><?php echo $data['email'] ?></p></b>
									    </li>
									    <li class="list-group-item">
									    	Joined Date:  <p class="role">Level : </b><?php echo $data['join_date'] ?></p></b>
									    </li>
									</ul>
						        	<p class="card-text"><small class="text-muted">Last login <p class="role">Level : </b><?php echo $data['last_login'] ?></p></small></p>
						      	</div>
						    </div>
						</div>
					</div>
					
				</div>
			</div>




			

	    </div>

</br>
</br></br></br></br>
</div>
    </main>

    <footer class="footer mt-auto py-3 bg-light">
        <div class="container">
            <span class="text-muted"><b>Health Scheduling Sytem.</b></span>
        </div>
    </footer>


    <script type="text/javascript" language="javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" language="javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" language="javascript" src="js/bootstrap.min.js"></script>


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
</body>
</html>
