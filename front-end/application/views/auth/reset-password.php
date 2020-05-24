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
    <script src="<?php echo base_url();?>assets/js/preloader.js"></script>
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
                   <form action="<?php echo base_url().'authentication/reset_password';?>" method="POST" id="reset-form">
                   <div class="row">
                        <div class="col-md-6 m-auto">
                            <div class="form-group">
                                <input type="text" class="form-control" name="remail" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="cpassword" placeholder="Confirm Password" required>
                            </div>
                           <input type="hidden" name="forgot_id" value="<?php echo $forgot_id;?>">
                        </div>
                       
                        <div class="col-md-12  m-auto text-center">
                            <div class="form-group">
                                <input type="submit" class="btn btn-info" value="Submit">
                            </div>
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
  
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.validation.js"></script>
    <script>
      $(document).ready(function() {
    $('#reset-form').validate({

        rules: {

          
            password: {
                minlength: 5,
                // alphanumeric: true
            },
            cpassword: {
                minlength: 5,
                equalTo: "#password"
            },
        },

    });
});
    </script>
</body>

</html>