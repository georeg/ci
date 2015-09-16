<?php 
class User extends CI_Model 
{

    public function __construct()
    {
        $this->load->database();
        parent::__construct();
    }
    
    public function register_user()
    {
        $data[] = $param['username'];
        $data[] = $param['address'];
        $data[] = $param['phone'];
        $data[] = $param['email'];
        

        $sql = <<<EOF
            INSERT INTO `occupation` (`occupation_name`) VALUES (?);
EOF;
        
        $res = $this->db->query($sql,$data);
        return $res;
    }
    
}    
?>