<?php $this->load->view('header');?>      

    <!-- page title area start -->
    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <h4 class="page-title pull-left">Dashboard</h4>
                    <ul class="breadcrumbs pull-left">
                        <li><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li><span>Dashboard</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 clearfix">
                <div class="user-profile pull-right">
                    <img class="avatar user-thumb" src="<?php echo base_url(); ?>assets/dashboard/assets/images/author/avatar.png" alt="avatar">

                    <h4 class="user-name dropdown-toggle" data-toggle="dropdown">
                        <?php print_r($this->session->userdata('userdata')['name']);?>
                        <i class="fa fa-angle-down"></i>
                    </h4>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?php echo base_url(); ?>login/logout">Log Out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page title area end -->
            
    <div class="main-content-inner">
        <!-- sales report area start -->
        <?php if(empty($mydata)){?>

        
        <div class="page-title pull-left">
        Not Data to display
        </div>
        <?php }?>
            <div class="card-area">
                <div class="row">
                    <?php 
                    for($i=0;$i<count($mydata);$i++) {
                        ?>
                        <div class="col-lg-4 col-md-6 mt-5">
                            <div class="card card-bordered" style="min-height: 300px;">
                                <div class="card-body" style="border-top: 3px solid #4236fb!important; border-radius: 4px;">
                                    <b ><h2 class="title"><?php echo "#".$mydata[$i]->id; ?></h2>
                                    <!-- <h6><?php //echo $mydata[$i]->id; ?></h6> -->
                                    <h2 style="font-size: 24px;" class="title"><?php echo $mydata[$i]->title; ?></h2></b><br>
                                    <h6> <?php echo $mydata[$i]->body; ?></h6><br>
                                    
                                </div>
                            </div>
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
        
            <!-- exchange area end -->
        </div>
        <!-- row area start-->
    </div>
</div>

<?php $this->load->view('footer');?>      

<script type="text/javascript">
    $(".home-page").addClass("active");
    // $(".take-page").parent().addClass("in");
    // $(".take-page").parent().parent().addClass("active");
</script>