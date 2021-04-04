<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <?php $this->load->view('doctor/navbar'); ?>
        <?php $this->load->view('doctor/sidebar'); ?>

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
                            <?php $this->load->view('doctor/discharge/discharge_sidebar'); ?>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-10">
                            <div class="card">
                                <div class="card-header p-2">
                                    <?php $this->load->view('doctor/discharge/tabs'); ?>
                                </div><!-- /.card-header -->
                                <div class="card-body">
                                    <div class="tab-content">

                                        <form action="" class="needs-validation" method="POST" novalidate>

                                            <div class="form-group">
                                                <h3>NEUROLOGICAL EXAMINATION</h3>
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