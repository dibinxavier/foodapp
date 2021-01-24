<?php $this->load->view('header');?>      
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <h4 class="page-title pull-left">User</h4>
                    <ul class="breadcrumbs pull-left">
                        <li><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li><span>List</span></li>
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
                        <a class="dropdown-item" href="#">Message</a>
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="<?php echo base_url(); ?>login/logout">Log Out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page title area end -->
    <div class="main-content-inner">
                <div class="row">
                    <!-- Dark table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <?php if($this->session->flashdata('success')){?>
                                <div class="alert alert-success" role="alert">
                                    <span class="success-close"><i class="fa fa-times" aria-hidden="true"></i></span>
                                    <p><?php echo $this->session->flashdata('success'); ?></p>
                                </div>
                                <?php } ?>
                                <h4 class="header-title">Users</h4>
                                <div class="data-tables datatable-dark">
                                    <table id="dataTable" class="text-center">
                                        <thead class="text-capitalize">
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Mobile No.</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for($i=0;$i<count($users);$i++) {?>
                                                <tr>
                                                    <td><?php echo $users[$i]['name']?></td>
                                                    <td><?php echo $users[$i]['email']?></td>
                                                    <td><?php echo $users[$i]['mob']?></td>
                                                    <td class="actions-td">
                                                        <span data-id="<?php echo $users[$i]['id'];?>" class="delete-user" title="Delete" style="color: #ff0000;" data-toggle="modal" data-target="#exampleModalLong">
                                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                        </span>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Dark table end -->
                </div>
            </div>
</div>
<?php $this->load->view('footer');?>      
<!-- Start datatable js -->
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    $(".list-user-page").addClass("active");
    $(".list-user-page").parent().addClass("in");
    $(".list-user-page").parent().parent().addClass("active");
    $('#dataTable').DataTable( {
        responsive: true
    } );

    var delete_user='';
    $(".delete-user" ).on('click', function() {
        delete_user=$(this).attr("data-id");
        console.log(delete_user);
    });
    $(".delete" ).on('click', function() {
        $.ajax({
            url: '<?php echo base_url('users/delete'); ?>',
            type: 'POST',
            dataType: 'json',
            data: {
                id: delete_user
            },
            complete: function(data) {
                location.reload();
            }
        });
    });
</script>