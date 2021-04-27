<?php


include_once "includes/db.php";
// count of books
$count = "SELECT COUNT(ISBN) as Count FROM Book;";
$result  = mysqli_query($conn, $count);
$numberOfBooks = mysqli_fetch_row($result)[0];

// count of patrons
$count = "SELECT COUNT(Patron_ID) as patronCount FROM Patron;";
$result  = mysqli_query($conn, $count);
$numberOfPatron = mysqli_fetch_row($result)[0];
