<?php echo form_open(base_url().'user/confirm'); ?>

UserName: <?php echo form_input('username', ''); ?>&nbsp;&nbsp;<?php echo form_error('username'); ?> <br><br>

Address: <?php echo form_input('address', ''); ?>&nbsp;&nbsp;<?php echo form_error('address'); ?> <br><br>

Phone: <?php echo form_input('phone', ''); ?>&nbsp;&nbsp;<?php echo form_error('phone'); ?> <br><br>

Email: <?php echo form_input('email', ''); ?>&nbsp;&nbsp;<?php echo form_error('email'); ?> <br><br>

Please Select your Industry: &nbsp;&nbsp;<?php echo form_error('industry'); ?><br> 
<?php
// Industry
foreach ($industry_list as $key => $val)
    {
    echo form_checkbox('industry[]',$val['industry_id']);
    echo $val['industry_name'];
    ?>
    <br>
    <?php
    }
?>

<br>
<br>
Please Select your Occupation: &nbsp;&nbsp;<?php echo form_error('occupation'); ?><br>
<?php
// Occupation
foreach ($occupation_list as $key2 => $val2)
    {
    echo form_checkbox('occupation[]',$val2['occupation_id']);
    echo $val2['occupation_name'];
    ?>
    <br>
    <?php
    }
?>

<?php echo form_submit('submit', 'Submit'); ?><br><br>
<?php echo form_close(); ?>