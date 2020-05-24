<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $title;?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="target-densitydpi=device-dpi, initial-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/font/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/slick.css">
    <link href="<?php echo base_url();?>assets/css/toastr.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/lightbox.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/career.css">
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
    <?php $this->load->view('includes/pre-loader.php'); ?>
    <!-- end header -->
    <div class="content"></div>
    <section class="comon-back-ground ">
        <div class="container-fluide">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="about-banner career-il">
                        <h5><?php echo $result['job_title'] ?></h5>
                        <div class="job-meta">
                        <span class="job-degree"> 
                            <i class="far fa-clock"></i> <?php echo $result['job_type'] ?>
                        </span>
                        <span class="job-degree"> 
                            <i class="fa fa-graduation-cap"></i><?php echo $result['qualification'] ?>
                        </span>
                        <span class="job-degree"> 
                            <i class="fa fa-coffee"></i><?php echo $result['experience'] ?>
                        </span>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <section class="sec-top">
        <div class="container-fluide">
            <div class="row">
                <div class="col-xl-9 col-lg-9 col-md-8 col-sm-12 col-12">
                    <div class="job-details-career">
                        <h5>Qualification</h5>
                        <p><?php echo $result['qualification'] ?></p>
                        <div class="skills">
                            <h5> Skills Required</h5>
                            <p><?php echo $result['job_skill'] ?></p>
                        </div>
                        <h5 style="color: #000">Responsibility</h5>
                        <p><?php echo $result['job_responsibility'] ?></p>
                       
                        <p><strong>Job Requirements :</strong></p>
                        <p>
                        <?php echo $result['job_requirement'] ?>
                        </p>
                        <p><strong>Job Description :</strong></p>
                       
                        <p>
                        <?php echo $result['job_description'] ?>
                        </p>
                       

                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <div id="sticker" class="d-none  d-md-block">
                        <h5>Apply Your Job</h5>
                        <p>Build your career with us, to apply your job</p>
                        <button class="btn btn-default btn-career1 apply" data-toggle="modal" data-target="#myModal"  data-option="<?php echo $result['job_title']?>">Click Here</button>
                    </div>
                    <div id="" class="apply-now d-block d-md-none">
                        <h5>Apply Your Job</h5>

                        <p>Build your career with us, to apply your job</p>
                        <button class="btn btn-default btn-career1 apply" data-toggle="modal" data-target="#myModal"  data-option="<?php echo $result['job_title'] ?>">Click Here</button>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- The Modal -->
    <div class="modal fade model-form" id="myModal">
        <div class="modal-dialog modal-dialog-centered modal-dialog md-form">
            <div class="modal-content mc-form">
                <!-- Modal Header -->
                <div class="modal-header mh-form">
                    <h4 class="modal-title mt-form">Submit Your Details</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body mb-form">
                    <form action="<?php echo base_url('home/apply_job');?>" method="POST" enctype="multipart/form-data" id="contact-form">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group jj-career">
                                    <label for="car_name">Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Your Name" id="name" name="name" required>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group jj-career">
                                    <label for="car_email">Email</label>
                                    <input type="email" class="form-control" placeholder="Enter Your Email" id="email" name="email" required>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group jj-career">
                                    <label for="car_phone">Phone Number</label>
                                    <input type="number" class="form-control" placeholder="Enter Your Number" id="phone" name="phone" required>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group jj-career">
                                    <label for="car_gender">Gender</label>
                                    <select class="form-control" id="gender" name="gender" required>
                                        <option selected disabled >--Select Gender--</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                       
                                      </select>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group jj-career">
                                    <label for="car_exp">No of Experience</label>
                                    <input type="text" class="form-control" placeholder="No of Experience" id="experience" name="experience" required>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group jj-career">
                                    <label for="car_current_com">Current Company</label>
                                    <input type="text" class="form-control" placeholder="Current Company" id="company" name="company" required>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group jj-career">
                                    <label for="car_des">Current Designation</label>
                                    <input type="text" class="form-control" placeholder="Current Designation" id="designation" name="designation" required>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12" id="imgfile">
                                <div class="form-group jj-career">
                                    <label for="car_cv">Upload Cv</label>
                                    <input type="file" class="form-control" placeholder="Enter Your Name" id="resume" name="resume" required>
                                    <span style="color: red">Only PDF|Docx files are allowed*</span>
                                </div>
                                <input type="hidden" id="job_title" name="job_title">
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2 jj-career"><input type="text"
                                    class="form-control" placeholder="Enter captcha" name="captcha" id="captcha"> <i
                                    style="font-size:13px;color:red" class="text-danger" id="errorCaptcha"></i></div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-8 col-12 mb-2"><span
                                    class="image"><?php echo $captcha;?> </span> <a class="refresh"
                                    href="javascript:void(0)"><i class="fas btn fa-sync-alt"></i> </a></div>

                           
                            <input type="hidden" id="recaptchaCode"
                                value="<?php echo$this->session->userdata('captchaCode');?>">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <button type="submit" class="sub-btn">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/toastr.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/preloader.js"></script>
    <script>
    // Scroll Event
    $(window).on('scroll', function() {
        var scrolled = $(window).scrollTop();
        if (scrolled > 300) $('.go-top').addClass('active');
        if (scrolled < 300) $('.go-top').removeClass('active');
    });

    </script>
    <script>
     window.onscroll = function() {myFunction()};
        var navheader = document.getElementById("navhead");
        var sticky = navheader.offsetTop;
        function myFunction() {
        if (window.pageYOffset > sticky) {
            navheader.classList.add("stick");
        } else {
            navheader.classList.remove("stick");
        }
        }
    </script>

    <script>
        $(document).ready(function() {
            var stickyTop = $('#sticker').offset().top;

            $(window).scroll(function() {
                var windowTop = $(window).scrollTop();

                if (stickyTop < windowTop) {
                    $('#sticker').css({
                        "position": "fixed",
                        "top": "0",
                        "width": "20%",
                        "margin-top": "8%",
                    });
                } else {
                    $('#sticker').css({
                        "position": "relative",
                        "top": "unset",
                        "width": "auto",
                    });
                }
            });
        });
    </script>

    <script>
    //
    $('.apply').click(function() {
        var value = $(this).attr('data-option');

        $('#job_title').val(value);
    })

    </script>
     <script>
     $("#contact-form").submit(function(e) {
        var recaptchaCode = $('#recaptchaCode').val();

        var enterCaptchaCode = $('#captcha').val();
        if (recaptchaCode != enterCaptchaCode) {
            e.preventDefault();
            $('#errorCaptcha').html('Invalid Captcha');
        } else {
            $('#errorCaptcha').html('Invalid Captcha');
        }
    });
    $(function() {
        $('.refresh').click(function() {
            loder(true)
            $.ajax({
                type: 'POST',

                url: '<?php echo base_url()?>home/refresh_captcha',
                dataType: 'json',
                success: function(data) {

                    if (data) {
                        $('.image').html(data.captcha);
                        $('#recaptchaCode').val(data.code);
                        loder(false)
                    }
                }
            });
        });
    });






    $('#contact-form').submit(function(e) {

e.preventDefault();
var name = $('#name').val();
var email = $('#email').val();
var phone = $('#phone').val();
var gender = $('#gender').val();
var experience = $('#experience').val();
var company = $('#company').val();
var designation = $('#designation').val();
 
var resume =    $("#resume")[0].files.length;
var $el = $('#imgfile');
var recaptchaCode = $('#recaptchaCode').val();
var enterCaptchaCode = $('#captcha').val();

if (name != '' && email != '' && phone != '' && recaptchaCode == enterCaptchaCode && gender !='' && experience !='' && company !='' && resume >0) {
   loder(true)
    $.ajax({
        type: "POST",
        url: "<?php echo base_url().'home/apply_job';?>",
        data: new FormData(this),
        processData: false,
        contentType: false,
        cache: false,
        async: false,
        dataType: "json",
        success: function(response) {
            loder(false)
            if (response ==true) {
                $('#name').val('');
                $('#email').val('');
                $('#phone').val('');
                $('#experience').val('');
                $('#company').val('');
                $('#designation').val('');
                $('.refresh').click();
                $('#captcha').val('');
               $('#errorCaptcha').html('');
               $el.wrap('<form>').closest(
                    'form').get(0).reset();
                $el.unwrap();
                $('#myModal').modal('hide');
                toastr.success('Your have applied successfully! ', 'Success ', {timeOut: 5000});
            }else{
                toastr.error(response, 'Error ', {timeOut: 5000});
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

    </script>
     <script>
           <?php $this->load->view('includes/message.php'); ?>
    </script>
</body>

</html>