<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <?php $this->load->view('nurse/navbar'); ?>
        <?php $this->load->view('nurse/sidebar'); ?>
        <?php $this->load->view('nurse/nurses_notes/do_status_validation'); ?>
        <?php $this->load->view('nurse/nurses_notes/modals'); ?>
        <?php $this->load->view('nurse/nurses_notes/medication_sheet_modals'); ?>

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
                            <?php $this->load->view('nurse/nurses_notes/sidemenu'); ?>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-10">
                            <div class="card">
                                <div class="card-header p-2">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('nurse/nurses_notes'); ?>">Nurse's Notes</a></li>
                                        <li class="nav-item"><a class="nav-link active" href="#doctors_orders" data-toggle="tab">Doctor's Orders</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('nurse/medication_sheet'); ?>">Medication Sheet</a></li>
                                        <li class="nav-item"><a class="nav-link" href="diet_instructions">Diet Instructions</a></li>
                                    </ul>
                                </div><!-- /.card-header -->
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="active tab-pane" id="doctors_orders">
                                            <div>
                                                <h4>SPECIAL INSTRUCTION</h4>
                                                <textarea class="form-control" rows="2" placeholder="Special Instructions Here" disabled></textarea>
                                            </div>
                                            <br>
                                            <!-- Table row -->
                                            <div class="dataTables_wrapper dt-bootstrap4">
                                                <table id="example1" class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Date/Time</th>
                                                            <th>Order</th>
                                                            <th>Action</th>
                                                            <th>Remarks</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Jan 24, 2021 <br> 12:10PM <br><small><i class="small text-muted">Ordered by: Dr. Cruzada </i></small></td>
                                                            <td>Doctor's notes will be posted here</td>
                                                            <td>
                                                                <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="modal" aria-haspopup="true" aria-expanded="false" data-target="#modal-do_status">
                                                                    Pending
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item">Carried</a>
                                                                    <a class=" dropdown-item">Administered</a>
                                                                    <a class="dropdown-item">Request Made</a>
                                                                    <a class="dropdown-item" data-toggle="modal" data-target="#endorsed-modal">Endorsed</a>
                                                                    <!-- <button class="dropdown-item" data-toggle="modal" data-target="#endorsed-modal">Endorsed</button> -->
                                                                    <a class="dropdown-item">Discontinued</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item">Separated link</a>
                                                                </div>
                                            </div>
                                            </td>
                                            <td>Data notes</td>
                                            </tr>

                                            <tr>

                                                <td>Jan 24, 2021 <br> 12:10PM <br><small><i class="small text-muted">Ordered by: Dr. Cruzada </i></small></td>
                                                <td>Requested for laboratory</td>
                                                <td>
                                                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Requested
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item">Carried</a>
                                                        <a class=" dropdown-item">Administered</a>
                                                        <a class="dropdown-item">Request Made</a>
                                                        <a class="dropdown-item" data-toggle="modal" data-target="#endorsed-modal">Endorsed</a>
                                                        <a class="dropdown-item">Discontinued</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item">Separated link</a>
                                                    </div>
                                        </div>
                                        <br><small><i class="small text-muted">Jan 10, 2021 - 12:02PM <br>Burr Herber, RN</i></small>
                                        </td>
                                        <td>Data notes</td>


                                        </tr>

                                        <tr>

                                            <td>Jan 24, 2021 <br> 12:10PM <br><small><i class="small text-muted">Ordered by: Dr. Cruzada </i></small></td>
                                            <td>Medications</td>
                                            <td>
                                                <button type="button" class="btn btn-success dropdown-toggle mb-3" data-toggle="dropdown" aria-expanded="false">
                                                    Action
                                                </button>
                                                <ul class="dropdown-menu dropdown-options" x-placement="bottom-start">
                                                    <li class="dropdown-item"><button class="btn btn-block btn-primary" data-modal_title="Carry Out" data-toggle="modal" data-target="#modal-mar-action" onclick="setMRAvalues('Carry Out')">Carry Out</button></li>
                                                    <li class="dropdown-item"><button class="btn btn-block btn-success" data-modal_title="Administer" data-toggle="modal" data-target="#modal-mar-action" onclick="setMRAvalues('Administer')">Administer</button></li>
                                                    <li class="dropdown-item"><button class="btn btn-block btn-warning" data-modal_title="Hold" data-toggle="modal" data-target="#modal-mar-action" onclick="setMRAvalues('Hold')">Hold</button></li>
                                                    <li class="dropdown-item"><button class="btn btn-block btn-info" data-modal_title="Shifted" data-toggle="modal" data-target="#modal-mar-action" onclick="setMRAvalues('Shifted')">Shifted</button></li>
                                                    <li class="dropdown-item"><button class="btn btn-block btn-danger" data-modal_title="Discontinued" data-toggle="modal" data-target="#modal-mar-action" onclick="setMRAvalues('Discontinued')">Discontinued</button></li>
                                                    <div class="dropdown-divider"></div>
                                                    <li class="dropdown-item"><button class="btn btn-block btn-default" data-toggle="modal" aria-haspopup="true" aria-expanded="false" data-target="#modal-lg">View Details</button></li>
                                                </ul>
                                    </div>
                                    <br><small><i class="small text-muted">Jan 10, 2021 - 12:02PM <br>Burr Herber, RN</i></small>
                                    </td>
                                    <td>Data notes</td>

                                    </tr>

                                    <tr>

                                        <td>Jan 24, 2021 <br> 12:10PM <br><small><i class="small text-muted">Ordered by: Dr. Cruzada </i></small></td>
                                        <td>Doctor's notes will be posted here</td>
                                        <td>
                                            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="modal" aria-haspopup="true" aria-expanded="false" data-target="#modal-do_status">
                                                Pending
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" ">Carried</a>
                                                                <a class=" dropdown-item">Administered</a>
                                                <a class="dropdown-item">Request Made</a>
                                                <a class="dropdown-item" data-toggle="modal" data-target="#endorsed-modal">Endorsed</a>
                                                <a class="dropdown-item">Discontinued</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item">Separated link</a>
                                            </div>
                                </div>
                                </td>
                                <td>Data notes</td>
                                </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Date/Time</th>
                                        <th>Order</th>
                                        <th>Action</th>
                                        <th>Remarks</th>
                                    </tr>
                                </tfoot>
                                </table>
                            </div> <!-- /.row -->
                            <hr>
                        </div>
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

<script>
    $('[data-widget="pushmenu"]').PushMenu('collapse');


    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
    });

    function setMRAvalues(value) {
        document.getElementById("mar_modal_title").innerHTML = value;

        if (value == "Shifted") {
            value = "Shift";
        } else if (value == "Discontinued") {
            value = "Discontinue";
        }
        document.getElementById("mar_warning_title").innerHTML = value;
    }
</script>

</html>