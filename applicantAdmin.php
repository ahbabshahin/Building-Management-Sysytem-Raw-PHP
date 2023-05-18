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

    <title>Applicant's Form</title>
</head>

<body>

    <?php
    include "partials/_database.php";
    include "partials/_navbarAdmin.php";
?>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $email = $_POST['email'];
    $name = $_POST['name'];
    $status= $_POST['status'];
    $prof = $_POST['prof'];
    $pAddress = $_POST['pAddress'];
    $dob = date('Y-m-d',strtotime($_POST['dob']));
    $an = $_POST['an'];

    $sql = "INSERT into appli(Email, Name, Status, Profession, Address, DOB, Appartement_No) Value('$email', '$name', '$status', '$prof', '$pAddress', '$dob', '$an')";
    $result = mysqli_query($conn, $sql);

    if($result)
    {
        echo '<script>
        alert("Registration Successful!");
        </script>';
    }

    else{
        echo '<script>
        alert("We are having some issues. Please try again later.");
        </script>';
    }

}

?>

    <div class="container my-2">

        <form action = "applicant.php" method = "post">
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                </div>
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Applicant Name</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Marrital Status</label>
                <select class="form-select" aria-label="Default select example" name="status">
                    <!-- <option selected>Open this select menu</option> -->
                    <option value="Married">Married</option>
                    <option value="Bachelor">Bachelor</option>
                    <option value="Divorced">Divorced</option>
                    <option value="Widower">Widower</option>
                    <option value="Widowed">Widowed</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="prof" class="form-label">Profession</label>
                <input type="text" class="form-control" name="prof" id="prof">
            </div>

            <div class="mb-3">
                <label for="pAddress" class="form-label">Permanent Address</label>
                <input type="text" class="form-control" name="pAddress" id="pAddress">
            </div>

            <div class="mb-3">
                <label for="dob" class="form-label">Date of Birth</label>
                <input type="date" class="form-control" name="dob" id="dob">
            </div>

            <div class="mb-3">
                <label for="an" class="form-label">Applying for which appartement?</label>
                <input type="text" class="form-control" name="an" id="an">
            </div>

            <button type="submit" class="btn btn-primary">Register</button>
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