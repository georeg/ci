<?php

function display_industry($from_db,$user_input)
    {
        $reverse = array_flip($user_input);

        foreach ($from_db as $key => $val) { 
            if (isset($reverse[$val['industry_id']])) {
                $ret[] = $val['industry_name'];
            }
        }
        
        return $ret;
    }

function display_occupation($from_db,$user_input)
    {    
     $reverse = array_flip($user_input);

        foreach ($from_db as $key => $val) { 
            if (isset($reverse[$val['occupation_id']])) {
                $ret[] = $val['occupation_name'];
            }
        }
        
        return $ret;
    }


?>