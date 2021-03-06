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
                            <?php $this->load->view('doctor/doctors_notes/doctors_notes_sidebar'); ?>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-10">
                            <div class="card">
                                <div class="card-header p-2">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item"><a class="nav-link active" href="#" data-toggle="tab">Transfer In Notes</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('doctor/progress_notes'); ?>">Progress Notes</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('doctor/doctors_order'); ?>">Doctor's Order</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('doctor/trans_out'); ?>">Transfer Out Notes</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('doctor/trans_in_out'); ?>">Transfer In/Out Notes</a></li>
                                    </ul>
                                </div><!-- /.card-header -->
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="active tab-pane" id="activity">
                                            <!-- Table row -->
                                            <div class="dataTables_wrapper dt-bootstrap4">
                                                <table id="example1" class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Date/Time</th>
                                                            <th>Pavilion</th>
                                                            <th>General Data</th>
                                                            <th>History Notes</th>
                                                            <th>Others</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Jan 24, 2021 <br> 12:10PM <small><i class="small text-muted">Encoded by: <br> Dr. Cruzada </i></small></td>
                                                            <td>Pavilion 1 - Ward 1</td>
                                                            <td>Doctors notes about the general data of the patient will be reflected here.</td>
                                                            <td>History Notes of the patient will be reflected here.</td>

                                                            <td>
                                                                <ul>
                                                                    <li> <a href="#">View Subjective Notes</a></li>
                                                                    <li> <a href="#">View Objective Notes</a></li>
                                                                    <li><a href="#">View Assessment Notes</a></li>
                                                                    <li><a href="#">View Mental Status Exam</a></li>
                                                                    <li><a href="#">View Physical Exam</a></li>
                                                                    <li><a href="#">View Neurological Exam</a></li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jan 10, 2021 <br> 12:10PM <br> <small><i class="small text-muted">Encoded by: <br> Dr. Cruzada <br> Updated by: <br> Dr. Argamosa<br> Jan 24, 2021 (4:56pm) </i></small> </td>
                                                            <td>Pavilion 3 - Ward 2</td>
                                                            <td>Doctors notes about the general data of the patient will be reflected here.</td>
                                                            <td>History Notes of the patient will be reflected here.</td>

                                                            <td>
                                                                <ul>
                                                                    <li> <a href="#">View Subjective Notes</a></li>
                                                                    <li> <a href="#">View Objective Notes</a></li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Date/Time</th>
                                                            <th>Pavilion</th>
                                                            <th>General Data</th>
                                                            <th>History Notes</th>

                                                            <th>Others</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div> <!-- /.row -->
                                            <hr>
                                            <div class="d-flex justify-content-center">
                                                <button class="btn btn-lg btn-success" data-toggle="modal" data-target="#trans-in-add">Add Notes</button>
                                            </div>

                                        </div>
                                        <!-- /.tab-pane -->

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