<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | User Profile</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
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
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="<?php echo base_url(); ?>assets/img/cruzada.png"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">Joeffrey Cruzada</h3>

                <p class="text-muted text-center">Doctor</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Patients</b> <a class="float-right">1,322</a>
                  </li>
                  </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Education</strong>

                <p class="text-muted">
                  B.S. in Computer Science from the University of Tennessee at Knoxville
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                <p class="text-muted">Malibu, California</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                <p class="text-muted">
                  <span class="tag tag-danger">UI Design</span>
                  <span class="tag tag-success">Coding</span>
                  <span class="tag tag-info">Javascript</span>
                  <span class="tag tag-warning">PHP</span>
                  <span class="tag tag-primary">Node.js</span>
                </p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
            
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">My Menu</a></li>
                  <li class="nav-item"><a class="nav-link" href="#patient" data-toggle="tab">My Patients</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    
                      <!-- content of Dashboard -->
                      <div class="card">
              <div class="card-header">
                <h3 class="card-title">Navigation</h3>
              </div>
              <div class="card-body">
                <a class="btn btn-app">
                  <i class="fas fa-edit"></i> OPD Queue
                </a>
                <a class="btn btn-app">
                  <i class="fas fa-play"></i> IPD Queue
                </a>
                <a class="btn btn-app">
                  <i class="fas fa-pause"></i> Pause
                </a>
                <a class="btn btn-app">
                  <i class="fas fa-save"></i> Save
                </a>
                <a class="btn btn-app">
                  <span class="badge bg-warning">3</span>
                  <i class="fas fa-bullhorn"></i> Notifications
                </a>
                <a class="btn btn-app">
                  <span class="badge bg-success">300</span>
                  <i class="fas fa-barcode"></i> Products
                </a>
                <a class="btn btn-app">
                  <span class="badge bg-purple">891</span>
                  <i class="fas fa-users"></i> Users
                </a>
                <a class="btn btn-app">
                  <span class="badge bg-teal">67</span>
                  <i class="fas fa-inbox"></i> Orders
                </a>
                <a class="btn btn-app">
                  <span class="badge bg-info">12</span>
                  <i class="fas fa-envelope"></i> Inbox
                </a>
                <a class="btn btn-app">
                  <span class="badge bg-danger">531</span>
                  <i class="fas fa-heart"></i> Likes
                </a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
                      
                      
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="patient">
                      
                                                <!-- TABLE: My Patients -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">My Patients</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>Patient ID</th>
                      <th>Name</th>
                      <th>Status</th>
                      <th>Birthdate</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td><a href="pages/examples/invoice.html">ID9842</a></td>
                      <td>Dahildahil, Roy</td>
                      <td><span class="badge badge-success">-</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">Dec 19, 1994</div>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="pages/examples/invoice.html">ID1848</a></td>
                      <td>Dang-Awan, Ruahden</td>
                      <td><span class="badge badge-warning">-</span></td>
                      <td>
                        <div class="sparkbar" data-color="#f39c12" data-height="20">Dec 23, 1996</div>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="pages/examples/invoice.html">ID7429</a></td>
                      <td>Herber, Burr</td>
                      <td><span class="badge badge-danger">-</span></td>
                      <td>
                        <div class="sparkbar" data-color="#f56954" data-height="20">Nov 10, 1993</div>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="pages/examples/invoice.html">ID7429</a></td>
                      <td>Calendaria, Mico</td>
                      <td><span class="badge badge-info">-</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00c0ef" data-height="20">Nov 1, 1993</div>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="pages/examples/invoice.html">ID1848</a></td>
                      <td>Soriano, Brent</td>
                      <td><span class="badge badge-warning">-</span></td>
                      <td>
                        <div class="sparkbar" data-color="#f39c12" data-height="20">Dec 19, 1996</div>
                      </td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Patients</a>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
                </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputName" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName2" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
              

            
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0-rc
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
