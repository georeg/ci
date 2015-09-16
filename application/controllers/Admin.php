<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class admin extends CI_Controller 
{
        
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
    }
 
    public function top()
    {
        $this->load->view('admin_top');
    }
    
// INDUSTRY ACTION
    public function industry_new()
    {
        $this->load->view('industry_create');
    }
    
    public function industry_register()
    {
        $data['name'] = $this->input->post('name');
                
        $this->load->model('Industry');
        $res = $this->Industry->register_industry($data);
        if ($res){
            redirect(base_url().'admin/industry');
        }else{
            redirect(base_url().'admin/industry_new');
        }
    }
        
    public function industry_list()
    {
        $this->load->Model('Industry');
        $industry_list = $this->Industry->get_industry_list();
        $data['industry_list'] = $industry_list;

        $this->load->view('industry_list',$data);
    }
    
    public function industry_info($id) 
        {
            $this->load->model('Industry');
            $ret['industry_info'] = $this->Industry->get_industry_info($id);
            
            $this->load->view('industry_info',$ret);
        }

// OCCUPATION ACTION
    public function occupation_new()
    {
        $this->load->view('occupation_create');
    }
    
    public function occupation_register()
    {
        $data['name'] = $this->input->post('name');
                
        $this->load->model('Occupation');
        $res = $this->Occupation->register_occupation($data);
        if ($res){
            redirect(base_url().'admin/occupation');
        }else{
            redirect(base_url().'admin/occupation_new');
        }
    }
        
    public function occupation_list()
    {
        $this->load->Model('Occupation');
        $occupation_list = $this->Occupation->get_occupation_list();
        $data['occupation_list'] = $occupation_list;

        $this->load->view('occupation_list',$data);
    }
    
    public function occupation_info($id) 
    {
        $this->load->model('Occupation');
        $ret['occupation_info'] = $this->Occupation->get_occupation_info($id);
        
        $this->load->view('occupation_info',$ret);
    }
        
}
?>