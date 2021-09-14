<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>Distribusi - Reset Password</title>

    <!-- manifest meta -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="manifest" href="<?=base_url()?>assets/mobile/manifest.json" />

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="<?=base_url()?>assets/mobile/img/favicon180.png" sizes="180x180">
    <link rel="icon" href="<?=base_url()?>assets/mobile/img/favicon32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="<?=base_url()?>assets/mobile/img/favicon16.png" sizes="16x16" type="image/png">

    <!-- Google fonts-->
    <link href="<?=base_url()?>assets/mobile/fonts.googleapis.com/css22261.css?family=Open+Sans:wght@300;400;600;700&amp;display=swap" rel="stylesheet">

    <!-- bootstrap icons -->
    <link rel="stylesheet" href="<?=base_url()?>assets/mobile/cdn.jsdelivr.net/npm/bootstrap-icons%401.5.0/font/bootstrap-icons.css">

    <!-- style css for this template -->
    <link href="<?=base_url()?>assets/mobile/css/style.css" rel="stylesheet" id="style">
</head>

<body class="body-scroll d-flex flex-column h-100 dark-bg" data-page="signin">

    <!-- loader section -->
    <div class="container-fluid loader-wrap">
        <div class="row h-100">
            <div class="col-10 col-md-6 col-lg-5 col-xl-3 mx-auto text-center align-self-center">
                <div class="loader-cube-wrap mx-auto">
                    <div class="loader-cube1 loader-cube"></div>
                    <div class="loader-cube2 loader-cube"></div>
                    <div class="loader-cube4 loader-cube"></div>
                    <div class="loader-cube3 loader-cube"></div>
                </div>
                <p>Great things ahead!<br><strong>Please wait...</strong></p>
            </div>
        </div>
    </div>
    <!-- loader section ends -->

    <!-- Begin page content -->
    <main class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-10 col-md-6 col-lg-5 col-xl-3 mx-auto mt-auto pt-4 text-center mb-100px d-grid gap-2">
                <h3 class="mb-1">Reset your password</h3>
                <p class="text-muted mb-4">Change your desired password<br>and confirm it.</p>

                <div class="form-group form-floating is-valid">
                    <input type="password" class="form-control" value="1546828" id="email" placeholder="New Password">
                    <label class="form-control-label" for="email">New Password</label>
                </div>

                <div class="form-group form-floating is-invalid">
                    <input type="password" class="form-control " id="password" placeholder="Confirm Password">
                    <label class="form-control-label" for="password">Confirm Password</label>
                    <button type="button" class="btn btn-link text-danger tooltip-btn" data-bs-toggle="tooltip"
                        data-bs-placement="left" title="Enter valid Password" id="passworderror">
                        <i class="bi bi-info-circle"></i>
                    </button>
                </div>
                <a href="<?=base_url()?>thankyou" target="_self" class="btn btn-lg btn-default btn-block mt-3">Change Password</a>
                <a href="<?=base_url()?>login" target="_self" class="text-white btn btn-lg btn-link">Already have password?</a>
            </div>
        </div>
    </main>


    <!-- Required jquery and libraries -->
    <script src="<?=base_url()?>assets/mobile/js/jquery-3.3.1.min.js"></script>
    <script src="<?=base_url()?>assets/mobile/js/popper.min.js"></script>
    <script src="<?=base_url()?>assets/mobile/vendor/bootstrap-5/js/bootstrap.bundle.min.js"></script>

    <!-- cookie js -->
    <script src="<?=base_url()?>assets/mobile/js/jquery.cookie.js"></script>

    <!-- Customized jquery file  -->
    <script src="<?=base_url()?>assets/mobile/js/main.js"></script>
    <script src="<?=base_url()?>assets/mobile/js/color-scheme.js"></script>

    <!-- PWA app service registration and works -->
    <script src="<?=base_url()?>assets/mobile/js/pwa-services.js"></script>

    <!-- page level custom script -->
    <script src="<?=base_url()?>assets/mobile/js/app.js"></script>

</body>

</html>