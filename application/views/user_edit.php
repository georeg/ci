<?php echo form_open(base_url().'user/update');?>

Name: <?php echo form_input('name',$user_detail['0']['name']); ?>    <?php echo form_error('name'); ?><br><br>
Phone: <?php echo form_input('phone',$user_detail['0']['phone']); ?> <?php echo form_error('phone'); ?><br><br>
Email: <?php echo form_input('email',$user_detail['0']['email']); ?> <?php echo form_error('email'); ?><br><br>


<?php echo form_hidden('id',$user_detail['0']['id']);?>
<?php echo form_submit('user_update', 'Submit'); ?><br><br>

