<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $title;?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="target-densitydpi=device-dpi, initial-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/font/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/slick.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/lightbox.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/about_us.css">
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


    <section>
    <div class="mess">
                <?php if(!empty($success=  $this->session->flashdata('msg'))){ ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i><?php echo $success; ?></i>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php }?>
                <?php  
                
                if(!empty($error=  $this->session->flashdata('error'))){ ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i><?php echo $error; ?></i>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php }?>
            </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 m-auto py-5">
                   <form action="<?php echo base_url().'authentication/otp_verification';?>" method="POST">
                   <div class="row">
                        <div class="col-md-6 m-auto">
                            <div class="form-group">
                                <input type="text" class="form-control" name="otp" placeholder="OTP" required>
                            </div>
                        </div>
                        <!-- userdata -->
                        <input type="hidden" name="email" id="email" value="<?php echo $this->session->userdata('res_email');?>">
                        <input type="hidden" name="mobile" id="mobile" value="<?php echo $this->session->userdata('res_mobile');?>">
                          <!-- userdata -->
                        <div class="col-md-12  m-auto text-center">
                            <div class="form-group">
                                <input type="submit" class="btn btn-info" value="Submit">
                            </div>
                            <button type="submit" class="btn btn-primary" id="btnSubmit">
                                       Resend
                                    </button>
                                    <i id="sentMsg"></i>
                        </div>
                    </div>
                   </form>
                </div>
            </div>
        </div>
    </section>













    <div class="go-top active">
        <i class="fa fa-angle-double-up"></i>
        <i class="fa fa-angle-double-up"></i>
    </div>

    <!-- footer -->
    <?php $this->load->view('includes/footer');?>
    <!-- footer -->



    <!-- script -->



    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/slick.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/script-about.js"></script>
    <script src="<?php echo base_url();?>assets/js/lightbox-plus-jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/preloader.js"></script>
    <script>
       $(document).ready(function() {
            $('#btnSubmit').click(function(e) {
                event.preventDefault();
                var email = $("#email").val();
                var mobile = $("#mobile").val();
                $("#btnSubmit").attr("disabled", "disabled");
               
            $.ajax({
                url: '<?php echo base_url() ?>authentication/resendOtp',
                type: "POST",
                data: {email: email, mobile: mobile},
                dataType: 'json',
               
                success: function(data) {

                  if(data.emailStatusCode == true){
                    $("#btnSubmit").removeAttr("disabled", "disabled");
                    $('#sentMsg').html('Otp sent to your registered email id or mobile no');
                  }
                },
            });
        });
 
    });
    </script>
</body>

</html>