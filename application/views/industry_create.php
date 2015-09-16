<?php echo form_open(base_url().'admin/industry_register'); ?>

Industry Name: <?php echo form_input('name', ''); ?>   <?php echo form_error('name'); ?> <br><br>

<?php echo form_submit('industry_register', 'Submit'); ?><br><br>
<?php echo form_close(); ?>