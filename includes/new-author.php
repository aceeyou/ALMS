<?php
include_once "db.php";

$Author_FirstName = $_POST["Author_FirstName"];
$Author_MiddleName = $_POST["Author_MiddleName"];
$Author_LastName = $_POST["Author_LastName"];
$Author_StateAddress = $_POST["Author_StateAddress"];
$Author_CountryAddress = $_POST["Author_CountryAddress"];

$sql = "INSERT INTO author(Author_FirstName , Author_MiddleName , Author_LastName , Author_StateAddress , Author_CountryAddress )
VALUES ('$Author_FirstName','$Author_MiddleName','$Author_LastName','$Author_StateAddress','$Author_CountryAddress')";

$result = mysqli_query($conn, $sql);

if ($result == false) {
    //show the error, query has failed
    echo "Error: " . (mysqli_error($conn));
} else {
    // successful query
    header("Location: ../dashboard.html");
}
