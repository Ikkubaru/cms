<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url('assets/backend/') ?>assets/images/anemo.png">
    <title><?= $judul_halaman ?></title>
    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url('assets/backend/') ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?=base_url('assets/backend/') ?>css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?=base_url('assets/backend/') ?>css/colors/purple-dark.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <a href="javascript:void(0)" class="nav-link nav-toggler hidden-md up text-muted waves-effect"><i class="ti-close ti-menu"></i></a>
                <div class="navbar-header">
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0 ">
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item dropdown">
                               <a href="<?= base_url('auth/logout') ?>"><button class="btn btn-danger dropdown-toggle">Log Out</button></a>
                        </li>
                    </ul>
                   
                </div>
            </nav>
            
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->

            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li>
                            <a href="<?= base_url('admin/home') ?>" class="waves-effect"><i class="fa fa-tag o m-r-10" aria-hidden="true"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="<?= base_url('admin/caraousel') ?>" class="waves-effect"><i class="fa fa-window-restore m-r-10" aria-hidden="true"></i>Carousel</a>
                        </li>
                        <li>
                            <a href="<?= base_url('admin/kategori') ?>" class="waves-effect"><i class="fa fa-filter m-r-10" aria-hidden="true"></i>Kategori Konten</a>
                        </li>
                        <li>
                            <a href="<?= base_url('admin/konten') ?>" class="waves-effect"><i class="fa fa-tv m-r-10" aria-hidden="true"></i>Konten</a>
                        </li>
                            <?php if($this->session->userdata('level') == 'Admin'){ ?>
                        <li>
                            <a href="<?= base_url('admin/user') ?>" class="waves-effect"><i class="fa fa-user m-r-10" aria-hidden="true"></i>User</a>
                        </li>
                        <li>
                            <a href="<?= base_url('admin/konfigurasi') ?>" class="waves-effect"><i class="fa fa-wrench m-r-10" aria-hidden="true"></i>Konfigurasi</a>
                        </li>
                        <?php }?>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-10 col-8 align-self-center">
                        <h3><?= $judul_halaman ?></h3>
                    </div>
                    <div class="col-md-2 col-8 align-self-right">
                        <h3><?= $this->session->userdata('username') ?> | <?= $this->session->userdata('level') ?></h3>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
              
                <div class="card">
                            <div class="card-block">
                                <div class="text-right">
                                    <h2 class="font-light m-b-0"></h2>
                                    <center>
                                    <?= $contents ?>
                                    </center>
                                </div>
                            </div>
                        </div>
                    
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                © 2023 Ikubaru
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?=base_url('assets/backend/') ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?=base_url('assets/backend/') ?>assets/plugins/bootstrap/js/tether.min.js"></script>
    <script src="<?=base_url('assets/backend/') ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?=base_url('assets/backend/') ?>js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?=base_url('assets/backend/') ?>js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?=base_url('assets/backend/') ?>js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="<?=base_url('assets/backend/') ?>assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="<?=base_url('assets/backend/') ?>js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- Flot Charts JavaScript -->
    <script src="<?=base_url('assets/backend/') ?>assets/plugins/flot/jquery.flot.js"></script>
    <script src="<?=base_url('assets/backend/') ?>assets/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="<?=base_url('assets/backend/') ?>js/flot-data.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="<?=base_url('assets/backend/') ?>assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
    <script>
    $('#hilang').delay('slow').slideDown('slow').delay('1000').slideUp('600');
  </script>
</body>

</html>
