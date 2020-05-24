

<div class="profile-name">
                            <h5><?php echo $this->session->userdata('aa_uname');?></h5>
                        </div>
                        <div class="profile-detail">
                        <ul>
    <li><a href="<?php echo base_url('profile-setting');?>" class="<?php if($this->uri->segment(1) == 'profile-setting'){echo 'ln-active'; } ?>"><i class="fas fa-user"></i>Profile</a></li>
    <li><a href="<?php echo base_url('change-password');?>" class="<?php if($this->uri->segment(1) == 'change-password'){echo 'ln-active'; } ?>"><i class="fas fa-cog"></i>Change Password</a></li>
    <li><a href="<?php echo base_url('payment-detail');?>" class="<?php if($this->uri->segment(1) == 'payment-detail'){echo 'ln-active'; } ?>"><i class="fas fa-rupee-sign"></i>Payment Detail</a></li>
</ul>   
                        </div>