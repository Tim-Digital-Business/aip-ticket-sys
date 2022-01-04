<?php
require_once('../database/config.php');
include_once('../navbar.php');
include_once('modal-delete-ticket.php');
include_once('modal-assign-ticket.php');
?>

<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js">
</script>

<body>
    <div class="container">

        <div class="text-center mt-5 pt-5">
            <h3>Ticket Liste</h3>
        </div>

        <?php
        #get DB content
        $sql = "SELECT TicketID,Datum,Abteilung,Name,Problem,Assign FROM ticket_table";
        $result = $link->query($sql);
        ?>
        <main class="container" style="margin-top: 25px; overflow-y: auto; height: calc(100vh - 210px);">
            <?php

            echo "
  <table id='table1' class='display'>
      <thead>
          <tr>
              <th>Ticket ID</th>
              <th>Abteilung</th>
              <th>Name</th>
              <th>Problem</th>
              <th>Erfasst am</th>
              <th>Bearbeitet von</th>
              <th></th>
              <th></th>
          </tr>
      </thead>
      <tbody> ";

            while ($row = $result->fetch_assoc()) {
                $ticketID = $row['TicketID'];
                echo "
               
        <tr>
            <th scope='row'>$row[TicketID]</th>
            <td>$row[Abteilung]</td>
            <td>$row[Name]</td>
            <td>$row[Problem]</td>
            <td>$row[Datum]</td>
            <td>$row[Assign]</td>
            <td><button class='btn btn-info' data-toggle='modal' data-id='$ticketID' onclick=\"$('#dataid').text($(this).data('id'));$('#modalAssignTicket').modal('show');\">Assign</button></td>
            <td><a data-toggle='modal' data-target='#confirm-delete' data-href='delete-ticket.php?id=" . $row['TicketID'] . "'><button class='btn btn-danger' >Delete</button></a></td>
                </tr>
                ";
            }
            echo "
            </tbody>
  </table>";
            ?>

        </main>
    </div>
</body>
<!-- Search Ticket Table -->
<script>
    $(document).ready(function() {
        $('#table1').DataTable({
            "order": [
                [0, "desc"]
            ]
        });
    });
</script>