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
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/student.css">
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

    <section class="student-detail sec-top" style="position:relative">
        
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 ">
                    <div class="profile-list">
                       
                        <?php $this->load->view('includes/left-nav');?>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
                    <div class="profile-form-detail">
                        <div class="title-pr">
                            <h5>Change Password</h5>
                        </div>
                        <div class="pr-form">
                            <form action="<?php echo base_url().'authentication/update_password';?>" method="POST"
                                id="reset-form">
                                <div class="row">
                                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-7 col-12">
                                        <div class="form-group online-reg">
                                            <label for="" class="profile-pp">Current Password</label>
                                            <input type="password" class="form-control online-input" name="cur_password" id="cur_password"
                                                placeholder="Enter Current Password" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-7 col-12">
                                        <div class="form-group online-reg">
                                            <label for="" class="profile-pp">New Password</label>
                                            <input type="password" class="form-control online-input" name="newpassword" id="newpassword"
                                                placeholder="Enter New Password"  required>
                                        </div>
                                    </div>
                                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-7 col-12">
                                        <div class="form-group online-reg">
                                            <label for="" class="profile-pp">Confirm Password</label>
                                            <input type="password" class="form-control online-input" name="cpassword" id="cpassword"
                                                placeholder="Enter Confirm Password" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <button class="sub-btn pad-t" type="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>










    <!-- footer -->
    <?php $this->load->view('includes/footer');?>
    <!-- footer -->

    <!-- script -->

    <!-- script -->
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.validation.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/toastr.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/preloader.js"></script>
</body>
<script>
$(document).ready(function() {
    // $('#reset-form').validate({

    //     rules: {
    //         password: {
    //             minlength: 5,
    //             // alphanumeric: true
    //         },

    //         cpassword: {
    //             minlength: 5,
    //             equalTo: "#cnfpassword"
    //         },
    //     },

    // });
});
</script>

<script>
    $(document).ready(function(){
        // $('#error').html(" ");
$('#reset-form').validate({
    rules: {
            password: {
                minlength: 5,
                // alphanumeric: true
            },

            cpassword: {
                minlength: 5,
                equalTo: "#cpassword"
            },
        },

submitHandler: function(form) {
    loder(true)
    $.ajax({
        type: "POST",
         url: "<?php echo base_url().'authentication/update_password';?>",
         data: new FormData(form),
        processData: false,
        contentType: false,
        cache: false,
        async: false,
        dataType: "json",
        success: function(response) {     
            loder(false)
            if(response==true){
               $('#cur_password').val('');
               $('#newpassword').val('');
               $('#cpassword').val('');
                toastr.success('Password updated successfully', 'Success ', {timeOut: 5000});
            }
           else {
                toastr.error('unable to update your password, Current Password is not matching', 'Error ', {timeOut: 5000});
                
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



</body>
<script>
      <?php $this->load->view('includes/message.php'); ?>
</script>
</html>