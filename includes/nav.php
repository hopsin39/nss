    <?php 

session_start();
include ("includes/header.php");
include ("includes/nav.php");
$data = $_SESSION['data'];

?>
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

