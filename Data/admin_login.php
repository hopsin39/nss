<?php

    include 'config.php';
    session_start();
   
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
        background-image: url(media/tak.jpg);
        background-size: cover;
        background-repeat: no-repeat;
    }
    </style>
</head>
<body class="d-flex flex-column h-100">

    <main class="flex-shrink-0">
        <br><br><br><br><br>
        <div class="container">
            <h1 class="mt-5">Admin Login</h1>
            <div class="form">
                <form method="POST" action="adminLogin.php">
                     <?php 
                         if(isset($_SESSION['msg']))
                         {
                            echo $_SESSION['msg'];
                            unset($_SESSION['msg']);

                         }
                         ?>
                    <div class="mb-2">
                        <input class="form-control" type="email" id="email" name="email" placeholder="Email" required autofocus autocomplete="off">
                    </div>
                    <div class="mb-2">
                        <input class="form-control" type="password" id="password" name="password" placeholder="xxxxxx" required autofocus>
                    </div>
                    <div class="mb-2">
                        <input class="btn btn-primary" type="submit" id="submit" name="submit" value="Login">
                        <a href="welcome.php"><input class="btn btn-primary" value="Cancel" style="background-color: darkred;"></a>
                    </div>
                </form>
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
</body>
</html>