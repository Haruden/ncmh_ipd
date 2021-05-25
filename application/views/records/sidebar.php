<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?php echo base_url(); ?>assets/img/ncmh_logo.png" alt="NCMH Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Records</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Sam Paul</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?php echo base_url('records/admission'); ?>" class="nav-link d-inline-flex p-2 <?php if($title  == "Admission") echo 'active';?>">
                    <div class="row ">
                        <div class="col-sm-2">
                            <i class="nav-icon fas fa-list-ol"></i>
                        </div>
                        <div class="col-sm-10" style="margin-left: -3%;">
                            <ul class="list-unstyled">
                                <li style="margin-bottom: -5%; margin-top:-2px;">For Admission Patient Queue</li>
                                <!-- <li style="margin-bottom: -5%; margin-top:-2px;">Admission Patient Queue</li> -->
                                <li><small>Patient Queue</small></li>
                            </ul>
                        </div>
                    </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('records/patient_list'); ?>" class="nav-link <?php if($title=="inPatient List") echo 'active';?>">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            InPatient List
                        </p>
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-calendar-alt"></i>
                        <p>
                            My Schedule
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-bar"></i>
                        <p>
                            Reports
                        </p>
                    </a>
                </li> -->
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>