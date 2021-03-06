<!-- Small Modal -->
<div class="modal fade" id="endorsed-modal">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Endorse</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-inline form-group">
                    <label for="">Time:</label>
                    <input type="text" name="" id="" class="form-control ml-2">
                </div>
                <div class="form-inline form-group">
                    <label for="">Endorse to:</label>
                    <input type="text" name="" id="" class="form-control ml-2">
                </div>

            </div>
            <div class="modal-footer justify-content-end">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Submit</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- Large Modal -->
<div class="modal fade" id="med-details-modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">View Details</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <div class="modal-body">
                <div class="dataTables_wrapper dt-bootstrap4">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Date/Time Ordered</th>
                                <th>Name of Medication</th>
                                <th>Dosage</th>
                                <th>Frequency</th>
                                <th>Route</th>
                                <th>Last Dose Given</th>
                                <th>Medication Due On</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01/10/2021 <br> 1:51PM</td>
                                <td>Paracetamol</td>
                                <td>500mg</td>
                                <td>TID</td>
                                <td>PO</td>
                                <td>01/25/2021 <br> 8:32AM</td>
                                <td>01/25/2021 <br> 1:00PM</td>
                                <td><strong style="color:red">NEW</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <hr>
                <div class="dataTables_wrapper dt-bootstrap4">
                    <table id="modal_table" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Day Count</th>
                                <th>Dose Count</th>
                                <th>Status</th>
                                <th>Target Time of Administration</th>
                                <th>Actual Time of Administration</th>
                                <th>Reasons for Omission / Remarks</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>13</td>
                                <td>2</td>
                                <td>-</td>
                                <td>01/23/2021 1:00PM</td>
                                <td>-</td>
                                <td>Patient Refused.</td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>1</td>
                                <td>ADMINISTERED</td>
                                <td>01/23/2021 8:00AM</td>
                                <td>01/23/2021 8:32AM</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>1</td>
                                <td>SHIFTED</td>
                                <td>01/11/2021 8:00AM</td>
                                <td>01/11/2021 10:24AM</td>
                                <td>Initially refused but eventually given</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>2</td>
                                <td>ADMINISTERED</td>
                                <td>-</td>
                                <td>01/10/2021 8:31PM</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>1</td>
                                <td>ADMINISTERED</td>
                                <td>01/10/2021 8:00PM</td>
                                <td>01/10/2021 2:00PM</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer justify-content-between">                
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Action
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" data-dismiss="modal">Carry Out</a>
                    <a class="dropdown-item" data-dismiss="modal">Administer</a>
                    <a class="dropdown-item" data-dismiss="modal">Hold</a>
                    <a class="dropdown-item" data-dismiss="modal">Shifted</a>
                    <a class="dropdown-item" data-dismiss="modal">Discontinued</a>
                </div>
            </div>


        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->






 



<div class="modal fade" id="nurse-add-notes-modal" data-backdrop="static">
    <div class="modal-dialog" style="max-width: 60%;">
        <div class="modal-content">
            <div class="modal-header" data-dismiss="datetimepicker">
                <h4 class="modal-title">Add Nurse's Notes</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="nurseModalDateAndTime">Date & Time:</label>
                    <div class="input-group mb-2">
                        <input type="text"  id="nurseModalDateAndTime" data-target="#nurseModalDateAndTime" data-toggle="datetimepicker" class="form-control datetimepicker-input" placeholder="Date & Time">
                        <div class="input-group-prepend" data-target="#nurseModalDateAndTime" data-toggle="datetimepicker">
                            <div class="input-group-text">
                                <i class="fa fa-calendar"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="choose-pavilion">Pavilion <i class="fas fa-caret-down"></i></label>
                    <select class="form-control" id="choose-pavilion">
                        <option selected disabled>Choose Pavillion</option>
                        <option value="Pavilion 1">Pavilion 1</option>
                        <option value="Pavilion 2">Pavilion 2</option>
                        <option value="ACIS">ACIS</option>
                    </select>
                </div>
               <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="focus">Focus:</label>
                            <textarea name="focus" placeholder="Add your focus here..." class="form-control addNurseNotesTextArea" rows="2"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="data">Data:</label>
                            <textarea name="data" placeholder="Add your data here..." class="form-control addNurseNotesTextArea" rows="2"></textarea>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="action">Action:</label>
                            <textarea name="action" placeholder="Add your action here..." class="form-control addNurseNotesTextArea" rows="2"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="response">Response:</label>
                            <textarea name="response" placeholder="Add your response here..."  class="form-control addNurseNotesTextArea" rows="2"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-end">
                <button type="button" class="btn btn-danger mr-auto" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Submit</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(function getCurrentTime () {
        var datetime = moment().format('L LT');
        $("#nurseModalDateAndTime").attr("value", datetime);
        setTimeout(getCurrentTime, 1000);
    });
    
    $("#nurseModalDateAndTime").click(function () {
        $("#nurseModalDateAndTime").removeAttr("value");
        clearTimeout(getCurrentTime);
    });

    $("#nurseModalDateAndTime").focusout(function(){
        $('.bootstrap-datetimepicker-widget').hide();
    });
    
    $(document).ready(function () {
        $('.addNurseNotesTextArea').each(function () {
            $(this).summernote({
                placeholder: this.placeholder,
                dialogsInBody: true,
                spellCheck: true,
                minHeight: 100,    
                minWidth:430,        
                maxHeight: null,   
                focus: true,
                toolbar: [
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font'],
                    ['fontsize', ['fontsize']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']],
                    ['view', ['fullscreen']],
                ] 
            });

        });
    });

</script>