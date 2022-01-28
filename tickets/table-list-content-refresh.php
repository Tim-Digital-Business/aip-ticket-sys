<?php
require_once('../database/config.php');

#get DB content
$sql = "SELECT TicketID,Datum,Abteilung,Name,Problem,Assign FROM ticket_table ORDER BY TicketID DESC";
$result = $link->query($sql);

while ($row = $result->fetch_assoc()) {
    $ticketID = $row['TicketID'];
    echo "
         
  <tr id=1>
      <th scope='row'>$row[TicketID]</th>
      <td>$row[Abteilung]</td>
      <td>$row[Name]</td>
      <td>$row[Problem]</td>
      <td>$row[Datum]</td>
      <td>$row[Assign]</td>
  </tr>
          ";
}
