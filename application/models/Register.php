<?php 
class Register extends CI_Model {

    public function __construct()
    {
        $this->load->database();
        parent::__construct();
    }
    public function register_user($param){
        /* UNSAFE METHOD TO REGISTER A USER
        $name  = $param['name'];
        $phone = $param['phone'];
        $email = $param['email'];
        
        $sql = <<<EOF
            INSERT INTO `user` (`name`,`phone`,`email`) VALUES ('{$name}','{$phone}','{$email}');
EOF;
        
        $res = $this->db->query($sql);
        return $res;
        */
        
        //Using PLACE HOLDER to Register or send DATA
        $data[] = $param['name'];
        $data[] = $param['phone'];
        $data[] = $param['email'];
        
        $sql = <<<EOF
            INSERT INTO `user` (`name`,`phone`,`email`) VALUES (?,?,?);
EOF;
        
        $res = $this->db->query($sql,$data);
        return $res;
        
    }
    
    public function get_user_list(){
              
        $sql = <<<EOF
            SELECT * FROM `user`;
EOF;
        
        $result = $this->db->query($sql)->result_array();
        return $result;
    }
    
    public function get_user_detail($id){
              
        $sql = <<<EOF
            SELECT * FROM `user` WHERE id = '{$id}' ;
EOF;
        
        $result = $this->db->query($sql)->result_array();
        return $result;
    }
    
    public function update_user($param){
        /* UNSAFE METHOD TO UPDATE A USER
        $id    = $param['id'];
        $name  = $param['name'];
        $phone = $param['phone'];
        $email = $param['email'];
        
        $sql = <<<EOF
            UPDATE `user` SET `name`='{$name}',`phone`='{$phone}',`email`='{$email}' WHERE id = '{$id}';
EOF;
      
        $res = $this->db->query($sql);
        return $res;
        */
        
        //Using PLACE HOLDER to Register or send DATA
        
        $data[] = $param['name'];
        $data[] = $param['phone'];
        $data[] = $param['email'];
        $data[] = $param['id'];
        
        $sql = <<<EOF
            UPDATE `user` SET `name`=?,`phone`=?,`email`=? WHERE id = ?;
EOF;
      
        $res = $this->db->query($sql,$data);
        return $res;
        
    }
    /*
    public function sql()
        {
            $data[] = 'Eric';
            $data[] = '09876';
            $data[] = 'test';
            
            $sql = <<<EOF
            INSERT INTO `user` (`name`,`phone`,`email`) VALUES (?,?,?);
EOF;
        
            $res = $this->db->query($sql, $data);
            return $res;
        }
        */
}
?>