<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap core CSS-->
    <link
        href="<?= base_url('assets/backend/') ?>assetsL/css/bootstrap.min.css"
        rel="stylesheet">
    <!-- animate CSS-->
    <link
        href="<?= base_url('assets/backend/') ?>assetsL/css/animate.css"
        rel="stylesheet"
        type="text/css">
    <!-- Icons CSS-->
    <link
        href="<?= base_url('assets/backend/') ?>assetsL/css/icons.css"
        rel="stylesheet"
        type="text/css">
    <!-- Custom Style-->
    <link
        href="<?= base_url('assets/backend/') ?>assetsL/css/app-style.css"
        rel="stylesheet">
    <!--favicon-->
    <link rel="icon" type="image/x-icon">
    <style type="text/css">
        /* Chart.js */
        @-webkit-keyframes chartjs-render-animation {
            from {
                opacity: 0.99;
            }
            to {
                opacity: 1;
            }
        }
        @keyframes chartjs-render-animation {
            from {
                opacity: 0.99;
            }
            to {
                opacity: 1;
            }
        }
        .chartjs-render-monitor {
            -webkit-animation: chartjs-render-animation 0.001s;
            animation: chartjs-render-animation 0.001s;
        }
    </style>
</head>
<body class="bg-theme bg-theme5">
    <!-- Start wrapper-->
    <div id="wrapper">
        <div class="card card-authentication1 mx-auto my-5">
            <div class="card-body">
                <div class="card-content p-2">
                    <div class="card-title text-uppercase text-center py-3">Login</div>
                    <form method="post" action="<?= base_url('auth/login') ?>">
                        <div class="form-group">
                            <label for="exampleInputUsername" class="sr-only">Username</label>
                            <div class="position-relative has-icon-right">
                                <input
                                    type="text"
                                    name="username"
                                    class="form-control input-shadow"
                                    placeholder="Enter Username"
                                    required="required">
                                <div class="form-control-position"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword" class="sr-only">Password</label>
                            <div class="position-relative has-icon-right">
                                <input
                                    type="password"
                                    name="password"
                                    class="form-control input-shadow"
                                    placeholder="Enter Password"
                                    required="required">
                                <div class="form-control-position"></div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-light btn-block">Login</button>
                    </form>
                    <div id="hilang">
                        <?= $this->session->flashdata('alert',TRUE);?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JavaScript-->
        <script src="<?= base_url('assets/backend/') ?>assetsL/js/jquery.min.js"></script>
        <script src="<?= base_url('assets/backend/') ?>assetsL/js/popper.min.js"></script>
        <script src="<?= base_url('assets/backend/') ?>assetsL/js/bootstrap.min.js"></script>

        <!-- simplebar js -->
        <script
            src="<?= base_url('assets/backend/') ?>assetsL/plugins/simplebar/js/simplebar.js"></script>
        <!-- sidebar-menu js -->
        <script src="<?= base_url('assets/backend/') ?>assetsL/js/sidebar-menu.js"></script>
        <!-- Custom scripts -->
        <script src="<?= base_url('assets/backend/') ?>assetsL/js/app-script.js"></script>
        <!-- Chart js -->
        <script
            src="<?= base_url('assets/backend/') ?>assetsL/plugins/Chart.js/Chart.min.js"></script>
        <!-- Index js -->
        <script src="<?= base_url('assets/backend/') ?>assetsL/js/index.js"></script>
        <script>
            $('#hilang')
                .delay('slow')
                .slideDown('slow')
                .delay('1000')
                .slideUp('600');
        </script>
    </body>