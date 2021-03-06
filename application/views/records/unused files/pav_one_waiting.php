<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <?php $this->load->view('records/navbar'); ?>
        <?php $this->load->view('records/sidebar'); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h2 class="m-0 text-dark">Pavillion 1</h2>
                            <h4 class="m-0 text-dark">Ward 1</h4>
                            <h4 class="m-0 text-dark">Patient Queue - Waiting Room</h4>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <div class="d-flex justify-content-end mb-2">
                                <h5 class="m-0 text-dark">March 1, 2020 | 11:08 AM&nbsp;&nbsp;</h5>
                            </div>
                            <div class="d-flex justify-content-end mb-2">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    Pavilion 1 - Waiting Room
                                </button>
                                <div class="dropdown-menu" style="">
                                    <a class="dropdown-item" href="<?php echo base_url('records/pav_one'); ?>">Pavilion 1 - Queue</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="<?php echo base_url('records/admission'); ?>">Admission</a>
                                    <a class="dropdown-item" href="#">Pavilion 2</a>
                                    <a class="dropdown-item" href="#">Pavilion 3</a>
                                    <a class="dropdown-item" href="#">Pavilion 4</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Others</a>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <span> Available Beds: <b>5</b> out of 54 </span>
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
                        <div class="col-12">

                            <!-- <div class="callout callout-info">
                                <h5><i class="fas fa-info"></i> Note:</h5>
                                This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
                            </div> -->

                            <!-- Main content -->
                            <div class="invoice p-3 mb-3">
                                <!-- title row -->
                                <div class="row mb-3">
                                    <div class="col-6">
                                        <span class="h4 mr-2"> Filter Queue: </span>
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                            <label class="btn btn-outline-info">
                                                <input type="radio" name="options" id="option1" autocomplete="off"> New
                                            </label>
                                            <label class="btn btn-outline-info">
                                                <input type="radio" name="options" id="option2" autocomplete="off"> Old
                                            </label>
                                        </div>
                                    </div>
                                    <!-- /.col -->

                                    <div class="col-6 d-flex justify-content-end">
                                        <span style="color:red;"> Average Queue Time: 4 Hours 10 mins </span>
                                    </div>
                                </div>

                                <!-- Table row -->
                                <div class="dataTables_wrapper dt-bootstrap4">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Queue #</th>
                                                <th>Last Name</th>
                                                <th>First Name</th>
                                                <th>Middle Name</th>
                                                <th>Age</th>
                                                <th>Birthdate</th>
                                                <th>Destination</th>
                                                <th>Duration</th>
                                                <th>Remarks</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Dahildahil</td>
                                                <td>Roy</td>
                                                <td>Onin</td>
                                                <td>27<br></td>
                                                <td>Dec 19, 1994</td>
                                                <td>Pavilion 1</td>
                                                <td>30 mins</td>
                                                <td>Vagrant</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Webster</td>
                                                <td>Juan</td>
                                                <td>Velaso</td>
                                                <td>24</td>
                                                <td>Jan 19, 1995</td>
                                                <td>Pavilion 4</td>
                                                <td>10 mins</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Mcauley</td>
                                                <td>Nash</td>
                                                <td>Davidson</td>
                                                <td>27</td>
                                                <td>Nov 10, 1993</td>
                                                <td>Pavilion 1</td>
                                                <td>30 mins</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Mitchell</td>
                                                <td>Arielle</td>
                                                <td>Acosta</td>
                                                <td>27</td>
                                                <td>Nov 1, 1993</td>
                                                <td>Pavilion 3</td>
                                                <td>40 mins</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Orr</td>
                                                <td>Chantelle</td>
                                                <td>Bryant</td>
                                                <td>22</td>
                                                <td>Dec 19, 1996</td>
                                                <td>Pavilion 5</td>
                                                <td>28 mins</td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Queue #</th>
                                                <th>Last Name</th>
                                                <th>First Name</th>
                                                <th>Middle Name</th>
                                                <th>Age</th>
                                                <th>Birthdate</th>
                                                <th>Destination</th>
                                                <th>Duration</th>
                                                <th>Remarks</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div> <!-- /.row -->

                            </div> <!-- /.invoice -->
                        </div> <!-- /.col -->
                    </div> <!-- /.row -->
                </div> <!-- /.container-fluid -->
            </section> <!-- /.content -->
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

    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
</body>

</html>