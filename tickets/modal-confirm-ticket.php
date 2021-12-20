<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
    integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
    integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
    integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous">
</script>
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
                    <button class="btn btn-primary my-2 my-sm-0" type="button" data-dismiss="modal"
                        onclick="closeModal()">Zurück
                        zur Hauptseite</button>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
function closeModal() {
    document.getElementsByClassName("modal-backdrop")[0].style.display = "none";
}
</script>