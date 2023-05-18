<?php
include "_database.php";

$id = $_GET['threadid'];

$sql1 = "UPDATE appli set Decision='Rejected'  WHERE Appli_id= $id";
$result1 = mysqli_query($conn, $sql1);

header("location: /appartement/applicantInfo.php");
?>