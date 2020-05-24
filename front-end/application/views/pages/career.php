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
    <div class="content"> </div>
        <div class="back-gray ">
            <section class="comon-back-ground" style="position:relative">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="about-banner text-center">
                                <h5>Career</h5>
                                <p><a href="<?php echo base_url();?>">Home -</a>Career</p>
                            </div>
                        </div>
                    </div>
                </div>
        
            </section>
            <section class="sec-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                            <div class="business">
                                <h6>Success is Where Preparation and Opportunity Meet.<b style="color: #393186 ;"> Grab the
                                        Opportunity Now.</b> Be a part of rapidly growing organization in Bangalore.</h6>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                            <div class="business-text">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                    dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                                    nascetur ridiculus mus. Donec quam felis, ultricies nec,
                                    pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo,
                                    fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet
                                    a, venenatis vitae, justo.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
   
    <section class="sec-top">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="title-heading">
                        <h5>Contact Us</h5>
                        <h6>Open Job Opportunity</h6>
                        <p>Richard McClintock, a Latin scholar from Hampden-Sydney College, is credited with discovering
                            the source behind the ubiquitous.</p>
                    </div>
                </div>
            </div>
           
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <?php     if(!empty($result)){ foreach($result as $key=>$value){?>
                        
                    <div class="panel panel-default pannel-edit ">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <div class="row">
                                <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-12">
                                    <p class="accordion job-heading " data-toggle="collapse"
                                        href="#collapseOne1<?php echo $value->id ?>" aria-expanded="false"
                                        aria-controls="collapseOne"> <?php echo $value->job_title ?> <span>Click
                                            Here</span></p>
                                    <div class="job-meta">
                                        <span class="job-degree">
                                            <i class="far fa-clock"></i> <?php echo $value->job_type ?>
                                        </span>
                                        <span class="job-degree">
                                            <i class="fa fa-graduation-cap"></i><?php echo $value->qualification ?>
                                        </span>
                                        <span class="job-degree">
                                            <i class="fa fa-coffee"></i><?php echo $value->experience ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                    <button class="btn btn-default btn-career2 apply" data-toggle="modal"
                                        data-target="#myModal" data-option="<?php echo $value->job_title ?>">Apply Now</button>
                                </div>
                            </div>

                        </div>
                       
                        <div id="collapseOne1<?php echo $value->id ?>" class="panel-collapse collapse gg-col"
                            role="tabpanel" aria-labelledby="headingOne" style="height: 0px;">

                            <div class="panel-body gg-job">
                             <?php echo $value->job_description; ?>

                                <a class="btn-more" href="<?php echo base_url().'career-detail/'.$value->uniq ?>">View
                                    More &nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </div>

                        </div>

                    </div>
                    <?php }} ?>



                </div>

                <!-- form -->

            </div>
        </div>

    </section>



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
                    <form action="<?php echo base_url('home/apply_job');?>" method="POST" enctype="multipart/form-data"
                        id="contact-form">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group jj-career">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Your Name" id="car_name"
                                        name="name" required>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group jj-career">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" placeholder="Enter Your Email"
                                        id="email" name="email" required>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group jj-career">
                                    <label for="phone">Phone Number</label>
                                    <input type="number" class="form-control" placeholder="Enter Your Number"
                                        id="phone" name="phone" required minlength="10" maxlength="10">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group jj-career">
                                    <label for="car_gender">Gender</label>
                                    <select class="form-control" id="gender" name="gender" required>
                                        <option selected disabled>--Select Gender--</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group jj-career">
                                    <label for="car_exp">No of Experience</label>
                                    <input type="text" class="form-control" placeholder="No of Experience" id="experience"
                                        name="experience" required>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group jj-career">
                                    <label for="car_current_com">Current Company</label>
                                    <input type="text" class="form-control" placeholder="Current Company"
                                        id="company" name="company" required>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group jj-career">
                                    <label for="car_des">Current Designation</label>
                                    <input type="text" class="form-control" placeholder="Current Designation"
                                        id="designation" name="designation" required>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12" id="imgfile">
                                <div class="form-group jj-career">
                                    <label for="car_cv">Upload Cv</label>
                                    <input type="file" class="form-control" name="resume" id="resume" 
                                        accept=" .docx,.doc,.ppt, .pptx,.pdf" required>
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
    <script src="<?php echo base_url();?>assets/js/slick.js"></script>
    <script src="<?php echo base_url();?>assets/js/script.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/toastr.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/preloader.js"></script>
    <script>
    // header-fixed
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
    // Scroll Event
    $(window).on('scroll', function() {
        var scrolled = $(window).scrollTop();
        if (scrolled > 300) $('.go-top').addClass('active');
        if (scrolled < 300) $('.go-top').removeClass('active');
    });
    // Click Event
    $('.go-top').on('click', function() {
        $("html, body").animate({
            scrollTop: "0"
        }, 500);
    });
    </script>
 
    <script>
    $('.panel-title > a').click(function() {
        $(this).find('i').toggleClass('fa-plus fa-minus')
            .closest('panel').siblings('panel')
            .find('i')
            .removeClass('fa-minus').addClass('fa-plus');
    });
    </script>
    <script>
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
        //prevent dropdown on click
        $('.dropdown a').on('click', function(event){
        event.stopPropagation();
        });
        $('ul.dropdown-menu .dropdown').on('click', function(event){
        event.stopPropagation();
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