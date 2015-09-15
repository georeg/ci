

Name: <?php echo $name; ?> <br><br>
Phone: <?php echo $phone; ?> <br><br>
Email: <?php echo $email; ?> <br><br>

<?php
echo form_open(base_url().'user/register');
echo form_hidden('name',$name);
echo form_hidden('phone',$phone);
echo form_hidden('email',$email);
?>
<?php echo form_submit('user_register', 'Submit'); ?><br><br>


