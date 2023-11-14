<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Set cookies with user details
    setcookie('firstName', $_POST['firstName'], time() + (86400 * 30), "/"); // 86400 seconds = 1 day
    setcookie('lastName', $_POST['lastName'], time() + (86400 * 30), "/");
    setcookie('email', $_POST['email'], time() + (86400 * 30), "/");
    setcookie('dob', $_POST['dob'], time() + (86400 * 30), "/");
    setcookie('phone', $_POST['phone'], time() + (86400 * 30), "/");
    setcookie('designation', $_POST['designation'], time() + (86400 * 30), "/");

    // Redirect to a page to display user details
    header("Location: display_cookie.php");
    exit();
}
?>
