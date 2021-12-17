<?php
include_once('../navbar.php');
include_once('../inc/head.php');
include_once('modal-reset-password.php');
// Initialize the session
if (!isset($_SESSION)) {
    session_start();
}

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
?>

<body style='min-height: 0;'>
    <style>
        body {
            text-align: center;
            margin-top: 100px;
        }
    </style>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to the Admin Page.
    </h1>
    <p>
        <a href="register.php" class="btn btn-primary">Add User</a>
        <a href="#" data-toggle="modal" data-target="#resetModal" class="btn btn-warning ml-3">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
        <a href="../tickets/ticket-list.php" class="btn btn-info ml-3">Open Ticket Site</a>
    </p>
</body>

</html>