<?php 
class Service_user extends CI_Model 
{

    public function __construct()
    {
        $this->load->database();
        parent::__construct();
    }
    
    public function register_user($param)
    {
        $data[] = $param['username'];
        $data[] = $param['address'];
        $data[] = $param['phone'];
        $data[] = $param['email'];
        
        $this->db->trans_start();//Used for upload several datas as a PACKAGE! Start
        
        $sql = <<<EOF
            INSERT INTO `user` (`username`,`address`,`phone`,`email`) VALUES (?,?,?,?);
EOF;
        $res = $this->db->query($sql,$data);
        $last_user_id = $this->db->insert_id();
       
        $industry   = $param['input_industry'];
        $occupation = $param['input_occupation'];
       
        foreach ($industry as $key => $val)
        {
            $sql2 = <<<EOF
                INSERT INTO `u_i_relation` (`user_id`,`industry_id`) VALUES ('{$last_user_id}','{$val[0]}')
EOF;
            $res = $this->db->query($sql2);
        }
        
        foreach ($occupation as $key => $val)
        {
            $sql3 = <<<EOF
                INSERT INTO `u_o_relation` (`user_id`,`occupation_id`) VALUES ('{$last_user_id}','{$val[0]}')
EOF;
            $res = $this->db->query($sql3);
        }

        $this->db->trans_complete();//Used for upload several datas as a PACKAGE! FINISH
        return ($this->db->trans_status());

    }
    
    public function get_user_list()
    {
        $sql = <<<EOF
                 SELECT DISTINCT u.id,username
            FROM 
                u_i_relation AS uir
                INNER JOIN user AS u
                    ON uir.user_id = u.id
                
                INNER JOIN u_o_relation AS uor
                    ON uor.user_id = u.id
                    
            WHERE uir.user_id is not null AND uor.user_id is not null
                ;
EOF;
        
        $result = $this->db->query($sql)->result_array();
        return $result;
    }
    
    public function get_user_detail($id)
    {
        $this->db->trans_start();//Used for upload several datas as a PACKAGE! Start   
        //
        $sql = <<<EOF
            SELECT *
            FROM 
               user
            WHERE id = '{$id}'
EOF;
        $res['user'] = $this->db->query($sql)->result_array();
        
        $sql2 = <<<EOF
            SELECT i.industry_name
            FROM 
                u_i_relation AS uir
                INNER JOIN industry AS i
                    ON uir.industry_id = i.industry_id
            WHERE uir.user_id = '{$id}'
EOF;
        $res['industry'] = $this->db->query($sql2)->result_array();
        
        $sql3 = <<<EOF
            SELECT o.occupation_name
            FROM 
                u_o_relation AS uor
                INNER JOIN occupation AS o
                    ON uor.occupation_id = o.occupation_id
            WHERE uor.user_id = '{$id}'
EOF;
        $res['occupation'] = $this->db->query($sql3)->result_array();
        $this->db->trans_complete();
        return $res;
    }
}    
?>
