<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Food App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>/assets/img/3d3.png">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/assets/css/metisMenu.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/assets/css/typography.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/assets/css/default-css.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/assets/css/styles.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/assets/css/responsive.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">
    <!-- modernizr css -->
    <script src="<?php echo base_url(); ?>assets/dashboard/assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- google captcha -->
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src='https://www.google.com/recaptcha/api.js?hl=es'></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <!-- <div id="preloader">
        <div class="loader"></div>
    </div> -->
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="<?php echo base_url();?>"><img src="<?php echo base_url(); ?>assets/img/3d3.png" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                        <li class="home-page"><a href="<?php echo base_url(); ?>"><i class="ti-dashboard"></i> <span>dashboard</span></a></li>
                        	<?php if($this->session->userdata('userdata')['id']==0) {?>
                            
                            <li>
                                <a href="<?php echo base_url(); ?>users/list" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>Users
                                    </span></a>
                                <!-- <ul class="collapse">
                                    <li class="list-user-page"><a  href="">Users</a></li>
                                </ul> -->
                            </li>
                            <?php } ?>

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
		<div class="main-content">
		    <!-- header area start -->
		    <div class="header-area">
		        <div class="row align-items-center">
		            <!-- nav and search button -->
		            <div class="col-md-6 col-sm-8 clearfix">
		                <div class="nav-btn pull-left">
		                    <span></span>
		                    <span></span>
		                    <span></span>
		                </div>
		            </div>
		            <!-- profile info & task notification -->
		            <div class="col-md-6 col-sm-4 clearfix">
		                <ul class="notification-area pull-right">
		                    <li id="full-view"><i class="ti-fullscreen"></i></li>
		                    <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
		                    
		                </ul>
		            </div>
		        </div>
		    </div>
		    <!-- header area end -->
		       