<?php

$id = $_GET['id'];
$assignname = $_GET['assign'];
//Connect DB
//Create query based on the ID passed from you table
//query : delete where id = $id
// on success delete : redirect the page to original page using header() method
require_once "../database/config.php";
// Check connection

// sql to delete a record
$sql = "UPDATE ticket_table SET Assign=$assignname WHERE TicketID = $id";

if (mysqli_query($link, $sql)) {
    mysqli_close($link);
    header('Location: ticket-list.php');
    exit;
} else {
    echo "Error adding assign record";
}
