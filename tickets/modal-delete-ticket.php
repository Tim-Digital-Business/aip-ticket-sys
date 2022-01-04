<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Ticket löschen</h4>
            </div>
            <div class="modal-body">
                Willst du wirklich das Ticket löschen?
                <p>Dies kann <strong>nicht</strong> rückgängig gemacht werden!</p>
            </div>
            <div class="modal-footer">
                <a class="btn btn-danger btn-ok">Delete</a>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<script>
    $('#confirm-delete').on('show.bs.modal', function(e) {
        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
    });
</script>