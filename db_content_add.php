<?php
include "db_connect.php";

$new_abteilung = $_GET["abteilung"];
$new_problem = $_GET["problemtxt"];
$new_name = $_GET["nametxt"];
$new_abteilung = addslashes($new_abteilung);
$new_problem = addslashes($new_problem);
$new_name = addslashes($new_name);

echo "<h2> Ticket wurde hinzugefügt</h2>";

#get DB content
$sql = "INSERT into ticket_table(TicketID,Abteilung,Name,Problem) VALUES(null,'$new_abteilung','$new_name','$new_problem')";
$result = $mysqli->query($sql);
?>
  <script>    
    if(typeof window.history.pushState == 'function') {
        window.history.pushState({}, "Hide", '<?php echo $_SERVER['PHP_SELF'];?>');
    }
</script>
<a href="index.php"> Zurück zur Hauptseite</a>