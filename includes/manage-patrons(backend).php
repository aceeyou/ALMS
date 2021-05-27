<?php
include "db.php";

$sql = "SELECT p.Patron_ID AS ID, p.Patron_Firstname, p.Patron_Middlename, p.Patron_Lastname, p.Patron_CityAddress, p.Patron_ProvinceAddress, p.Patron_CodeAddress, p.Patron_MailAddress,p.Contact_Number,pa.Patron_ID,pa.PatronAccount_ID,pa.Date_Registered,pa.Account_Fine 
FROM patron p LEFT JOIN patron_account pa ON p.Patron_ID = pa.Patron_ID WHERE 1";
$patron = mysqli_query($conn, $sql);

// delete
if (isset($_GET['delete'])) {
    $patron_ID = $_GET['confirmDelete'];
    $sql = "DELETE FROM patron WHERE Patron_ID =  $patron_ID";
    $delete = mysqli_query($conn, $sql);
    if ($delete) {
        mysqli_close($conn);
        header("location:../manage-patrons.php");
        exit;
    } else {
        echo "Error deleting record";
    }
}

// if (isset($_GET['createAccount'])) {
//     $ID = $_GET['id'];
//     $date = date("Y/m/d");
//     $sql1 = "INSERT INTO `patron_account`(`Date_Registered`, `Account_Fine`, `Patron_ID`) VALUES ('$date','0','$ID')";
//     $account = mysqli_query($conn, $sql1);
//     if ($account) {
//         mysqli_close($conn);
//         header("location:../manage-patrons.php");
//         exit;
//     } else {
//         echo "Error Creating record";
//     }
// }

if (isset($_POST['SAVE'])) {
    //echo "qsadfghjykl;o";
    $patronID = $_POST['id'];
    $firstName = $_POST['firstName'];
    $middleName = $_POST['middleName'];
    $lastName = $_POST['lastName'];
    $cityAddress = $_POST['cityAddress'];
    $provinceAddress = $_POST['provinceAddress'];
    $zipCode = $_POST['zipCode'];
    $mailingAddress = $_POST['mailingAddress'];
    $emailAddress = $_POST['emailAddress'];
    $contactNumber = $_POST['contactNumber'];
    $accountFine = $_POST['accountFine'];
    $sql2 = "UPDATE patron p
    LEFT JOIN patron_account pa ON p.Patron_ID = pa.Patron_ID 
    SET Account_Fine = 120,`Patron_Firstname`='$firstName',`Patron_Middlename`='$middleName',`Patron_Lastname`='$lastName',
    `Patron_CityAddress`='$cityAddress',`Patron_ProvinceAddress`='$provinceAddress',`Patron_CodeAddress`='$zipCode',`Patron_MailAddress`='$mailingAddress',
    `Patron_EmailAddress`='$emailAddress',`Contact_Number`='$contactNumber', Account_Fine = '$accountFine' WHERE p.Patron_ID = $patronID";
    $update = mysqli_query($conn, $sql2);
    if ($update) {
        mysqli_close($conn);
        header("location:../manage-patrons.php");
        exit;
    } else {
        echo "Error updating record";
    }
}
