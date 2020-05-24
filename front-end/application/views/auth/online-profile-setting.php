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
.custom-file-label {
	
	color: #6c757d;
	opacity: 1;
	font-size: 12px;
}
</style>
</head>

<body>

    <!-- header -->
    <?php $this->load->view('includes/header');?>
    <!-- end header -->

    <section class="online-background" style="position:relative">

        <!-- <div class="mess">
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
        </div> -->

        <div class="container-fluide">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-5 col-sm-12 col-12">
                    <div class="online-arjuna">
                        <h5>Arjuna Academy</h5>
                        <p>Richard McClintock, a Latin scholar from Hampden-Sydney College, is credited with discovering
                            the source behind the ubiquitous Richard McClintock, a Latin scholar from Hampden-Sydney
                            College, is credited with discovering the source behind the ubiquitous filler text. In
                            seeing a sample of lorem ipsum, his interest was piqued . filler text. In seeing a sample of
                            lorem ipsum, his interest was piqued </p>
                        <a class='online-btn'>Read More</a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-7 col-sm-12 col-12">
                    <div class="online-registration">
                        <div class="form-ritle">
                            <h5>Profile Setting</h5>
                            <p>Richard McClintock, a Latin scholar from Hampden-Sydney College, is credited with
                                discovering
                                the source behid</p>
                        </div>

                        <div class="form-reg">
                            <form action="<?php echo base_url().'authentication/insert_profile_setting';?>" method="POST"
                                id="register-form" enctype='multipart/form-data'>
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group online-reg">
                                            <input type="text" class="form-control online-input"
                                                placeholder="Student Name *" name="name" value="<?php echo (!empty($result['name']))?$result['name']:'' ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group online-reg">
                                            <input type="text" class="form-control online-input"
                                                placeholder="School Name *" name="school" value="<?php echo (!empty($result['school']))?$result['school']:'' ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group online-reg">
                                            <input type="text" class="form-control online-input"
                                                placeholder="Father Name *" name="father" value="<?php echo (!empty($result['father']))?$result['father']:'' ?>" required>
                                        </div>
                                    </div>
                                   
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group online-reg">
                                            <input type="text" class="form-control online-input"
                                                placeholder="Mother Name *" name="mother" value="<?php echo (!empty($result['mother']))?$result['mother']:'' ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group online-reg">
                                            <input type="text" class="form-control online-input"
                                                placeholder="Father Mobile Number*" name="father_mobile" value="<?php echo (!empty($result['father_mobile']))?$result['father_mobile']:'' ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group online-reg">
                                            <input type="text" class="form-control online-input"
                                                placeholder="Mother Mobile Number*" name="mother_mobile" value="<?php echo (!empty($result['mother_mobile']))?$result['mother_mobile']:'' ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group online-reg">
                                            <input type="email" class="form-control online-input"
                                                placeholder="Email ID*" name="email" value="<?php echo (!empty($result['email']))?$result['email']:'' ?>" readonly required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group online-reg custom-file">
                                            <input type="file" class="form-control  online-input" 
                                            id="customFile"
                                                name="school_id" >
                                                <label class="custom-file-label" for="customFile">School Id</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group online-reg">
                                            <select class="form-control online-select" readonly id="online_course" name="course">
                                                
                                                <option value="<?php echo (!empty($result['course']))?$result['course']:'' ?>"><?php echo (!empty($result['course']))?$result['course']:'' ?></option>
                                              
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group online-reg">
                                            <textarea class="form-control online-textarea" rows="1"
                                                placeholder="Permanent Address" id="school-id"
                                                name="address" value="<?php echo (!empty($result['address']))?$result['address']:'' ?>"><?php echo (!empty($result['address']))?$result['address']:'' ?></textarea>
                                        </div>
                                    </div>
                                   
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <button class="sub-btn" type="submit">Submit</button>
                                        
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
    <script src="<?php echo base_url();?>assets/js/script.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.validation.js"></script>
    <script src="<?php echo base_url();?>assets/js/preloader.js"></script>
</body>
<script>
$(document).ready(function() {

    $('#register-form').validate({

        rules: {

            father_mobile: {
                required: true,
                digits: true,
                minlength: 10,
                maxlength: 10,
            },
            mother_mobile: {
                required: true,
                digits: true,
                minlength: 10,
                maxlength: 10,
            },
            password: {
                minlength: 5,
                // alphanumeric: true
            },
            conf_password: {
                minlength: 5,
                equalTo: "#password"
            },
        },

    });
});


// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
<script>
      <?php $this->load->view('includes/message.php'); ?>
</script>
</html>