<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <?php $this->load->view('doctor/navbar'); ?>
        <?php $this->load->view('doctor/sidebar'); ?>
        <?php $this->load->view('doctor/discharge/modals'); ?>

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
                            <?php $this->load->view('doctor/discharge/sidemenu'); ?>
                        </div>
                        <!-- /.col -->

                        <div class="col-md-10">

                            <div class="card">
                                <div class="card-body">

                                    <h4>Discharge Notes</h4>
                                    <hr>

                                    <h5>General data</h5>
                                    <div class="form-group">
                                        <textarea id="summernote" name="editordata" class="form-control"></textarea>
                                    </div>

                                    <h5>History notes</h5>
                                    <div class="form-group">
                                        <textarea id="summernote1" name="editordata" class="form-control"></textarea>
                                    </div>

                                    <h5>Course in the ward</h5>
                                    <div class="form-group">
                                        <textarea id="summernote2" name="editordata" class="form-control"></textarea>
                                    </div>

                                    <div class="row d-flex justify-content-end">
                                        <div class="btn-group float-right">
                                            <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">Add Section &nbsp; <span class="sr-only">Toggle Dropdown</span></button>

                                            <div class="dropdown-menu" role="menu">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#mse-add">Mental Status Exam</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#pe-add">Physical Exam</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#neuro-add">Nuerological Exam</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-inline">
                                        <h5>Manner of Discharge: </h5>
                                        <select name="dropdown" id="mod_select" class=" ml-2 form-control">
                                            <option value="">Direct Discharge (To Self)</option>
                                            <option value="dd_toRelatives">Direct Discharge (To Relatives)</option>
                                            <option value="dd_others">Direct Discharge (Others) Specify</option>
                                            <option value="">Home Conduction (Within Metro Manila)</option>
                                            <option value="">Home Conduction (Provincial)</option>
                                            <option value="dd_countryOrigin">Home Conduction (To Country of Origin)</option>
                                            <option value="">Home Against Medical Advice (HAMA)</option>
                                            <option value="">Absconded</option>
                                        </select>

                                        <div id="mod_others_div" style="display:none;" class="ml-2 form-inline">
                                            <label for="">Others:</label>
                                            <input type="text" name="" id="" class="ml-2 form-control">
                                        </div>
                                        <div id="mod_toRelatives_div" style="display:none;" class="ml-2 form-inline">
                                            <label for="">Specify:</label>
                                            <input type="text" name="" id="" class="ml-2 form-control">
                                        </div>
                                        <div id="mod_countryOrigin_div" style="display:none;" class="ml-2 form-inline">
                                            <label for="">Specify:</label>
                                            <input type="text" name="" id="" class="ml-2 form-control">
                                        </div>
                                    </div>

                                    <div class="form-inline">
                                        <h5>Condition upon Discharge: </h5>
                                        <select name="" id="condition_upon_discharge" class=" ml-2 mt-2 form-control">
                                            <option value="">Improved</option>
                                            <option value="">Unimproved</option>
                                            <option value="died">Died</option>
                                        </select>
                                    </div>

                                    <div id="died_div" class="row" style="display:none;">
                                        <div class="col-md-2"></div>
                                        <div class="col-md-10">
                                            <div class="form-inline">
                                                <label for="">Time of Death: </label>
                                                <input type="text" name="" id="" class="ml-2 mt-1 form-control">
                                            </div>
                                            <div class="form-inline">
                                                <label for="">Autopsied: </label>
                                                <select name="" id="" class="ml-2 mt-1 form-control">
                                                    <option value="">Yes</option>
                                                    <option value="">No</option>
                                                </select>
                                            </div>
                                            <div class="form-inline">
                                                <label for="">Medico Legal: </label>
                                                <select name="" id="" class="ml-2 mt-1 form-control">
                                                    <option value="">Yes</option>
                                                    <option value="">No</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-end">
                                        <button class="btn btn-success">Discharge</button>
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

    $("#condition_upon_discharge").on("change", function() {
        if ($(this).val() == "died") {
            $("#died_div").slideDown();
        } else {
            $("#died_div").slideUp();
        }
    });

     $("#mod_select").on("change", function() {

        switch ($(this).val()){
            case "dd_toRelatives":
                $("#mod_toRelatives_div").show();
                $("#mod_others_div").hide();
                $('#mod_countryOrigin_div').hide();
                break;
            case "dd_others" :
                $("#mod_toRelatives_div").hide();
                $("#mod_others_div").show();
                $('#mod_countryOrigin_div').hide();
                break;
            case "dd_countryOrigin" :
                $("#mod_toRelatives_div").hide();
                $("#mod_others_div").hide();
                $('#mod_countryOrigin_div').show();
                break;
            default:
                $("#mod_toRelatives_div").hide();
                $("#mod_others_div").hide();
                $('#mod_countryOrigin_div').hide();
        }

     });    

     $(document).ready(function() {
        $('#summernote,#summernote1,#summernote2').summernote();
    });

</script>

</html>