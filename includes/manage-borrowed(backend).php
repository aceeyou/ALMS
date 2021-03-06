<?php
include "db.php";

// display 
$sql = "SELECT * FROM borrow_slip;";
$borrowed = mysqli_query($conn, $sql);

//delete author
if (isset($_GET['delete'])) {
    $slipNUmber = $_GET['confirmDelete'];
    $sql = "DELETE FROM `borrow_slip` WHERE Slip_Number = $slipNUmber";
    $delete = mysqli_query($conn, $sql);
    if ($delete) {
        mysqli_close($conn);
        header("location:../manage-borrowed.php");
        exit;
    } else {
        echo "Error deleting record";
    }
}


// edit 
if (isset($_POST['SAVE'])) {
    $Slip_Number = $_POST["slip-no"];
    $Borrow_Date = $_POST["borrow-date"];
    $Due_Date = $_POST["due-date"];
    $Return_Date = $_POST["return-date"];
    $PatronAccount_ID  = $_POST["pacct-id"];
    $ISBN = $_POST["copy-no"];

    //echo $Return_Date;

    if ($Return_Date == 'null' or $Return_Date == "") {
        $sql = "UPDATE borrow_slip SET Slip_Number=$Slip_Number,`Borrow_Date`='$Borrow_Date',`Due_Date`='$Due_Date',
        `Return_Date`=NULL,`PatronAccount_ID`='$PatronAccount_ID',`ISBN`='$ISBN' WHERE Slip_Number = '$Slip_Number' ;";
    } else {
        $sql = "UPDATE borrow_slip SET Slip_Number=$Slip_Number,`Borrow_Date`='$Borrow_Date',`Due_Date`='$Due_Date',
    `Return_Date`='$Return_Date',`PatronAccount_ID`='$PatronAccount_ID',`ISBN`='$ISBN' WHERE Slip_Number = '$Slip_Number';";
    }

    $update = mysqli_query($conn, $sql);
    if ($update) {
        mysqli_close($conn);
        header("location:../manage-borrowed.php");
        exit;
    } else {
        echo "Error updating record";
    }
}

$sql1 = "SELECT COUNT(borrow_slip.Slip_Number) as count, book.ISBN as ISBN FROM `borrow_slip` 
RIGHT JOIN book ON book.ISBN = borrow_slip.ISBN
WHERE  borrow_slip.Return_Date IS NULL
GROUP BY book.ISBN";
$borrowed1 = mysqli_query($conn, $sql1);


while ($row1 = mysqli_fetch_assoc($borrowed1)) {
    $sql2 = "UPDATE `book` SET `Quantity_Borrowed`= $row1[count] WHERE ISBN ='$row1[ISBN]'";
    mysqli_query($conn, $sql2);
}
