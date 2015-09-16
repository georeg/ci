<?php
//print "<pre>";
//var_dump($user_list);
?>

<?php echo anchor(base_url().'admin/industry_new','Create New Industry');?>&nbsp;&nbsp;<?php echo anchor(base_url().'admin','Back to Top'); ?><br><br>
<br>
INDUSTRY LIST:<br>
<?php
foreach ($industry_list as $key => $val)
    {
    //echo anchor(base_url().'user/detail/'.$Val['id'], $val['name']);
    echo "<a href=\"".base_url()."admin/industry_info/".$val['industry_id']."\">".$val['industry_name']."</a>";
    echo "<br>";
    echo $val['industry_id'];
    echo "<br>";
    echo "<br>";
    }
?>



