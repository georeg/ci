<?php
//print "<pre>";
//var_dump($user_list);

foreach ($user_list as $key => $val){
    
    //echo anchor(base_url().'user/detail/'.$Val['id'], $val['name']);
    echo "<a href=\"".base_url()."user/detail/".$val['id']."\">".$val['name']."</a>";
    echo "<br>";
    echo $val['phone'];
    echo "<br>";
    echo $val['email'];
    echo "<br>";
    echo "<br>";
    
}
?>