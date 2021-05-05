<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <?php $this->load->view('nurse/navbar'); ?>
        <?php $this->load->view('nurse/sidebar'); ?>
        <?php $this->load->view('nurse/nurses_notes/modals'); ?>

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
                                        <li class="nav-item"><a class="nav-link active" href="#nurses_notes" data-toggle="tab">Nurse's Notes</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('nurse/doctors_orders'); ?>">Doctor's Orders</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('nurse/medication_sheet'); ?>">Medication Sheet</a></li>
                                        <li class="nav-item"><a class="nav-link" href="diet_instructions">Diet Instructions</a></li>
                                    </ul>
                                </div><!-- /.card-header -->
                                <!-- <div class="col-sm-12 p-2 text-center" style="margin-bottom:-15px !important;">
                                    <button data-toggle="modal" id="add-nurse-notes" data-target="#nurse-add-notes-modal" class="btn btn-md btn-success">Add Notes <i class="ml-1 fas fa-plus"></i></button>
                                </div> -->
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="active tab-pane" id="nurses_notes">
                                            <!-- Table row -->
                                            <div class="dataTables_wrapper dt-bootstrap4">
                                                <table id="example1" class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Date/Time</th>
                                                            <th>Pavilion</th>
                                                            <th>Focus</th>
                                                            <th>Data</th>
                                                            <th>Action</th>
                                                            <th>Response</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Jan 24, 2021 <br> 12:10PM <br><small><i class="small text-muted">Encoded by: <br> Dr. Cruzada </i></small></td>
                                                            <td>Pavilion 1</td>
                                                            <td>Focus notes</td>
                                                            <td>Data notes</td>
                                                            <td>Action notes</td>
                                                            <td>Response notes</td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Date/Time</th>
                                                            <th>Pavilion</th>
                                                            <th>Focus</th>
                                                            <th>Data</th>
                                                            <th>Action</th>
                                                            <th>Response</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div> <!-- /.row -->
                                            <hr>
                                            <div class="d-flex justify-content-center">
                                                <!-- <button data-toggle="modal" id="add-nurse-notes" data-target="#nurse-add-notes-modal" class="btn btn-lg btn-success">Add Notes</button> -->
                                            </div>

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
            language: {
                searchPlaceholder: "Search notes"
            },
            "responsive": true,
            "autoWidth": false,
        });

        $("#example1_length").find('label').after('<button data-toggle="modal" id="add-nurse-notes" data-target="#nurse-add-notes-modal" class="btn btn-sm btn-success ml-3">Add Nurse Notes <i class="ml-1 fas fa-plus"></i></button>');

    });
</script>

</html>