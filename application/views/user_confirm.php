USER DATA CONFIRMATION <br><br>
UserName: <?php echo $username; ?> <br>
Address: <?php echo $address; ?> <br>
Phone: <?php echo $phone; ?> <br>
Email: <?php echo $email; ?> <br>
Industry: 
<?php 
foreach ($res_ind as $key => $val)
    {
    echo $val;
    echo form_hidden('industry[]',$val);
    ?>
    |&nbsp;
    <?php
    }
/*    
foreach ($input_industry as $key => $val)
    {
    echo $val;
    echo form_hidden('industry_id[]',$val);
    ?>
    |&nbsp;
    <?php
    }
*/    
?> 
<br>
Occupation: <?php 

foreach ($res_occ as $key => $val)
    {
    echo $val;
    echo form_hidden('occupation[]',$val);
    ?>
    |&nbsp;
    <?php
    }
/*   
foreach ($input_occupation as $key => $val)
    {
    echo $val;
    echo form_hidden('occupation_id[]',$val);
    ?>
    |&nbsp;
    <?php
    }
*/    
?> 


<?php
echo form_open(base_url().'user/register');
echo form_hidden('username',$username);
echo form_hidden('address',$address);
echo form_hidden('phone',$phone);
echo form_hidden('email',$email);
echo form_hidden('industry_id[]',$input_industry);
echo form_hidden('occupation_id[]',$input_occupation);
?>
<?php echo form_submit('confirm', 'Confirm'); ?><br><br>
<?php echo form_close(); ?>
