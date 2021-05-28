<?php
include "db.php";
$sql = "SELECT *, GROUP_CONCAT(author.Author_FirstName, ' ', author.Author_LastName) AS authors FROM `book` 
JOIN book_author ON book.ISBN = book_author.ISBN
JOIN author ON author.Author_ID = book_author.Author_ID 
JOIN shelf ON shelf.Shelf_ID = book.Shelf_ID
WHERE 1
GROUP BY book.ISBN";
$book = mysqli_query($conn, $sql);

//delete
if (isset($_GET['delete'])) {
    $ISBN = $_GET['confirmDelete'];
    $sql = "DELETE FROM `book` WHERE ISBN =  '$ISBN'";
    $delete = mysqli_query($conn, $sql);
    if ($delete) {
        mysqli_close($conn);
        header("location:../manage-booklist.php");
        exit;
    } else {
        echo "Error deleting record";
    }
}
// edit
if (isset($_POST['SAVE'])) {

    $ISBN = $_POST["ISBN"];
    $BookTitle = $_POST["Book-Title"];
    $publisher = $_POST["publisher"];
    $date = $_POST["date"];
    $edition = $_POST["edition"];
    $copytotal = $_POST["copytotal"];
    $shelfID = $_POST["shelfID"];
    $authorID = $_POST["authorID"];


    $sql = "UPDATE `book` SET `ISBN`='$ISBN',`Book_Title`='$BookTitle',`Book_Publisher`='$publisher',`Date_Published`='$date',`Book_Edition`='$edition',
    `Copy_Total`='$copytotal',`Shelf_ID`='$shelfID',`Author_ID`='$authorID' WHERE ISBN='$ISBN'";

    $result = mysqli_query($conn, $sql);

    $sql2 = "UPDATE `book_author` SET `ISBN`='$ISBN',`Author_ID`='$authorID' WHERE ISBN = '$ISBN'";

    $result1 = mysqli_query($conn, $sql);

    $update = mysqli_query($conn, $sql);
    if ($update) {
        mysqli_close($conn);
        header("location:../manage-booklist.php");
        exit;
    } else {
        echo "Error updating record";
    }
}
