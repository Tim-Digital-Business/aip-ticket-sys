<?php
require_once('database/config.php');

$new_abteilung = $_GET["abteilung"];
$new_problem = $_GET["problemtxt"];
$new_name = $_GET["nametxt"];
$new_abteilung = addslashes($new_abteilung);
$new_problem = addslashes($new_problem);
$new_name = addslashes($new_name);

#get DB content
$sql = "INSERT into ticket_table(TicketID,Abteilung,Name,Problem) VALUES(null,'$new_abteilung','$new_name','$new_problem')";
$result = $link->query($sql);
mysqli_close($link);
?>


<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content" style="color:black;">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Ticket erstellen</h4>
            </div>

            <!-- Modal body -->
            <div class="modal-body" style="text-align: initial;">
                <form>
                    <input class="form-control" type="hidden" name="id">
                    <div class="form-group">
                        <label>Name:*</label>
                        <input class="form-control" type="text" name="nametxt" required>
                    </div>
                    <div class="form-group">
                        <label col-md-4 control-label>Abteilung:*</label>
                        <div>
                            <select name="abteilung" required>
                                <option value="Digital Business">Digital Business</option>
                                <option value="Liegenschaftsservice">Liegenschaftsservice</option>
                                <option value="Verwaltung">Verwaltung</option>
                                <option value="Küche">Küche</option>
                                <option value="Restwert">Restwert</option>
                                <option value="Velos für Afrika">Velos für Afrika</option>
                                <option value="Verpacken und Versenden">Verpacken und Versenden</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group" required>
                        <label for="address">Problem:*</label>
                        <textarea class="form-control" type="text" name="problemtxt" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary float-left" id="createTicket">Erstellen</button>
                    <button type="button" class="btn btn-danger float-right" data-dismiss="modal">Close</button>
                </form>
                <script>
                    $('#createTicket').click(function() {
                        setTimeout(function() {
                            $('#createTicket').modal('hide');
                        }, 4000);

                    });
                </script>


            </div>

        </div>
    </div>
</div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous">
</script>