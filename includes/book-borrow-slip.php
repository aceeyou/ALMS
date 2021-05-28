<?php

include_once "db.php";

$borrowDate = $_POST["borrowDate"];
$dueDate = $_POST["dueDate"];
$returnDate = $_POST["returnDate"];
$accountID = $_POST["accountID"];
$copyID = $_POST["ISBN"];

// if the value of return date is null or empty pur null else put the return date   
if ($returnDate == 'null' or $returnDate == "") {
    $sql = "INSERT INTO borrow_slip(Borrow_Date, Due_Date, Return_Date, PatronAccount_ID, ISBN)
    VALUES ('$borrowDate','$dueDate', NULL ,'$accountID','$copyID')";
} else {
    $sql = "INSERT INTO borrow_slip(Borrow_Date, Due_Date, Return_Date, PatronAccount_ID, ISBN)
 VALUES ('$borrowDate','$dueDate', '$returnDate','$accountID','$copyID')";
}

$result = mysqli_query($conn, $sql);

$sql1 = 'SELECT COUNT(*) as count, ISBN FROM `borrow_slip` WHERE Return_Date IS NULL GROUP BY ISBN';
$borrowed = mysqli_query($conn, $sql1);

while ($row = mysqli_fetch_assoc($borrowed)) {
    $sql2 = "UPDATE `book` SET `Quantity_Borrowed`= $row[count] WHERE ISBN ='$row[ISBN]'";
    // echo $sql2;
    mysqli_query($conn, $sql2);
}

if ($result == false) {
    // show the error, query has failed
    echo "Error: " . (mysqli_error($conn));
} else {
    // successful query
    header("Location: ../dashboard.php");
}
