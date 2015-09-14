<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class egs extends CI_Controller {

	public function welcome()
	{
        /*
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('egs');
        $this->load->helper('date');
        
        $name = 'Eric';
        $phone = '080989999';
        $email = 'test@gmail.com';
        
        $this->load->database();
        $sql = <<<EOF
            INSERT INTO `user` (`name`,`phone`,`email`) VALUES ('{$name}', '{$phone}' , '{$email}');

EOF;
        $res = $this->db->query($sql);

        
        
        
        $this->load->model('Model_test');
        $this->Model_test->insert_user_data();
        $this->load->view('welcome_msg2');
        //$test['something'] = egs2();
        //$this->load->view('welcome_msg2',$test);
        */
        
       
    }

    public function send()
    {
        $data['username'] = $this->input->post('username');
        $data['password'] = $this->input->post('password');
        $data['textarea'] = $this->input->post('textarea');
        $data['size']     = $this->input->post('size');
        $data['type']     = $this->input->post('type');

        
        $this->load->view('submit_form',$data);
    }
    
}
