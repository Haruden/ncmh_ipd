<!-- Large Modal -->
<div class="modal fade" id="trans-in-add">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Transfer In Notes</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="" for="">General Data:</label>
                    <textarea name="" id="" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label class="" for="">History:</label>
                    <textarea name="" id="" class="form-control"></textarea>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-primary dropdown-toggle mb-3" data-toggle="dropdown" aria-expanded="false">
                        Add Section
                    </button>
                    <ul class="dropdown-menu dropdown-options" x-placement="bottom-start">
                        <li class="dropdown-item"><a href="#">Add Subjective Notes</a></li>
                        <li class="dropdown-item"><a href="#">Add Objective Notes</a></li>
                        <li class="dropdown-item"><a href="#">Add Assessment Notes</a></li>
                        <li class="dropdown-item"><a href="#">Add Treatment Plan</a></li>
                        <li class="dropdown-item"><a href="#">Add Course in the Ward</a></li>
                        <li class="dropdown-item"><a href="#">Add Mental Status Exam</a></li>
                        <li class="dropdown-item"><a href="#">Add Physical Exam</a></li>
                        <li class="dropdown-item"><a href="#">Add Neurological Exam</a></li>
                    </ul>
                </div>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" data-dismiss="modal">Save</button>
            </div>


        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- Action Modal -->
<div class="modal fade" id="modal-action">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Carry Out Medication Order</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <div class="modal-body">
                <div class="alert alert-warning">You are about to carry out <b>PARACETAMOL 500 MG ORALLY ONCE A DAY FOR 14 DAYS.</b></div>
                <hr>
                <form action="">
                    <p>Key in your username and password to confirm this action. </p>
                    <div class="form-group row">
                        <label for="" class="col-form-label col-sm-3">Time Administered:</label>
                        <div class="col-sm-9">
                            <input type="text" name="" id="" class="form-control" value="2021-03-11 9:43AM">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-form-label col-sm-3">Username:</label>
                        <div class="col-sm-9">
                            <input type="text" name="" id="" class="form-control" value="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-form-label col-sm-3">Password:</label>
                        <div class="col-sm-9">
                            <input type="password" name="" id="" class="form-control" value="">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Carry Out</button>
            </div>


        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->