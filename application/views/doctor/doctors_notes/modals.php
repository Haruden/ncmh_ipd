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
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#mse-add">Mental Status Exam</a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#pe-add">Physical Exam</a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#neuro-add">Nuerological Exam</a>
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
                                                <b>General Appearance:</b><br>
                                            </td>
                                            <td>
                                                <b>Weight:</b> Obese &emsp; <b>Grooming:</b> Well-kempt &emsp; <b>Other Findings:</b> Notes on other findings.
                                            </td>
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

<!-- Large Modal -->
<div class="modal fade" id="mse-add">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add MENTAL STATUS EXAMINATION</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <!-- <h3>MENTAL STATUS EXAMINATION &nbsp;  -->
                    <button class="btn btn-default">Import Previous Data</button></h3>

                    <hr>

                    <div class="row">
                        <div class="col-md-2 d-flex justify-content-end">
                            <label>General Appearance</label>
                        </div>
                        <div class="col-md-10">
                            <div class="card pl-2">
                                <div class="form-inline">
                                    <label for="" class="mr-3">Weight:</label>
                                    <input type="radio" name="weight" class="form-control mr-1"> <span class="mr-3"> Obese </span>
                                    <input type="radio" name="weight" class="form-control mr-1"> <span class="mr-3"> Underweight </span>
                                    <input type="radio" name="weight" class="form-control mr-1"> <span class="mr-3"> Emaciated </span>
                                    <input type="radio" name="weight" class="form-control mr-1"> <span class="mr-3"> Normal </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Grooming:</label>
                                    <input type="radio" name="grooming" class="form-control mr-1"> <span class="mr-3"> Well-kempt </span>
                                    <input type="radio" name="grooming" class="form-control mr-1"> <span class="mr-3"> Kempt </span>
                                    <input type="radio" name="grooming" class="form-control mr-1"> <span class="mr-3"> Poorly-kempt </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Other Findings:</label>
                                    <textarea class="form-control mb-2" style="width:85%"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2 d-flex justify-content-end">
                            <label>Behavior/Motor</label>
                        </div>
                        <div class="col-md-10">
                            <div class="card pl-2">
                                <div class="form-inline">
                                    <input type="radio" name="behavior" class="form-control mr-1"> <span class="mr-3"> Repetition </span>
                                    <input type="radio" name="behavior" class="form-control mr-1"> <span class="mr-3"> Overactivity </span>
                                    <input type="radio" name="behavior" class="form-control mr-1"> <span class="mr-3"> Agitated </span>
                                    <input type="radio" name="behavior" class="form-control mr-1"> <span class="mr-3"> Catatonia </span>
                                    <input type="radio" name="behavior" class="form-control mr-1"> <span class="mr-3"> Normal </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Other Findings:</label>
                                    <textarea class="form-control mb-2" style="width:85%"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2 d-flex justify-content-end">
                            <label>Attitude</label>
                        </div>
                        <div class="col-md-10">
                            <div class="card pl-2">
                                <div class="form-inline">
                                    <input type="radio" name="attitude" class="form-control mr-1"> <span class="mr-3"> Cooperative </span>
                                    <input type="radio" name="attitude" class="form-control mr-1"> <span class="mr-3"> Attentive </span>
                                    <input type="radio" name="attitude" class="form-control mr-1"> <span class="mr-3"> Evasive </span>
                                    <input type="radio" name="attitude" class="form-control mr-1"> <span class="mr-3"> Hostile </span>
                                    <input type="radio" name="attitude" class="form-control mr-1"> <span class="mr-3"> Normal </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Other Findings:</label>
                                    <textarea class="form-control mb-2" style="width:85%"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2 d-flex justify-content-end">
                            <label>Mood</label>
                        </div>
                        <div class="col-md-10">
                            <div class="card pl-2">
                                <div class="form-inline">
                                    <input type="radio" name="mood" class="form-control mr-1"> <span class="mr-3"> Euphoric </span>
                                    <input type="radio" name="mood" class="form-control mr-1"> <span class="mr-3"> Dysphoric </span>
                                    <input type="radio" name="mood" class="form-control mr-1"> <span class="mr-3"> Expansive </span>
                                    <input type="radio" name="mood" class="form-control mr-1"> <span class="mr-3"> Depressed </span>
                                    <input type="radio" name="mood" class="form-control mr-1"> <span class="mr-3"> Euthymic </span>
                                    <input type="radio" name="mood" class="form-control mr-1"> <span class="mr-3"> Labile </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Other Findings:</label>
                                    <textarea class="form-control mb-2" style="width:85%"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2 d-flex justify-content-end">
                            <label>Affect</label>
                        </div>
                        <div class="col-md-10">
                            <div class="card pl-2">
                                <div class="form-inline">
                                    <label for="" class="mr-3">Quality/Tone:</label>
                                    <input type="radio" name="quality" class="form-control mr-1"> <span class="mr-3"> Euthymic </span>
                                    <input type="radio" name="quality" class="form-control mr-1"> <span class="mr-3"> Happy </span>
                                    <input type="radio" name="quality" class="form-control mr-1"> <span class="mr-3"> Dysphoric </span>
                                    <input type="radio" name="quality" class="form-control mr-1"> <span class="mr-3"> Irritable </span>
                                    <input type="radio" name="quality" class="form-control mr-1"> <span class="mr-3"> Expansive </span>
                                    <input type="radio" name="quality" class="form-control mr-1"> <span class="mr-3"> Labile </span>
                                    <input type="radio" name="quality" class="form-control mr-1"> <span class="mr-3"> Depressed </span>
                                    <input type="radio" name="quality" class="form-control mr-1"> <span class="mr-3"> Agitated </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Quantity:</label>
                                    <input type="radio" name="quantity" class="form-control mr-1"> <span class="mr-3"> Mild </span>
                                    <input type="radio" name="quantity" class="form-control mr-1"> <span class="mr-3"> Moderate </span>
                                    <input type="radio" name="quantity" class="form-control mr-1"> <span class="mr-3"> Severe </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Range:</label>
                                    <input type="radio" name="range" class="form-control mr-1"> <span class="mr-3"> Normal </span>
                                    <input type="radio" name="range" class="form-control mr-1"> <span class="mr-3"> Restricted </span>
                                    <input type="radio" name="range" class="form-control mr-1"> <span class="mr-3"> Flat </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Appropriateness:</label>
                                    <input type="radio" name="appropriateness" class="form-control mr-1"> <span class="mr-3"> Appropriate </span>
                                    <input type="radio" name="appropriateness" class="form-control mr-1"> <span class="mr-3"> Inappropriate </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Congruence:</label>
                                    <input type="radio" name="congruence" class="form-control mr-1"> <span class="mr-3"> Congruent </span>
                                    <input type="radio" name="congruence" class="form-control mr-1"> <span class="mr-3"> Incongruent </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Other Findings:</label>
                                    <textarea class="form-control mb-2" style="width:85%"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2 d-flex justify-content-end">
                            <label>Speech</label>
                        </div>
                        <div class="col-md-10">
                            <div class="card pl-2">
                                <div class="form-inline">
                                    <label for="" class="mr-3">Fluency:</label>
                                    <input type="radio" name="fluency" class="form-control mr-1"> <span class="mr-3"> Normal </span>
                                    <input type="radio" name="fluency" class="form-control mr-1"> <span class="mr-3"> Paraphasia </span>
                                    <input type="radio" name="fluency" class="form-control mr-1"> <span class="mr-3"> Slurred </span>
                                    <input type="radio" name="fluency" class="form-control mr-1"> <span class="mr-3"> Stuttering </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Amount:</label>
                                    <input type="radio" name="amount" class="form-control mr-1"> <span class="mr-3"> Normoproductive </span>
                                    <input type="radio" name="amount" class="form-control mr-1"> <span class="mr-3"> Hyperproductive </span>
                                    <input type="radio" name="amount" class="form-control mr-1"> <span class="mr-3"> Hypoproductive </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Rate:</label>
                                    <input type="radio" name="rate" class="form-control mr-1"> <span class="mr-3"> Normal </span>
                                    <input type="radio" name="rate" class="form-control mr-1"> <span class="mr-3"> Slowed </span>
                                    <input type="radio" name="rate" class="form-control mr-1"> <span class="mr-3"> Rapid </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Tone:</label>
                                    <input type="radio" name="tone" class="form-control mr-1"> <span class="mr-3"> Normal </span>
                                    <input type="radio" name="tone" class="form-control mr-1"> <span class="mr-3"> Childlike </span>
                                    <input type="radio" name="tone" class="form-control mr-1"> <span class="mr-3"> Anxious </span>
                                    <input type="radio" name="tone" class="form-control mr-1"> <span class="mr-3"> Irritable </span>
                                    <input type="radio" name="tone" class="form-control mr-1"> <span class="mr-3"> Timid </span>
                                    <input type="radio" name="tone" class="form-control mr-1"> <span class="mr-3"> Dysphoric </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Volume:</label>
                                    <input type="radio" name="volume" class="form-control mr-1"> <span class="mr-3"> Audible </span>
                                    <input type="radio" name="volume" class="form-control mr-1"> <span class="mr-3"> Soft </span>
                                    <input type="radio" name="volume" class="form-control mr-1"> <span class="mr-3"> Loud </span>
                                    <input type="radio" name="volume" class="form-control mr-1"> <span class="mr-3"> Mumbled </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Other Findings:</label>
                                    <textarea class="form-control mb-2" style="width:85%"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2 d-flex justify-content-end">
                            <label>Thought Process</label>
                        </div>
                        <div class="col-md-10">
                            <div class="card pl-2">
                                <div class="form-inline">
                                    <input type="radio" name="thought_process" class="form-control mr-1"> <span class="mr-3"> Goal-directed </span>
                                    <input type="radio" name="thought_process" class="form-control mr-1"> <span class="mr-3"> Flight of Ideas </span>
                                    <input type="radio" name="thought_process" class="form-control mr-1"> <span class="mr-3"> Circumstantiality </span>
                                    <input type="radio" name="thought_process" class="form-control mr-1"> <span class="mr-3"> Looseness of Association </span>
                                </div>
                                <div class="form-inline">
                                    <input type="radio" name="thought_process" class="form-control mr-1"> <span class="mr-3"> Tangentiality </span>
                                    <input type="radio" name="thought_process" class="form-control mr-1"> <span class="mr-3"> Thought Blocking </span>
                                    <input type="radio" name="thought_process" class="form-control mr-1"> <span class="mr-3"> Neologism </span>
                                    <input type="radio" name="thought_process" class="form-control mr-1"> <span class="mr-3"> Perseveration </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Other Findings:</label>
                                    <textarea class="form-control mb-2" style="width:85%"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2 d-flex justify-content-end">
                            <label>Thought Content</label>
                        </div>
                        <div class="col-md-10">
                            <div class="card pl-2 pt-2">

                                <div class="form-inline mb-2">
                                    <div class="form-inline col-md-2">
                                        <input type="checkbox" class="form-control mr-1" name="" id="">
                                        <label for="" class="mr-1">Obsession:</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" name="" id="" class="form-control" style="width:100%;">
                                    </div>
                                </div>

                                <div class="form-inline mb-2">
                                    <div class="form-inline col-md-2">
                                        <input type="checkbox" class="form-control mr-1" name="" id="">
                                        <label for="" class="mr-1">Preoccupations:</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" name="" id="" class="form-control" style="width:100%;">
                                    </div>
                                </div>

                                <div class="form-inline mb-2">
                                    <div class="form-inline col-md-2">
                                        <input type="checkbox" class="form-control mr-1" name="" id="">
                                        <label for="" class="mr-1">Compulsions:</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" name="" id="" class="form-control" style="width:100%;">
                                    </div>
                                </div>

                                <div class="form-inline mb-2">
                                    <div class="form-inline col-md-2">
                                        <input type="checkbox" class="form-control mr-1" name="" id="">
                                        <label for="" class="mr-1">Suicidality:</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="radio" name="suicidality" class="form-control mr-1"> <span class="mr-2"> Suicide ideations </span>
                                        <input type="radio" name="suicidality" class="form-control mr-1"> <span class="mr-2"> Suicide behavior </span>
                                    </div>
                                </div>

                                <div class="form-inline mb-2">
                                    <div class="form-inline col-md-2">
                                        <input type="checkbox" class="form-control mr-1" name="" id="">
                                        <label for="" class="mr-1">Homocidality:</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" name="" id="" class="form-control" style="width:100%;">
                                    </div>
                                </div>

                                <div class="form-inline mb-2">
                                    <div class="form-inline col-md-2">
                                        <input type="checkbox" class="form-control mr-1" name="" id="">
                                        <label for="" class="mr-1">Delusions:</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" name="" id="" class="form-control" style="width:100%;">
                                    </div>
                                </div>

                                <div class="form-inline mb-2">
                                    <div class="form-inline col-md-2">
                                        <input type="checkbox" class="form-control mr-1" name="" id="">
                                        <label for="" class="mr-1">Description:</label>
                                    </div>
                                    <div class="col-md-10">
                                        <textarea class="form-control mb-2" style="width:100%"></textarea>
                                    </div>
                                </div>

                                <div class="form-inline">
                                    <div class="col-md-2">
                                    </div>
                                    <div class="col-md-10">
                                        <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Bizzare </span>
                                        <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Non-bizzare </span>
                                        <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Mood-congruent </span>
                                        <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Mood-incongruent </span>
                                        <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Grandiose </span>
                                        <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Persecutory </span>
                                    </div>
                                </div>

                                <div class="form-inline">
                                    <div class="col-md-2">
                                    </div>
                                    <div class="col-md-10">
                                        <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Erotomania </span>
                                        <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Paranoid </span>
                                        <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Jealousy </span>
                                        <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Somatic </span>
                                        <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Referential </span>
                                        <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Nihilistic </span>
                                        <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Thought Withdrawal </span>
                                    </div>
                                </div>

                                <div class="form-inline">
                                    <div class="col-md-2">
                                    </div>
                                    <div class="col-md-10">
                                        <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Thought Broadcasting </span>
                                        <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Thought Insertion </span>
                                        <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Thought Control </span>
                                    </div>
                                </div>

                                <div class="form-inline mb-2">
                                    <div class="form-inline col-md-2">
                                        <label for="" class="mr-1">Other Findings:</label>
                                    </div>
                                    <div class="col-md-10">
                                        <textarea class="form-control mb-2" style="width:100%"></textarea>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2 d-flex justify-content-end">
                            <label>Perception</label>
                        </div>
                        <div class="col-md-10">
                            <div class="card pl-2">
                                <div class="form-inline">
                                    <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-3"> Auditory </span>
                                    <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-3"> Visual </span>
                                    <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-3"> Tactile </span>
                                    <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-3"> Gustatory </span>
                                    <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-3"> Olfactory </span>
                                    <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-3"> Derealization </span>
                                    <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-3"> Depersonalization </span>
                                </div>

                                <div class="form-inline mb-2">
                                    <div class="form-inline col-md-2">
                                        <label for="" class="mr-1">Notes:</label>
                                    </div>
                                    <div class="col-md-10">
                                        <textarea class="form-control mb-2" style="width:100%"></textarea>
                                    </div>
                                </div>

                                <div class="form-inline mb-2">
                                    <div class="form-inline col-md-2">
                                        <label for="" class="mr-1">Other Findings:</label>
                                    </div>
                                    <div class="col-md-10">
                                        <textarea class="form-control mb-2" style="width:100%"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2 d-flex justify-content-end">
                            <label>Sensoriom/Cognition</label>
                        </div>
                        <div class="col-md-10">
                            <div class="card pl-2">
                                <div class="form-inline">
                                    <label for="" class="mr-3">Consciousness:</label>
                                    <input type="radio" name="consciousness" class="form-control mr-1"> <span class="mr-3"> Awake </span>
                                    <input type="radio" name="consciousness" class="form-control mr-1"> <span class="mr-3"> Asleep </span>
                                    <input type="radio" name="consciousness" class="form-control mr-1"> <span class="mr-3"> Lethargic </span>
                                    <input type="radio" name="consciousness" class="form-control mr-1"> <span class="mr-3"> Stuporous </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Orientation:</label>
                                    <input type="radio" name="orientation" class="form-control mr-1"> <span class="mr-3"> Person </span>
                                    <input type="radio" name="orientation" class="form-control mr-1"> <span class="mr-3"> Place </span>
                                    <input type="radio" name="orientation" class="form-control mr-1"> <span class="mr-3"> Time </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Attention Span:</label>
                                    <input type="radio" name="attention_span" class="form-control mr-1"> <span class="mr-3"> Good </span>
                                    <input type="radio" name="attention_span" class="form-control mr-1"> <span class="mr-3"> Fair </span>
                                    <input type="radio" name="attention_span" class="form-control mr-1"> <span class="mr-3"> Poor </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Impulse:</label>
                                    <input type="radio" name="impulse" class="form-control mr-1"> <span class="mr-3"> Good </span>
                                    <input type="radio" name="impulse" class="form-control mr-1"> <span class="mr-3"> Fair </span>
                                    <input type="radio" name="impulse" class="form-control mr-1"> <span class="mr-3"> Poor </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Judgement:</label>
                                    <input type="radio" name="judgement" class="form-control mr-1"> <span class="mr-3"> Good </span>
                                    <input type="radio" name="judgement" class="form-control mr-1"> <span class="mr-3"> Fair </span>
                                    <input type="radio" name="judgement" class="form-control mr-1"> <span class="mr-3"> Poor </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Insight:</label>
                                    <input type="radio" name="insight" class="form-control mr-1"> <span class="mr-3"> Good </span>
                                    <input type="radio" name="insight" class="form-control mr-1"> <span class="mr-3"> Fair </span>
                                    <input type="radio" name="insight" class="form-control mr-1"> <span class="mr-3"> Poor </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Reliability:</label>
                                    <input type="radio" name="reliability" class="form-control mr-1"> <span class="mr-3"> Good </span>
                                    <input type="radio" name="reliability" class="form-control mr-1"> <span class="mr-3"> Fair </span>
                                    <input type="radio" name="reliability" class="form-control mr-1"> <span class="mr-3"> Poor </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Other Findings:</label>
                                    <textarea class="form-control mb-2" style="width:85%"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <input type="hidden" value="submitted" name="ope_submitted" /> -->
                    <!-- <button type="submit" class="btn btn-primary float-right" name="ope_submit">Submit</button> -->
                    <!-- <button type="button" class="btn btn-danger float-right" data-dismiss="modal">Close</button> -->
                </form>

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
<div class="modal fade" id="pe-add">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Physical Examination</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="">
                    <div class="form-group form-inline">
                        <label>General Survey:</label>
                        <select class="form-control mx-2" name="pe_general_survey">
                            <option value="">Ambulatory</option>
                            <option value="">Ambulatory with assistance</option>
                            <option value="">Wheelchair-borne</option>
                            <option value="">Stretcher-borne</option>
                        </select>
                    </div>

                    <hr>
                    <h5>Body Measurements</h5>

                    <div class="form-group form-inline">
                        <label>Height:</label>
                        <input type="number" class="form-control mx-2" id="height" style="width: 100px;" value=0>cm &emsp;

                        <label>Weight:</label>
                        <input type="number" class="form-control mx-2" id="weight" style="width: 100px;" value=0>kg &emsp;

                        <label>BMI:</label>
                        <input type="text" class="form-control mx-2" style="width: 100px;" id="bmi" readonly> &emsp;

                        <label>Abdominal Girth:</label>
                        <input type="text" class="form-control mx-2" style="width: 100px;" id="">in &emsp;
                    </div>

                    <div class="form-group form-inline">
                        <label>Level of Consciousness:</label>
                        <select name="pe_general_survey" class="form-control mx-2">
                            <option value="">Alert</option>
                            <option value="">Drowsy</option>
                            <option value="">Stuporous</option>
                            <option value="">Lethargic</option>
                        </select>
                    </div>

                    <hr>
                    <h5>Vital Signs</h5>
                    <div class="form-group form-inline">
                        <label> BP (SBP/DBP): </label>
                        <input type="number" class="form-control mx-2" style="width: 80px;" id="">/
                        <input type="number" class="form-control mx-2" style="width: 80px;" id="">mmHg &emsp;

                        <label> Heart Rate: </label>
                        <input type="text" class="form-control mx-2" style="width: 50px;" id="">bpm &emsp;

                        <label> O2 Saturation: </label>
                        <input type="text" class="form-control mx-2" style="width: 50px;" id="">
                    </div>

                    <div class="form-group form-inline">
                        <label>Respiratory Rate:</label>
                        <input type="text" class="form-control mx-2" style="width: 50px;" id=""> &emsp;

                        <label> Temperature: </label>
                        <input type="text" class="form-control mx-2" style="width: 100px;" id="">C
                    </div>
                </form>

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
<div class="modal fade" id="neuro-add">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Neurological Exam</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" class="needs-validation" method="POST" novalidate>

                    <div class="form-group">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Status</th>
                                    <th>Remarks</th>
                                </tr>
                            </thead>
                            <tr>
                                <td><label>Cerebral/Cognitive Function</label></td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>Normal</option>
                                            <option>Abnormal</option>
                                        </select>
                                    </div>
                                </td>
                                <td><textarea class="form-control" style="min-width: 100%"></textarea></td>
                            </tr>
                            <tr>
                                <td><label>Cranial Nerves</label></td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>Normal</option>
                                            <option>Abnormal</option>
                                        </select>
                                    </div>
                                </td>
                                <td><textarea class="form-control" style="min-width: 100%"></textarea></td>
                            </tr>
                            <tr>
                                <td><label>Motor Strength</label></td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>Normal</option>
                                            <option>Abnormal</option>
                                        </select>
                                    </div>
                                </td>
                                <td><textarea class="form-control" style="min-width: 100%"></textarea></td>
                            </tr>
                            <tr>
                                <td><label>Cerebellar Function</label></td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>Normal</option>
                                            <option>Abnormal</option>
                                        </select>
                                    </div>
                                </td>
                                <td><textarea class="form-control" style="min-width: 100%"></textarea></td>
                            </tr>
                            <tr>
                                <td><label>Reflexes</label></td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>Normal</option>
                                            <option>Abnormal</option>
                                        </select>
                                    </div>
                                </td>
                                <td><textarea class="form-control" style="min-width: 100%"></textarea></td>
                            </tr>
                            <tr>
                                <td><label>Sensory Exam</label></td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>Normal</option>
                                            <option>Abnormal</option>
                                        </select>
                                    </div>
                                </td>
                                <td><textarea class="form-control" style="min-width: 100%"></textarea></td>
                            </tr>
                            <tr>
                                <td><label>Meningeal Sign/s</label></td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>Normal</option>
                                            <option>Abnormal</option>
                                        </select>
                                    </div>
                                </td>
                                <td><textarea class="form-control" style="min-width: 100%"></textarea></td>
                            </tr>
                            <tr>
                                <td><label>Gait</label></td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>Normal</option>
                                            <option>Abnormal</option>
                                        </select>
                                    </div>
                                </td>
                                <td><textarea class="form-control" style="min-width: 100%"></textarea></td>
                            </tr>
                        </table>
                    </div>

                    <!-- <input type="hidden" value="submitted" name="ope_submitted" /> -->
                    <!-- <button type="submit" class="btn btn-primary float-right" name="ope_submit">Submit</button> -->
                    <!-- <button type="button" class="btn btn-danger float-right" data-dismiss="modal">Close</button> -->
                </form>

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

<script>
    $("#diet_select").on("change", function() {
        if ($(this).val() == "others") {
            $('#others_diet').slideDown();
        } else {
            $('#others_diet').slideUp();
        }
    });
</script>