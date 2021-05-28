<?php
include_once "db.php";

$ISBN = $_POST["ISBN"];
$BookTitle = $_POST["Book-Title"];
$publisher = $_POST["publisher"];
$date = $_POST["date"];
$edition = $_POST["edition"];
$copytotal = $_POST["copytotal"];
$shelfID = $_POST["shelfID"];
$authorID = $_POST["authorID"];


$sql = "INSERT INTO book( ISBN ,  Book_Title ,  Book_Publisher ,  Date_Published , Book_Edition ) 
VALUES ('$ISBN','$BookTitle','$publisher','$date','$edition', '$copytotal', '$shelfID')";

$result = mysqli_query($conn, $sql);

$sql2 = "INSERT INTO book_author(ISBN, AuthorID) VALUES ('$ISBN, '$authorID')";

$result1 = mysqli_query($conn, $sql);

if ($result == false) {
    // show the error, query has failed  
    echo "Error: " . (mysqli_error($conn));
} else {
    // succesfull query
    header("Location: ../dashboard.php");
}


