<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <?php $this->load->view('nurse/navbar'); ?>
        <?php $this->load->view('nurse/sidebar'); ?>
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
                                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('nurse/doctors_orders'); ?>">Doctor's Orders</a></li>
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
                                                <li class="dropdown-item"><button class="btn btn-block btn-primary" data-modal_title="Carry Out" data-toggle="modal" data-target="#modal-mar-action" onclick="setMRAvalues('Carry Out')">Carry Out</button></li>
                                                <li class="dropdown-item"><button class="btn btn-block btn-success" data-modal_title="Administer" data-toggle="modal" data-target="#modal-mar-action" onclick="setMRAvalues('Administer')">Administer</button></li>
                                                <li class="dropdown-item"><button class="btn btn-block btn-warning" data-modal_title="Hold" data-toggle="modal" data-target="#modal-mar-action" onclick="setMRAvalues('Hold')">Hold</button></li>
                                                <li class="dropdown-item"><button class="btn btn-block btn-info" data-modal_title="Shifted" data-toggle="modal" data-target="#modal-mar-action" onclick="setMRAvalues('Shifted')">Shifted</button></li>
                                                <li class="dropdown-item"><button class="btn btn-block btn-danger" data-modal_title="Discontinued" data-toggle="modal" data-target="#modal-mar-action" onclick="setMRAvalues('Discontinued')">Discontinued</button></li>
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
                                                                    <li class="dropdown-item"><button class="btn btn-block btn-primary" data-modal_title="Carry Out" data-toggle="modal" data-target="#modal-mar-action" onclick="setMRAvalues('Carry Out')">Carry Out</button></li>
                                                                    <li class="dropdown-item"><button class="btn btn-block btn-success" data-modal_title="Administer" data-toggle="modal" data-target="#modal-mar-action" onclick="setMRAvalues('Administer')">Administer</button></li>
                                                                    <li class="dropdown-item"><button class="btn btn-block btn-warning" data-modal_title="Hold" data-toggle="modal" data-target="#modal-mar-action" onclick="setMRAvalues('Hold')">Hold</button></li>
                                                                    <li class="dropdown-item"><button class="btn btn-block btn-info" data-modal_title="Shifted" data-toggle="modal" data-target="#modal-mar-action" onclick="setMRAvalues('Shifted')">Shifted</button></li>
                                                                    <li class="dropdown-item"><button class="btn btn-block btn-danger" data-modal_title="Discontinued" data-toggle="modal" data-target="#modal-mar-action" onclick="setMRAvalues('Discontinued')">Discontinued</button></li>
                                                                    <div class="dropdown-divider"></div>
                                                                    <li class="dropdown-item"><button class="btn btn-block btn-default" data-toggle="modal" aria-haspopup="true" aria-expanded="false" data-target="#modal-lg">View Details</button></li>
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
                                                                    <li class="dropdown-item"><button class="btn btn-block btn-primary" data-modal_title="Carry Out" data-toggle="modal" data-target="#modal-mar-action" onclick="setMRAvalues('Carry Out')">Carry Out</button></li>
                                                                    <li class="dropdown-item"><button class="btn btn-block btn-success" data-modal_title="Administer" data-toggle="modal" data-target="#modal-mar-action" onclick="setMRAvalues('Administer')">Administer</button></li>
                                                                    <li class="dropdown-item"><button class="btn btn-block btn-warning" data-modal_title="Hold" data-toggle="modal" data-target="#modal-mar-action" onclick="setMRAvalues('Hold')">Hold</button></li>
                                                                    <li class="dropdown-item"><button class="btn btn-block btn-info" data-modal_title="Shifted" data-toggle="modal" data-target="#modal-mar-action" onclick="setMRAvalues('Shifted')">Shifted</button></li>
                                                                    <li class="dropdown-item"><button class="btn btn-block btn-danger" data-modal_title="Discontinued" data-toggle="modal" data-target="#modal-mar-action" onclick="setMRAvalues('Discontinued')">Discontinued</button></li>
                                                                    <div class="dropdown-divider"></div>
                                                                    <li class="dropdown-item"><button class="btn btn-block btn-default" data-toggle="modal" aria-haspopup="true" aria-expanded="false" data-target="#modal-lg">View Details</button></li>
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
                                                                    <li class="dropdown-item"><button class="btn btn-block btn-primary" data-modal_title="Carry Out" data-toggle="modal" data-target="#modal-mar-action" onclick="setMRAvalues('Carry Out')">Carry Out</button></li>
                                                                    <li class="dropdown-item"><button class="btn btn-block btn-success" data-modal_title="Administer" data-toggle="modal" data-target="#modal-mar-action" onclick="setMRAvalues('Administer')">Administer</button></li>
                                                                    <li class="dropdown-item"><button class="btn btn-block btn-warning" data-modal_title="Hold" data-toggle="modal" data-target="#modal-mar-action" onclick="setMRAvalues('Hold')">Hold</button></li>
                                                                    <li class="dropdown-item"><button class="btn btn-block btn-info" data-modal_title="Shifted" data-toggle="modal" data-target="#modal-mar-action" onclick="setMRAvalues('Shifted')">Shifted</button></li>
                                                                    <li class="dropdown-item"><button class="btn btn-block btn-danger" data-modal_title="Discontinued" data-toggle="modal" data-target="#modal-mar-action" onclick="setMRAvalues('Discontinued')">Discontinued</button></li>
                                                                    <div class="dropdown-divider"></div>
                                                                    <li class="dropdown-item"><button class="btn btn-block btn-default" data-toggle="modal" aria-haspopup="true" aria-expanded="false" data-target="#modal-lg">View Details</button></li>
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

    $("#mar_datetimepicker").attr("value", moment().format('L LT'));
    $("#mar_datetimepicker").click(function() {
        $("#mar_datetimepicker").removeAttr("value");
    });

    $("#mar_datetimepicker").focusout(function() {
        $('.bootstrap-datetimepicker-widget').hide();
    });

    $(function() {

        $('input').on('keypress', function(event) {
            var regex = new RegExp("^[ A-Za-z0-9_@.#&+-ñÑ]*$");
            var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
            if (!regex.test(key)) {
                event.preventDefault();
                return false;
            }
        });

        $('input').bind("cut copy paste", function(e) {
            e.preventDefault();
        });

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

    $("#mar_submit_button").click(function() {

        if ($('#username').val() == "nurse") {
            console.log($('#username').val());
            $("#mar_action_form").submit();
            return true;
        } else {
            if ($('#username').val() != "") {
                toastr.error('Incorrect username or password. Please try again.');
            } else {
                toastr.error('Invalid form details. Please check the form then try again.');
            }
            return false;
        }

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