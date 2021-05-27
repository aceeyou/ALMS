<?php
include_once "db.php";

$ISBN = $_POST["ISBN"];
$PatronID = $_POST["PatronID"];
$Date = $_POST["Date"];

// query statement
$sql = "INSERT INTO reservation (Reservation_Date, Patron_ID, ISBN) VALUES ('$Date','$PatronID','$ISBN');";
// query to db
$result = mysqli_query($conn, $sql);
// check if error has occured
if ($result == false) {
    // show the error, query has failed
    echo "Error: " . (mysqli_error($conn));
} else {
    // succesfull query
    header("Location: ../dashboard.html");
}
