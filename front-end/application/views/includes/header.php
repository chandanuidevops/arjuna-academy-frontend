<style>
.stick {
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 999;
}
.stick+.content{
    padding-top:100px;
}
@media(max-width:767px) {
    .stick {
        position: unset;
    }
}

</style>
<header class="nav-custome shadow-sm" id="navhead">
    <nav class="navbar navbar-expand-lg navbar-light nav-container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="logo-lo">
            <a class="navbar-brand logo-ds" href="<?php echo base_url();?>">
                <img src="<?php echo base_url('assets/img/logo.png');?>" alt="">
            </a>
        </div>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <div class="ml-auto">
                <ul class="navbar-nav nav-custome-li">
                    <li class="nav-item ">
                        <a class="nav-link main-nav <?php if($this->uri->segment(1) == ''){echo 'active'; } ?>"
                            href="<?php echo base_url() ?>">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link main-nav  <?php if($this->uri->segment(1) == 'about-us'){echo 'active'; } ?>"
                            href="<?php echo base_url('about-us') ?>">About Us</a>
                    </li>

                   
                    <li class="nav-item dropdown ">
                        <a href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" class="nav-link main-nav  dropdown-toggle ">Courses</a>
                        <ul class="dropdown-menu  dm-list">
                            <li class=" maindrop dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle hover-w ">School (Std VIII to X)</a>
                                <ul class="dropdown-menu  subdrop ">
                                <?php if(!empty($head)){foreach($head as $key=>$value){ if($value->level ==='School Level Programs'){ ?>
                                    <li class="dropdown-item ">
                                        <a class="nav-link  " href="<?php echo base_url().'course/'.$value->slug.'' ?>" ><?php echo $value->course ?></a>
                                    </li>
                                    
                                    <?php }}} ?>
                                </ul>
                            </li>

                            <li class=" maindrop dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle hover-w  ">Senior Secondary(XI,XII, PU)</a>
                                <ul class="dropdown-menu  subdrop ">
                                <?php if(!empty($head)){foreach($head as $key=>$value){ if($value->level ==='PUC/Class 11 batch'){ ?>
                                    <li class="dropdown-item ">
                                        <a class="nav-link  " href="<?php echo base_url().'course/'.$value->slug.'' ?>" ><?php echo $value->course ?></a>
                                    </li>
                                    
                                    <?php }}} ?>
                                </ul>
                            </li>

                          

                            <li class="dropdown-item maindrop dropdown ">
                            <?php if(!empty($head)){foreach($head as $key=>$value){ if($value->level ==='Digital Live Classes'){ ?>
                                <a href="<?php echo base_url().'course/'.$value->slug.'' ?>"  class=" nav-link ">Digital Live Classes</a>
                                <?php }}} ?>
                            </li>
                        </ul>
                    </li>



                    <li class="nav-item dropdown">
                        <a class="nav-link  main-nav dropdown-toggle <?php if($this->uri->segment(1) == 'jee-top-achievers' || $this->uri->segment(1) == 'neet-top-achievers' || $this->uri->segment(1) == 'kcet-top-achievers' || $this->uri->segment(1) == 'ntse-top-achievers'){echo 'active'; } ?>"
                            href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            Achievers
                        </a>
                        <div class="dropdown-menu dm-list " aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="<?php echo base_url('jee-top-achievers') ?>">JEE</a>
                            <a class="dropdown-item" href="<?php echo base_url('neet-top-achievers') ?>">NEET</a>
                            <a class="dropdown-item" href="<?php echo base_url('kcet-top-achievers') ?>">K-CET</a>
                            <a class="dropdown-item" href="<?php echo base_url('ntse-top-achievers') ?>">NSTSE</a>
                        </div>
                    </li>



                    <li class="nav-item">
                        <a class="nav-link main-nav  <?php if($this->uri->segment(1) == 'vrddhi'){echo 'active'; } ?>"
                            href="<?php echo base_url('vrddhi') ?>">Vrddhi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link main-nav  <?php if($this->uri->segment(1) == 'photo-gallery'){echo 'active'; } ?>"
                            href="<?php echo base_url('photo-gallery') ?>">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link main-nav noti-main  <?php if($this->uri->segment(1) == 'event-gallery'){echo 'active'; } ?>"
                            href="<?php echo base_url('upcoming-events') ?>">Notifications <?php if(!empty($notification)){ ;?> <span class="notification"><?php echo !empty($notification)?$notification:'0' ;?></span> <?php }?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link main-nav  <?php if($this->uri->segment(1) == 'career'){echo 'active'; } ?>"
                            href="<?php echo base_url('career') ?>">Career</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link main-nav  <?php if($this->uri->segment(1) == 'contact-us'){echo 'active'; } ?>"
                            href="<?php echo base_url('contact-us') ?>">Contact Us</a>
                    </li>
                    <?php if(empty($this->session->userdata('aa_uid'))){?>
                    <li class="nav-item dropdown">
                        <a class="nav-link main-nav  dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Sign In
                        </a>
                        <div class="dropdown-menu dm-list " aria-labelledby="navbarDropdownMenuLink">
                            <?php if(empty($this->session->userdata('aa_uid'))){?>
                            <a class="dropdown-item" href="<?php echo base_url('student-login');?>">Student Login</a>
                            <?php }else{?>
                            <a class="dropdown-item" href="<?php echo base_url('profile-setting');?>"> Profile
                                Setting</a>
                            <a class="dropdown-item" href="<?php echo base_url('logout');?>"> Logout</a>
                            <?php }?>
                            <!-- <a class="dropdown-item" href="#">Teacher Login</a> -->
                        </div>
                    </li>
                    <?php }else{?>

                    <li class="nav-item dropdown profile-drop">
                        <?php if(!empty($this->session->userdata('aa_uid'))){?>
                        <a class="nav-link  main-nav  dropdown-toggle profile-padd" href="#" id="navbarDropdownMenuLink"
                            aria-haspopup="true" aria-expanded="false">
                            <center><img src="<?php echo !empty($profile)?base_url().$profile:'https://dummyimage.com/180x180/c4c4c4/000000';?>" alt="" class="responsive-img  user-pr">
                            </center>
                        </a>
                        <p class="user-name"><?php echo $this->session->userdata('aa_uname');?></p>
                        <?php }?>
                        <div class="dropdown-menu dm-list gg-profile" aria-labelledby="navbarDropdownMenuLink">
                            <?php if(empty($this->session->userdata('aa_uid'))){?>

                            <a class="dropdown-item" href="<?php echo base_url('login');?>">Student Login</a>
                            <?php }else{?>
                            <a class="dropdown-item" href="<?php echo base_url('profile-setting');?>"> Profile
                                Setting</a>
                            <a class="dropdown-item" href="<?php echo base_url('logout');?>"> Logout</a>
                            <?php }?>

                        </div>
                    </li>
                    <?php }?>

                </ul>
                </li>
            </div>
        </div>
    </nav>
</header>
<!-- script -->