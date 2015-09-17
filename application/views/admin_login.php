<?php echo form_open(base_url().'admin/login_action'); ?>

Username: <?php echo form_input('admin_name', ''); ?><br><br>
Address:  <?php echo form_input('admin_password', ''); ?><br><br>

<?php echo form_submit('submit', 'Login'); ?><br><br>
<?php echo form_close(); ?>

