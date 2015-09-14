<?php 
class Register extends CI_Model {

    public function __construct()
    {
        $this->load->database();
        parent::__construct();
    }
    public function register_user($param){
        
        $name  = $param['name'];
        $phone = $param['phone'];
        $email = $param['email'];
        
        
        $sql = <<<EOF
            INSERT INTO `user` (`name`,`phone`,`email`) VALUES ('{$name}','{$phone}','{$email}');

EOF;
        $res = $this->db->query($sql);
        return $res;
    }
    
     public function get_user_list(){
              
        $sql = <<<EOF
            SELECT * FROM `user`;

EOF;
        
        $result = $this->db->query($sql)->result_array();
        return $result;
    }
    
}
?>