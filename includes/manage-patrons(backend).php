<?php
include "db.php";

$sql = "SELECT p.Patron_ID AS ID, p.Patron_Firstname, p.Patron_Middlename, p.Patron_Lastname, p.Patron_CityAddress, p.Patron_MailAddress,p.Contact_Number,pa.Patron_ID,pa.PatronAccount_ID,pa.Date_Registered,pa.Account_Fine 
FROM patron p LEFT JOIN patron_account pa ON p.Patron_ID = pa.Patron_ID WHERE 1";
$patron = mysqli_query($conn, $sql);
// $row = mysqli_fetch_assoc($patron);
// echo json_encode($row);
