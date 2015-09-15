<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class user extends CI_Controller 
{
        
    public function __construct()
       {
            parent::__construct();
            $this->load->helper('form');
            $this->load->helper('url');
       }
       
    public function index()
        {
            $this->load->model('Register');
            //$this->Register->sql();
            
            
            $ret['user_list'] = $this->Register->get_user_list();
            //print"<pre>";
            //var_dump($user_list);
            $this->load->view('user_list',$ret);
            
        }
       
	public function create()
        {
            $this->load->view('user_create_form');
        }
    
    public function confirm()
        {
            $data['name'] = $this->input->post('name');
            $data['phone'] = $this->input->post('phone');
            $data['email'] = $this->input->post('email');
            
            $res = $this->_validate();
        if ($res) { 
            $post = $this->input->post();
            $this->load->view('user_confirm',$data);
            } else {//だめだったら入力画面に戻す
            $this->load->view('user_create_form');
            }
        }
        
    public function register()
        {
            $data['name'] = $this->input->post('name');
            $data['phone'] = $this->input->post('phone');
            $data['email'] = $this->input->post('email');
            
            
            $this->load->model('Register');
            $res = $this->Register->register_user($data);
            if ($res){
                redirect(base_url().'user/complete');
            }else{
                redirect(base_url().'user/create');
            }
        }
        
    public function complete()
        {
            $data['name'] = $this->input->post('name');
            $data['phone'] = $this->input->post('phone');
            $data['email'] = $this->input->post('email');
                    
            $this->load->view('user_complete',$data);
        }
        
    public function detail($id) 
        {
            $this->load->model('Register');
            $ret['user_detail'] = $this->Register->get_user_detail($id);
            
            $this->load->view('user_detail',$ret);
        }

    public function edit($id) 
        {
            $this->load->model('Register');
            $ret['user_detail'] = $this->Register->get_user_detail($id);
            
            $this->load->view('user_edit',$ret);
        }
    
    public function update()
        {
            $upd['id'] = $this->input->post('id');
            $upd['name'] = $this->input->post('name');
            $upd['phone'] = $this->input->post('phone');
            $upd['email'] = $this->input->post('email');
            
           
        
        
            $res = $this->_validate();
           
            
            if ($res) { 
                $this->load->model('Register');
                $ret = $this->Register->update_user($upd);
                $this->complete();
                //redirect(base_url().'user/complete');
            }else{
                $this->edit($upd['id']);
            }
            
        }
            /*
            $this->load->model('Register');
            $res = $this->Register->update_user($upd);
            if ($res){
                redirect(base_url().'user/complete');
            }else{
                redirect(base_url().'user/edit/'.$user_detail['0']['id']);
            }
        }
    */
    
    public function error ()
    {
        $this->load->view('errors/html/error_404');
    }
    
    private function _validate() 
        {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required|callback_username_check');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_message('required', '※Please input %s.');
        $this->form_validation->set_error_delimiters('<font color="red">', '</font>');
        if ($this->form_validation->run() == FALSE)
        {
            return false;
        }
        else
        {
            return true;
        }
    }

    function username_check($str)
    {
        $this->load->database();
        $sql = <<<EOF
            SELECT * FROM `user` WHERE name = '{$str}' ;
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