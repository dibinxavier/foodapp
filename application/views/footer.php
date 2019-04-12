	<!-- start footer Area -->
	<footer class="footer-area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12">
					<div class="footer-top flex-column">
						<div class="footer-logo">
							<a href="#">
								<img src="<?php echo base_url(); ?>assets/img/logo.png" alt="" style="max-width: 7%;">
							</a>
							<h4>Follow Me</h4>
						</div>
						<div class="footer-social">
							<a href="https://www.facebook.com/dibinxavier"><i class="fa fa-facebook"></i></a>
							<a href="https://www.instagram.com/im_dibin/"><i class="fa fa-instagram"></i></a>
							<a href="https://twitter.com/dibinxavier369"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row footer-bottom justify-content-center">
				<p class="col-lg-8 col-sm-12 footer-text">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->

	<!-- ####################### Start Scroll to Top Area ####################### -->
	<div id="back-top">
		<a title="Go to Top" href="#">
			<i class="lnr lnr-arrow-up"></i>
		</a>
	</div>
	<!-- ####################### End Scroll to Top Area ####################### -->

	<script src="<?php echo base_url(); ?>assets/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
	 crossorigin="anonymous"></script>
	<script src="<?php echo base_url(); ?>assets/js/vendor/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="<?php echo base_url(); ?>assets/js/easing.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/hoverIntent.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/superfish.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/mn-accordion.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.ajaxchimp.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.nice-select.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/isotope.pkgd.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.circlechart.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/mail-script.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/wow.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/tilt.jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})

		$( "#home" ).click(function() {
			$('body,html').animate({
				scrollTop: 0
			}, 1000);
			$(".nav-menu li a").removeClass("active");
			$(this).addClass("active");
		});
		
		$( "#about" ).click(function() {
			$("html, body").animate({scrollTop: $('.about-area').offset().top }, 2000);
			$(".nav-menu li a").removeClass("active");
			$(this).addClass("active");
		});

		$( "#portfolio" ).click(function() {
			$("html, body").animate({scrollTop: $('.work-area').offset().top }, 2000);
			$(".nav-menu li a").removeClass("active");
			$(this).addClass("active");
		});

	</script>

</body>

</html>