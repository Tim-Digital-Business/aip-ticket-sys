<head>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#accordion" ).accordion();
  } );
  </script>
    <script>    
    if(typeof window.history.pushState == 'function') {
        window.history.pushState({}, "Hide", '<?php echo $_SERVER['PHP_SELF'];?>');
    }
</script>
</head>

<?php
include "db_connect.php";
#get DB content
$sql = "SELECT TicketID,Datum,Abteilung,Problem FROM ticket_table";
$result = $mysqli->query($sql);
?>
<div id="accordion">
<?php
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<h3>Ticket:$row[TicketID] $row[Datum]<hr>$row[Abteilung]</h3>";
echo "<div><p>$row[Problem]</p></div>";
}
?>
</div>