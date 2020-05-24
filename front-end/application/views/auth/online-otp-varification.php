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
                            <i class="fas fa-mobile-alt otp-icon"></i>
                            <h5>OTP VERIFICATION</h5>
                            <p>We have sent an OTP code for given mobile no. and registered email id. Please  enter 6 digit OTP.</p>
                        </div>

                        <div class="form-lo">
                            <form action="<?php //echo base_url().'authentication/otp_verification';?>"  id="otp-form">
                                <div class="row">
                                    <div class="col-xl-10 col-lg-10 col-md-10 mx-auto col-sm-10 col-12">
                                        <div class="form-group online-reg">
                                            <input type="text" class="form-control online-input" name="otp"
                                                placeholder="Enter Your 6 Digit Number" id="otp" required>
                                        </div>
                                    </div>
                                    <!-- userdata -->
                                    <input type="hidden" name="email" id="email"
                                        value="<?php echo $this->session->userdata('res_email');?>">
                                    <input type="hidden" name="mobile" id="mobile"
                                        value="<?php echo $this->session->userdata('res_mobile');?>">
                                    <!-- userdata -->

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <button id='submit' class="sub-btn" type="submit">Submit</button>
                                        <button type="button" class="reset-btn" id="btnSubmit">
                                       Resend
                                    </button>
                                
                                        <p class="h-login"> <i id="sentMsg" class="text-danger"></i></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
    </section>
    <!-- footer -->
    <?php $this->load->view('includes/footer');?>
    <!-- footer -->

    <!-- script -->
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/toastr.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/preloader.js"></script>
</body>
<script>
$(document).ready(function() {
    $('#btnSubmit').click(function(e) {
        event.preventDefault();
        loder(true);
        var email = $("#email").val();
        var mobile = $("#mobile").val();
        $("#btnSubmit").attr("disabled", "disabled");
        $('#sentMsg').html('wait for seconds...');
        $.ajax({
            url: '<?php echo base_url() ?>authentication/resendOtp',
            type: "POST",
            data: {
                email: email,
                mobile: mobile
            },
            dataType: 'json',

            success: function(data) {
                loder(false);

                if (data.emailStatusCode == true) {
                    $("#btnSubmit").removeAttr("disabled", "disabled");
                    $('#sentMsg').html('');
                    toastr.success('Otp sent to your registered email id or mobile no', ' ', {timeOut: 5000});
                }
            },
        });
    });

    $('#otp-form').submit(function(e) {
        e.preventDefault();
        var otp = $("#otp").val();
        loder(true);
     
        $.ajax({
            url: '<?php echo base_url() ?>authentication/otp_verification',
            type: "POST",
            data: {
                otp: otp,
            },
            dataType: 'json',
            success: function(data) {

               loder(false)
                    if(data == true){
                    
                        window.location = "<?php echo base_url().'student-login';?>";
                   
                   
                    }else{
                        // $('#sentMsg').html('Invalid otp');
                        toastr.error('Invalid OTP, Please enter again', 'Error ', {timeOut: 5000});
                    }
               
            },
        });
    });
     //page loader
     function loder(status) {
                    if (status == true) {
                        $('.preloader-verfy').css('display', 'block');
                    } else {
                        $('.preloader-verfy').css('display', 'none');
                    }
                }

});
</script>
<script>
      <?php $this->load->view('includes/message.php'); ?>
   

</script>
</html>