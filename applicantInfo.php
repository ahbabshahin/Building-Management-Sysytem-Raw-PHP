<?php
session_start();
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

    <title>Applicant's Information</title>
</head>

<body>

    <?php
    include "partials/_database.php";
    include "partials/_navbar.php";

?>

    <?php

   $sql = "SELECT * from appli";
   $result = mysqli_query($conn, $sql);
   
   echo ' <div class="container">

   <table class="table table-striped table-hover">
 <thead>
   <tr>
     <th scope="col">#</th>
     <th scope="col">Email</th>
     <th scope="col">Name</th>
     <th scope="col">Marrital Status</th>
     <th scope="col">Profession</th>
     <th scope="col">Permanent Address</th>
     <th scope="col">Date of Birth</th>
     <th scope="col">App No</th>
     <th scope="col">Decision</th>
     <th scope = "col">Status</th>
   </tr>
 </thead>
 
 <tbody>';
$i = 1;

while($row = mysqli_fetch_assoc($result)){
   echo '<tr>
     <th scope="row">'.$i++.'</th>
     <td>'.$row['Email'].'</td>
     <td>'.$row['Name'].'</td>
     <td>'.$row['Status'].'</td>
     <td>'.$row['Profession'].'</td>
     <td>'.$row['Address'].'</td>
     <td>'.date('d-m-Y',strtotime($row['DOB'])).'</td>
     <td>'.$row['Appartement_No'].'</td>
     <td><button type="submit" class="btn btn-success"><a class = "text-dark" href = "partials/_decisionA.php?threadid='.$row['Appli_id'].'">Approved</a></button> <button type="submit" class="btn btn-danger"><a class = "text-dark" href = "partials/_decisionR.php?threadid='.$row['Appli_id'].'">Rejected</a></button></td>
    <td>'.$row['Decision'].'</td>
   </tr>';
}
 echo'</tbody>
</table>

   </div>';
   
   ?>

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