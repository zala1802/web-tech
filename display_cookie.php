<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
</head>

<body>

    <h2>User Details</h2>
    <p><strong>First Name:</strong> <?php echo isset($_COOKIE['firstName']) ? $_COOKIE['firstName'] : ''; ?></p>
    <p><strong>Last Name:</strong> <?php echo isset($_COOKIE['lastName']) ? $_COOKIE['lastName'] : ''; ?></p>
    <p><strong>Email ID:</strong> <?php echo isset($_COOKIE['email']) ? $_COOKIE['email'] : ''; ?></p>
    <p><strong>Date of Birth:</strong> <?php echo isset($_COOKIE['dob']) ? $_COOKIE['dob'] : ''; ?></p>
    <p><strong>Phone Number:</strong> <?php echo isset($_COOKIE['phone']) ? $_COOKIE['phone'] : ''; ?></p>
    <p><strong>Designation:</strong> <?php echo isset($_COOKIE['designation']) ? $_COOKIE['designation'] : ''; ?></p>

</body>

</html>
