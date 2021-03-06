<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <?php $this->load->view('nurse/navbar'); ?>
        <?php $this->load->view('nurse/sidebar'); ?>
        <?php $this->load->view('nurse/vital_signs/modals'); ?>

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
                            <?php $this->load->view('nurse/vital_signs/sidemenu'); ?>
                        </div>
                        <!-- /.col -->

                        <div class="col-md-10">

                        <h4>Vitals</h4>
                            <div class="card">
                                <!-- <div class="col-sm-12 p-3 text-center" style="margin-bottom:-15px !important;">
                                    <button data-toggle="modal" data-target="#addVitalsModal" class="btn btn-success addVitalsModal mr-2">Add Vitals <i class="ml-1 fas fa-plus"></i></button>
                                    <button data-toggle="modal" data-target="#add-other-vitals-modal" class="btn btn-success open-other-vitals-modal">Add Other Vitals <i class="ml-1 fas fa-plus"></i></button>
                                </div> -->
                                
                                <div class="card-body">
                                    
                                    <div class="dataTables_wrapper dt-bootstrap4">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Date/Time Ordered</th>
                                                    <th>Blood Pressure</th>
                                                    <th>Respiratory Rate</th>
                                                    <th>Pulse Rate</th>
                                                    <th>Temperature</th>
                                                    <th>O2 Sat</th>
                                                    <th>Others</th>
                                                    <th>Taken By</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Jan-13-2021 | 11:12 AM</td>
                                                    <td>140/80</td>
                                                    <td>15</td>
                                                    <td>98</td>
                                                    <td>37.7</td>
                                                    <td>98%</td>
                                                    <td></td>
                                                    <td>B. Herber, RN</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <hr>
                                </div>
                            </div>

                            <h4>Other Vitals</h4>

                            <div class="card">
                                <div class="card-body">
                                    <div class="dataTables_wrapper dt-bootstrap4">
                                        <table id="example2" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Vital Signs</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Jan-13-2021 | 11:12 AM</td>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="">INPUT</label> <br>
                                                                <span>Oral: 20 ml</span> <br>
                                                                <span>N/G: 20 ml</span> <br>
                                                                <span>IV: -</span> <br>
                                                                <span>Blood: -</span> <br>
                                                                <span>Misc: -</span>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <label for="">OUTPUT</label> <br>
                                                                <span>Oral:</span> <br>
                                                                <span>Urine:</span> <br>
                                                                <span>N/G:</span> <br>
                                                                <span>Stool:</span> <br>
                                                                <span>Misc:</span>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <span>Specific Gravity:___</span> <br>
                                                                <span>CVP: ___</span> <br>
                                                                <span>Others: ___</span> <br>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <hr>

                                    <div class="d-flex justify-content-center">
                                        <!-- <button data-toggle="modal" data-target="#add-other-vitals-modal" class="btn btn-success open-other-vitals-modal">Add Vitals <i class="ml-1 fas fa-plus"></i></button> -->
                                    </div>
                                </div>
                            </div>

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

    $("#addOtherVitalsDatePicker, #addVitalsDatePicker").attr("value", moment().format('L LT'));
    $("#addOtherVitalsDatePicker, #addVitalsDatePicker").click(function() {
        $("#addOtherVitalsDatePicker, #addVitalsDatePicker").removeAttr("value");
    });

    $("#addVitalsDatePicker, #addVitalsDatePicker").focusout(function() {
        $('.bootstrap-datetimepicker-widget').hide();
    });

    $(function() {
        $("#example1").DataTable({
            language: {
                searchPlaceholder: "Search vitals"
            },
            "responsive": true,
            "autoWidth": false,
        });

        $("#example1_length").find('label').after(
            '<button data-toggle="modal" data-target="#addVitalsModal" class="btn btn-success ml-2 btn-sm open-other-vitals-modal"> Add Vitals <i class="ml-1 fas fa-plus"></i></button>'
        );

        $("#example2").DataTable({
            language: {
                searchPlaceholder: "Search vitals"
            },
            "responsive": true,
            "autoWidth": false,
        });

        $("#example2_length").find('label').after(
            '<button data-toggle="modal" data-target="#add-other-vitals-modal" class="btn btn-success ml-2 btn-sm open-other-vitals-modal">Add Other Vitals <i class="ml-1 fas fa-plus"></i></button>'
        );
    });
</script>

</html>