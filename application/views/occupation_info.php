<?php
//print "<pre>";
//var_dump($industry_info);
//exit;


echo $occupation_info['0']['occupation_id'];
echo "<br>";
echo $occupation_info['0']['occupation_name'];
echo "<br>";
echo anchor(base_url().'admin/occupation','Back to List');
?>