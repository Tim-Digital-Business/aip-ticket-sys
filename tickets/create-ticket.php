<html>

<head>
    <!-- Latest compiled and minified CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </script>
    <link rel="icon" href="/assets/AIPfavicon.ico">

</head>

<body>
    <div style="margin-bottom: 60px">
        <?php include('../navbar.php'); ?>
    </div>
    <title>Support Ticket erstellen</title>

    <main role="main" class="container">

        <div class="text-center mt-5 pt-5">
            <h1>Support Ticket erstellen</h1>
            <p class="lead">Das ist eine Beschreibung</p>
        </div>

        <?php
  require_once "../database/config.php";
  ?>
        <form class="form-horizontal" action="../database/db_content_add.php">

            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="selectbasic">Abteilung:</label>
                <div class="col-md-4">
                    <select name="abteilung">
                        <option value="Digital Business">Digital Business</option>
                        <option value="Liegenschaftsservice">Liegenschaftsservice</option>
                        <option value="Verwaltung">Verwaltung</option>
                        <option value="Küche">Küche</option>
                        <option value="Restwert">Restwert</option>
                        <option value="Velo für Afrika">Velo für Afrika</option>
                        <option value="Verpacken und Versenden">Verpacken und Versenden</option>
                    </select>
                </div>
            </div>

            <!-- <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown button
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div> -->

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="nametxt">Name:</label>
                <div class="col-md-4">
                    <input id="nametxt" name="nametxt" type="text" placeholder="z.B. Marcel Hauser"
                        class="form-control input-md" required="">
                </div>
            </div>

            <!-- Textarea -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="problemtxt">Problembeschreibung:</label>
                <div class="col-md-4">
                    <textarea class="form-control" name="problemtxt" id="problemtxt"></textarea>
                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="submit"></label>
                <div class="col-md-4">
                    <button id="submit" class="btn btn-primary">Ticket erfassen</button>
                </div>
            </div>
        </form>
        <?php
  mysqli_close($link);
  ?>
    </main>


</body>

</html>