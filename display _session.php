<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
</head>

<body>

    <h2>User Details</h2>
    <p><strong>First Name:</strong> <?php echo $_SESSION['firstName']; ?></p>
    <p><strong>Last Name:</strong> <?php echo $_SESSION['lastName']; ?></p>
    <p><strong>Email ID:</strong> <?php echo $_SESSION['email']; ?></p>
    <p><strong>Date of Birth:</strong> <?php echo $_SESSION['dob']; ?></p>
    <p><strong>Phone Number:</strong> <?php echo $_SESSION['phone']; ?></p>
    <p><strong>Designation:</strong> <?php echo $_SESSION['designation']; ?></p>

</body>

</html>
