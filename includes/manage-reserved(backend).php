<?php
include "db.php";

$sql = "SELECT * FROM `reservation` WHERE 1";
$shelf = mysqli_query($conn, $sql);

//delete
if (isset($_GET['delete'])) {
    $Reservation_ID = $_GET['confirmDelete'];
    $sql = "DELETE FROM `reservation` WHERE Reservation_ID = $Reservation_ID";
    $delete = mysqli_query($conn, $sql);
    if ($delete) {
        mysqli_close($conn);
        header("location:../manage-reserved.php");
        exit;
    } else {
        echo "Error deleting record";
    }
}
//edit
if (isset($_POST['SAVE'])) {

    $Reservation_ID = $_POST['reservation-id'];
    $Reservation_Date = $_POST['reservation-date'];
    $Patron_ID = $_POST['patron-id'];
    $ISBN = $_POST['isbn'];
    $sql2 = "UPDATE `reservation` SET `Reservation_ID`='$Reservation_ID',`Reservation_Date`='$Reservation_Date',`Patron_ID`='$Patron_ID',`ISBN`='$ISBN' WHERE Reservation_ID = '$Reservation_ID'";
    $update = mysqli_query($conn, $sql2);
    if ($update) {
        mysqli_close($conn);
        header("location:../manage-reserved.php");
        exit;
    } else {
        echo "Error updating record";
    }
}
