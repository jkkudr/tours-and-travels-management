<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class login_controller extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    public function index()
    {
        $error['error']='';
        $this->load->view('login',$error);
    }
    public function login()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email','Email','required|valid_email|trim|callback_check_user_login');
        
        $this->form_validation->set_rules('password','Password','required|trim');
        if($this->form_validation->run()==FALSE)
        {
            $this->index();
        }
        else
        {
            if($this->session->userdata('role')=="Admin")
            {
                redirect('admin/dashboard');
            }
            elseif ($this->session->userdata('role')=="User") 
            {
            redirect('user/dashboard');    
            }
            
        }
           
    }
    
    public function check_user_login()
    {
         $email=$this->input->post('email');
        $pass=$this->input->post('password');
        $this->load->model('login_model');
        $result=$this->login_model->is_logged_in($email,$pass);
        if($result)
        {
            foreach ($result as $user)
            {
                $s=array();
                $s['is_logged_in']=1;
                
                $s['Fistname']=$user->Firstname;
                $s['lastname']=$user->Lastname;
                $s['email']=$user->Email;
                $s['pass']=$user->Password;
                $s['role']=$user->Role;
                $s['usrid']=$user->uid;
               
                $this->session->set_userdata($s);
            }
        }
        else
            {
            $this->form_validation->set_message('check_user_login','incorrect Email Or password');
            return false;
           
            }
        
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login_controller/index');
    }
    
    public function aftr_login_buy()
    {
        $this->load->view("user_afterlogin_buy");
    }
    
    public function view_details($id)
        { $this->load->library('form_validation');
        $this->form_validation->set_rules('email','Email','required|valid_email|trim|callback_check_user_login');
        
        $this->form_validation->set_rules('password','Password','required|trim');
         if($this->form_validation->run()==FALSE)
        {
            $this->index();
        }
        
         else
        {
            if($this->session->userdata('role')=="Admin")
            {
                redirect('admin/dashboard');
            }
            elseif ($this->session->userdata('role')=="User") 
            {
//              $this->load->model('base_model');
//            $data['pro']= $this->base_model->view_pro_details($id);
//            //$this->load->view('login_for_buy',$data); 
//            redirect('user/aftr_login_buy',$id);
            $this->load->model('base_model');
            $data['pro']= $this->base_model->view_pro_details($id);
            $this->load->view('login_for_buy',$data);
            }
            
        }
        
            
        }

    public function login_for_buy($id)
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email','Email','required|valid_email|trim|callback_check_user_login');
        
        $this->form_validation->set_rules('password','Password','required|trim');
        if($this->form_validation->run()==FALSE)
        {
            $this->index();
        }
        else
        {
            if($this->session->userdata('role')=="Admin")
            {
                redirect('admin/dashboard');
            }
            elseif ($this->session->userdata('role')=="User") 
            {
              $this->load->model('base_model');
            $data['pro']= $this->base_model->view_pro_details($id);
            //$this->load->view('login_for_buy',$data); 
            redirect('user/aftr_login_buy',$data);
            }
            
        }
           
    }
    
    
}
