<?php
include_once "db.php";

$Librarian_FirstName = $_POST["Librarian_FirstName"];
$Librarian_MiddleName = $_POST["Librarian_MiddleName"];
$Librarian_LastName = $_POST["Librarian_LastName"];
$Librarian_CityAddress = $_POST["Librarian_CityAddress"];
$Librarian_ProvinceAddress = $_POST["Librarian_ProvinceAddress"];
$Librarian_EmailAddress = $_POST["Librarian_EmailAddress"];
$Librarian_MailingAddress = $_POST["Librarian_MailingAddress"];
$Contact_Number = $_POST["Contact_Number"];
$Librarian_Type = $_POST["Librarian_Type"];
$Username = $_POST["Username"];
$Password = $_POST["Password"];

$sql1 = "INSERT INTO librarian(Librarian_FirstName , Librarian_MiddleName , Librarian_LastName , Librarian_CityAddress , Librarian_ProvinceAddress , Librarian_MailingAddress , Contact_Number , Librarian_Type )
VALUES ('$Librarian_FirstName','$Librarian_MiddleName','$Librarian_LastName','$Librarian_CityAdress','$Librarian_ProvinceAddress','$Librarian_MailingAddress','$Contact_Number','$Librarian_Type')";
$result1 = mysqli_query($conn, $sql1);

$sql2 = "INSERT INTO librarian_account(Username , Librarian_Password )
VALUES ('$Username','$Password')";

$result = mysqli_query($conn, $sql2);

if ($result == false) {
    //show the error, query has failed
    echo "Error: " . (mysqli_error($conn));
} else {
    //successful query
    header("Location: ../dashboard.php");
}