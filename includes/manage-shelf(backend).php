<?php
include "db.php";

$sql = "SELECT * FROM `shelf` WHERE 1";
$shelf = mysqli_query($conn, $sql);

//delete
if (isset($_GET['delete'])) {
    $Shelf_ID = $_GET['confirmDelete'];
    $sql = "DELETE FROM `shelf` WHERE Shelf_ID =  $Shelf_ID";
    $delete = mysqli_query($conn, $sql);
    if ($delete) {
        mysqli_close($conn);
        header("location:../manage-shelf.php");
        exit;
    } else {
        echo "Error deleting record";
    }
}
// edit
if (isset($_POST['SAVE'])) {

    $Shelf_ID = $_POST['shelf-id'];
    $Shelf_row = $_POST['shelf-row'];
    $Shelf_name = $_POST['shelf-name'];
    $sql2 = "UPDATE `shelf` SET `Shelf_ID`='$Shelf_ID',`Shelf_Row`='$Shelf_row',`Shelf_Name`='$Shelf_name' WHERE Shelf_ID = '$Shelf_ID'";
    $update = mysqli_query($conn, $sql2);
    if ($update) {
        mysqli_close($conn);
        header("location:../manage-shelf.php");
        exit;
    } else {
        echo "Error updating record";
    }
}
