<?php
//print "<pre>";
//var_dump($industry_info);
//exit;


echo $industry_info['0']['industry_id'];
echo "<br>";
echo $industry_info['0']['industry_name'];
echo "<br>";
echo anchor(base_url().'admin/industry','Back to List');
?>