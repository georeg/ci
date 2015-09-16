<?php 
class Industry extends CI_Model {

    public function __construct()
    {
        $this->load->database();
        parent::__construct();
    }
    
    public function register_industry()
    {
        $name = $this->input->post('name');
        $data[] = $name;

        $sql = <<<EOF
            INSERT INTO `industry` (`industry_name`) VALUES (?);
EOF;
        
        $res = $this->db->query($sql,$data);
        return $res;
    }
    
    public function get_industry_list()
    {
              
        $sql = <<<EOF
            SELECT * FROM `industry`;
EOF;
        
        $result = $this->db->query($sql)->result_array();
        return $result;
    }
    
    public function get_industry_info($id)
    {
              
        $sql = <<<EOF
            SELECT * FROM `industry` WHERE industry_id = '{$id}';
EOF;
        
        $result = $this->db->query($sql)->result_array();
        return $result;
    }
    
}    
