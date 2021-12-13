<?php
require_once "config.php";
include "../navbar.php";

$new_abteilung = $_GET["abteilung"];
$new_problem = $_GET["problemtxt"];
$new_name = $_GET["nametxt"];
$new_abteilung = addslashes($new_abteilung);
$new_problem = addslashes($new_problem);
$new_name = addslashes($new_name);

#get DB content
$sql = "INSERT into ticket_table(TicketID,Abteilung,Name,Problem) VALUES(null,'$new_abteilung','$new_name','$new_problem')";
$result = $link->query($sql);
mysqli_close($link);
?>

<script>
if (typeof window.history.pushState == 'function') {
    window.history.pushState({}, "Hide", '<?php echo $_SERVER['PHP_SELF']; ?>');
}
</script>

<html>

<div class="d-flex justify-content-center" style="margin-top: 100px;">
    <h2>Ticket wurde erfolgreich hinzugefügt!</h2>
</div>
<div class="d-flex justify-content-center" style="margin-top: 20px;">
    <button class="btn btn-primary my-2 my-sm-0" type="button" onclick="window.location.href='../index.php';">Zurück
        zur Hauptseite</button>
</div>

</html>