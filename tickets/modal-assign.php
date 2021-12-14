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
                <form action='assign.php'>
                    <input class="form-control" type="hidden">
                    <div class="form-group">
                        <label col-md-4 control-label>Zuordnen:*</label>
                        <div>
                            <select name="assign" required>
                                <option value="Tim">Tim</option>
                                <option value="Josua">Josua</option>
                                <option value="Raphael">Raphael</option>
                                <option value="Küche">Küche</option>
                                <option value="Restwert">Restwert</option>
                                <option value="Velos für Afrika">Velos für Afrika</option>
                                <option value="Verpacken und Versenden">Verpacken und Versenden</option>
                            </select>
                        </div>
                    </div>
                    <input type="hidden" id="Key" name="Key" value="<?= $dataid ?>">
                    <button type='submit' class="btn btn-primary">Zuordnen</button>
                    <button type="button" class="btn btn-danger float-right" data-dismiss="modal">Close</button>
                </form>


            </div>

        </div>
    </div>
</div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>