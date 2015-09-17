USER DETAIL
<br><br>
ID:         <?php echo $user_detail['user']['0']['id'];?><br>
Username:   <?php echo $user_detail['user']['0']['username'];?><br>
Address:    <?php echo $user_detail['user']['0']['address'];?><br>
Phone:      <?php echo $user_detail['user']['0']['phone'];?><br>
Email:      <?php echo $user_detail['user']['0']['email'];?><br><br>


Industry:<br>
<?php 
foreach ($user_detail['industry'] as $key => $val)
        {
            echo $val['industry_name'];
            ?>&nbsp;|&nbsp;<?php
        }
?>
<br><br>
Occupation:<br>
<?php 
foreach ($user_detail['occupation'] as $key => $val)
        {
            echo $val['occupation_name'];
            ?>&nbsp;|&nbsp;<?php
        }
?>
<br><br>
<?php echo anchor(base_url().'admin/user','Back to List');?>