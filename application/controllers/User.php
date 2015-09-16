<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class user extends CI_Controller 
{
        
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('display');
    }
 
    public function lp()
    {
        //Industry
        $this->load->Model('Industry');
        $industry_list = $this->Industry->get_industry_list();
        $data['industry_list'] = $industry_list;
        
        $this->load->Model('Occupation');
        $occupation_list = $this->Occupation->get_occupation_list();
        $data['occupation_list'] = $occupation_list;
       
        $this->load->view('lp',$data);
    }
    
    public function confirm()
    {
        $this->load->Model('Industry');
        $industry_list = $this->Industry->get_industry_list();
        $data['industry_list'] = $industry_list;
        
        $this->load->Model('Occupation');
        $occupation_list = $this->Occupation->get_occupation_list();
        $data['occupation_list'] = $occupation_list;
        
        $res = $this->_validate();
        if ($res) { 
            $post = $this->input->post();
            $data['username'] = $this->input->post('username');
            $data['address'] = $this->input->post('address');
            $data['phone'] = $this->input->post('phone');
            $data['email'] = $this->input->post('email');
            
            $data['input_industry'] = $this->input->post('industry');
            $data['input_occupation'] = $this->input->post('occupation');
            
            
            $data['res_ind'] = display_industry($industry_list,$data['input_industry']);
            $data['res_occ'] = display_occupation($occupation_list,$data['input_occupation']);
            $this->load->view('user_confirm',$data);
        }else 
            {//If does not work go to
            $this->load->view('lp',$data);
            }
    }

    public function register()
    {
        $data['username'] = $this->input->post('username');
        $data['address'] = $this->input->post('address');
        $data['phone'] = $this->input->post('phone');
        $data['email'] = $this->input->post('email');
        $data['input_industry'] = $this->input->post('industry');
        $data['input_occupation'] = $this->input->post('occupation');
        print"<pre>";
        var_dump($data);
        exit;
        $this->load->model('User');
        $res = $this->User->register_user($data);
            if ($res){
                redirect(base_url().'user/complete');
            }else{
                redirect(base_url().'user/create');
            }
    }
    
    private function _validate() 
        {
        
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'UserName', 'required|callback_username_check');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('industry[]', 'Industry', 'required');
        $this->form_validation->set_rules('occupation[]', 'Occupation', 'required');
        $this->form_validation->set_message('required', '※Please Input %s');
        $this->form_validation->set_error_delimiters('<font color="red">', '</font>');
        
            if ($this->form_validation->run() == FALSE)
            {
            return FALSE;
            } else
            {
            return TRUE;
            }
    }

    function username_check($str)
    {
        $this->load->database();
        $sql = <<<EOF
            SELECT * FROM `user` WHERE username = '{$str}' ;
EOF;
        
        $result = $this->db->query($sql)->result_array();
        if ($result)
        {
            $this->form_validation->set_message('username_check', '※%s is already used.');
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }
    
    
}    
?>