<?php 
class Model_test extends CI_Model {

    public function __construct()
    {
        $this->load->database();
        parent::__construct();
    }
    public function insert_user_data(){
        
        $name = 'George';
        $phone = '0858888';
        $email = 'test2@gmail.com';
        
        
        $sql = <<<EOF
            INSERT INTO `user` (`name`,`phone`,`email`) VALUES ('{$name}','{$phone}','{$email}');

EOF;
        $res = $this->db->query($sql);
        return $res;
    }
}
?>