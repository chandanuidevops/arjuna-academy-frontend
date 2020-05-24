
		<?php if ($this->session->flashdata('error')) { ?>
            
            toastr.error('<?php echo $this->session->flashdata('error') ?>', 'Error ', {timeOut: 5000});
        <?php } ?>

        <?php if ($this->session->flashdata('msg')) { ?>
            toastr.success('<?php echo $this->session->flashdata('msg') ?>', 'Success', {timeOut: 5000});
           
       <?php } ?>