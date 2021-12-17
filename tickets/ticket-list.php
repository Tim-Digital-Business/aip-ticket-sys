<body>

    <div class="container">

        <div class="text-center mt-5 pt-5">
            <h3>Ticket Liste</h3>
        </div>

        <?php
        require_once('../database/config.php');
        include_once('../navbar.php');
        include_once('modal-assign-ticket.php');
        include_once('modal-delete-ticket.php');

        #get DB content
        $sql = "SELECT TicketID,Datum,Abteilung,Name,Problem,Assign FROM ticket_table";
        $result = $link->query($sql);
        ?>
        <main class="container" style="margin-top: 100px;">
            <?php

            echo "
  <table class='table'>
      <thead class='thead-dark'>
          <tr>
              <th scope='col'>Ticket ID</th>
              <th scope='col'>Abteilung</th>
              <th scope='col'>Name</th>
              <th scope='col'>Problem</th>
              <th scope='col'>Erfasst am</th>
              <th scope='col'>Bearbeitet von:</th>
              <th scope='col'></th>
              <th scope='col'></th>
          </tr>
      </thead>";

            while ($row = $result->fetch_assoc()) {
                $row1 = $row['TicketID'];
                echo "
        <tr>
            <th scope='row'>$row[TicketID]</th>
            <td>$row[Abteilung]</td>
            <td>$row[Name]</td>
            <td>$row[Problem]</td>
            <td>$row[Datum]</td>
            <td>$row[Assign]</td>
            <td><button class='btn btn-info' data-toggle='modal' data-id='$row1' onclick=\"$('#dataid').text($(this).data('id'));$('#myModal2').modal('show');\">Assign</button></td>
            <td><a data-toggle='modal' data-target='#confirm-delete' data-href='delete-ticket.php?id=" . $row['TicketID'] . "'><button class='btn btn-danger' >Delete</button></a></td>
                </tr>";
            }
            echo "</tbody>
  </table>";


            ?>

        </main>

    </div>

</body>