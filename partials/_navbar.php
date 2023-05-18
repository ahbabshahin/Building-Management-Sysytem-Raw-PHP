<?php
$loggedin = false;
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
{
    $loggedin = true;
}

?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Mahmud's</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <?php
            if($loggedin){
                echo ' <li class="nav-item">
                <a class="nav-link" href="/appartement/adminPanel.php">Admin</a>
            </li>';
            }

            if(!$loggedin){
                echo ' <li class="nav-item">
                <a class="nav-link" href="partials/_loginAdmin.php">Admin</a>
            </li>';
            }

            ?>

                <li class="nav-item">
                    <a class="nav-link" href="details.php">Building's Details</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="applicant.php">Applicant's Form</a>
                </li>
            </ul>

            <ul class="navbar-nav mb-2 mb-lg-0">
                <!-- <li class="nav-item">
                    <a class="nav-link" href="partials/_signup.php">Signup</a>
                </li> -->

                <?php
                if($loggedin){
               // $aid = $_GET['aid'];
                echo '<li class="nav-item">
                <a class="nav-link" href="profile.php">Profile</a>
                </li>
                
                <li class="nav-item">
                <a class="nav-link" href="partials/_logout.php">Logout</a>
                </li>';
                
                }

                if(!$loggedin){
                echo ' <li class="nav-item">
                <a class="nav-link" href="partials/_login.php">Login</a>
                </li>';
                }
                ?>

            </ul>
        </div>
    </div>
</nav>