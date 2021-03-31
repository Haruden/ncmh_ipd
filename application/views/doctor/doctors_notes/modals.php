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

<!-- Large Modal -->
<div class="modal fade" id="trans-out-add">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Transfer Out Notes</h4>
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
                <div class="mb-3">
                    <label class="" for="">Course in the Ward:</label>
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

<div class="modal fade" id="modal-prognotes">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Progress Notes</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="form-group">
                    <!-- /.card-header -->

                    <!-- form start -->
                    <form>

                        <div class="form-group">
                            <label>Subjective Notes</label>
                            <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                        </div>

                        <div class="form-group">
                            <label>Objective Notes</label>
                            <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                        </div>

                        <div class="btn-group float-right">
                            <button type="button" class="btn btn-default">Add Section</button>
                            <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="#">Mental Status Exam</a>
                                <a class="dropdown-item" href="#">Physical Exam</a>
                                <a class="dropdown-item" href="#">Neurological Exam</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Assessment</label>
                            <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                        </div>

                        <div class="form-group">
                            <label>ICD Coded Medical Diagnosis</label> <input type="checkbox" name="" id="" class="ml-2"> <label for="">None</label>
                            <select class="form-control">
                                <option>A00-B99 Certain infectious and parasitic diseases.</option>
                                <option>G00-G09 Inflammatory diseases of the central nervous system</option>
                                <option>G10-G14 Systemic atrophies primarily affecting the central nervous system</option>
                                <option>F10-F19 Mental and behavioral disorders due to psychoactive substance use</option>
                                <option>F20-F29 Schizophrenia, schizotypal, delusional, and other non-mood psychotic disorders</option>
                            </select>
                        </div>

                        <div class="row">

                            <div class="form-group col-5">
                                <label>ICD Coded Psychiatric Diagnosis</label>
                                <select class="form-control">
                                    <option>AF30-F39 Mood [affective] disorders</option>
                                    <option>F40-F48 Anxiety, dissociative, stress-related, somatoform and other nonpsychotic mental disorders</option>
                                    <option>F50-F59 Behavioral syndromes associated with physiological disturbances and physical factors</option>
                                    <option>F10-F19 Mental and behavioral disorders due to psychoactive substance use</option>
                                    <option>F20-F29 Schizophrenia, schizotypal, delusional, and other non-mood psychotic disorders</option>
                                </select>

                            </div>

                            <div class="form-group col-5">
                                <label>Modifier</label>
                                <select class="form-control">
                                    <option>Unimproved</option>
                                    <option>Improved</option>
                                    <option>Manageable</option>
                                    <option>Unstable</option>
                                    <option>Disturbed</option>
                                </select>
                            </div>

                            <div class="col-2">
                                <label>&nbsp;</label>
                                <button type="button" class="btn btn-block btn-default">+</button>
                            </div>

                        </div>

                        <table id="tbl_addpn" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Diagnosis</th>
                                    <th>Modifier</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>F31 Bipolar Affective Disorder</td>
                                    <td>Modifier</td>
                                </tr>
                                <tr>
                                    <td>F41 Panic Disorder</td>
                                    <td>Modifier</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="form-group">
                            <label>Treatment Plan</label>
                            <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                        </div>

                        <!-- /.card-body -->
                    </form>

                </div>

            </div> <!-- form group -->

            <div class="modal-footer justify-content-between">
                <button type="submit" class="btn btn-danger" style="float: left;" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" style="float: right;" data-dismiss="modal">ADD PROGRESS NOTE</button>
            </div>

        </div> <!-- modal body -->

    </div>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->

<!-- Small Modal -->
<div class="modal fade" id="modal-do_status">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Change Status?</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <select class="form-control">
                        <option>Carried</option>
                        <option>Administered</option>
                        <option>Request Made</option>
                        <option>Endorsed</option>
                        <option>Discontinued</option>
                    </select>
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

<!-- add-doctors-order -->
<div class="modal fade" id="add-doctor-order">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Doctor Order</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">

                <table class="table table-striped table-bordered">
                    <tbody>
                        <tr>
                            <td>1/10/2021 | 1:51PM</td>
                            <td>written free text order of the doctor will be displayed here after the "+" button had been clicked.</td>
                            <td><a href="">Delete</a></td>
                        </tr>
                        <tr>
                            <td>1/10/2021 | 1:51PM</td>
                            <td>written free text order of the doctor will be displayed here after the "+" button had been clicked.</td>
                            <td><a href="">Delete</a></td>
                        </tr>
                    </tbody>
                </table>

                <div class="row form-inline">
                    <div class="col-md-11">
                        <textarea style="width:100%;" class="form-control"></textarea>
                    </div>
                    <div class="col-md-1">
                        <button class="rounded btn btn-success">Add</button>
                    </div>
                </div>

                <hr>
                <h3>Medications</h3>

                <table class="table table-striped table-bordered">
                    <thead>
                        <th>Date/Time</th>
                        <th>Name of Medication</th>
                        <th>Dosage</th>
                        <th>Route</th>
                        <th>Frequency</th>
                        <th>Duration</th>
                        <th></th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1/10/2021 | 1:51PM</td>
                            <td>* Medicine *</td>
                            <td>* Dosage *</td>
                            <td>PQ</td>
                            <td>OD</td>
                            <td>Jan 17, 2021</td>
                            <td> <button class="rounded btn btn-danger"><i class="fas fa-times"></i></button></td>
                        </tr>
                        <tr>
                            <td>1/10/2021 | 1:51PM</td>
                            <td>* Medicine *</td>
                            <td>* Dosage *</td>
                            <td>PQ</td>
                            <td>OD</td>
                            <td>Jan 17, 2021</td>
                            <td> <button class="rounded btn btn-danger"><i class="fas fa-times"></i></button></td>
                        </tr>
                    </tbody>
                </table>

                <table class="table table-striped table-bordered" style="width:100%;">
                    <thead>
                        <th>Name of Medication</th>
                        <th>Preparation</th>
                        <th>Dosage</th>
                        <th>Route</th>
                        <th>Frequency</th>
                        <th>Duration</th>
                        <th></th>
                    </thead>
                    <tbody>
                        <tr>
                            <td><textarea class="form-control"></textarea></td>
                            <td><textarea class="form-control"></textarea></td>
                            <td><textarea class="form-control"></textarea></td>
                            <td><textarea class="form-control"></textarea></td>
                            <td><textarea class="form-control"></textarea></td>
                            <td><textarea class="form-control"></textarea></td>
                            <!-- <td> <button class="rounded btn btn-success"><i class="fas fa-plus"></i></button></td> -->
                            <td> <button class="rounded btn btn-success">Add</button></td>
                        </tr>
                    </tbody>
                </table>

                <div class="form-inline row mb-2">
                    <div class="col-md-2">
                        <label for="">Special Instructions:</label>
                    </div>
                    <div class="col-md-9">
                        <textarea class="form-control" style="width:100%"></textarea>
                    </div>
                    <div class="col-md-1">
                        <button class="rounded btn btn-success">Add</button>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-md-9"></div>
                    <div class="col-md-3 mt-1"><button class="rounded btn btn-default" style="width:100%"><b>Refer to Dental</b></button></div>
                    <!-- <div class="col-md-1"><button class="rounded btn btn-default">Add</button></div> -->
                </div>

                <div class="form-inline row mb-2">
                    <div class="col-md-2">
                        <label for="">Diet Instructions:</label>
                    </div>
                    <div class="col-md-9">
                        <select name="" id="diet_select" class="form-control" style="width:49%;">
                            <option value="">Low Fat Low Salt</option>
                            <option value="">Diet as Tolerated</option>
                            <option value="">Hypoallergenic Diet</option>
                            <option value="">Muslim Diet</option>
                            <option value="">Diabetic Diet</option>
                            <option value="others">Others: Please specify</option>
                        </select>
                        <input type="text" name="" id="others_diet" style="display:none; width:49%;" class="form-control ml-2">
                    </div>
                    <div class="col-md-1">
                        <button class="rounded btn btn-success">Add</button>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-md-9"></div>
                    <div class="col-md-3 mt-1 d-flex justify-content-end"><button class="rounded btn btn-default" style="width:100%"><b>Refer to Dietician</b></button></div>
                    <!-- <div class="col-md-1"><button class="rounded btn btn-success">Add</button></div> -->
                </div>

                <hr>
                <h3>Laboratory Tests</h3>

                <table class="table table-striped table-bordered">
                    <thead>
                        <th>Date</th>
                        <th>Name of Lab Tests</th>
                        <th>Mode of Request</th>
                        <th></th>

                    </thead>
                    <tbody>
                        <td>1/10/2021 | 1:51 PM</td>
                        <td>Kidney Profile (Creat, BUN, BUA)</td>
                        <td>STAT</td>
                        <td><a href="" style="color:red;">Delete</a></td>
                    </tbody>
                </table>

                <div class="d-flex justify-content-end mb-3">
                    <button class="btn btn-success">Add Laboratory Tests &nbsp; <i class="fas fa-plus"></i></button>
                </div>

                <div class="modal-footer justify-content-between">
                    <button type="submit" class="btn btn-danger" style="float: left;" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" style="float: right;" data-dismiss="modal">Save</button>
                </div>

            </div> <!-- modal body -->

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


<!-- VIEW MSE -->
<!-- Small Modal -->
<div class="modal fade" id="modal-MSE">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Mental Status Examination</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
               
               <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Date/Time</th>
                            <th>Findings</th>
                        </tr>
                     </thead>
                    <tbody>
                        <tr>
                            <td>Jan 24, 2021 <br> 12:10PM <small><i class="small text-muted"><br>Encoded by: <br> Dr. Cruzada </i></small></td>
                            <td>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>
                                            <b>Genral Appearance:</b><br>
                                            </td>
                                            <td>
                                                <b>Weight:</b> Obese &emsp; <b>Grooming:</b> Well-kempt &emsp; <b>Other Findings:</b> Notes on other findings.</td>
                                        </tr>
                                        <tr>
                                            <td><b>Behavior/Motor:</b></td>
                                            <td>Repetition &emsp; <b>Other Findings: </b>Notes on other findings.</td>
                                        </tr>
                                        <tr>
                                            <td><b>Attitude:</b></td>
                                            <td>Cooperative &emsp; <b>Other Findings: </b>Notes on other findings.</td>
                                        </tr>
                                        <tr>
                                            <td><b>Mood:</b></td>
                                            <td>Euphoric &emsp; <b>Other Findings: </b>Notes on other findings.</td>
                                        </tr>
                                        <tr>
                                            <td><b>Affect:</b></td>
                                            <td><b>Quality/Tone:</b> Eutymic &emsp; <b>Quantity:</b> Mild &emsp; <b>Range:</b> Normal &emsp; <b>Appropriateness:</b> Appropriate &emsp;<b>Congruence:</b> Congruent</td>
                                        </tr>
                                        <tr>
                                            <td><b>Speech:</b></td>
                                            <td><b>Fluency:</b> Normal &emsp; <b>Amount:</b> Normoproductive &emsp; <b>Rate:</b> Normal &emsp; <b>Tone:</b> Normal &emsp; <b>Volume:</b> Congruent </td>
                                        </tr>
                                        <tr>
                                            <td><b>Thought Process:</b></td>
                                            <td><b>Quality/Tone:</b> Goal-directed</td>
                                        </tr>
                                        <tr>
                                            <td><b>Thought Content:</b></td>
                                            <td><b>Obsession:</b> Notes here about px obsessions.<br>
                                                <b>Preoccupations:</b> Notes here about px preoccupations.<br>
                                                <b>Compulsions:</b> Notes here about px compulsions.<br>
                                                <b>Suicidality:</b> Suicide ideations notes<br>
                                                <b>Homicidality:</b> Notes here about px homicidality.<br>
                                                <b>Delusions:</b> Bizarre, mood-congruent<br>
                                                <b>Description:</b> Notes here about thought content.<br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>Perception:</b></td>
                                            <td>Auditory, Derealization, Gustatory, Olfactory<br><b>Notes:</b> Additional notes on perception.</td>
                                        </tr>
                                        <tr>
                                            <td><b>Sensoriom/Cognition:</b></td>
                                            <td><b>Consciousness:</b> Awake &emsp; <b>Orientation:</b> Person &emsp; <b>Attention span:</b> Good &emsp; <b>Abstract Thinking:</b> Good &emsp; <b>Impulse:</b> Good &emsp; <b>Judgement:</b> Good &emsp; <b>Insight:</b> Good &emsp; <b>Reliability:</b> Good
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer justify-content-end">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Add Notes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<script>
    $("#diet_select").on("change", function() {
        if ($(this).val() == "others") {
            $('#others_diet').slideDown();
        } else {
            $('#others_diet').slideUp();
        }
    });
</script>