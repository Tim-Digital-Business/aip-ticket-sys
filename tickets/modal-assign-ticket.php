<?php require_once "../database/config.php"; ?>
<div class="modal fade" id="modalAssignTicket">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Ticket zuordnen</h4>
            </div>
            <!-- Modal body -->
            <div class="modal-body" style="text-align: initial;">
                <form id='myForm' action='assign-ticket.php'>
                    <input class="form-control" type="hidden">
                    <div class="form-group">
                        <label style='margin-left:170px' col-md-4 control-label>Zuordnen:*</label>
                        <div>
                            <select class="form-select" style='margin-left:120px' name="assign" required>
                                <option value="">Bitte Jemanden wählen</option>
                                <option value="Babette">Babette</option>
                                <option value="Jessica">Jessica</option>
                                <option value="Josua">Josua</option>
                                <option value="Lorenzo">Lorenzo</option>
                                <option value="Raphael">Raphael</option>
                                <option value="Sammy">Sammy</option>
                                <option value="Tim">Tim</option>
                                <option value="Ulf">Ulf</option>
                            </select>
                        </div>
                    </div>
                    <input type='hidden' id="dataid" value=''>
                    <button type="button" class="btn float-right" data-dismiss="modal">Schliessen</button>
                    <button type='submit' id='submitButton' onclick='submitHandler()' class="btn btn-primary float-right">Zuordnen</button>
                </form>
                <script>
                    function submitHandler() {
                        submitVal = $('#dataid').text();
                        $('#myForm').append("<input type='hidden' name='id' value='" +
                            submitVal + "' />");
                        return true;
                    }
                </script>
            </div>

        </div>
    </div>
</div>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous">
</script>