<?php
include "db.php";


// books listed
$sql = "SELECT COUNT(ISBN) from book;";
$result = mysqli_query($conn, $sql);
$totalBooks = mysqli_fetch_row($result)[0];


//books issued
$sql1 = "SELECT COUNT(slip_number) FROM borrow_slip WHERE return_date IS NULL;";
$result1 = mysqli_query($conn, $sql1);
$bookIssued = mysqli_fetch_row($result1)[0];

// //books reserved
$sql2 = "SELECT COUNT(Reservation_ID) FROM reservation;";
$result2 = mysqli_query($conn, $sql2);
$bookReserved = mysqli_fetch_row($result2)[0];


// //number of registered patrons
$sql3 = "SELECT COUNT(PatronAccount_ID) FROM patron_account;";
$result3 = mysqli_query($conn, $sql3);
$totalPatron = mysqli_fetch_row($result3)[0];

// //number of authors
$sql4 = "SELECT COUNT(Author_ID) FROM author;";
$result4 = mysqli_query($conn, $sql4);
$totalAuthors = mysqli_fetch_row($result4)[0];

// number of categories
$sql5 = "SELECT COUNT(Shelf_ID) FROM shelf;";
$result5 = mysqli_query($conn, $sql5);
$numberCategories = mysqli_fetch_row($result5)[0];

//new patrons list
$query = "select Patron_Firstname, Patron_Lastname from patron;";
$result6 = mysqli_query($conn, $query);
