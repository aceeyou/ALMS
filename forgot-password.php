<?php
include_once "db.php";

$Username = $_POST["username"];
$NewPass = $_POST["newpassword"];
$ConfirmPass = $_POST["confirmpass"];

$sql1 = "SELECT `Username` FROM `librarian_account` WHERE Username = $Username";
$result1 = mysqli_query($conn, $sql1);

if ($result1 != NULL) {
    if ($ConfirmPass == $NewPass) {
        $sql = "UPDATE librarian_account SET Librarian_Password='$ConfirmPass' WHERE Username = '$Username'";
    } else {
        echo "Passwords do not match, try again.";
    }
} else {
    echo '<script>alert("Account does not exist.");window.location = "../index.html";</script>';
    
}  

$result = mysqli_query($conn, $sql);

if ($result == false) {
    // show the error, query has failed
    echo "Error: " . (mysqli_error($conn));
} else {
    // succesfull query
    header("Location: ../index.html");
}