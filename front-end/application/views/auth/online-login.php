<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $title;?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="target-densitydpi=device-dpi, initial-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/font/css/all.min.css">
    <link href="<?php echo base_url();?>assets/css/toastr.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/online.css">
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url();?>assets/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url();?>assets/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url();?>assets/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>assets/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url();?>assets/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url();?>assets/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url();?>assets/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url();?>assets/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url();?>assets/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo base_url();?>assets/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url();?>assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url();?>assets/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url();?>assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo base_url();?>assets/img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo base_url();?>assets/img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
<style>
label.error {
	
	float: left;
}
</style>
</head>

<body>

    <!-- header -->
    <?php $this->load->view('includes/header');?>
    <!-- end header -->
    <?php $this->load->view('includes/pre-loader.php'); ?>
    <section class="online-login">
       
        <div class="container-fluide">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-7 mx-auto col-sm-12 col-12">
                    <div class="online-lore">
                        <div class="form-login">
                            <h5>SIGN IN</h5>
                            <p>Get more things done with Loggin platform.</p>
                        </div>
                        <div class="form-lo">
                            <form action="<?php echo base_url().'authentication/insert_login';?>" method="POST" id="login-form">
                                <div class="row">
                                    <div class="col-xl-10 col-lg-10 col-md-10 mx-auto col-sm-10 col-12">
                                        <div class="form-group online-reg">
                                            <input type="email" class="form-control online-input" placeholder="Email *"
                                                name="email" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-10 col-lg-10 col-md-10 mx-auto col-sm-10 col-12">
                                        <div class="form-group online-reg">
                                            <input type="password" class="form-control online-input"
                                                placeholder="Password *" name="password" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <button class="sub-btn" type="submit">Submit</button>
                                        <p class="h-login"><a href=">" class="sig-hl" data-toggle="modal"
                                                data-target="#exampleModalCenter">Forgot Password</a></p>
                                        <p class="h-login">Don't have an account?<a
                                                href="<?php echo base_url('registration');?>" class="sig-hl">Sign Up</a>
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
    </section>
    <!-- forgot password -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content mc">
                <div class="modal-header mh">
                    <div class="form-login">
                        <h5>Forgot Password</h5>
                        <p>Please enter your registered email. We will send a link to your registered email id to resest your password</p>
                    </div>
                    <a class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="close-g">&times;</span>
                    </a>
                </div>
                <div class="modal-body mb-online">
                    <div class="form-lo">
                        <form action="<?php echo base_url().'authentication/check_email_exist';?>" method="POST" id="forgot-password" >
                            <div class="row">
                                <div class="col-xl-10 col-lg-10 col-md-10 mx-auto col-sm-10 col-12">
                                    <div class="form-group online-reg">
                                        <input type="email" class="form-control online-input" name="email" id="email"
                                            placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <button class="sub-btn" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <?php $this->load->view('includes/footer');?>
    <!-- footer -->

    <!-- script -->
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <!-- <script src="<?php echo base_url();?>assets/js/script.js"></script> -->
    <script src="<?php echo base_url();?>assets/js/jquery.validation.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/toastr.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/preloader.js"></script>

</body>
<script>
$(document).ready(function() {

$('#login-form').validate();
// $('#forgot-password').validate();

});
</script>

<script>
    $(document).ready(function(){
        // $('#error').html(" ");
$('#forgot-password').validate({
   

submitHandler: function(form) {
    loder(true)
    $.ajax({
        type: "POST",
         url: "<?php echo base_url().'authentication/check_email_exist';?>",
         data: new FormData(form),
        processData: false,
        contentType: false,
        cache: false,
        async: false,
        dataType: "json",
        success: function(response) {     
            loder(false)
            if(response==true){
               $('#email').val('');
               $('#exampleModalCenter').modal('toggle');
                toastr.success('Reset password link has been sent to your registered email', 'Success ', {timeOut: 5000});
            }
           else {
                toastr.error('invalid Email address', 'Error ', {timeOut: 5000});
                
            }
           
        }            
    });
}
});
      //page loader
      function loder(status) {
            if (status == true) {
                $('.preloader-verfy').css('display', 'block');
            } else {
                $('.preloader-verfy').css('display', 'none');
            }
        }

   
})
</script>
<script>
      <?php $this->load->view('includes/message.php'); ?>
</script>
</html>