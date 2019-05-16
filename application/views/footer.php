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
					
				</p>
				<?php 
				if($this->session->userdata('userdata'))
				{?>
					<span class="edit_icon footertext_edit" data-target="#edit" data-toggle="modal"><i class="fa fa-lg fa-pencil"></i></span>
				<?php }?>





				<!--Trigger-->
			<div id="edit" class="modal fade" role="dialog">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-body">
			        <button data-dismiss="modal" class="close">&times;</button>
			        <h4 style="color: #6b5f5f">EDIT</h4>
			        <form id="edit_modal_form">
			          
			        </form>
			      </div>
			    </div>
			  </div>  
			</div>


<style type="text/css">
	




/*Modal*/
h4 {
  font-weight: bold;
  color: #fff;
}
.close {
  color: #fff;
  transform: scale(1.2)
}
.modal-content {
  font-weight: bold;
  background: linear-gradient(to bottom right,#ffffff,#848484);
}
.form-control {
  margin: 1em 0;
}
.form-control:hover, .form-control:focus {
  box-shadow: none;  
  border-color: #fff;
}
.modal_input {
  border: none;
  border-radius: 0;
  box-shadow: none;
  border-bottom: 2px solid #eee;
  padding-left: 2px;
  font-weight: normal;
  background: transparent;  
  border-radius: 5px;
}
.form-control::-webkit-input-placeholder {
  color: #eee;  
}
.form-control:focus::-webkit-input-placeholder {
  font-weight: bold;
  color: #fff;
}
.login {
    padding: 6px 20px;
    border-radius: 6px;
    background: none;
    border: 2px solid #524f4d;
    color: #ffffff;
    font-weight: bold;
    transition: all .5s;
    margin-top: 1em;
}
.login:hover {
background: #f5f0f0;
    color: #716868;
}



</style>



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
	<!-- <script src="<?php echo base_url(); ?>assets/js/notify.js"></script> -->
	<script src="<?php echo base_url(); ?>assets/vendor/bootstrap-notify-master/bootstrap-notify.js"></script>
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

		$( "#contact" ).click(function() {
			$("html, body").animate({scrollTop: $('.contact-area').offset().top }, 2000);
			$(".nav-menu li a").removeClass("active");
			$(this).addClass("active");
		});
		
		$( ".footertext_edit" ).click(function() {
			 $.ajax({
                url: '<?php echo base_url('content/footer_text'); ?>',
                type: 'GET',
                dataType: 'json',
                complete: function(data) {
                	// var obj = JSON.parse(data);
                    console.log(data.responseText);
                    $("#edit_modal_form").html('<textarea type="text" id="footertext" class="modal_input footertext form-control" >'+data.responseText+'</textarea>  <span data-dismiss="modal" id="footertext_save" class="btn login">OK</span>' );
                    
                }
            });
		});





		$(document).on('click', '#footertext_save', function(){
			var footertext = $("#footertext").val();
			 $.ajax({
                url: '<?php echo base_url('content/footer_text_update'); ?>',
                type: 'POST',
                data: {
                    footertext: footertext
                },
                dataType: 'json',
                complete: function(data) {
                    $(".footer-text").html(footertext);
					$.notify({
						message: 'Successfully Updated!'
					});
                }
            });
		});

		function getFooterText()
		{
			$.ajax({
                url: '<?php echo base_url('content/footer_text'); ?>',
                type: 'GET',
                dataType: 'json',
                complete: function(data) {
                	$(".footer-text").html(data.responseText);
                }
            });
		}
		$(document).ready(function(){
			getFooterText();
		});

	</script>

</body>

</html>