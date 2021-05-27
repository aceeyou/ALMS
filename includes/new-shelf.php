<?php
include_once "db.php";

$ShelfRow = $_POST["shelfRow"];
$ShelfName = $_POST["shelfName"];


$sql = "INSERT INTO shelf(Shelf_Row, Shelf_Name)
VALUES ('$ShelfRow','$ShelfName')";

$result = mysqli_query($conn, $sql);

if ($result == false) {
    //show the error, query has failed
    echo "Error: " . (mysqli_error($conn));
} else {
    // successful query
    header("Location: ../dashboard.php");
}
