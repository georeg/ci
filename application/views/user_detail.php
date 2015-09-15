<?php
//print "<pre>";
//var_dump($user_detail);


echo $user_detail['0']['id'];
echo "<br>";
echo $user_detail['0']['name'];
echo "<br>";
echo $user_detail['0']['phone'];
echo "<br>";
echo $user_detail['0']['email'];
echo "<br>";
echo $user_detail['0']['status'];
echo "<br>";
echo anchor(base_url().'user/edit/'.$user_detail['0']['id'], 'Edit', 'title="Edit User"');
?>