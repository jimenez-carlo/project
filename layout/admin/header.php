<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= SYSTEM_NAME; ?></title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Data table -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- End Data table -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <link rel="stylesheet" href="css/adminlte.min.css">
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">

  <link rel="stylesheet" href="css/custom.css">
</head>


<body class="hold-transition sidebar-mini layout-fixed text-sm">
  <script>
    var base_url = "<?= BASE_URL; ?>";
  </script>
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="assets/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark navbar-dark">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

      </ul>


    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="#" class="brand-link" style="font-size:14px;color:transparent">
        <center>
          <?= SYSTEM_NAME_SHORT; ?>
        </center>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="assets/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block"> <?= ucfirst($user->first_name) . ' - ' . ucfirst($user->last_name); ?></a>
          </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <li class="nav-item">
              <a href="index.php" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <?php if ($user->access_id == 1) { ?>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-columns"></i>
                  <p>
                    Maintenance
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">

                  <li class="nav-item">
                    <a href="#" class="nav-link btn-view" name="admin/maintenance/dropdown" value="<?= $user->id ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Dropdown</p>
                    </a>
                  </li>
                </ul>
              </li>
            <?php } ?>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-columns"></i>
                <p>
                  Projects
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">

                <li class="nav-item">
                  <a href="#" class="nav-link btn-view" name="admin/project/my_list" value="<?= $user->id ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>My Projects</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link btn-view" name="admin/report">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Reports
                </p>
              </a>
            </li>

            <?php if ($user->access_id == 1 || $user->access_id == 2) { ?>
              <li class="nav-item">
                <a href="#" class="nav-link btn-view" name="admin/user/list">
                  <i class="nav-icon fas fa-user-cog"></i>
                  <p>
                    User Setting
                  </p>
                </a>
              </li>

            <?php } ?>
            <li class="nav-item">
              <a href="#" class="nav-link btn-view" name="test">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  User Manual
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link" data-toggle="modal" data-target="#logout">
                <i class="nav-icon fas fa-power-off"></i>
                <p>
                  Log Out
                </p>
              </a>
            </li>

          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>