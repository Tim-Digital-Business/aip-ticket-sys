<?php require_once "../database/config.php"; ?>
<div class="modal fade" id="myModal2">
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
                        <label col-md-4 control-label>Zuordnen:*</label>
                        <div>
                            <select name="assign" required>
                                <option value="Babete">Babete</option>
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
                    <button type='submit' id='submitButton' onclick='submitHandler()' class="btn btn-primary">Zuordnen</button>
                    <button type="button" class="btn btn-danger float-right" data-dismiss="modal">Close</button>
                </form>
                <script>
                    function submitHandler() {
                        submitVal = $('#dataid').text();
                        $('#myForm').append("<input type='hidden' name='id' value='" +
                            submitVal + "' />");
                        console.log(submitVal);
                        return true;
                    }
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