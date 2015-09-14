<?php echo form_open(base_url().'user/confirm'); ?>

Name: <?php echo form_input('name', ''); ?> <br><br>
Phone: <?php echo form_input('phone', ''); ?> <br><br>
Email: <?php echo form_input('email', ''); ?> <br><br>

<?php echo form_submit('user_confirm', 'Submit'); ?><br><br>

