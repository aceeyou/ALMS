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

// inseert in library table
$sql1 = "INSERT INTO `librarian`(`Librarian_FirstName`, `Librarian_MiddleName`, `Librarian_LastName`, `Librarian_CityAddress`, `Librarian_ProvinceAddress`, `Librarian_EmailAddress`, `Librarian_MailingAddress`, `Contact_Number`, `Librarian_Type`) 
VALUES ('$Librarian_FirstName','$Librarian_MiddleName','$Librarian_LastName','$Librarian_CityAddress','$Librarian_ProvinceAddress','$Librarian_EmailAddress','$Librarian_MailingAddress','$Contact_Number','$Librarian_Type')";
$result1 = mysqli_query($conn, $sql1);

// get latest id 
$sql2 = "SELECT Librarian_ID  FROM  `librarian` 
ORDER BY Librarian_ID DESC LIMIT 0 , 1";
$result = mysqli_query($conn, $sql2);
$id = (int) mysqli_fetch_assoc($result)['Librarian_ID'];

// insert in library account
$sql3 = "INSERT INTO `librarian_account`(`Username`, `Librarian_Password`, `Librarian_ID`) VALUES ('$Username','$Password','$id')";
mysqli_query($conn, $sql3);

// insert in part time full time library table
if ($Librarian_Type == "P") {
    $sql4 = "INSERT INTO `part_time_librarian`(`PLibrarian_ID`, `Hourly_Rate`) VALUES ('$id','300')";
} else {
    $sql4 = "INSERT INTO `regular_librarian`(`RLibrarian_ID`, `Monthly_Rate`) VALUES ('$id','50000')";
}
$result2 = mysqli_query($conn, $sql4);


if ($result1 == false) {
    //show the error, query has failed
    echo "Error: " . (mysqli_error($conn));
} else {
    //successful query
    header("Location: ../dashboard.php");
}
