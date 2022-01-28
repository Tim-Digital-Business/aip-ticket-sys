<?php
#header("Refresh: 60");
require_once('../database/config.php');
include_once('modal-delete-ticket.php');
include_once('modal-assign-ticket.php');
?>

<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/plug-ins/1.11.3/sorting/any-number.js"></script>
<script src="https://cdn.datatables.net/plug-ins/1.11.3/sorting/natural.js"></script>
<script src="https://cdn.datatables.net/plug-ins/1.11.3/sorting/date-de.js"></script>
<script src="https://cdn.datatables.net/plug-ins/1.11.3/features/scrollResize/dataTables.scrollResize.min.js"></script>

<body>
    <div class="container">

        <div class="text-center mt-5 pt-5">
            <h3>Ticket Liste</h3>
        </div>

        <?php
        #get DB content
        $sql = "SELECT TicketID,Datum,Abteilung,Name,Problem,Assign FROM ticket_table ORDER BY TicketID DESC";
        $result = $link->query($sql);
        ?>
        <main class="container" style="margin-top: 25px; overflow-y: auto; height: calc(100vh - 210px);">
            <?php

            echo "
  <table style='width:100%' id='table1' class='display'>
      <thead>
          <tr>
              <th>Ticket ID</th>
              <th>Abteilung</th>
              <th>Name</th>
              <th>Problem</th>
              <th>Erfasst am</th>
              <th>Bearbeitet von</th>
          </tr>
      </thead>
      <tbody id=1> ";

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
        setInterval(function() {
            $("#1").load("table-list-content-refresh.php");
        }, 5000);


        $('#table1').DataTable({
            // scrollResize: true,
            // scrollY: 100,
            // scrollCollapse: true,
            // paging: false
        });
    });
</script>