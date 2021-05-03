<?php

include_once "db.php";

$borrowDate = $_POST["borrowDate"];
$dueDate = $_POST["dueDate"];
$returnDate = $_POST["returnDate"];
$accountID = $_POST["accountID"];
$copyID = $_POST["copyID"];

// if the value of return date is null or empty pur null else put the return date   
if ($returnDate == 'null' or $returnDate == "") {
    $sql = "INSERT INTO borrow_slip(Borrow_Date, Due_Date, Return_Date, PatronAccount_ID, Copy_ID)
    VALUES ('$borrowDate','$dueDate', NULL ,'$accountID','$copyID')";
} else {
    $sql = "INSERT INTO borrow_slip(Borrow_Date, Due_Date, Return_Date, PatronAccount_ID, Copy_ID)
 VALUES ('$borrowDate','$dueDate', '$returnDate','$accountID','$copyID')";
}

$result = mysqli_query($conn, $sql);

if ($result == false) {
    //show the error, query has failed
    echo "Error: " . (mysqli_error($conn));
} else {
    // successful query
    header("Location: ../dashboard.html");
}
