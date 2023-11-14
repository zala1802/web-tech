<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['firstName'] = $_POST['firstName'];
    $_SESSION['lastName'] = $_POST['lastName'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['dob'] = $_POST['dob'];
    $_SESSION['phone'] = $_POST['phone'];
    $_SESSION['designation'] = $_POST['designation'];

    // Redirect to a page to display user details
    header("Location: display.php");
    exit();
}
?>
