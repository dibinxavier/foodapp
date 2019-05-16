<?php $this->load->view('header_login');?>            

     <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="<?php echo base_url(); ?>assets/img/3d3.png" alt="IMG">

                </div>

                <form class="login100-form validate-form">
                    <span class="login100-form-title">
                         Login
                    </span>







                    <!-- LOGIN -->
                    <div class="login_block">
                        <div class="out_err log_err" style="padding-bottom: 10px;display: none;"><div class="error_msg"></div></div>
                        <div class="out_success log_success" style="padding-bottom: 10px;display: none;"><div class="success_msg"></div></div>
                        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                            <input class="input100 email" type="text" name="email" placeholder="Email">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate = "Password is required">
                            <input class="input100 pass" type="password" name="pass" placeholder="Password">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                        </div>
                        
                        <div class="container-login100-form-btn ">
                            <button class="login100-form-btn login_btn">
                                Login
                            </button>
                        </div>
                    </div>









                    <!-- REGISTRATION -->
                    <div class="create_acc_block" style="display: none;">
                        <div class="out_err reg_err" style="padding-bottom: 10px;display: none;"><div class="error_msg"></div></div>
                        <div class="out_success reg_success" style="padding-bottom: 10px;display: none;"><div class="success_msg"></div></div>
                        <div class="wrap-input100 validate-input" data-validate = "Name is required">
                            <input class="input100 create_name " type="text" name="create_name" placeholder="Name">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                            <input class="input100 create_email" type="text" name="create_email" placeholder="Email">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate = "Password is required">
                            <input class="input100 create_pass" type="password" name="create_pass" placeholder="Password">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="container-login100-form-btn ">

                            <button class="login100-form-btn register_btn">
                                <img class="reg_loader"style="width: 15%;display: none;" src="<?php echo base_url(); ?>assets/img/loader.gif" alt="Loading...">
                                Join
                            </button>
                        </div>
                    </div>








                    <!-- FORGOT PASSWORD -->
                    <div class="forgot_pass_block" style="display: none;">
                        <div class="out_err forg_err" style="padding-bottom: 10px;"><div class="error_msg"></div></div>
                        <div class="out_success reg_success" style="padding-bottom: 10px;display: none;"><div class="success_msg"></div></div>
                        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                            <input class="input100 forgot_email" type="text" name="forgot_email" placeholder="Email">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn get_pass_btn">
                                Get Password
                            </button>
                        </div>
                    </div>








                    <div class="text-center p-t-12 forgot_btn">
                        <a class="txt2" style="cursor: pointer;">
                            Forgot Password?
                        </a>
                    </div>

                    <div class="text-center p-t-136">
                        <a class="txt2 create_btn" style="cursor: pointer;">
                            Create your Account
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                        <a class="txt2 back_to_login"  style="display: none;cursor: pointer;">
                            <i class="fa fa-long-arrow-left m-l-5" aria-hidden="true"></i>
                            Back to Login
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php $this->load->view('footer_login');?> 
    <script type="text/javascript">

$(document).ready(function() {

        $('.create_btn').click(function() {
            $('.login_block').hide();
            $('.forgot_btn').hide();
            $('.create_btn').hide();
            $('.create_acc_block').show();
            $('.back_to_login').show();
            $('.login100-form-title').text("Register");
            $('.alert-validate').removeClass('alert-validate');
            $('.out_success').hide();
            $('.out_err').hide();

        });

        $('.forgot_btn').click(function() {
            $('.login_block').hide();
            $('.forgot_btn').hide();
            $('.create_btn').hide();
            $('.forgot_pass_block').show();
            $('.back_to_login').show();
            $('.login100-form-title').text("Trouble in login?");
            $('.alert-validate').removeClass('alert-validate');
            $('.out_success').hide();
            $('.out_err').hide();
        });

        $('.back_to_login').click(function() {
            $('.login_block').show();
            $('.forgot_btn').show();
            $('.create_btn').show();
            $('.create_acc_block').hide();
            $('.forgot_pass_block').hide();
            $('.back_to_login').hide();
            $('.login100-form-title').text("Login");
            $('.alert-validate').removeClass('alert-validate');
            $('.out_success').hide();
            $('.out_err').hide();
        });


        


        $('.get_pass_btn').on('click', function() {
            var email=$('.forgot_email').val();
            

            var  login_email_valid=isEmail(email);
            if(login_email_valid){
                $('.forgot_email').parent().removeClass('alert-validate');
                if(email.length!=0){
                        
                    $.ajax({
                        url: '<?php echo base_url('login/forgot'); ?>',
                        type: 'POST',
                        data: {
                            email: email
                        },
                        dataType: 'json',
                        success: function(data) {
                            console.log(email);
                            if(data==0){

                                $('.forg_err .error_msg').text("Email is not registered!");
                                $('.forg_err').show();
                                $( ".out_err" ).effect( "shake" );

                                setTimeout(function(){ 
                                    $('.forg_err').fadeOut(1000);
                                }, 3000);



                            } else {
                                $('.error_msg').hide();
                                console.log(data[0].name);
                                $('.validate-form').text("Welcome "+data[0].name);
                            }
                        }
                    });

                } 
            } else {
                $('.forgot_email').parent().addClass('alert-validate');
            }
        });


        //LOGIN
        $('.login_btn').on('click', function() {
            var email=$('.email').val();
            var pass=$('.pass').val();

            var  login_email_valid=isEmail(email);
            if(login_email_valid){
                if(email.length!=0 && pass.length!=0){
                        
                    $.ajax({
                        url: '<?php echo base_url('login/login'); ?>',
                        type: 'POST',
                        data: {
                            email: email,
                            pass: pass

                        },
                        dataType: 'json',
                        success: function(data) {
                            if(data==0){
                                $('.log_err  .error_msg').text("Invalid email/Password!");
                                $('.log_err').show();
                                $( ".out_err" ).effect( "shake" );

                                setTimeout(function(){ 
                                    $('.log_err').fadeOut(1000);
                                }, 3000);


    // $(".error_msg").effect( "shake", { direction: "left", times: 4, distance: 101}, 2000 );

                            } else {
                                $('.error_msg').hide();
                                location.href = '<?php echo base_url(); ?>';
                                // console.log(data[0].name);
                                // $('.validate-form').text("Welcome "+data[0].name);
                            }
                        }
                    });

                } 
            }
        });










        //REGISTRATION
        var registered=0;
        $('.register_btn').on('click', function() {
            
            if(registered==0){
                var register_valid_flag=0;
                var length_valid_flag=0;
                var email_valid_flag=0;
                var pass_valid_flag=0;
                var create_name=$('.create_name').val();
                var create_email=$('.create_email').val();
                var create_pass=$('.create_pass').val();
                var  email_valid=isEmail(create_email);

                // console.log('create_name'+create_name.length+'create_name');
                // console.log('create_email'+create_email+'create_name');
                // console.log('create_pass'+create_pass+'create_name');

                if(create_name.length==0 || create_email.length==0 || create_pass.length==0){
                } else {
                    length_valid_flag=1;
                }


                if(email_valid==false){
                    console.log('email_valid false '+email_valid);
                    $('.create_email').parent().addClass('alert-validate');
                    //register_valid_flag=0;
                } else{
                    $('.create_email').parent().removeClass('alert-validate');
                    email_valid_flag=1;
                }
                
                if(create_pass.length<6){
                    $('.create_pass').parent().attr('data-validate','Minimum 6 characters');
                    $('.create_pass').parent().addClass('alert-validate');
                   //register_valid_flag=0;
                } else{
                    $('.create_pass').parent().attr('data-validate','Password is required');
                    $('.create_pass').parent().removeClass('alert-validate');
                    pass_valid_flag=1;
                }
                if(length_valid_flag==1 && email_valid_flag==1 && pass_valid_flag==1 ){
                    register_valid_flag=1
                }


                




                console.log('register_valid_flag'+register_valid_flag);
                if(register_valid_flag==1){
                    $(".reg_loader").show(); //Loader show
                    $.ajax({
                        url: '<?php echo base_url('login/register'); ?>',
                        type: 'POST',
                        data: {
                            name: create_name,
                            email: create_email,
                            password: create_pass

                        },
                        dataType: 'json',
                        success: function(data) {
                            $(".reg_loader").hide(); //Loader hide
                            if(data==1){
                                registered=1;
                                

                                $('.reg_err').hide();

                                $('.reg_success .success_msg').text("Successfully Registered!");
                                $('.reg_success').show();
                                setTimeout(function(){ 
                                    $('.reg_success').fadeOut(1000);
                                }, 3000);


                                $('.create_name').val('');
                                $('.create_email').val('');
                                $('.create_pass').val('');
                                registered=0;

                                //$('.register_btn').children().text('');
                                //$('.register_btn').removeClass('register_btn');
                            } else if(data==0){                                $('.reg_err .error_msg').text("Email is already Registered!");
                                $('.reg_err').show();
                                $( ".out_err" ).effect( "shake" );
                                setTimeout(function(){ 
                                    $('.reg_err').fadeOut(1000);
                                }, 3000);

                            } else {
                                $('.reg_err .error_msg').text("An error occured!");
                                $('.reg_err').show();
                                $( ".out_err" ).effect( "shake" );
                                setTimeout(function(){ 
                                    $('.reg_err').fadeOut(1000);
                                }, 3000);
                            }
                            //console.log('test'+data);
                        }
                    });


                }
            }

        });
 });
        function isEmail(email) {
          var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
          return regex.test(email);
        }
    </script>
  
