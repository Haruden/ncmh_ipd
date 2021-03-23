<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <?php $this->load->view('doctor/navbar'); ?>
        <?php $this->load->view('doctor/sidebar'); ?>
        <?php $this->load->view('doctor/modals'); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h2 class="m-0 text-dark">ROY O. DAHILDAHIL, 28, M</h2>
                            <p class="mb-0">Date of Admission: December 19, 2020 (3 Days)</p>
                            <a href="#">View Pavilion History</a>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <div class="d-flex justify-content-end mb-2">
                                <h1>Pavilion 1</h1>
                            </div>
                            <div class="d-flex justify-content-end">
                                <p>December 22, 2020</p>
                            </div>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-2">

                            <!-- About Me Box -->
                            <div class="card card-primary">
                                <!-- <div class="card-header">
                                    <h3 class="card-title">About Me</h3>
                                </div> -->
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <strong><a href="#"> Patient Info </a> </strong>
                                    <hr>
                                    <strong><a href="#"> Admission Records </a> </strong>
                                    <hr>
                                    <strong><a href="#"> Vital Signs </a> </strong>
                                    <hr>
                                    <strong><a href="#"> Nurses Notes </a> </strong>
                                    <hr>
                                    <div style="background-color:#7A3B69;" class="p-2 rounded">
                                        <a style="color:white;" href="#"> Doctors Notes </a>
                                    </div>
                                    <!-- 7A3B69 -->
                                    <hr>
                                    <strong><a href="#"> Medication </a> </strong>
                                    <hr>
                                    <strong><a href="#"> Laboratory </a> </strong>
                                    <hr>
                                    <strong><a href="#"> Discharge </a> </strong>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-10">
                            <div class="card">
                                <div class="card-header p-2">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('doctor/trans_in'); ?>">Transfer In Notes</a></li>
                                        <li class="nav-item"><a class="nav-link active" href="" data-toggle="tab">Progress Notes</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('doctor/doctors_order'); ?>">Doctor's Order</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Transfer Out Notes</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('doctor/trans_in_out'); ?>">Transfer In/Out Notes</a></li>
                                    </ul>
                                </div><!-- /.card-header -->
                                <div class="card-body">
                                    <div class="tab-content">

                                        <div class="container-fluid">
                                            <form method="POST" action="<?php echo base_url().'nurse'; ?>">
                                                <h3>PHYSICAL EXAMINATION</h3>
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
                                        
                                <form action="" class="needs-validation" method="POST" novalidate>

                                <div class="form-group"> 
                                    <br>
                                    <h3>OTHER PHYSICAL EXAMINATION</h3>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Status</th>
                                                <th>Remarks</th>
                                            </tr>
                                        </thead>
                                        <tr>
                                            <td><label>Skin</label></td>
                                            <td><div class="form-group">
                                                <select class="form-control">
                                                  <option>Normal</option>
                                                  <option>Abnormal</option>
                                                </select>
                                              </div>
                                            </td>
                                            <td><textarea class="form-control" style="min-width: 100%"></textarea></td>
                                        </tr>
                                        <tr>
                                            <td><label>HEENT</label></td>
                                            <td><div class="form-group">
                                                <select class="form-control">
                                                  <option>Normal</option>
                                                  <option>Abnormal</option>
                                                </select>
                                              </div>
                                            </td>
                                            <td><textarea class="form-control" style="min-width: 100%"></textarea></td>
                                        </tr>
                                        <tr>
                                            <td><label>Chest and Lungs</label></td>
                                            <td><div class="form-group">
                                                <select class="form-control">
                                                  <option>Normal</option>
                                                  <option>Abnormal</option>
                                                </select>
                                              </div>
                                            </td>
                                            <td><textarea class="form-control" style="min-width: 100%"></textarea></td>
                                        </tr>
                                        <tr>
                                            <td><label>Heart</label></td>
                                            <td><div class="form-group">
                                                <select class="form-control">
                                                  <option>Normal</option>
                                                  <option>Abnormal</option>
                                                </select>
                                              </div>
                                            </td>
                                            <td><textarea class="form-control" style="min-width: 100%"></textarea></td>
                                        </tr>
                                        <tr>
                                            <td><label>Abdomen</label></td>
                                            <td><div class="form-group">
                                                <select class="form-control">
                                                  <option>Normal</option>
                                                  <option>Abnormal</option>
                                                </select>
                                              </div>
                                            </td>
                                            <td><textarea class="form-control" style="min-width: 100%"></textarea></td>
                                        </tr>
                                        <tr>
                                            <td><label>Extremities</label></td>
                                            <td><div class="form-group">
                                                <select class="form-control">
                                                  <option>Normal</option>
                                                  <option>Abnormal</option>
                                                </select>
                                              </div>
                                            </td>
                                            <td><textarea class="form-control" style="min-width: 100%"></textarea></td>
                                        </tr>
                                    </table>
                                    <label for="hn_ope_findings">Other Relevant Findings:</label>
                                    <textarea class="form-control"></textarea>
                                </div>

                                <!-- <input type="hidden" value="submitted" name="ope_submitted" /> -->
                                <button type="submit" class="btn btn-primary float-right" name="ope_submit">Submit</button>
                                <!-- <button type="button" class="btn btn-danger float-right" data-dismiss="modal">Close</button> -->
                            </form>
                                        
                                        
                                    </div>
                                    <!-- /.tab-content -->
                                </div><!-- /.card-body -->
                            </div>
                            <!-- /.nav-tabs-custom -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div> <!-- /.content-wrapper -->

        <!-- <footer class="main-footer">
            <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.0.5
            </div>
        </footer> -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
</body>

    <script type="text/javascript">
        $('#height').change(function() {
            if ($('#weight').val() != 0) {
                var height_cm = $('#height').val() / 100;
                var bmi = $('#weight').val() / height_cm;
                $('#bmi').val(bmi.toFixed(2));
            }
        });

        $('#weight').change(function() {
            if ($('#height').val() != 0) {
                var height_cm = $('#height').val() / 100;
                var bmi = $('#weight').val() / (height_cm * height_cm);
                $('#bmi').val(bmi.toFixed(2));
            }
        });
    </script>

<script>
    $('[data-widget="pushmenu"]').PushMenu('collapse');

    $(function() {
        $("#tbl_prognotes").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
        // $('#example2').DataTable({
        //     "paging": true,
        //     "lengthChange": false,
        //     "searching": false,
        //     "ordering": true,
        //     "info": true,
        //     "autoWidth": false,
        //     "responsive": true,
        // });
    });
</script>

</html>