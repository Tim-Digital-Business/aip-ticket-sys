<head>
    <!-- Latest compiled and minified CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script>
    if (typeof window.history.pushState == 'function') {
        window.history.pushState({}, "Hide", '<?php echo $_SERVER['PHP_SELF']; ?>');
    }
    </script>
</head>


<?php
require_once "../database/config.php";
include "../navbar.php";
#get DB content
$sql = "SELECT DISTINCT Abteilung FROM ticket_table";
$result = $link->query($sql);
mysqli_close($link);
?>
<form class="form-horizontal" style="margin-top: 100px;">
    <fieldset>

        <!-- Form Name -->
        <legend align="center">Ticket Search</legend>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="selectbasic">Abteilung:</label>
            <div class="col-md-4">
                <select name="Abteilung">
                    <?php
          while ($rows = $result->fetch_assoc()) {
            $abteilung_name = $rows['Abteilung'];
            echo "<option value='$abteilung_name'>$abteilung_name</option>";
          }
          ?>
                </select>
            </div>
        </div>

        <!-- Button (Double) -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="button1id"></label>
            <div class="col-md-8">
                <button id="button1id" name="buttonSearch" formaction="../database/db_content_all.php"
                    class="btn btn-default">Search</button>
                <button id="button2id" name="buttonAll" formaction="../tickets/ticket_alle.php"
                    class="btn btn-info">Search All</button>
                <a href="../Login/welcome.php" class="btn btn-warning">Back</a>
            </div>
        </div>

    </fieldset>
</form>