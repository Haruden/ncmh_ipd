<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <?php $this->load->view('doctor/navbar'); ?>
        <?php $this->load->view('doctor/sidebar'); ?>
        <?php $this->load->view('doctor/doctors_notes/modals'); ?>

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

                            <?php $this->load->view('doctor/doctors_notes/doctors_notes_sidebar'); ?>
                        
                        </div>
                        <!-- /.col -->
                        <div class="col-md-10">
                            <div class="card">
                                <div class="card-header p-2">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('doctor/trans_in'); ?>">Transfer In Notes</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('doctor/progress_notes'); ?>">Progress Notes</a></li>
                                        <li class="nav-item"><a class="nav-link active" href="#">Doctor's Order</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('doctor/trans_out'); ?>">Transfer Out Notes</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('doctor/trans_in_out'); ?>">Transfer In/Out Notes</a></li>
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
                                                            <th>Update</th>
                                                            <th>Action</th>
                                                            <th>Remarks</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Jan 24, 2021 <br> 12:10PM <br><small><i class="small text-muted">Ordered by: Dr. Cruzada </i></small></td>
                                                            <td>Doctor's notes will be posted here</td>
                                                            <td><a href="">Update Order</a></td>
                                                            <td>
                                                                <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="modal" aria-haspopup="true" aria-expanded="false" data-target="#modal-do_status">
                                                                    Pending
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item">Carried</a>
                                                                    <a class=" dropdown-item">Administered</a>
                                                                    <a class="dropdown-item">Request Made</a>
                                                                    <a class="dropdown-item">Endorsed</a>
                                                                    <a class="dropdown-item">Discontinued</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item">Separated link</a>
                                                                </div>
                                                            </td>
                                                            <td>Data notes</td>
                                                        </tr>

                                                        <tr>

                                                            <td>Jan 24, 2021 <br> 12:10PM <br><small><i class="small text-muted">Ordered by: Dr. Cruzada </i></small></td>
                                                            <td>Requested for laboratory</td>
                                                            <td><a href="">Update Order</a></td>
                                                            <td>
                                                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    Requested
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item">Carried</a>
                                                                    <a class=" dropdown-item">Administered</a>
                                                                    <a class="dropdown-item">Request Made</a>
                                                                    <a class="dropdown-item">Endorsed</a>
                                                                    <a class="dropdown-item">Discontinued</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item">Separated link</a>
                                                                </div>
                                                                <br><small><i class="small text-muted">Jan 10, 2021 - 12:02PM <br>Burr Herber, RN</i></small>
                                                            </td>
                                                            <td>Data notes</td>
                                                        </tr>

                                                        <tr>

                                                            <td>Jan 24, 2021 <br> 12:10PM <br><small><i class="small text-muted">Ordered by: Dr. Cruzada </i></small></td>
                                                            <td>Medications</td>
                                                            <td><a href="">Update Order</a></td>
                                                            <td>
                                                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    Administered
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item">Carried</a>
                                                                    <a class="dropdown-item">Administered</a>
                                                                    <a class="dropdown-item">Request Made</a>
                                                                    <a class="dropdown-item">Endorsed</a>
                                                                    <a class="dropdown-item">Discontinued</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item">Separated link</a>
                                                                </div>

                                                                <br><small><i class="small text-muted">Jan 10, 2021 - 12:02PM <br>Burr Herber, RN</i></small>
                                                            </td>
                                                            <td>Data notes</td>

                                                        </tr>

                                                        <tr>

                                                            <td>Jan 24, 2021 <br> 12:10PM <br><small><i class="small text-muted">Ordered by: Dr. Cruzada </i></small></td>
                                                            <td>Doctor's notes will be posted here</td>
                                                            <td><a href="">Update Order</a></td>
                                                            <td>
                                                                <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="modal" aria-haspopup="true" aria-expanded="false" data-target="#modal-do_status">
                                                                    Pending
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item">Carried</a>
                                                                    <a class=" dropdown-item">Administered</a>
                                                                    <a class="dropdown-item">Request Made</a>
                                                                    <a class="dropdown-item">Endorsed</a>
                                                                    <a class="dropdown-item">Discontinued</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item">Separated link</a>
                                                                </div>
                                                            <td>Data notes</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div> <!-- End of Table -->

                                            <hr>
                                            <div class="mt-3 d-flex justify-content-center">
                                                <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#add-doctor-order">Add Order</button>
                                            </div>

                                        </div> <!-- End of tab pane -->
                                    </div> <!-- End of tab content -->
                                </div> <!-- End of card body -->
                            </div> <!-- /card -->
                        </div> <!-- /.col -->
                    </div> <!-- /.row -->
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