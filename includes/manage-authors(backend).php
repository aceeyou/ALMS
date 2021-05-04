<?php
include "db.php";

//authors list
$query = "select * from author;";
$authors = mysqli_query($conn, $query);


//delete author
if (isset($_GET['delete'])) {
	$author_ID = $_GET['confirmDelete'];
	echo $author_ID;
	$sql = "DELETE FROM AUTHOR WHERE Author_ID = $author_ID";
	$delete = mysqli_query($conn, $sql);
	if ($delete) {
		mysqli_close($conn);
		header("location:../manage-authors.php");
		exit;
	} else {
		echo "Error deleting record";
	}
}

if (isset($_POST['SAVE'])) {
	$Author_FirstName = $_POST["Author_FirstName"];
	$Author_MiddleName = $_POST["Author_MiddleName"];
	$Author_LastName = $_POST["Author_LastName"];
	$Author_StateAddress = $_POST["Author_StateAddress"];
	$Author_CountryAddress = $_POST["Author_CountryAddress"];
}
//edit author


// 
