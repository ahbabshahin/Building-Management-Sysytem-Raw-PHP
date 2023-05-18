<?php
session_start();
if(!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] != true)
{
  header("location:partials/_loginAdmin.php");
  exit();
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Mahmud Villa</title>
</head>

<body>
    <?php
      include "partials/_navbarAdmin.php";
      //include "partials/_loginAdmin.php";
      
      ?>
    <div class="container p-4 p-md-5 mb-4 text-white rounded bg-dark my-3">
        <div class="col-md-6 px-0">
            <h1 class="display-4 fst-italic">Welcome Mr. Mahmud</h1>
            <p class="lead my-3">How you doin!.<br>
                Could we be... anymore happy!</p>
        </div>
    </div>

    <div class="container">
        <h1 class="text-center">Activity Panel</h1>
        <table class="table">
  <thead>
    <tr>
      
      <th scope="col">Building's Details Form</th>
      <th scope="col">Tenant's Information</th>
      <th scope="col">Applicant's Information</th>
      <th scope="col">Edit Building's Info</th>
      <th scope="col">View Complain & Suggestions</th>
    </tr>
  </thead>
  <tbody>
    <tr>

      <td><button type="button" class="btn btn-primary"><a href = "detailsForm.php" 
      class = "text-dark" target = "_" >Building's Details Form</a></button></td>

      <td><button type="button" class="btn btn-warning"><a href = "tenantsInfo.php" 
      class = "text-dark" target = "_" >Tenant's Information</a></button></td>

      <td><button type="button" class="btn btn-info"><a href = "applicantInfo.php" 
      class = "text-dark" target = "_" >Applicant's Information</a></button></td>

      <td><button type="button" class="btn btn-success"><a href = "detailsAdmin.php" 
      class = "text-dark" target = "_" >Building's Details</a></button></td>
      <td><button type="button" class="btn btn-secondary"><a href = "c&sView.php" 
      class = "text-dark" target = "_" >View Complain & Suggestions</a></button></td>
    </tr>
  
  </tbody>
</table>

</div>

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