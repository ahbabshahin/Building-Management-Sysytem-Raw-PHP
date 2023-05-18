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
                    <a class="nav-link" href="/appartement/detailsBAdmin.php">Building's Details</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/appartement/applicantAdmin.php">Applicant's Form</a>
                </li>
            </ul>
            
            <ul class="navbar-nav mb-2 mb-lg-0">
            <?php
            if($loggedin){
                echo' 
                <li class="nav-item">
                    <a class="nav-link" href="partials/_logoutAdmin.php">Logout</a>
                </li>';
            }

            if(!$loggedin){
                echo ' <li class="nav-item">
                <a class="nav-link" href="_login.php">Login</a>
                </li>';
            }
            ?>
            </ul>
            

                 
        </div>
    </div>
</nav>