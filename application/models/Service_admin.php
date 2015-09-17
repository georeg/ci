<?php 
class Service_admin extends CI_Model {

    public function __construct()
    {
        $this->load->database();
        parent::__construct();
    }

    public function is_user($name,$password)
    {   
        $data[] = $name;
        $data[] = $password;
        
        $sql = <<<EOF
        SELECT `id`,`username`,`password` FROM `admin` WHERE username = ? AND password = ?;
EOF;
        $res = $this->db->query($sql,$data)->result_array();
        
        if (empty($res)){
            return FALSE;    
        } else {
            return $res;
        }
        
    }
}
?>    