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
                            <?php $this->load->view('doctor/patient_info/sidemenu'); ?>
                        </div>
                        <!-- /.col -->

                        <div class="col-md-10">
                            <div class="card">
                                <div class="card-header p-2">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item"><a class="nav-link active" href="<?php echo base_url('doctor/primary_info'); ?>">Primary Information</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('doctor/patients_id'); ?>">Patient's Identification</a></li>
                                        <li class="nav-item"><a class="nav-link" href="">Watcher's Request</a></li>
                                        <li class="nav-item"><a class="nav-link" href="">Record of Visitors</a></li>
                                        <li class="nav-item"><a class="nav-link" href="">Informed Consent</a></li>
                                    </ul>
                                </div><!-- /.card-header -->
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="<?php echo base_url(); ?>assets/img/person_clipart.png" alt="" class="mb-2" style="width:100%;">
                                            <h4>28, Male</h4>

                                            <div class="form-group">
                                                <!-- <div class="col-md-7">
                                                        <label for="">Date of First Admission: </label>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <input type="text" class="form-control" value="2020/01/01" disabled>
                                                    </div> -->
                                                <label for="">Date of First Admission: </label>
                                                <input type="text" class="form-control" value="2020/01/01" disabled>
                                            </div>

                                            <div class="form-group">
                                                <label for="">Number of Admission: </label>
                                                <input type="text" class="form-control" value="2" disabled>
                                            </div>

                                            <div class="form-group">
                                                <label for="">Date of Last Admission: </label>
                                                <input type="text" class="form-control" value="2020/01/01" disabled>
                                            </div>

                                            <div class="form-group">
                                                <label for="">Active Court Case: </label>
                                                <input type="text" class="form-control mb-2" value="Yes/No" disabled>
                                                <a href=""><u>View Court Case</u></a>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-9">
                                    <div class="card">
                                        <div class="card-body" style="font-size:large;">
                                            
                                            <div class="form-inline mb-2">
                                                <label for="" class="mr-2">Name: </label>
                                                <span> ROY O. DAHILDAHIL </span>
                                            </div>

                                            <div class="form-inline mb-2">
                                                <label for="" class="mr-2">Alias: </label>
                                                <span> N/A </span>
                                            </div>

                                            <div class="form-inline mb-2">
                                                <label for="" class="mr-2">Contact Number: </label>
                                                <span> 09123456789 </span>
                                            </div>

                                            <div class="form-inline mb-2">
                                                <label for="" class="mr-2">Mother's Maiden Name: </label>
                                                <span> Stephanie Makabayan Onin </span>
                                            </div>

                                            <div class="form-inline mb-2">
                                                <label for="" class="mr-2">Current Address: </label>
                                                <span> Pedro Gil, Manila </span>
                                            </div>

                                            <div class="form-inline mb-2">
                                                <label for="" class="mr-2">Permanent Address: </label>
                                                <span> Pavia, Iloilo </span>
                                            </div>

                                            <div class="d-flex">
                                                <a href=""><u>View More</u></a>
                                            </div>

                                            <hr>

                                            <div class="d-flex justify-content-end">
                                                <small><i>Information as of: January 21 2021; 3:06 PM</i></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
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