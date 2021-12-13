<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Ticket erstellen</h4>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="database/db_content_add.php">
                    <input class="form-control" type="hidden" name="id">
                    <div class="form-group">
                        <label>Name:*</label>
                        <input class="form-control" type="text" name="nametxt" required>
                    </div>
                    <div class="form-group">
                        <label col-md-4 control-label>Abteilung:*</label>
                        <div>
                            <select name="abteilung" required="">
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
                    <div class="form-group" required="">
                        <label for="address">Problem:*</label>
                        <textarea class="form-control" type="text" name="problemtxt" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" id="createTicket">Erstellen</button>
                    <button type="button" class="btn btn-danger float-right" data-dismiss="modal">Close</button>
                </form>


            </div>

        </div>
    </div>
</div>