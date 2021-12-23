<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous">
</script>

<div class="modal fade" id="modalCreateTicket">
    <div class="modal-dialog">
        <div class="modal-content" style="color:black;">

            <!-- Modal Header -->
            <div id='modal-header' class="modal-header">
                <h4 class="modal-title">Neues Ticket erfassen</h4>
            </div>

            <!-- Modal body -->
            <div class="modal-body" style="text-align: initial;">
                <form id='feld' action='../database/confirm-add-ticket.php' method='post'>
                    <input class="form-control" type="hidden" name="id">
                    <div class="form-group">
                        <label>Name:*</label>
                        <input class="form-control" type="text" name="nametxt" id="nametxt" required>
                    </div>
                    <div class="form-group">
                        <label col-md-4 control-label>Abteilung:*</label>
                        <div>
                            <select name="abteilung" id="abteilung" required>
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
                        <textarea class="form-control" type="text" id="problemtxt" name="problemtxt" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary float-left" id="createTicket">Erfassen</button>
                    <button type="button" class="btn btn-danger float-right" data-dismiss="modal" id="cancel-btn">Zurück</button>
                </form>
                <script>
                    $(function() {
                        function openModalTicketConfirm() {
                            $("#modalCreateTicket").modal("hide");
                            // $("#modalConfirmTicket").modal("show");

                        }

                        function sendData($form) {
                            let dataString = $form.serialize();
                            $.ajax({
                                type: $form.attr('method'),
                                url: $form.attr('action'),
                                data: dataString,
                                success: function() {
                                    $("#modalCreateTicket").fadeOut();
                                    $("#modalCreateTicket").modal('hide');
                                    document.getElementsByClassName("modal-backdrop")[0].style.display = "none";
                                    $("#modalConfirmTicket").modal('show');
                                    $("#modalConfirmTicket").fadeIn();
                                }
                            });
                        }

                        $('form').on('submit', function(e) {
                            e.preventDefault();
                            sendData($(this));
                        });
                    });
                </script>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalConfirmTicket">
    <div class="modal-dialog">
        <div class="modal-content" style="color:black;">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Ticket erfolgreich erfasst!</h4>
            </div>

            <!-- Modal body -->
            <div class="modal-body" style="text-align: initial;">
                <div class="d-flex justify-content-center">
                    <h5>Dein Ticket wurde erfolgreich erfasst!</h5>
                </div>

                <div class="d-flex justify-content-center m-4">
                    <img src="../assets/images/checked.png" alt="checked.png" style="height: 80px; width: 80px;">
                </div>

                <p class="d-flex justify-content-center">Wir werden dein Anliegen so schnell wie möglich bearbeiten.</p>

                <div class="d-flex justify-content-center mt-2">
                    <button class="btn btn-primary my-2 my-sm-0" type="button" data-dismiss="modal">Zurück
                        zur Hauptseite</button>
                </div>
            </div>
        </div>
    </div>
</div>