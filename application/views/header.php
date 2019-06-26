<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Dibin Xavier</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700,900" rel="stylesheet">
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/linearicons.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/magnific-popup.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/nice-select.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.css">
	<!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css"> -->
	<?php 
	$this->load->database();
	$this->db->where('content_key','theme');
	$q = $this->db->get('website_contents');
	$data = $q->result_array(); ?>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/theme_<?php echo $data[0]['content_value'];?>.css">
</head>

<body>

	<!-- Start Preloader Area -->
	<div class="preloader-area">
		<div class="loader-box">
			<div class="loader"></div>
		</div>
	</div>
	<!-- End Preloader Area -->


	<!-- Start Header Area -->
	<header id="header">
		<div class="container main-menu">
			<div class="row align-items-center d-flex">
				<div id="log" class="logo_div">
					<a href="index.html"><img src="<?php echo base_url(); ?>assets/img/logo.png" alt="" title="" /></a>
				</div>
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						<li class=""><a id="home" class="active">Home</a></li>
						<li><a id="about">About</a></li>
						<li><a id="portfolio" >Portfolio</a></li>
						<li><a id="contact" >Contact</a></li>
						<!-- <li class="menu-has-children"><a href="#">Pages</a>
							<ul>
								<li><a href="elements.html">Elements</a></li>
								<li><a href="contact.html">Contact</a></li>
								<li><a href="services.html">Service</a></li>
								<li><a href="portfolio-details.html">Portfolio Details</a></li>
							</ul>
						</li>
						<li class="menu-has-children"><a href="#">Blog</a>
							<ul>
								<li><a href="blog-home.html">Blog Home</a></li>
								<li><a href="blog-single.html">Blog Single</a></li>
							</ul>
						</li> -->
						<?php 
						if(!empty($this->session->userdata('userdata')))
						{?>
						<li class="menu-has-children"><a href="#">Settings</a>
							<ul>
								<li><a href="<?php echo base_url(); ?>login/logout">Logout</a></li>
							</ul>
						</li>
						<li class="menu-has-children"><a href="#">Themes</a>
							<ul>
								<li><a href="<?php echo base_url(); ?>content/theme/1">Theme 1</a></li>
								<li><a href="<?php echo base_url(); ?>content/theme/2">Theme 2</a></li>
								<li><a href="<?php echo base_url(); ?>content/theme/3">Theme 3</a></li>
								<li><a href="<?php echo base_url(); ?>content/theme/4">Theme 4</a></li>
							</ul>
						</li>
						<?php  } ?>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<!-- End Header Area -->

