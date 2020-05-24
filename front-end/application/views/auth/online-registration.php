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
        text-align: left;
        color: #6c757d;
        opacity: 1;
        font-size: 12px;
    }
    #dform {
	margin-left: 8px;
}
.more{
    background:white;
    color:black;
}
.more:hover{
    color:white;
    text-decoration:none;
}
.custom-control-label {
	
	font-size: 13px;
}
.custom-radio,.online-reg{
    position:relative;
}
.custom-radio label.error {

	top: -22px;
	position: absolute;
	right: -90px;
}
.custom-file {
	margin-bottom: 1rem;
}
i.error {
	color: red;
	font-size: 11px;
    font-style: italic;
    position:absolute;
}
label.error {
	
	position: absolute;
	bottom: -18px;
}
@media (max-width:600px){
    .custom-radio label.error {
	right: 0px;
}
}
    </style>
</head>

<body>

    <!-- header -->
    <?php $this->load->view('includes/header');?>
    <!-- end header -->
    <?php $this->load->view('includes/pre-loader.php'); ?>
    <section class="online-background" style="position:relative">

       

        <div class="container-fluide">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-5 col-sm-12 col-12">
                    <div class="online-arjuna">
                        <h5>Arjunaa Academy</h5>
                        <p>Arjunaa Academy for Achivers(AAA) is a premier and a leading coaching institute for the preparation of JEE (Main+Advanced), JEE (Main), Pre-Medical (NEET-UG), KVPY, Pre-Nurture & Career Foundation (Class VIII to X, NTSE & Olympiads) & Boards(CBSE,ICSE & State) in Bangalore, India. The Institute is well regarded for the high-quality entrance exams & Board exams preparation and produces best results year after year. Ever since the inception in 2012, Arjunaa Academy for Achievers (AAA) focusses on building a strong foundation of knowledge and concepts, instilling a vigour for research in the students.  </p>
                        <a class="sub-btn more" href="<?php echo base_url('about-us');?>" class='online-btn'>Read More</a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-7 col-sm-12 col-12">
                    <div class="online-registration">
                        <div class="form-ritle">
                            <h5>Register </h5>
                            <p>Get started with your account</p>
                        </div>

                        <div class="form-reg">
                            <form action="<?php echo base_url().'authentication/insert_register';?>" method="POST"
                                id="register-form" enctype='multipart/form-data'>
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group online-reg">
                                            <input type="text" class="form-control online-input"
                                                placeholder="Student Name *" name="name" id="name" value="<?php echo set_value('name'); ?>" required>
                                                <i class="error" id="error"></i>

                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group online-reg">
                                            <input type="text" class="form-control online-input"
                                                placeholder="School Name *" name="school" id="school"  value="<?php echo set_value('school'); ?>" required>
                                                <i class="error" id="error"></i>
                                       
                                            </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group online-reg">
                                            <input type="text" class="form-control online-input"
                                                placeholder="Father Name *" name="father" id="father" value="<?php echo set_value('father'); ?>" required>
                                                <i class="error" id="error"></i>
                                      
                                            </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group online-reg">
                                            <input type="text" class="form-control online-input"
                                                placeholder="Mother Name *" name="mother" id="mother" value="<?php echo set_value('mother'); ?>" required>
                                                <i class="error" id="error"></i>
                                       
                                            </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group online-reg">
                                            <input type="text" class="form-control online-input"
                                                placeholder="Father Mobile Number*" name="father_mobile" id="father_mobile" value="<?php echo set_value('father_mobile'); ?>" required>
                                                <i class="error" id="error"></i>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group online-reg">
                                            <input type="text" class="form-control online-input"
                                                placeholder="Mother Mobile Number*" name="mother_mobile" id="mother_mobile"  value="<?php echo set_value('mother_mobile'); ?>"  required>
                                                <i class="error" id="error"></i>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group online-reg">
                                            <p class="mb-0">Select mobile to send OTP</p>
                                            <div class="row" id="dform">

                                                <div class="col-sm-6 custom-control custom-radio ">
                                                    <input type="radio" class="custom-control-input otpradio" id="customRadio"
                                                        name="otpselect" required>
                                                <i class="error" id="error"></i>

                                                    <label class="custom-control-label" for="customRadio">Father's Mobile
                                                        </label>
                                                </div>
                                                <div class="col-sm-6 custom-control custom-radio ">
                                                    <input type="radio" class="custom-control-input otpradio" id="customRadio2"
                                                        name="otpselect"  required>
                                                <i class="error" id="error"></i>

                                                    <label class="custom-control-label" for="customRadio2">Mother's Mobile</label>
                                                   
                                                </div>
                                                
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group online-reg">
                                            <input type="email" class="form-control online-input"
                                                placeholder="Email ID*" name="email" id="email"   value="<?php echo set_value('email'); ?>"   required>
                                                <i class="error" id="error"></i>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group online-reg custom-file">
                                            <input type="file" class="form-control  online-input" id="customFile"
                                                name="school_id" required accept="image/x-png,image/gif,image/jpeg">
                                                <i class="error" id="error"></i>

                                            <label class="custom-file-label" for="customFile">School Id</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group online-reg">
                                            <select class="form-control online-select" id="course" name="course" required>
                                                <option selected disabled>Select Your Course</option>
                                                <option value="PCMB">PCMB</option>                                               
                                            </select>
                                            <i class="error" id="error"></i>

                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group online-reg">
                                            <textarea class="form-control online-textarea" rows="1"
                                                placeholder="Permanent Address"  id="address"    name="address" value="<?php echo set_value('address'); ?>"
                                                required><?php echo set_value('address'); ?></textarea>
                                                <i class="error" id="error"></i>

                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group online-reg">
                                            <input type="password" class="form-control online-input" id="password"
                                                placeholder="Password*" name="password"  value="<?php echo set_value('password'); ?>" required>
                                                <i class="error" id="error"></i>

                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group online-reg">
                                            <input type="password" class="form-control online-input"
                                                placeholder="Confirm Password*" id="conf_password" name="conf_password" required>
                                                <i class="error" id="error"></i>

                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <button class="sub-btn" type="submit">Submit</button>
                                        <p class="sop">Already have an account ?<a
                                                href="<?php echo base_url('student-login');?>" class="sig-h">Sign In</a></p>
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
    <!-- <script src="<?php echo base_url();?>assets/js/script.js"></script> -->
    <script src="<?php echo base_url();?>assets/js/jquery.validation.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/toastr.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/preloader.js"></script>
</body>
<script>
            $('#customFile').on('change',function(){
                //get the file name
                var fileName = $(this).val();
               
                fileName = fileName.substring(fileName.lastIndexOf("\\") + 1, fileName.length);
              
                $('.custom-file-label').html(fileName);
            })
        </script>
<script>

$(document).ready(function(){ 
   

$('#father_mobile').keyup(function(){
    var father= $('#father_mobile').val();
   var a= $('#customRadio').val(father);

});
$('#mother_mobile').keyup(function(){
    var mother= $('#mother_mobile').val();
   var a= $('#customRadio2').val(mother);

});

$('#father_mobile').change(function(){
    var father= $('#father_mobile').val();
   
   var a= $('#customRadio').val(father);

});
$('#mother_mobile').change(function(){
    var mother= $('#mother_mobile').val();
 
   var a= $('#customRadio2').val(mother);

});


    $("#dform input" ).change(function() {
       
        var mother= $('#mother_mobile').val();
        var father= $('#father_mobile').val();

       if(mother =='' && father ==''){
           alert('Please Enter both mobile no.');
           $(this).prop('checked', false);
       }
        
  
   });

});

</script>

<script>
    $(document).ready(function(){
        $('#error').html(" ");
$('#register-form').validate({
    rules: {
        father_mobile: {
            digits: true,
            minlength: 10,
            maxlength: 10,
        },
        mother_mobile: {
        
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

submitHandler: function(form) {
    
    loder(true)
    $.ajax({
        type: "POST",
         url: "<?php echo base_url().'authentication/insert_register';?>",
         data: new FormData(form),
        processData: false,
        contentType: false,
        cache: false,
        async: false,
        dataType: "json",
        success: function(response) {     
            loder(false)
            if(response.errors !=''){
               
                toastr.error(response.errors, 'Error ', {timeOut: 5000});
            }
           else if(response.result==true){
              
                window.location = "<?php echo base_url().'otp-varification';?>";
            }else{
                $.each(response, function(key, value) {
                    $('#' + key).parents('.form-group').find('#error').html(value);
                });
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