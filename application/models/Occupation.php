<?php 
class Occupation extends CI_Model {

    public function __construct()
    {
        $this->load->database();
        parent::__construct();
    }
    
    public function register_occupation()
    {
        $name = $this->input->post('name');
        $data[] = $name;

        $sql = <<<EOF
            INSERT INTO `occupation` (`occupation_name`) VALUES (?);
EOF;
        
        $res = $this->db->query($sql,$data);
        return $res;
    }
    
    public function get_occupation_list()
    {
              
        $sql = <<<EOF
            SELECT * FROM `occupation`;
EOF;
        
        $result = $this->db->query($sql)->result_array();
        return $result;
    }
    
    public function get_occupation_info($id)
    {
              
        $sql = <<<EOF
            SELECT * FROM `occupation` WHERE occupation_id = '{$id}';
EOF;
        
        $result = $this->db->query($sql)->result_array();
        return $result;
    }
    
}   