<?php
include_once "db.php";


if (isset($_POST["login"])) {
    session_start();
    $userName = $_POST["username"];
    $pass = $_POST["password"];

    if (!empty($userName) && !empty($pass)) {
        // read from database
        $query  = "select * from librarian_account where Username = '$userName' limit 1";
        $result = mysqli_query($conn, $query);
        // check if there is a result
        if ($result && mysqli_num_rows($result) > 0) {
            // convert the data to array
            $user_data = mysqli_fetch_assoc($result);
            // check if password is correct
            if ($user_data['Librarian_Password'] == $pass) {
                $_SESSION['ID'] = $user_data['LibrarianAccount_ID'];

                // redirect to dashboard 
                header("location:../dashboard.php");
                die;
            }
        }
    }
}

// DIsplay error message wrong credentials 
echo "error page";
