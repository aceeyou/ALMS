<?php
include "db.php";
$sql = "SELECT * FROM `book` 
JOIN book_author ON book.ISBN = book_author.ISBN
JOIN author ON author.Author_ID = book_author.Author_ID 
JOIN shelf ON shelf.Shelf_ID = book.Shelf_ID
WHERE 1";
$book = mysqli_query($conn, $sql);
