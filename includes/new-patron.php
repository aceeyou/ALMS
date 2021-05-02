<?php

include_once "db.php";

$firstName = $_POST["firstName"];
$middleName = $_POST["middleName"];
$lastName = $_POST["lastName"];
$cityAddress = $_POST["cityAddress"];
$provinceAddress = $_POST["provinceAddress"];
$zipCode = $_POST["zipCode"];
$mailingAddress = $_POST["mailingAddress"];
$emailAddress = $_POST["emailAddress"];
$contactNumber = $_POST["contactNumber"];

$sql = "INSERT INTO patron(Patron_Firstname, Patron_Middlename, Patron_Lastname, Patron_CityAddress, Patron_ProvinceAddress, Patron_CodeAddress, Patron_MailAddress, Contact_Number) 
VALUES ('$firstName','$middleName','$lastName','$cityAddress','$provinceAddress','$zipCode','$emailAddress','$contactNumber')";

$result = mysqli_query($conn, $sql);

if ($result == false) {
    // show the error, query has failed
    echo "Error: " . (mysqli_error($conn));
    die();
}
if (isset($_POST['account'])) {
    $sql1 = "SELECT * FROM `patron` WHERE Contact_Number = '$contactNumber'";
    $result1 = mysqli_query($conn, $sql1);
    $user_data = mysqli_fetch_assoc($result1);
    $PatronID = $user_data['Patron_ID'];
    $date = date("Y-m-d");

    $patronAccountQuery = "INSERT INTO `patron_account`(`Date_Registered`, `Account_Fine`, `Patron_ID`) 
    VALUES ('$date','Null','$PatronID')";
    $result = mysqli_query($conn, $patronAccountQuery);
    if ($result == false) {
        // show the error, query has failed
        echo "Error: " . (mysqli_error($conn));
        die();
    }
}
// succesfull query
header("Location: ../dashboard.html");
