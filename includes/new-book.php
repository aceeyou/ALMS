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
$librarianID = $_POST["librarianID"];

$sql = "INSERT INTO book(ISBN, Book_Title, Book_Publisher, Date_Published, Book_Edition, Copy_Total, Shelf_ID) 
VALUES ('$ISBN','$BookTitle','$publisher','$date','$edition','$copytotal','$shelfID')";
$result = mysqli_query($conn, $sql);


$authors = explode(",", $authorID);
for ($x = 0; $x < count($authors); $x++) {
    $book_author = "INSERT INTO `book_author`(`ISBN`, `Author_ID`) VALUES ('$ISBN','$authors[$x]')";
    $result1 = mysqli_query($conn, $book_author);
}

$record = "INSERT INTO `record`(`Librarian_ID`, `ISBN`) VALUES ($librarianID,'$ISBN')";
$result2 = mysqli_query($conn, $record);

if ($result == false) {
    // show the error, query has failed  
    echo "Error: " . (mysqli_error($conn));
} else {
    // succesfull query
    header("Location: ../dashboard.php");
}
