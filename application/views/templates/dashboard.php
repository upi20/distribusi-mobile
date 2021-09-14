<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title><?= $title ?> | <?= $app_name ?></title>

    <!-- manifest meta -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="manifest" href="<?= base_url() ?>assets/mobile/manifest.json" />

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="<?= base_url() ?>assets/mobile/img/favicon180.png" sizes="180x180">
    <link rel="icon" href="<?= base_url() ?>assets/mobile/img/favicon32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="<?= base_url() ?>assets/mobile/img/favicon16.png" sizes="16x16" type="image/png">

    <!-- Google fonts-->
    <link href="<?= base_url() ?>assets/mobile/fonts.googleapis.com/css22261.css?family=Open+Sans:wght@300;400;600;700&amp;display=swap" rel="stylesheet">

    <!-- bootstrap icons -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/mobile/cdn.jsdelivr.net/npm/bootstrap-icons%401.5.0/font/bootstrap-icons.css">

    <!-- swiper carousel css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/mobile/vendor/swiperjs-6.6.2/swiper-bundle.min.css">

    <!-- style css for this template -->
    <link href="<?= base_url() ?>assets/mobile/css/style.css" rel="stylesheet" id="style">

    <!-- dynamic css -->
    <?php if (!empty($plugin_styles)) : ?>
		<!-- BEGIN PAGE LEVEL PLUGINS -->
		<?php foreach ($plugin_styles as $style) : ?>
			<link href="<?= $style ?>" rel="stylesheet" type="text/css" />
		<?php endforeach; ?>
		<!-- END PAGE LEVEL PLUGINS -->
	<?php endif; ?>
	<style type="text/css">
		.footer .nav .nav-item .nav-link span .nav-text{
			display: block!important;
		}
	</style>

</head>

<body class="body-scroll" data-page="index">

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


    <!-- Begin page -->
    <main class="h-100 has-header has-footer">

        <!-- Header -->
        <header class="container-fluid header" style="background: rgb(37 75 239 / 95%);">
            <div class="row">
                <div class="col-auto">
                    <a href="<?=base_url()?>home" class="position-relative d-block mr-3">
                        <figure class="avatar avatar-36 rounded-circle">
                            <img src="<?=base_url()?>assets/mobile/img/logo.svg" alt="">
                        </figure>
                    </a>
                </div>
                <div class="col pl-0">
                    <h6 style="color: white; padding-top: 10px; text-align: left; margin-left: -10px;">DISTRIBUTOR KOPIGADJAH</h6>
                </div>
                <div class="col-auto align-self-center">
                    <a href="<?=base_url()?>profil" class="position-relative d-block mr-3">
                        <span class="position-absolute top-0 start-100 translate-middle badge border border-light rounded-circle bg-danger p-1 mt-2 mr-2"><span
                                class="visually-hidden">unread messages</span></span>
                        <figure class="avatar avatar-36 rounded-circle">
                            <img src="<?=base_url()?>assets/mobile/img/soni.png" alt="">
                        </figure>
                    </a>
                </div>
            </div>
        </header>
        <!-- Header ends -->

        <!-- main page content -->
        <?php if (file_exists(VIEWPATH . "templates/contents/{$content}.php")) : ?>
			<?php $this->load->view("templates/contents/{$content}.php"); ?>
		<?php endif; ?>
        <!-- main page content ends -->


    </main>
    <!-- Page ends-->

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <ul class="nav nav-pills nav-justified">
                <li class="nav-item" style="margin-bottom: 5px;">
                    <a class="nav-link <?php if($menu == 'home') echo 'active';?>" href="<?=base_url('home')?>">
                        <span>
                            <i class="nav-icon bi bi-bookmarks"></i>
                            <span class="nav-text">Home</span>
                        </span>
                    </a>
                </li>

                <li class="nav-item" style="margin-bottom: 5px;">
                    <a class="nav-link <?php if($menu == 'kredit') echo 'active';?>" href="<?=base_url('kredit')?>">
                        <span>
                            <i class="nav-icon bi bi-laptop"></i>
                            <span class="nav-text">Kredit</span>
                        </span>
                    </a>
                </li>
                <li class="nav-item" style="margin-bottom: 5px;">
                    <a class="nav-link <?php if($menu == 'home') echo 'chat';?>" href="<?=base_url('chat')?>">
                        <span>
                            <i class="nav-icon bi bi-palette"></i>
                            <span class="nav-text">Chat</span>
                        </span>
                    </a>
                </li>
                <li class="nav-item" style="margin-bottom: 5px;">
                    <a class="nav-link <?php if($menu == 'profil') echo 'active';?>" href="<?=base_url('profil')?>">
                        <span>
                            <i class="nav-icon bi bi-person"></i>
                            <span class="nav-text">Profil</span>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </footer>
    <!-- Footer ends-->

    <!-- Required jquery and libraries -->
    <script src="<?= base_url() ?>assets/mobile/js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url() ?>assets/mobile/js/popper.min.js"></script>
    <script src="<?= base_url() ?>assets/mobile/vendor/bootstrap-5/js/bootstrap.bundle.min.js"></script>

    <!-- cookie js -->
    <script src="<?= base_url() ?>assets/mobile/js/jquery.cookie.js"></script>

    <!-- Customized jquery file  -->
    <script src="<?= base_url() ?>assets/mobile/js/main.js"></script>
    <script src="<?= base_url() ?>assets/mobile/js/color-scheme.js"></script>

    <!-- PWA app service registration and works -->
    <script src="<?= base_url() ?>assets/mobile/js/pwa-services.js"></script>

    <!-- Chart js script -->
    <script src="<?= base_url() ?>assets/mobile/vendor/chart-js-3.3.1/chart.min.js"></script>

    <!-- swiper js script -->
    <script src="<?= base_url() ?>assets/mobile/vendor/swiperjs-6.6.2/swiper-bundle.min.js"></script>

    <!-- page level custom script -->
    <script src="<?= base_url() ?>assets/mobile/js/app3.js"></script>

	<!-- <script src="<?= $this->plugin->build_url('javascripts/api-client.js', FALSE, 'site') ?>" type="text/javascript"></script> -->
	<!-- <script src="<?= $this->plugin->build_url('javascripts/application.js', FALSE, 'site') ?>" type="text/javascript"></script> -->
	<!-- <script src="<?= $this->plugin->build_url('javascripts/dt.helper.js', FALSE, 'site') ?>" type="text/javascript"></script> -->

	<?php if (file_exists(VIEWPATH . "javascripts/contents/{$content}.js")) : ?>
		<script src="<?= $this->plugin->build_url("javascripts/contents/{$content}.js") ?>" type="text/javascript"></script>
	<?php endif; ?>
    <script type="text/javascript">
        let value_key = localStorage.getItem('key')
        // let url = 'https://distribusi.komunitashalal.com/api/';
        let url = '<?php echo base_url();?>api/';

        function cekAuth(){
            if(value_key == null){
                window.location = '<?=base_url()?>login';
            }
        }

        function logout(){
            localStorage.removeItem('key');   
            localStorage.removeItem('id');   
            localStorage.removeItem('email');   
            localStorage.removeItem('level');   
            localStorage.removeItem('nama');
            window.location = "<?=base_url()?>login"  
        }

        $(function () {
            cekAuth()
        })
    </script>
</body>

</html>