<?php echo form_open(base_url().'user/confirm'); ?>

Name: <?php echo form_input('name', ''); ?>   <?php echo form_error('name'); ?> <br><br>
Phone: <?php echo form_input('phone', ''); ?> <?php echo form_error('phone'); ?><br><br>
Email: <?php echo form_input('email', ''); ?> <?php echo form_error('email'); ?><br><br>

<?php echo form_submit('user_confirm', 'Submit'); ?><br><br>

