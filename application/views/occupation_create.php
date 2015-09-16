<?php echo form_open(base_url().'admin/occupation_register'); ?>

Occupation Name: <?php echo form_input('name', ''); ?>   <?php echo form_error('name'); ?> <br><br>

<?php echo form_submit('occupation_register', 'Submit'); ?><br><br>
<?php echo form_close(); ?>