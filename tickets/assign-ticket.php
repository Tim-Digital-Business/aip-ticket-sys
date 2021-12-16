<?php
//Connect DB
require_once '../database/config.php';
// Check connection
$id = $_GET['id'];
$assignName = $_GET['assign'];
// sql to update a record
$sql = "UPDATE ticket_table SET Assign='$assignName' WHERE TicketID = '$id'";

if (mysqli_query($link, $sql)) {
    mysqli_close($link);
    header('Location: ticket-list.php');
    exit;
} else {
    echo "Error adding assign record";
}