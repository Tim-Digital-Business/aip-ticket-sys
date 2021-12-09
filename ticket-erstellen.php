<html>
    <head>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</script>
</head>
<body>
<title>Support Ticket erstellen</title>
<?php
include "db_connect.php";
?>
<form class="form-horizontal" action="db_content_add.php">
<fieldset>

<!-- Form Name -->
<legend align="center">Support Ticket erstellen</legend>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Abteilung</label>
  <div class="col-md-4">
  <select name="abteilung">
  <option value="Digital Business">Digital Business</option>
      <option value="Liegenschaftsservice">Liegenschaftsservice</option>
      <option value="Küche">Küche</option>
      <option value="Restwert">Restwert</option>
      <option value="Velo für Afrika">Velo für Afrika</option>
      <option value="Verpacken und Versenden">Verpacken und Versenden</option>
</select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nametxt">Dein Name:</label>  
  <div class="col-md-4">
  <input id="nametxt" name="nametxt" type="text" placeholder="z.B. Marcel Hauser" class="form-control input-md" required="">
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="problemtxt">Problem:</label>
  <div class="col-md-4">                     
    <textarea class="form-control" name="problemtxt" id="problemtxt"></textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" class="btn btn-primary">Abschicken</button>
  </div>
</div>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button class="btn btn-info" onclick="window.location.href = 'index.php';">Zurück zur Hauptseite</button>
  </div>
</div>

</fieldset>
</form>
<?php
$mysqli->close();
?>


</body>
</html>