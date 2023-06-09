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

    <title>Building's Details</title>
</head>

<body>

    <?php
    include "partials/_database.php";
    include "partials/_navbar.php";
?>
  
    <div class="container">
    <?php

    $sql = "SELECT * from details";
    $result = mysqli_query($conn, $sql);
    echo '<table class="table">
    <thead>
  
    <tr>
      <th scope="col">#</th>
      <th scope="col">Number</th>
      <th scope="col">Bedroom</th>
      <th scope="col">Drawing Room</th>
      <th scope="col">Kitchen</th>
      <th scope="col">Bathroom</th>
      <th scope="col">Rent</th>
      <th scope="col">Status</th>
      <th scope="col">Edit</th>

    </tr>
  </thead>
  <tbody>';
  $i = 1;
  while($row = mysqli_fetch_assoc($result)){
     
   echo '<tr>
      <th scope="row">'.$i++.'</th>
      <td>'.$row['a_name'].'</td>
      <td>'.$row['Bedroom'].'</td>
      <td>'.$row['Drawing_Room'].'</td>
      <td>'.$row['Kitchen'].'</td>
      <td>'.$row['Bathroom'].'</td>
      <td>'.$row['Rent'].'</td>
      <td>'.$row['status'].'</td>
      <td><a href = "editDetails.php?threadid='.$row['a_id'].'">Edit</a></td>
      
    </tr>';
  }
 echo '</tbody>
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