<?php 

include "db.php";



// edit
  if (isset($_POST['SAVE'])) {
    $Librarian_ID = $_POST['librarianID'];
    $Librarian_FirstName = $_POST['firstName'];
    $Librarian_MiddleName = $_POST['middleName'];
    $Librarian_LastName = $_POST['lastName'];
    $Librarian_EmailAddress = $_POST['emailAddress'];
    $Librarian_MailingAddress = $_POST['mailingAddress'];
    $Contact_Number = $_POST['contactNumber'];
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $sql2 = "UPDATE `librarian` as l 
    LEFT JOIN `librarian_account` as la ON l.Librarian_ID = la.Librarian_ID
    LEFT JOIN `part_time_librarian` as pl ON l.Librarian_ID = pl.PLibrarian_ID 
    LEFT JOIN `regular_librarian` as rl ON l.Librarian_ID = rl.RLibrarian_ID SET l.Librarian_FirstName = '$Librarian_FirstName', l.Librarian_MiddleName = '$Librarian_MiddleName', l.Librarian_LastName = '$Librarian_LastName', l.Librarian_EmailAddress = '$Librarian_EmailAddress', l.Librarian_MailingAddress = '$Librarian_MailingAddress', l.Contact_Number = '$Contact_Number', la.Username = '$Username', la.Librarian_Password = '$Password' WHERE l.Librarian_ID = '$Librarian_ID'";
    $update = mysqli_query($conn, $sql2);
    if ($update) {
        mysqli_close($conn);
        header("location:../user-profile.php");
        exit;
    } else {
        echo "Error updating record";
    }
  }
