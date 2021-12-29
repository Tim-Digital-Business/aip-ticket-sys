<?php
require_once('config.php');

$new_abteilung = $_POST["abteilung"];
$new_problem = $_POST["problemtxt"];
$new_name = $_POST["nametxt"];
$new_abteilung = addslashes($new_abteilung);
$new_problem = addslashes($new_problem);
$new_name = addslashes($new_name);

#get DB content
$sql = "INSERT into ticket_table(TicketID,Abteilung,Name,Problem) VALUES(null,'$new_abteilung','$new_name','$new_problem')";
$result = $link->query($sql);
mysqli_close($link);