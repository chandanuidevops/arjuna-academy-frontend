
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
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url();?>assets/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url();?>assets/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url();?>assets/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>assets/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114"
        href="<?php echo base_url();?>assets/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120"
        href="<?php echo base_url();?>assets/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144"
        href="<?php echo base_url();?>assets/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152"
        href="<?php echo base_url();?>assets/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180"
        href="<?php echo base_url();?>assets/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"
        href="<?php echo base_url();?>assets/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url();?>assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url();?>assets/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url();?>assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo base_url();?>assets/img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo base_url();?>assets/img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <style>
    a:hover {
        text-decoration: none;
    }

    .adm-btn:hover {
        text-decoration: none;
        color: white;
        background: black;
    }

    .admission-link {
        text-align: center;

    }
    </style>
</head>

<body>
<?php $this->load->view('includes/pre-loader.php'); ?>
    <!-- header -->
    <?php $this->load->view('includes/header');?>
    <!-- end header -->
    <!-- banner-slider -->
    <section style="position: relative;" class="content">
        <div class="banner-slider">

            <?php if(!empty($banner)){ foreach($banner as $key=>$value){?>

            <div class="banner-list">
                <img src="<?php echo $value->banner_thumb;?>" class="img-responsive img-fluide" alt="">

                <?php if(!empty($value->video)){?>
                <div class="video-testi-banner">
                    <iframe class="embed-responsive-item v-banner" src="<?php echo $value->video;?>"
                        allowfullscreen></iframe>
                </div>
                <?php }?>

            </div>
            <?php }}?>



        </div>

    </section>

    <section class="mar-three  d-sm-block">
        <div class="container p-sm-0">
            <div class="bg-green-clip dd-start">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-7 col-7 pr-0 ">

                        <div class="align-inner">
                            <p class="  d-sm-block"><i class="fas fa-quote-left quotes"></i> 
                            <!-- You can be one   such    achiever too!!!. Enroll & qualify in the entrance test & be privileged to get    trained by
                                the smartest IITans, NITans & NEET Toppers. -->
                                You can be one such achiever too!!!. Enroll for Vrddhi, perform, get scholarship & be privileged to get trained by the smartest IITans, NITans & NEET Toppers.
                                <i class="fas fa-quote-right quotes"></i>
                            </p>
                        </div>

                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-5 col-5 pl-0 bg-right-img">
                        <div class="align-inner">
                            <a href="<?php echo base_url('start-test');?>" class="start-btn">
                                Start Test
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sec-top">
        <div class="container-fluide">
            <div class="row">
                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12">
                    <div class="about-us">
                        <h6>Welcome</h6>
                        <h4>About Us </h4>
                        <img src="<?php echo base_url();?>assets/img/dot-icon.png" class="img-responsive" alt="">
                        <p>Arjunaa Academy for Achievers(AAA) is a premier and a leading coaching institute for the
                            preparation of JEE (Main+Advanced), JEE (Main), Pre-Medical (NEET-UG), KVPY, Pre-Nurture &
                            Career Foundation (Class VIII to X, NSTSE & Olympiads) & Boards(CBSE, ICSE & State) in
                            Bangalore, India. The Institute is well regarded for the high-quality entrance exams & Board
                            exams preparation and produces best results year after year. Ever since the inception in
                            2012, Arjunaa Academy for Achievers (AAA) focusses on building a strong foundation of
                            knowledge and concepts, instilling a vigor for research in the students.
                        </p>
                        <a href="<?php echo base_url('about-us');?>" class="btn-more">Read More</a>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12">
                    <div class="about-img">
                        <img src="<?php echo base_url();?>assets/img/home-about.jpg" class="img-responsive img-fluide"
                            alt="">
                    </div>
                </div>
            </div>
    </section>

    <section class="sec-top">
        <div class="container-fluide">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="our-teacting">
                        <h5>Why choose Arjunaa Academy for Achievers?</h5>
                        <!-- <p>Richard McClintock, a Latin scholar from Hampden-Sydney College, is credited with discovering the source behind the ubiquitous Richard McClintock, a Latin scholar from Hampden-Sydney College, is credited with discovering the source
                            behind the ubiquitous filler text</p> -->
                    </div>
                    <div class="benefits-detail">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-16 col-sm-6 col-12">
                                <div class="ben-list">
                                    <p><span class="span-icon"><i
                                                class="fas fa-user-graduate"></i></span><span><b>Quality Education -</b>
                                            Overall development of the child in terms of both competence &
                                            character.</span></p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-16 col-sm-6 col-12">
                                <div class="ben-list">
                                    <p><span class="span-icon"><i class="fas fa-headset"></i></span><span><b>24/7 -</b>
                                            24/7 support for doubt clarification, both online & offline.</span></p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-16 col-sm-6 col-12">
                                <div class="ben-list">
                                    <p><span class="span-icon"><i class="fas fa-search"></i></span><span><b>Research
                                                -</b> Kindling the spark of research & innovation in the
                                            children.</span></p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-16 col-sm-6 col-12">

                                <div class="ben-list">
                                    <p><span class="span-icon"><i
                                                class="fas fa-user-tie"></i></span><span><b>Personalised Training
                                                -</b> Customized training based on the competence of the child.</span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-16 col-sm-6 col-12">
                                <div class="ben-list">
                                    <p><span class="span-icon"><i
                                                class="fas fa-chalkboard-teacher"></i></span><span><b>Faculty -</b>
                                            Passionate faculty from IITs, NITs & NEET Toppers with rich corporate
                                            experience too.</span></p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-16 col-sm-6 col-12">
                                <div class="ben-list">
                                    <p><span class="span-icon"><i
                                                class="fas fa-chalkboard-teacher"></i></span><span><b>Individual
                                                mentorship -</b>
                                            Mentoring, even in a professional environment is a personal experience at
                                            AAA.</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="why-choose">
                        <img src="<?php echo base_url();?>assets/img/core-value.png" class="img-responsive img-fluide"
                            alt="">
                        <div class="para-detail">
                            <h5>Our core values</h5>
                            <ol class="value-list">
                                <li>Tell them, they forget. Show them, they remember. Involve them, they understand &
                                    this is what we do at Arjunaa Academy for Achievers.</li>
                                <li>Your child's dream becomes our commitment</li>
                                <li>Treating students like professionals & caring for them like parents.</li>
                            </ol>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class=" back-img123 ">
        <div class="dd">
            <div class="row">
                <div class="col-xl-7 col-lg-5 col-md-7 col-sm-12 col-12">
                    <div class="total-path">
                        <div class="title-form">
                            <h5>Admission Enquiry Form</h5>

                        </div>
                        <div class="form-course">
                            <form action="<?php echo base_url().'home/apply_course';?>" method="POST" id="contact-form">
                                <p>Fill in the details. Our customer support team will get back to you soon.</p>
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="form-group fg">
                                            <label class="lable-pp">Name<span>*</span></label>
                                            <input type="text" class="form-control" placeholder="Enter Your Name"
                                                name="name" required="">
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="form-group fg">
                                            <label class="lable-pp">Email<span>*</span></label>
                                            <input type="email" class="form-control" placeholder="Enter Your Email"
                                                name="email" required="">
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="form-group fg">
                                            <label class="lable-pp">Phone<span>*</span></label>
                                            <input type="text" class="form-control" placeholder="Enter Your Phone"
                                                name="phone" required="" maxlength="10" minlength="10">
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="form-group fg">
                                            <label class="lable-pp">Courses<span>*</span></label>
                                            <select class="form-control" id="sel1" name="course" required>
                                                <option value="" selected disabled>---Select Course---</option>
                                                <?php if(!empty($courses)){foreach($courses as $key=>$value){ ?>
                                                <option value="<?php echo $value->course;?>">
                                                    <?php echo $value->course;?></option>

                                                <?php }}?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-6 col-12">
                                        <div class="form-group fg">
                                            <label class="lable-pp">Location<span>*</span></label>
                                            <input type="text" class="form-control" placeholder="Enter Your Location"
                                                id="location" name="location" required="">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group fg">
                                            <label class="lable-pp">Select Your Request<span>*</span></label>
                                        </div>
                                        <div class="select-ration" id="myDIV">
                                            <div class="form-check-inline fg form-left">
                                                <label class="form-check-label">
                                                    <input type="radio" id="Masters-button"
                                                        class="form-check-input  hidden" name="optradio" checked
                                                        value="Call Back">
                                                    <h5 class="btn-sel act call-back">Call Back</h5>
                                                </label>
                                            </div>
                                            <div class="form-check-inline fg form-left">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input hidden" name="optradio"
                                                        value="Home Visit">
                                                    <h5 class="btn-sel appointment">Home Visit</h5>
                                                </label>
                                            </div>
                                            <div class="form-check-inline fg form-left">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input hidden" name="optradio"
                                                        value="Visit Our Center">
                                                    <h5 class="btn-sel visit-center">Visit Our Center</h5>
                                                </label>
                                            </div>
                                            <div class="form-check-inline fg form-left">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input hidden" name="optradio"
                                                        value="Connect Online">
                                                    <h5 class="btn-sel conline">Connect Online</h5>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="app-ff">

                                            <div class="row">
                                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-8">
                                                    <div class="form-group fg">
                                                        <label class="lable-pp">Date<span>*</span></label>
                                                        <input type="date" class="form-control" id="app-date"
                                                            name="date" required>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-8">
                                                    <div class="form-group fg">
                                                        <label class="lable-pp">Time<span>*</span></label>
                                                        <input type="time" class="form-control" placeholder="" id="time"
                                                            name="time" required>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-8">
                                                    <div class="form-group fg voc">
                                                        <label class="lable-pp">Branch<span>*</span></label>
                                                        <select class="form-control" id="sel2" name="branch">

                                                            <option value="" selected disabled> -- Select Branch --
                                                            </option>
                                                            <option Vijaynagar="Vijaynagar"> Vijaynagar</option>
                                                            <option value="Hebbal"> Hebbal</option>
                                                            <option value="Kanakapura Road"> Kanakapura Road</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group fg">
                                            <p class="please-para cb">Please give us your comfortable time to contact
                                                you</p>
                                            <p class="please-para hv">Please provide the address where you would like
                                                our executive to meet you</p>
                                            <p class="please-para con">Please provide us the details to connect online
                                            </p>
                                            <textarea class="form-control" name="message"
                                                id="exampleFormControlTextarea1" placeholder="Please Enter Details"
                                                rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="row">

                                            <div class="col-sm-6 fg"> <input type="text" class="form-control"
                                                    placeholder="Enter captcha" name="captcha" id="captcha1" required>
                                                <i style="font-size:13px;color:red" class="text-danger"
                                                    id="errorCaptcha1"></i></div>
                                            <div class="col-sm-6"> <span class="image"><?php echo $captcha;?> </span> <a
                                                    class="refresh" href="javascript:void(0)"><i
                                                        class="fas btn fa-sync-alt"></i> </a></div>
                                            <input type="hidden" id="recaptchaCode1"
                                                value="<?php echo$this->session->userdata('captchaCode');?>">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <button id="submit-value" name="submit" type="submit"
                                                class="btn-view">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12">
                    <div class="start-learn">
                        <h5>
                            START LEARNING
                        </h5>
                        <h3>Admission Open For 2020 - 2021 </h3>
                        <a href="<?php echo base_url('assets/pdf/brochure.pdf');?>" class="tran-get"
                            target="_blank">Download Brochure</a>
                        <a href="<?php echo base_url('contact-us');?>" class="tran-get sig-hl" data-toggle="modal"
                            data-target="#exampleModalCenter">Admission Form</a>
                    </div>
                </div>

                <!-- admission popup -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content mc">
                            <div class="modal-header mh">
                                <div class="form-login">
                                    <h5 style="font-size: 15px;font-weight: 700;text-align:center">Select Admission Type
                                    </h5>
                                    <p style="font-size: 13px;text-align:center">Richard McClintock, a Latin scholar
                                        from Hampden-Sydney College, is credited with discovering
                                        the source behid</p>
                                </div>
                                <a class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true" class="close-g">&times;</span>
                                </a>
                            </div>
                            <div class="modal-body mb-online">
                                <div class="admission-link">
                                    <a href="<?php echo base_url().'online-admission';?>" class="adm-btn">Online
                                        Admission for Class 8, 9 & 10</a>
                                    <a href="<?php echo base_url().'online-admission-puc';?>" class="adm-btn">Online
                                        Admission for Class 11 or 1st PUC</a><br />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="sec-top sec-ool">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="title-heading">
                        <h5>Courses Offered</h5>

                    </div>
                </div>
            </div>
            <div class="course-slider">
                <?php  if(!empty($courses)){ foreach($courses as $key=>$value){ if($value->top_course==1){?>
                <div class="course-list">
                    <div class="course-dd">
                        <img src="<?php echo base_url().$value->image_thumb;?>" class="img-responsive img-fluide"
                            alt="">

                    </div>
                    <div class="course-para">
                        <h6><?php echo (!empty($value->course))?$value->course:'' ; ?></h6>
                        <div class="top-course-para eclipse">
                            <?php echo (!empty($value->description))?$value->description:'' ;?>
                        </div>
                    </div>
                    <div class="apply-d">
                        <a href="<?php echo base_url().'course/'.$value->slug ?>">View
                            Course</a>
                    </div>
                </div>

                <?php }}}?>


            </div>
            <!-- <center><a href="#" class="btn-view">View More</a></center> -->
        </div>
    </section>

    <section class="sec-top gray-back">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="title-heading">
                        <h5>Testimonials</h5>
                        <p>Testimonials describe what has been, & are a promise of what is to come</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-slider">
                <div class="testi-list">
                    <!-- <img src="<?php echo base_url();?>assets/img/testimonial/testimonial1.png"
                        class="img-responsive img-fluide" alt=""> -->
                    <iframe class="test-video" src="https://www.youtube.com/embed/S9Z9BR_KAz4?rel=0&amp;autoplay=1&mute=1&loop=1&playlist=S9Z9BR_KAz4" allowfullscreen
                        width="100%"></iframe>
                </div>
                <div class="testi-list-test">
                    <img src="<?php echo base_url();?>assets/img/testimonial/ghanshyam.png" class="img-responsive tes-o"
                        alt="">
                    <h5>GHANSHYAM PARMAR , <i>Student</i></h5>
                    <p>It's a fantastic place to learn. Here teachers make sure you understand the concepts and excel in
                        it. Regular lab sessions and tests are conducted to enrich student's qualities. A place like
                        Arjunaa Academy, you not only get towards academics, but also learn cultural and moral values.
                        The best place I've experienced to spend quality time in learning.
                    </p>
                </div>
                <div class="testi-list-test">
                    <img src="<?php echo base_url();?>assets/img/testimonial/malini.png" class="img-responsive tes-o"
                        alt="">
                    <h5>MALINI MARIA, <i>Principal Vedanta PU College</i></h5>
                    <p>AAA is one of the best coaching institute with dedicated faculty team, provide individual
                        attention and intense focus on overall development of students. My heartful thanks to the entire
                        team of AAA for their unconditional contribution, commitment and enduring service since 2017.
                    </p>
                </div>

                <div class="testi-list-test">
                    <img src="<?php echo base_url();?>assets/img/testimonial/vinyas.png" class="img-responsive tes-o"
                        alt="">
                    <h5>VINYAS SATHISH, <i>Student</i></h5>
                    <p>AAA although not familiar to everyone is very good. I feel its not about popularity, we should
                        see how good the teachers are qualified & how they respond to our doubts. These things are
                        available here. I feel very confidently that I am going to achieve my goal because of the
                        confidence built by AAA in me.
                    </p>
                </div>

                <div class="testi-list-test">
                    <img src="<?php echo base_url();?>assets/img/testimonial/laxami.png" class="img-responsive tes-o"
                        alt="">
                    <h5>Y. L. LAKSHMI NIRANJAN, <i>Principal, Shree Saraswathi Vidya Mandir</i></h5>
                    <p>AAA although not familiar to everyone is very good. I feel its not about popularity, we should
                        see how good the teachers are qualified & how they respond to our doubts. These things are
                        available here. I feel very confidently that I am going to achieve my goal because of the
                        confidence built by AAA in me.
                    </p>
                </div>

                <div class="testi-list-test">
                    <img src="<?php echo base_url();?>assets/img/testimonial/greeshma.png" class="img-responsive tes-o"
                        alt="">
                    <h5>GREESHMA SHARMA, <i>Student</i></h5>
                    <p>The best part of Arjunaa Academy is undoubtedly the Teachers, who are constantly guiding,
                        supporting and encouraging us. It is inspiring to hear from them their own success stories and
                        their vision for us. Also, the moral values imparted to us have changed us for the better, so I
                        absolutely recommend Arjunaa Academy for anyone aiming for success.
                    </p>
                </div>

                <div class="testi-list-test">
                    <img src="<?php echo base_url();?>assets/img/testimonial/diwakar.png" class="img-responsive tes-o"
                        alt="">
                    <h5>DIWAKAR R, <i>Secretary - SSRPEC Trust</i></h5>
                    <p>We choose to learn from the best. When it comes to learning we see the skill, humbleness, passion
                        and teaching methodologies which are all part of AAA team. It gives me immense pleasure to be
                        associated with them for our academic journey.
                    </p>
                </div>

                <div class="testi-list-test">
                    <img src="<?php echo base_url();?>assets/img/testimonial/saurabh.png" class="img-responsive tes-o"
                        alt="">
                    <h5>SOURABH HIREMATH, <i>Student</i></h5>
                    <p>The teachers make sure you have understood the topics clearly. Till now I have never seen any
                        teacher who stays in the centre till 9pm for doubt clarification and answering our doubts on
                        whatsapp at 11pm-12pm. This act by our teachers has made me more determined. All the teachers
                        are from elite institutes like IIT and NIT. The teaching is very good and If we follow their
                        words success is assured.
                    </p>
                </div>

                <div class="testi-list-test">
                    <img src="<?php echo base_url();?>assets/img/testimonial/satya.png" class="img-responsive tes-o"
                        alt="">
                    <h5>H. SATYAPRASAD, <i>Principal, Vijaya Vittala PU College</i></h5>
                    <p>Arjunaa Academy for Achievers is one of the most committed coaching institutes that I have ever
                        come across. All scholars from IITs & NITs, the entire team has a unique blend of in-depth
                        knowledge & extra-ordinary teaching skills that help the students grasp tough concepts & learn
                        problem solving skills very easily.
                    </p>
                </div>

                <div class="testi-list-test">
                    <img src="<?php echo base_url();?>assets/img/testimonial/laquita.png" class="img-responsive tes-o"
                        alt="">
                    <h5>LAQUETA NAG, <i>Student</i></h5>
                    <p>Arjunaa Academy is the best place I could have come to.The teachers ,all from IIT's and NIT's
                        ,are ever ready to help us, and sacrifice their time to clear our doubts. Apart from it teachers
                        also provide a lot of motivation and encouragement, and great moral values . I would recommend
                        everyone looking for success to join.
                    </p>
                </div>

               

            </div>
            <!-- <center><a href="#" class="btn-view">View More</a></center> -->
        </div>
    </section>

    <section class="sec-top">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="title-heading">
                        <h5>Top Achievers</h5>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="achiver-detail">
                <div class="course-ff d-flex justify-content-center">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="pill" href="#jee">JEE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#neet">NEET</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#k-cet">K-CET</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#nstse">NSTSE</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane container active" id="jee">
                        <div id="blogCarousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                                            <div class="std-dd">
                                                <img src="<?php echo base_url();?>assets/img/rank/nuthan-jee.png"
                                                    class="img-responsive" alt="">
                                                <h5>Nuthan Kumar .S</h5>
                                                <p class="rank-home ">99.71 Percentile</p>
                                                <p class="rank-home123 ">NITK,  CSE</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                                            <div class="std-dd">
                                                <img src="<?php echo base_url();?>assets/img/rank/rahul-jee.png"
                                                    class="img-responsive" alt="">
                                                <h5>Rahul .V</h5>
                                                <p class="rank-home "> 99.44 Percentile </p>
                                                <p class="rank-home123 ">NITK, ECE </p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                                            <div class="std-dd">
                                                <img src="<?php echo base_url();?>assets/img/rank/abhinav-jee.png"
                                                    class="img-responsive" alt="">
                                                <h5>Abhinav </h5>
                                                <p class="rank-home ">99.24 Percentile </p>
                                                <p class="rank-home123 ">IIT Kharagpur</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                                            <div class="std-dd">
                                                <img src="<?php echo base_url();?>assets/img/rank/praharaj-jee.png"
                                                    class="img-responsive" alt="">
                                                <h5>Praharaj Ipsita</h5>
                                                <p class="rank-home ">99.15 Percentile </p>
                                                <p class="rank-home123 ">IIT Kharagpur</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <center><a href="<?php echo base_url().'jee-top-achievers';?>" class="btn-view">View More</a>
                        </center>
                    </div>


                    <div class="tab-pane container fade" id="neet">
                        <div id="blogCarousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                                            <div class="std-dd">
                                                <img src="<?php echo base_url();?>assets/img/rank/prajna-neet.png"
                                                    class="img-responsive" alt="">
                                                <h5>Prajna Prabhu</h5>
                                                <p class="rank-home ">Rank - 162</p>
                                                <p class="rank-home123 ">BMC</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                                            <div class="std-dd">
                                                <img src="<?php echo base_url();?>assets/img/rank/fathima-neet.png"
                                                    class="img-responsive" alt="">
                                                <h5>Fathima</h5>
                                                <p class="rank-home ">Rank - 457</p>
                                                <p class="rank-home123 ">BMC</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                                            <div class="std-dd">
                                                <img src="<?php echo base_url();?>assets/img/rank/chirag-neet.png"
                                                    class="img-responsive" alt="">
                                                <h5>Chirag .B.K</h5>
                                                <p class="rank-home ">Rank - 770</p>
                                                <p class="rank-home123 ">Hassan Medical College</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                                            <div class="std-dd">
                                                <img src="<?php echo base_url();?>assets/img/rank/namratha-neet.png"
                                                    class="img-responsive" alt="">
                                                <h5>Namratha</h5>
                                                <p class="rank-home ">Rank - 1193</p>
                                                <p class="rank-home123 ">KIMS</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                          
                            </div>
                        </div>
                              <center><a href="<?php echo base_url().'neet-top-achievers';?>" class="btn-view">View More</a>
                        </center>
                    </div>
                    <div class="tab-pane container fade" id="k-cet">
                        <div id="blogCarousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                                            <div class="std-dd">
                                                <img src="<?php echo base_url();?>assets/img/rank/prajwal-kcet.png"
                                                    class="img-responsive" alt="">
                                                <h5>Prajwal Y. R.</h5>
                                                <p class="rank-home ">Rank 57</p>
                                                <p class="rank-home123 ">RVCE, CSE</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                                            <div class="std-dd">
                                                <img src="<?php echo base_url();?>assets/img/rank/srinidhi-kcet.png"
                                                    class="img-responsive" alt="">
                                                <h5>Srinidhi</h5>
                                                <p class="rank-home ">Rank 81</p>
                                                <p class="rank-home123 ">SJCE, CSE</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                                            <div class="std-dd">
                                                <img src="<?php echo base_url();?>assets/img/rank/nuthan-kcet.png"
                                                    class="img-responsive" alt="">
                                                <h5>Nuthan Kumar .S</h5>
                                                <p class="rank-home ">Rank 104</p>
                                                <p class="rank-home123 ">NITK, CSE</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                                            <div class="std-dd">
                                                <img src="<?php echo base_url();?>assets/img/rank/shashank-kcet.png"
                                                    class="img-responsive" alt="">
                                                <h5>Shashank Holla .S</h5>
                                                <p class="rank-home ">Rank 118</p>
                                                <p class="rank-home123 ">NITK, ECE</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <center><a href="<?php echo base_url().'kcet-top-achievers';?>" class="btn-view">View
                                        More</a></center>
                    </div>
                    <div class="tab-pane container fade" id="nstse">
                        <div id="blogCarousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                                            <div class="std-dd">
                                                <img src="<?php echo base_url();?>assets/img/rank/nuthan-ntse.png"
                                                    class="img-responsive" alt="">
                                                <h5>Nuthan Kumar S</h5>
                                                <p class="rank-home ">NSTSE </p>
                                                <p class="rank-home123 "> AIR - 81</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                                            <div class="std-dd">
                                                <img src="<?php echo base_url();?>assets/img/rank/namratha-ntse.png"
                                                    class="img-responsive" alt="">
                                                <h5>Namratha .S</h5>
                                                <p class="rank-home ">State Rank-1</p>
                                                <p class="rank-home123 ">AIR - 102</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                                            <div class="std-dd">
                                                <img src="<?php echo base_url();?>assets/img/rank/vinitha-ntse.png"
                                                    class="img-responsive" alt="">
                                                <h5>Vinitha V </h5>
                                                <p class="rank-home ">State Rank - 4 </p>
                                                <p class="rank-home123 ">City Topper</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                                            <div class="std-dd">
                                                <img src="<?php echo base_url();?>assets/img/rank/tharun-ntse.png"
                                                    class="img-responsive" alt="">
                                                <h5>Tharun .M.V.Nerendhra</h5>
                                                <p class="rank-home ">State Rank - 5</p>
                                                <p class="rank-home123 ">City Topper</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                         <center><a href="<?php echo base_url().'ntse-top-achievers';?>" class="btn-view">View
                                        More</a></center>
                    </div>
                </div>

            </div>
    </section>
    <!-- <section class="sec-top back-img">
        <div class="container-fluide">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 col-12">
                    <div class="start-learn">
                        <h3>KNOW YOUR SKILLS</h3>
                        <P>Richard McClintock, a Latin scholar from Hampden-Sydney College, is credited with discovering
                            the source behind the ubiquitous Richard McClintock, a Latin scholar from Hampden-Sydney
                            College, is credited with discovering the source
                            behind the ubiquitous filler text. In seeing a sample of lorem ipsum, his interest was
                            piqued . filler text. In seeing a sample of lorem ipsum, his interest was piqued .</P>
                        <a href="<?php echo base_url('start-test');?>" class="tran-get">Get Start Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- <section class="sec-top gray-back unset-clip">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="title-heading">
                        <h5>Our Faculty</h5>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="faculty-slider">
                <div class="faculty-list">
                    <div class="img-fac">
                        <img src="<?php echo base_url();?>assets/img/faculty/faculty1.png"
                            class="img-responsive img-fluide" alt="">
                    </div>
                    <div class="fac-para">
                        <h5>Karthik Mano.pk</h5>
                        <p>Managing Director</p>
                        <p class="detail-para">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo dolorem veritatis dolorum
                            consequuntur optio. Officiis at earum minus quas dolore, quaerat
                        </p>
                    </div>
                </div>
                <div class="faculty-list">
                    <div class="img-fac">
                        <img src="<?php echo base_url();?>assets/img/faculty/faculty2.png"
                            class="img-responsive img-fluide" alt="">
                    </div>
                    <div class="fac-para">
                        <h5>Karthik Mano.pk</h5>
                        <p>Managing Director</p>
                        <p class="detail-para">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo dolorem veritatis dolorum
                            consequuntur optio. Officiis at earum minus quas dolore, quaerat
                        </p>
                    </div>
                </div>
                <div class="faculty-list">
                    <div class="img-fac">
                        <img src="<?php echo base_url();?>assets/img/faculty/faculty3.png"
                            class="img-responsive img-fluide" alt="">
                    </div>
                    <div class="fac-para">
                        <h5>Karthik Mano.pk</h5>
                        <p>Managing Director</p>
                        <p class="detail-para">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo dolorem veritatis dolorum
                            consequuntur optio. Officiis at earum minus quas dolore, quaerat
                        </p>
                    </div>
                </div>
                <div class="faculty-list">
                    <div class="img-fac">
                        <img src="<?php echo base_url();?>assets/img/faculty/faculty4.png"
                            class="img-responsive img-fluide" alt="">
                    </div>
                    <div class="fac-para">
                        <h5>Karthik Mano.pk</h5>
                        <p>Managing Director</p>
                        <p class="detail-para">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo dolorem veritatis dolorum
                            consequuntur optio. Officiis at earum minus quas dolore, quaerat
                        </p>
                    </div>
                </div>

            </div>
           
        </div>
    </section> -->

    <section class="sec-top back-img">
        <div class="container-fluide">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="title-heading">
                        <h5 class="white-color">Gallery</h5>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="gallery-pp ImageContainer">
 
        <div class="container-fluide">

            <div class="gallery-slider">
            <?php 
               
               if(!empty($gallery)){ foreach($gallery as $key =>$value){ if($value->home_gallery=='1'){ ?>
              <div class="gallery-list">
                  <div class="gallery-gal">
                      <a class=" gg-hov ">
                          <div class="img-gallery gallery-img">
                              <img src="<?php echo (!empty($value->feat_thumb))?base_url().$value->feat_thumb:'---'  ?>"
                                  class="img-responsive img-fluide" alt="">
                          </div>
                          <div class="middle baguetteBoxOne ">
                              <a class="example-image-link" 
                                  href="<?php echo (!empty($value->feat_thumb))?base_url().'gallery-detail/'.$value->id:'---'  ?>">
                                  <i class="fas fa-eye icon-t"></i></a>
                          </div>
                      </a>
                  </div>
              </div>
              <?php }}}?>
            </div>
            <!-- <center><a href="" class="btn-view">View More</a></center> -->
        </div>
    </section>


    <section class="sec-top">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="title-heading">
                        <h5>Contact Us</h5>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="con-pp">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="location-0">
                            <a href="https://goo.gl/maps/pDUVxh6ZVWEanYsi6" target="_blank">
                                <i class="fas fa-map-marker-alt"></i>
                                <h6>VIJAYANAGAR</h6>
                                <p># 1230/50, A.H. Arcade, 3rd Floor, 9th Main,
                                    Vijayanagar, Bengaluru-560 040 <br>Mob: <a href="tel:+9019333101">9019333101</a>
                                </p>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="location-0">
                            <a href="https://goo.gl/maps/4oTr5ff7DCz8BVFA8" target="_blank">
                                <i class="fas fa-map-marker-alt"></i>
                                <h6>HEBBAL</h6>
                                <p># 9, 3rd Floor, Kempapura Main Road, Pampa Extension,
                                    Diagonally Opposite to Pizza Hut, Hebbal,
                                    Bengaluru, Karnataka - 560 024
                                    <br>Mob: <a href="tel:+9019333101">9019333101</a>
                                </p>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="location-0">
                            <a href="https://goo.gl/maps/ZJ6tMWSUTKQE67Vn9" target="_blank">
                                <i class="fas fa-map-marker-alt"></i>
                                <h6>KANAKAPURA ROAD</h6>
                                <p># B.M.KAVAL, AGARA,
                                    TATAGUNI POST,
                                    Kanakapura Main Road,
                                    Bangalore - 560082. <br>Mob: <a href="tel:+9019333101">9019333101</a></p>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col-xl-7 col-lg-7 col-md-9 mx-auto col-sm-9 col-12">
                        <div class="contact-get">
                            <form action="<?php echo base_url().'home/insert_home_contact';?>" method="POST"
                                id="homecontact-form">
                                
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Enter Your Name"
                                                name="name" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Enter Your Email"
                                                name="email" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Enter Your Phone"
                                                name="phone" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <select class="form-control" id="sel1" name="course" required>
                                                <option value="" selected disabled>Select Course</option>
                                                <?php if(!empty($courses)){foreach($courses as $key=>$value){ ?>
                                                <option value="<?php echo $value->course;?>">
                                                    <?php echo $value->course;?></option>

                                                <?php }}?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control"
                                                id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 col-12">
                                      
                                        <div class="row">

                                            <div class="col-sm-6"> <input type="text" class="form-control"
                                                    placeholder="Enter captcha" name="captcha" id="captcha" required> <i
                                                    style="font-size:13px;color:red" class="text-danger"
                                                    id="errorCaptcha"></i></div>

                                            <div class="col-sm-6"> <span class="image"><?php echo $captcha;?> </span> <a
                                                    class="refresh" href="javascript:void(0)"><i
                                                        class="fas btn fa-sync-alt"></i> </a></div>
                                        </div>
                                        <input type="hidden" id="recaptchaCode"
                                            value="<?php echo$this->session->userdata('captchaCode');?>">
                                       
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group text-center">
                                            <button id="submit-value" name="submit" type="submit"
                                                class="btn-view">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                   
                </div> -->
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
    <script src="<?php echo base_url();?>assets/js/script.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.validation.js"></script>
    <script src="<?php echo base_url();?>assets/js/lightbox-plus-jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/toastr.min.js"></script>

    <script src="<?php echo base_url();?>assets/js/preloader.js"></script>
    <script>
    baguetteBox.run('.ImageContainer');
    </script>
    <script>
    // select box
    // Add active class to the current button (highlight it)
    var header = document.getElementById("myDIV");
    var btns = header.getElementsByClassName("btn-sel");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("act");
            current[0].className = current[0].className.replace(" act", "");
            this.className += " act";
        });
    }
    </script>
    <script>
    window.onload = function() {
        baguetteBox.run('.baguetteBoxOne');
    };
    $("#homecontact-form").validate({

        ignore: [],

        rules: {

            phone: {
                required: true,
                digits: true,
                minlength: 10,
                maxlength: 10,
            },

        },
    });
    </script>
    <script>
    $("#homecontact-forms").submit(function(e) {
        var recaptchaCode = $('#recaptchaCode').val();

        var enterCaptchaCode = $('#captcha').val();
        if (recaptchaCode != enterCaptchaCode) {
            e.preventDefault();
            $('#errorCaptcha').html('Invalid Captcha');
        } else {
            $('#errorCaptcha').html('Invalid Captcha');
        }
    });
    $("#contact-form").submit(function(e) {

        var recaptchaCode = $('#recaptchaCode1').val();


        var enterCaptchaCode = $('#captcha1').val();

        if (recaptchaCode != enterCaptchaCode) {
            e.preventDefault();
            $('#errorCaptcha1').html('Invalid Captcha');
        } else {
            $('#errorCaptcha1').html('Invalid Captcha');
        }
    })
    $(function() {
        $('.refresh').click(function() {
            loder(true);
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url()?>home/refresh_captcha',
                dataType: 'json',
                success: function(data) {
                   
                    if (data) {
                        $('.image').html(data.captcha);
                        $('#recaptchaCode1').val(data.code);
                        $('#recaptchaCode').val(data.code);
                        loder(false);
                    }
                   
                }
            });
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
   

    $(document).ready(function() {
        $('#homecontact-form').submit(function(e) {

            e.preventDefault();
            var name = $('#name').val();
            var email = $('#email').val();
            var phone = $('#phone').val();
            var sel1 = $('#sel1').val();
           
            var recaptchaCode = $('#recaptchaCode').val();

            var enterCaptchaCode = $('#captcha').val();

            if (name != '' && email != '' && phone != '' && enterCaptchaCode !='' && sel1 !='') {
                loder(true)
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url().'home/insert_home_contact';?>",
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
                            $('#sel1').val('');
                            $('.refresh').click();
                            $('#captcha').val('');
                           $('#exampleFormControlTextarea').val('');
                            toastr.success('You have sent successfully', 'Success ', {timeOut: 5000});
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

    });
    </script>


<script>
    <?php $this->load->view('includes/message.php'); ?>
    </script>
</body>

</html>