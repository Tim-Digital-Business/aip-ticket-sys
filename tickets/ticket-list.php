<head>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <link rel="icon" href="/assets/AIPfavicon.ico">

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script>
        if (typeof window.history.pushState == 'function') {
            window.history.pushState({}, "Hide", '<?php echo $_SERVER['PHP_SELF']; ?>');
        }
    </script>
</head>

<body>

    <div class="container">

        <div class="text-center mt-5 pt-5">
            <h3>Ticket Liste</h3>
        </div>

        <?php
        require "../database/config.php";
        include('../navbar.php');
        include('modal-assign.php');
        #get DB content
        $sql = "SELECT TicketID,Datum,Abteilung,Name,Problem,Assign FROM ticket_table";
        $result = $link->query($sql);
        ?>
        <div style="margin-top: 100px;" id="accordion">
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
            <td></td>
            <td><button data-toggle='modal' data-id='$row1' onclick=\"$('#dataid').text($(this).data('id')); $('#myModal2').modal('show');\">Click11 </button></td>
            <td><a href='delete.php?id=" . $row['TicketID'] . "'><button class='btn btn-danger' >Delete</button></a></td>
                </tr>";
            }
            echo "</tbody>
  </table>";


            ?>

        </div>

    </div>

</body