<?php
include_once "db.php";

$ISBN = $_POST["ISBN"];
$BookTitle = $_POST["Book-Title"];
$publisher = $_POST["publisher"];
$date = $_POST["date"];
$edition = $_POST["edition"];

$sql = "INSERT INTO book( ISBN ,  Book_Title ,  Book_Publisher ,  Date_Published , Book_Edition ) 
VALUES ('$ISBN','$BookTitle','$publisher','$date','$edition')";

$result = mysqli_query($conn, $sql);

if ($result == false) {
    // show the error, query has failed
    echo "Error: " . (mysqli_error($conn));
} else {
    // succesfull query
    header("Location: ../dashboard.html");
}
