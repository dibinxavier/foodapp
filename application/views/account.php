<?php $this->load->view('header_main');
$userdata = $this->session->userdata('userdata');

?>      


<div class="col-lg-12">
    <div class="card">
        <div class="card-header">Account</div>
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center title-2">Details</h3>
            </div>
            <hr>
            <form action="" method="post" novalidate="novalidate">
                <div class="form-group">
                    <label for="cc-payment" class="control-label mb-1">Name</label>
                    <input id="cc-pament" name="cc-payment" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $userdata['name'];?>">
                </div>
                <div class="form-group has-success">
                    <label for="cc-name" class="control-label mb-1">Email</label>
                    <input id="cc-name" name="cc-name" type="text" class="form-control cc-name valid" value="<?php echo $userdata['email'];?>">
                    <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                </div>
                <div>
                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                        <span id="payment-button-amount">UPDATE</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $this->load->view('footer_main');?>      
