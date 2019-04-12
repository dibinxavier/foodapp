<?php $this->load->view('header_main');?>      


<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Shorten your URL</h2>
        </div>
    </div>
</div>
</br>
<div class="row">
    <div class="col-lg-12">
        <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
            <div class="au-card-title" style="background-image:url('<?php echo base_url(); ?>assets/images/bg-title-01.jpg');">
                <div class="bg-overlay bg-overlay--blue"></div>
                <h3>
                    <i class="zmdi zmdi-account-calendar"></i>It's Simple!</h3>
                
            </div>
            <div class="au-task js-list-load">
                <div class="au-task__title">
                    <div class="form-group">
                            <label for="cc-shorten" class="control-label mb-1">Paste your URL here</label>
                            <input id="url_input" name="cc-shorten" type="text" class="form-control" aria-required="true" aria-invalid="false" value="">
                        </div>
                        
                        <button center id="shorten-button" type="submit" class="col-lg-3 btn btn-lg btn-info btn-block">
                            <span id="shorten-button-amount"><i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </span>
                        </button>
                        <input readonly type="text" class="short_url_show"/>
                        
                                            
                </div>
                <div class="au-task__footer">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MAIN CONTENT-->
<!-- END PAGE CONTAINER-->
<?php $this->load->view('footer_main');?>      
    <script type="text/javascript">
$(document).ready(function() {
    $('#shorten-button').attr("disabled", true);

    $("#url_input").on( "keyup paste", function(){
        if( $(this).val().length>0){
            $('#shorten-button').attr("disabled", false);
        } else {
            $('#shorten-button').attr("disabled", true);
        }
    });

    $('#shorten-button').click(function() {
        var url = $("#url_input").val();
        //alert(url);
        if( url.length>0){
            $.ajax({
                url: '<?php echo base_url('shorturl/shortit'); ?>',
                type: 'POST',
                data: {
                    url: url
                },
                dataType: 'json',
                complete: function(data) {
                    $('.short_url_show').val(data.responseText)
                    console.log(data.responseText);
                }
            });
        }

    });
    var copied = 0;
    $('.short_url_show').click(function(){
        
        if(copied==0){
            $(this).after("<p class='copied_alert'>Copied to clipboard!</p>");
            setTimeout(() => {
                $(".copied_alert").fadeOut();
            }, 3000);
           
            copied = 1;
        }
        this.select();
        
        document.execCommand("copy");
       // $(this).tooltip('enable').tooltip('open');
    });

});
</script>