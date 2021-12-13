<head>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <link rel="icon" href="/assets/AIPfavicon.ico">

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <script>
    $(function() {
        $("#accordion").accordion();
    });
    </script>
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

        #get DB content
        $sql = "SELECT TicketID,Datum,Abteilung,Name,Problem FROM ticket_table";
        $result = $link->query($sql);
        ?>
        <div style="margin-top: 100px;" id="accordion">
            <?php
            // output data of each row
            //   while ($row = $result->fetch_assoc()) {
            //     echo "<h3>Ticket:$row[TicketID] <br>$row[Datum]<hr>$row[Abteilung]: $row[Name]</h3>";
            //     echo "<div><p>$row[Problem]</p></div>";
            //     mysqli_close($link);
            //   }

            echo "
  <table class='table'>
      <thead class='thead-dark'>
          <tr>
              <th scope='col'>Ticket ID</th>
              <th scope='col'>Abteilung</th>
              <th scope='col'>Name</th>
              <th scope='col'>Problem</th>
              <th scope='col'>Erfasst am</th>
          </tr>
      </thead>";

            while ($row = $result->fetch_assoc()) {
                echo "
        <tr>
            <th scope='row'>$row[TicketID]</th>
            <td>$row[Abteilung]</td>
            <td>$row[Name]</td>
            <td>$row[Problem]</td>
            <td>$row[Datum]</td>
        </tr>
    ";
                // mysqli_close($link);
            }
            echo "</tbody>
  </table>";

            ?>
        </div>
    </div>

</body