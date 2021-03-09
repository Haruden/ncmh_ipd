<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <?php $this->load->view('nurse/navbar'); ?>
        <?php $this->load->view('nurse/sidebar'); ?>

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
                                    <div style="background-color:#7A3B69;" class="p-2 rounded">
                                        <a style="color:white;" href="#"> Nurses Notes </a>
                                    </div>
                                    <hr>
                                    <strong><a href="#"> Doctors Notes </a> </strong>
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
                                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('nurse/nurses_notes'); ?>">Nurse's Notes</a></li>
                                        <li class="nav-item"><a class="nav-link" href="doctors_notes">Doctor's Orders</a></li>
                                        <li class="nav-item"><a class="nav-link active" href="#medication_sheet" data-toggle="tab">Medication Sheet</a></li>
                                        <li class="nav-item"><a class="nav-link" href="diet_instructions">Diet Instructions</a></li>
                                    </ul>
                                </div><!-- /.card-header -->

                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="active tab-pane" id="medication_sheet">
                                            <h3>Medication Administration Record</h3>
                                            <hr>
                                            <button type="button" class="btn btn-default btn-lg dropdown-toggle mb-3" data-toggle="dropdown" aria-expanded="false">
                                                Bulk Action
                                            </button>
                                            <ul class="dropdown-menu dropdown-options" x-placement="bottom-start">
                                                <li class="dropdown-item"><a href="#">Carry Out</a></li>
                                                <li class="dropdown-item"><a href="#">Administer</a></li>
                                                <li class="dropdown-item"><a href="#">Hold</a></li>
                                                <li class="dropdown-item"><a href="#">Shifted</a></li>
                                                <li class="dropdown-item"><a href="#">Discontinued</a></li>
                                            </ul>

                                            <!-- Table row -->
                                            <div class="dataTables_wrapper dt-bootstrap4">
                                                <table id="example1" class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th></th>
                                                            <th>Date/Time Ordered</th>
                                                            <th>Name of Medication</th>
                                                            <th>Dosage</th>
                                                            <th>Frequency</th>
                                                            <th>Route</th>
                                                            <th>Last Dose Given</th>
                                                            <th>Medication Due On</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><input type="checkbox" class="form-control"></td>
                                                            <td>01/10/2021 <br> 1:51PM</td>
                                                            <td>Paracetamol</td>
                                                            <td>500mg</td>
                                                            <td>TID</td>
                                                            <td>PO</td>
                                                            <td>01/25/2021 <br> 8:32AM</td>
                                                            <td>01/25/2021 <br> 1:00PM</td>
                                                            <td><strong style="color:red">NEW</strong></td>
                                                            <td>
                                                                <button type="button" class="btn btn-primary dropdown-toggle mb-3" data-toggle="dropdown" aria-expanded="false">
                                                                    Action
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-options" x-placement="bottom-start">
                                                                    <li class="dropdown-item"><a href="#">View Details</a></li>
                                                                    <div class="dropdown-divider"></div>
                                                                    <li class="dropdown-item"><a href="#">Carry Out</a></li>
                                                                    <li class="dropdown-item"><a href="#">Administer</a></li>
                                                                    <li class="dropdown-item"><a href="#">Hold</a></li>
                                                                    <li class="dropdown-item"><a href="#">Shifted</a></li>
                                                                    <li class="dropdown-item"><a href="#">Discontinued</a></li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="checkbox" class="form-control"></td>
                                                            <td>01/10/2021 <br> 1:51PM</td>
                                                            <td>Ibuprofen</td>
                                                            <td>500mg</td>
                                                            <td>TID</td>
                                                            <td>PO</td>
                                                            <td>01/25/2021 <br> 8:32AM</td>
                                                            <td>01/26/2021 <br> 8:00PM</td>
                                                            <td><strong>Active</strong></td>
                                                            <td>
                                                                <button type="button" class="btn btn-primary dropdown-toggle mb-3" data-toggle="dropdown" aria-expanded="false">
                                                                    Action
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-options" x-placement="bottom-start">
                                                                    <li class="dropdown-item"><a href="#">View Details</a></li>
                                                                    <div class="dropdown-divider"></div>
                                                                    <li class="dropdown-item"><a href="#">Carry Out</a></li>
                                                                    <li class="dropdown-item"><a href="#">Administer</a></li>
                                                                    <li class="dropdown-item"><a href="#">Hold</a></li>
                                                                    <li class="dropdown-item"><a href="#">Shifted</a></li>
                                                                    <li class="dropdown-item"><a href="#">Discontinued</a></li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="checkbox" class="form-control"></td>
                                                            <td>01/10/2021 <br> 1:51PM</td>
                                                            <td>Mefenamic</td>
                                                            <td>500mg</td>
                                                            <td>TID</td>
                                                            <td>PO</td>
                                                            <td>01/25/2021 <br> 8:32AM</td>
                                                            <td>01/25/2021 <br> 1:00PM</td>
                                                            <td><strong>Active</strong></td>
                                                            <td>
                                                                <button type="button" class="btn btn-primary dropdown-toggle mb-3" data-toggle="dropdown" aria-expanded="false">
                                                                    Action
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-options" x-placement="bottom-start">
                                                                    <li class="dropdown-item"><a href="#">View Details</a></li>
                                                                    <div class="dropdown-divider"></div>
                                                                    <li class="dropdown-item"><a href="#">Carry Out</a></li>
                                                                    <li class="dropdown-item"><a href="#">Administer</a></li>
                                                                    <li class="dropdown-item"><a href="#">Hold</a></li>
                                                                    <li class="dropdown-item"><a href="#">Shifted</a></li>
                                                                    <li class="dropdown-item"><a href="#">Discontinued</a></li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th></th>
                                                            <th>Date/Time Ordered</th>
                                                            <th>Name of Medication</th>
                                                            <th>Dosage</th>
                                                            <th>Frequency</th>
                                                            <th>Route</th>
                                                            <th>Last Dose Given</th>
                                                            <th>Medication Due On</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div> <!-- /.row -->

                                        </div> <!-- /.tab-pane -->
                                    </div> <!-- /.tab-content -->
                                </div> <!-- /.card-body -->
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

        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.0.5
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
</body>

<script>
    $('[data-widget="pushmenu"]').PushMenu('collapse');


    $(function() {
        $("#example1").DataTable({
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