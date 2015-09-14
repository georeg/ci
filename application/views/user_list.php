<?php
//print "<pre>";
//var_dump($user_list);

foreach ($user_list as $key => $val){
    echo $val['name'];
    echo "<br>";
    echo $val['phone'];
    echo "<br>";
    echo $val['email'];
    echo "<br>";
    echo "<br>";
    
}
?>