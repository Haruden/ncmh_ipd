<!-- Small Modal -->
<div class="modal fade" id="modal-sm">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Assign to Doctor</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <form action="http://ncmh-is.com/ncmh_ipd/" method="POST">
            
            <div class="modal-body">
                <div class="form-group">
                    <select class="form-control">
                        <option>Resident 1</option>
                        <option>Resident 2</option>
                        <option>Resident 3</option>
                        <option>Resident 4</option>
                        <option>Resident 5</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" data-dismiss="modal">Save changes</button>
            </div>
                
            </form>
            
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->