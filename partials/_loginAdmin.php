<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login</title>
</head>

<body>

<?php
include "_database.php";
include "_navbarAdmin.php";

?>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $an = $_POST['an'];
    $pass = $_POST['pass'];
    $sql = "SELECT * from users where A_N = '$an' and Password = '$pass'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    if($count > 0)
    {          
        if($an == "admin"){
         session_start();
         $_SESSION['loggedin'] = true;
         $_SESSION['Name'] = $an;
         header("location:/appartement/adminPanel.php");
}

    else{
        $sql2 = "SELECT * from appli where Appartement_No = '$an'";
        $result2 = mysqli_query($conn, $sql2);
        while($row2 = mysqli_fetch_assoc($result2)){
            $name = $row2['Name'];
            echo'<script>
            alert('.$name.'."No tenant has access here. So, don\'t bother.");
            </script>';
          }
}
     
}

    else {
        echo '<script>
        alert("Invalid password or appartement number.");
         </script>';
    }

}

?>
    <div class="container my-3">
        <h1 class="text-center">Login Here</h1>
        <form  method="post">
            <div class="mb-3">
                <label for="an" class="form-label">Username</label>
                <input type="text" class="form-control" name = "an" id="an" aria-describedby="emailHelp">

            </div>

            <div class="mb-3">
                <label for="pass" class="form-label">Password</label>
                <input type="password" class="form-control" name="pass" id="pass">
            </div>

            <button type="submit" class="btn btn-primary">Login</button>
        </form>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>