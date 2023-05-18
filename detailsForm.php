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

    <title>Building's Details Form</title>
</head>

<body>

    <?php
    include "partials/_database.php";
    include "partials/_navbar.php";

?>

    <?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $name = $_POST['name'];
    $br = $_POST['br'];
    $dr = $_POST['dr'];
    $k = $_POST['k'];
    $btr = $_POST['btr'];
    $rent = $_POST['rent'];
    $status = $_POST['status'];

    $sql = "INSERT INTO details(a_name, Bedroom, Drawing_Room, Kitchen, Bathroom, Rent, status) VALUE('$name','$br', '$dr', '$k', '$btr', '$rent', '$status')";
    $result = mysqli_query($conn, $sql);

    if($result)
    {
        echo '<script>
        alert("Insertion Successful");
        </script>';
    }

    else{
        echo '<script>
        alert("Check your connection. If connection is fine then contact the maintenance engineer.");
        </script>';

        //echo mysqli_error($conn);
    }
}

?>

    <div class="container my-2">

        <form action="detailsForm.php" method="post">

            <div class="mb-3">
                <label for="name" class="form-label">Appartement Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="1A">
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Bedroom</label>
                <select class="form-select" aria-label="Default select example" name="br">
                    <!-- <option selected>Open this select menu</option> -->
                    <option value="1 Bedroom">1 Bedroom</option>
                    <option value="2 Bedroom">2 Bedroom</option>
                    <option value="3 Bedroom">3 Bedroom</option>
                    <option value="4 Bedroom">4 Bedroom</option>
                    <option value="5 Bedroom">5 Bedroom</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Drawing Room</label>
                <select class="form-select" aria-label="Default select example" name="dr">
                    <!-- <option selected>Open this select menu</option> -->
                    <option value="1 Drawing Room">1 Drawing Room</option>
                    <option value="2 Drawing Room">2 Drawing Room</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Kitchen</label>
                <select class="form-select" aria-label="Default select example" name="k">
                    <!-- <option selected>Open this select menu</option> -->
                    <option value="1 Kitchen">1 Kitchen</option>
                    <option value="2 Kitchen">2 Kitchen</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Bathroom</label>
                <select class="form-select" aria-label="Default select example" name="btr">
                    <!-- <option selected>Open this select menu</option> -->
                    <option value="1 Bathroom">1 Bathroom</option>
                    <option value="2 Bathroom">2 Bathroom</option>
                    <option value="3 Bathroom">3 Bathroom</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="rent" class="form-label">Rent</label>
                <input type="text" class="form-control" name="rent" id="rent" placeholder="xx K">
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Appartement Status</label>
                <select class="form-select" aria-label="Default select example" name="status">
                    <!-- <option selected>Open this select menu</option> -->
                    <option value="Available">Available</option>
                    <option value="Occupied">Occupied</option>
                </select>
            </div>

            <button type="submit" class="btn btn-info">Submit</button>

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