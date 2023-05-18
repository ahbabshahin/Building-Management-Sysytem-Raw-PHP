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

    <title>Complain & Suggestions</title>
</head>

<body>

    <?php
    include "partials/_database.php";
    include "partials/_navbarT.php";
?>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $choise = $_POST['choise'];
    $desc = $_POST['desc'];
    $des = htmlentities($desc, ENT_QUOTES);

    $sql = "INSERT into c_s(Name, Email, Choise, `Desc`) Value('$name', '$email', '$choise', '$des')";
    $result = mysqli_query($conn, $sql);

    if($result)
    {
        echo '<script>
        alert("Your '.$choise.' has been noted!");
        </script>';
    }

    else{
        echo '<script>
        alert("We are having some issues. Please try again later.");
        </script>';
       // echo mysqli_error($conn);
    }

}

?>

    <div class="container my-2">

        <form action = "complain&suggestion.php" method = "post">
        <div class="mb-3">
                <label for="name" class="form-label">Applicant Name</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                </div>
            </div>

            <div class="mb-3">
                <label for="choise" class="form-label">Choose Category</label>
                <select class="form-select" aria-label="Default select example" name="choise">
                    <!-- <option selected>Open this select menu</option> -->
                    <option value="Complain">Complain</option>
                    <option value="Suggestion">Suggestion</option>
                </select>
            </div>

            <div class="mb-3">
            <label for="desc" class="form-label">Describe</label>
            <textarea name="desc" id="desc" cols="155" rows="10"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
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