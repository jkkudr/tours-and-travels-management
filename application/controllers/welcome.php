<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
        public function __construct() {
            parent::__construct();
            $this->load->model('base_model');
             
        }
	public function index()
	{
//             $this->load->model('base_model');
//             $data['package']=$this->base_model->get_package();
//		$this->load->view('home',$data);
            
            $this->load->library('pagination');
        //$this->load->model('admin_package_model');
            $config=array();
            $config['base_url']=  base_url('welcome/index');
            $config['total_rows']=  $this->base_model->count_user();
            $config['per_page']=2;
            $config['num_links']=3;
           
            $config['full_tag_open']="<ul class='pagination'";
            $config['full_tag_close']="</ul>";
            $config['num_tag_open']='<li>';
            $config['num_tag_close']='</li>';
            $config['cur_tag_open']="<li class='disabled'><li class='active'><a href='#'>";
            $config['cur_tag_close']="<span class='sr-only'></span></a></li>";
            $config['next_tag_open']="<li>";
            $config['next_tagl_close']="</li>";
            $config['prev_tag_open']="<li>";
            $config['prev_tagl_close']="</li>";
            $config['first_tag_open']="<li>";
            $config['first_tag_close']="</li>";
            $config['last_tag_open']="<li>";
            $config['last_tag_close']="</li>";
            
            
            $config['uri_segment']=3;
            $this->pagination->initialize($config);
            $data['user']=  $this->base_model->fetch_user($config['per_page'],  $this->uri->segment(3)); 
//        $data['user']=$this->admin_user_list_model->get_user();
            $data['links'] = $this->pagination->create_links();
           $this->load->view('home',$data);
            
	}
       
        
        public function about()
	{
		$this->load->view('about_us');
	}
        
        
        
         public function user_registration()
	{
		//$this->load->view('registration');
              $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');

                $this->form_validation->set_rules('fname', 'Firstname', 'required|min_length[5]|max_length[12]');
                 $this->form_validation->set_rules('lname', 'Lastname', 'required|min_length[5]|max_length[12]');
                $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]',
                        array('required' => 'You must provide a %s.')
                );
                $this->form_validation->set_rules('re-password', 'Password Confirmation', 'trim|required|matches[password]');
                $this->form_validation->set_rules('email_address', 'Email', 'trim|required|valid_email|callback_email_is_taken');
                $this->form_validation->set_rules('phone', 'Phone', 'required|min_length[11]|max_length[14]');
                $this->form_validation->set_rules('address', 'Address', 'required');

                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('registration');
                }
                else
                {
                    $data=array();
                $data['Firstname']=$this->input->post('fname');
                $data['Lastname']=$this->input->post('lname');
                $data['Email']=$this->input->post('email_address');
                $data['Password']=$this->input->post('password');
                $data['Phoneno']=$this->input->post('phone');
                $data['Address']=$this->input->post('address');
                $data['Gender']=$this->input->post('gender');
                $data['Role']="User";
                $this->base_model->insertdata($data);
                redirect("login_controller/index");
                        
                }
	}
         public function email_is_taken($input)
        {
            $query="SELECT * FROM `tbl_userdata` where `Email` = ?";
            $arg=array($input);
            $exce=$this->db->query($query,$arg) or die(mysql_error());
            if($exce->num_rows()>0)
            {
                  $this->form_validation->set_message('email_is_taken', 'This Email already taken');
                return FALSE;
            }
            else 
            {
                return TRUE;
            }
        }
        
        public function view_details($id)
        {
            $this->load->model('base_model');
            $data['pro']= $this->base_model->view_pro_details($id);
            $this->load->view('view_details',$data);
        }
        
        public function search_pack()
    {
        
             $this->load->model('base_model');
             $firstname=  $this->input->post('search');
              if(isset($firstname)and !empty($firstname))
             {
                 $sdata['user']=$this->base_model->srch_user($firstname);
                 $sdata['links']='';
                 $this->load->view('home',$sdata);
             }
             else
             {
                 redirect('welcome/index');
             }
            
    }
    
    public function dom_pack()
    {
        $this->load->model('base_model');
        $d['item']=  $this->base_model->dom_pack();
        $this->load->view('home_domestic_package',$d);
       
           
    }
             
                  
            
        
       

               
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */