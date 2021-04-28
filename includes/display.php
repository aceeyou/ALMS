<?php
include "db.php";

//new patrons list
$query = "select Patron_Firstname, Patron_Lastname from patron;";
$result6 = mysqli_query($conn, $query);
