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
                    
            $this->load->view('user_confirm',$data);
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
}
    
?>