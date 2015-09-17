<?php
//print "<pre>";
//var_dump($user_list);
?>

<?php echo anchor(base_url().'admin','Back to Top'); ?><br><br>
<br>
USER LIST:<br>
<?php
foreach ($user_list as $key => $val)
    {
    //echo anchor(base_url().'user/detail/'.$Val['id'], $val['name']);
    echo $val['id'];?>&nbsp;&nbsp;<?php echo "<a href=\"".base_url()."admin/user_detail/".$val['id']."\">".$val['username']."</a>";
    echo "<br>";
    echo "<br>";
    }
?>