
<div class="tab-pane" id="progress_notes">
<div class="dataTables_wrapper dt-bootstrap4">
    <table id="tbl_prognotes" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Date/Time</th>
                <th>Pavilion</th>
                <th>Progress Notes</th>
                <th>Diganosis</th>                                                     
                <th>Others</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Jan 24, 2021 <br> 12:10PM <small><i class="small text-muted">Encoded by: <br> Dr. Cruzada </i></small></td>
                <td>Pavilion 1</td>
                <td>

                    <b>Subjective Notes</b><br>
                    Doctors notes about the subjective notes of the patient will be reflected here.<br>
                    <br>
                    <b>Objective Notes</b><br>
                    Doctors notes about the objective notes of the patient will be reflected here.<br>
                    <a href="#">View MSE</a><br>
                    <a href="#">View PE</a><br>
                    <a href="#">View Nuero</a><br>
                    <br>
                    <b>Assessment Notes</b><br>
                    Doctors notes about the assessment notes of the patient will be reflected here.<br>
                    + Other medical diagnosis<br>
                    + Psychiatric modifier/condition<br>
                    <br>
                    <b>Treatment Plan</b><br>
                    Doctors notes about the treatment plan of the patient will be reflected here.<br>
                </td>
                <td>Both psychiatric and medical dignosis will be reflected here.</td>
                
                <td>
                    <a href="#"><u>View Mental Status Exam</a></u><br>
                    <a href="#"><u>View Physical Exam</a></u><br>
                    <a href="#"><u>View Nuerologial Exam</a></u><br>
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th>Date/Time</th>
                <th>Pavilion</th>
                <th>Progress Notes</th>
                <th>Diganosis</th>                                                      
                <th>Others</th>
            </tr>
        </tfoot>
    </table>
</div> <!-- /.row -->
<hr>
<div class="d-flex justify-content-center">
    <button class="btn btn-lg btn-success" data-toggle="modal" data-target="#modal-prognotes">Add Notes</button>
</div>
</div>

<div class="modal fade" id="modal-prognotes">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
               <!-- <h4 class="modal-title">Add Progress Notes</h4> -->
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
                      <a class="dropdown-item" href="#">Nuerological Exam</a>
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
                        <label>ICD Coded Medical Diagnosis</label>
                        <select class="form-control">
                          <option>A00-B99 Certain infectious and parasitic diseases.</option>
                          <option>G00-G09 Inflammatory diseases of the central nervous system</option>
                          <option>G10-G14 Systemic atrophies primarily affecting the central nervous system</option>
                          <option>F10-F19 Mental and behavioral disorders due to psychoactive substance use</option>
                          <option>F20-F29 Schizophrenia, schizotypal, delusional, and other non-mood psychotic disorders</option>
                        </select>
                      </div>
        
        <div class = "row">

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

            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" style="float: right;" data-dismiss="modal">ADD PROGRESS NOTE</button>
            </div>

            </div> <!-- modal body -->
            
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
