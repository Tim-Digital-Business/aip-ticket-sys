<?php
include('../navbar.php');
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <link rel="icon" href="/assets/AIPfavicon.ico">
    <title>AIP Ticket System</title>

    <style>
        body {
            text-align: center;
            margin-top: 100px;
        }
    </style>
</head>

<body>

    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. profile to the Admin Page.
    </h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
        <a href="../tickets/ticket-list.php" class="btn btn-info ml-3">Open Ticket Site</a>
    </p>
</body>

</html>