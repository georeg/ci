<?php
//print "<pre>";
//var_dump($user_list);
?>

<?php echo anchor(base_url().'admin/occupation_new','Create New Occupation');?>&nbsp;&nbsp;<?php echo anchor(base_url().'admin','Back to Top'); ?><br><br>
<br>
OCCUPATION LIST:<br>
<?php
foreach ($occupation_list as $key => $val)
    {
    //echo anchor(base_url().'user/detail/'.$Val['id'], $val['name']);
    echo "<a href=\"".base_url()."admin/occupation_info/".$val['occupation_id']."\">".$val['occupation_name']."</a>";
    echo "<br>";
    echo $val['occupation_id'];
    echo "<br>";
    echo "<br>";
    }
?>