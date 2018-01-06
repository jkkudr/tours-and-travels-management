<?php


class admin extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
         $this->load->model('admin_placeinfo_model');
          $this->load->model('combox_model');
          $this->load->model('admin_package_model');
          $this->load->model('combobox_model');
          
          //$this->add_package();
//          $data['']= 'Names';
//           $error=array(
//                'error_name'=>'',
//                'error_image'=>'',
//                'error_radio'=>'',
//                'error_plan'=>'',
//                'error_price'=>''
//            );
//        $data['groups'] = $this->admin_package_model->getname();
//        //$this->load->view('add_package', $data);
//		$this->load->view('admin_add_package',$data,$error);
    }
    public function dashboard()
    {
        if($this->session->userdata('is_logged_in')&& $this->session->userdata('role')=='Admin')
        {
           //$data['data']='User List';
           $this->load->library('pagination');
        $this->load->model('admin_package_model');
            $config=array();
            $config['base_url']=  base_url('admin/dashboard');
            $config['total_rows']=  $this->admin_package_model->count_user();
            $config['per_page']=3;
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
            $data['user']=  $this->admin_package_model->fetch_user($config['per_page'],  $this->uri->segment(3)); 
//        $data['user']=$this->admin_user_list_model->get_user();
            $data['links'] = $this->pagination->create_links();
           $this->load->view('admin_dashboard',$data);
        }
        elseif ($this->session->userdata('is_logged_in')&& $this->session->userdata('role')=='User') {
            redirect('user/dashboard');
    }
        else {
            $error['error']='!!You dont have persmission!!';
            $this->load->view('login',$error);
    }
    }
    /*===========================================================================================*/
    /*===========================================================================================*/
    //will be change.
    public function add_package()
    {
        if($this->session->userdata('is_logged_in')&& $this->session->userdata('role')=='Admin')
        {
           
            $error=array(
                'error_name'=>'',
                'error_image'=>'',
                'error_radio'=>'',
                'error_plan'=>'',
                'error_price'=>''
            );
            
                    $data['']= 'Names';
                    $data['groups'] = $this->admin_package_model->getname();    
		$this->load->view('admin_add_package',$error,$data);
        }
        elseif ($this->session->userdata('is_logged_in')&& $this->session->userdata('role')=='User') {
            redirect('user/dashboard');
    }
        else {
            $error['error']='!!You dont have persmission!!';
            $this->load->view('login',$error);
    }
    }
    
    
    
     /*===========================================================================================*/
    /*===========================================================================================*/
    public function user_list()
    {
       // $title['title']='User List';
        /*$data['data']='User List';
        $this->load->model('admin_user_list_model');
        $data['user']=$this->admin_user_list_model->get_user();
        $this->load->view('admin_user_list',$data);*/
         if($this->session->userdata('is_logged_in')&& $this->session->userdata('role')=='Admin')
        {
           //$data['data']='User List';
           $this->load->library('pagination');
        $this->load->model('admin_user_list_model');
            $config=array();
            $config['base_url']=  base_url('admin/user_list');
            $config['total_rows']=  $this->admin_user_list_model->count_user();
            $config['per_page']=3;
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
            $data['user']=  $this->admin_user_list_model->fetch_user($config['per_page'],  $this->uri->segment(3)); 
//        $data['user']=$this->admin_user_list_model->get_user();
            $data['links'] = $this->pagination->create_links();
           $this->load->view('admin_user_list',$data);
        }
        elseif ($this->session->userdata('is_logged_in')&& $this->session->userdata('role')=='User') {
            redirect('user/dashboard');
    }
        else {
            $error['error']='!!You dont have persmission!!';
            $this->load->view('login',$error);
    }
    }
    
    /*===========================================================================================*/
    /*===========================================================================================*/
    
    
    public function con_del($id)
    {
        
         if($this->session->userdata('is_logged_in')&& $this->session->userdata('role')=='Admin')
        {
            $this->load->model('admin_user_list_model');
             $data['user']=$this->admin_user_list_model->get_user_update($id);
             $this->load->view('admin_con_user',$data);
            
        }
        elseif ($this->session->userdata('is_logged_in')&& $this->session->userdata('role')=='User') {
            redirect('user/dashboard');
    }
        else {
            $error['error']='!!You dont have persmission!!';
            $this->load->view('login',$error);
    }
    }

        public function del_user($id='')
    {
       
         if($this->session->userdata('is_logged_in')&& $this->session->userdata('role')=='Admin')
        {
            $this->load->model('admin_user_list_model');
            $where = array('uid' => $id);
            $this->admin_user_list_model->del_user('tbl_userdata',$where);
            redirect('admin/user_list');
        }
        elseif ($this->session->userdata('is_logged_in')&& $this->session->userdata('role')=='User') {
            redirect('user/dashboard');
    }
        else {
            $error['error']='!!You dont have persmission!!';
            $this->load->view('login',$error);
    }
    }
    
    /*===========================================================================================
     * user edit method
    ===========================================================================================*/
 public function edit_user($id)
 {
     if($this->session->userdata('is_logged_in')&& $this->session->userdata('role')=='Admin')
        {
//         $this->load->helper(array('form','url'));
//         $this->load->library('form_validation');
//         $this->form_validation->set_rules('fname','FirstName','required');
//         $this->form_validation->set_rules('lname','Lastname','required');
//         $this->form_validation->set_rules('email_address','Email','required');
//         $this->form_validation->set_rules('password','old password','required');
//         $this->form_validation->set_rules('re_password','new password','required');
//         $this->form_validation->set_rules('con_password','confirm password','required');
//         $this->form_validation->set_rules('phone','phone','required');
//         if($this->form_validation->run()==FALSE)
//         {
//            $this->load->view('admin_user_edit');
//         }
         
        
             $data['data']='Edit User';
             $this->load->model('admin_user_list_model');
             $data['user']=$this->admin_user_list_model->get_user_update($id);
             $this->load->view('admin_user_edit',$data);
        }
         
        
        elseif ($this->session->userdata('is_logged_in')&& $this->session->userdata('role')=='User') {
            redirect('user/dashboard');
    }
        else {
            $error['error']='!!You dont have persmission!!';
            $this->load->view('login',$error);
    }
     
 }
 
 
 /*Update User Information*/
 
 public function update()
 {
     if($this->session->userdata('is_logged_in')&& $this->session->userdata('role')=='Admin')
        {
           $this->load->helper(array('form','url'));
           $this->load->library('form_validation');
           $this->form_validation->set_rules('fname','Firstname','trim|required');
           $this->form_validation->set_rules('lname','Lastname','trim|required');
           $this->form_validation->set_rules('email_address','Email','required|valid_email|callback_email_is_taken');
           $this->form_validation->set_rules('password','password','trim|required|min_length[5]');
           $this->form_validation->set_rules('phone','Phone','trim|required|min_length[11]|max_length[14]');
           $this->form_validation->set_rules('address','Address','trim|required');
           $id=  $this->input->post('user_id');
           
           if($this->form_validation->run()==FALSE)
           {
               $this->edit_user($id);
           }
           else
           {
               $user=array(
                   'Firstname'=>  $this->input->post('fname'),
                   'Lastname'=> $this->input->post('lname'),
                   'Email'=>  $this->input->post('email_address'),
                   'Password'=>  $this->input->post('password'),
                   'Phoneno'=>  $this->input->post('phone'),
                   'address'=>  $this->input->post('address')
                   
               );
               $this->load->model('admin_user_list_model');
               $this->admin_user_list_model->update($user,$id);
               redirect('admin/user_list');
                       
           }
        }
        elseif ($this->session->userdata('is_logged_in')&& $this->session->userdata('role')=='User') {
            redirect('user/dashboard');
    }
        else {
            $error['error']='!!You dont have persmission, please log in!!';
            $this->load->view('login',$error);
    }
 }
 
 
 public function data_exists($input)
 {
     $this->load->model('admin_user_list_model');
     $this->admin_user_list_model->check_exists($input);
     
 
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
 

 

 //    ============================================================================
//           Image and Package upload
//    ============================================================================   
   
      public function upload()
        {
           if($this->session->userdata('is_logged_in')&& $this->session->userdata('role')=='Admin')
        {
            $this->load->helper(array('file','form','url'));
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('name','Name','required');
             $this->form_validation->set_rules('agree','Radio','required');
             $this->form_validation->set_rules('longdes','Plan','required');
               $this->form_validation->set_rules('price','Price','required');
             
             $config_image=array();
            $config_image['upload_path']='./image';
            $config_image['allowed_types']='jpg|png|gif';
            $config_image['max_size']='1024';
            
            $this->load->library('upload',$config_image);
            
             if($this->form_validation->run()==FALSE and empty($_FILES['userfile']['name']['agree'][0]))
             {
                 $error=array(
                     'error_image'=>'Please select image for upload',
                     'error_name'=>'Please enter a name',
                     'error_radio'=>'Please selet a option',
                     'error_plan'=>'please write about Tour Plan',
                     'error_price'=>'Enter the Package Price'
                 );
               

		//$this->load->view('admin_add_package',$error);
                $this->add_package();
             }
             elseif ($this->form_validation->run()==TRUE and empty($_FILES['userfile']['name']['agree'][0])) 
             {
              $error=array(
                     'error_image'=>'Please select image for upload',
                     'error_name'=>'Please enter a name',
                     'error_radio'=>'Please selet a option',
                  
                     'error_plan'=>'please write about Tour Plan',
                  'error_price'=>'Enter the Package Price'
                 );
                 //$this->load->view('admin_add_package',$error);
                 $this->add_package();
             }
              elseif ($this->form_validation->run()==FALSE and !empty($_FILES['userfile']['name']['agree'][0])) 
             {
              !$this->upload->data();
              $error=array(
                     'error_image'=>'',
                     'error_name'=>'Please enter a name',
                     'error_radio'=>'Please selet a option',
                     'error_plan'=>'please write about Tour Plan',
                      'error_price'=>'Enter the Package Price'
                 );
                

		//$this->load->view('admin_add_package',$error);
                $this->add_package();
             }
             elseif ($this->form_validation->run()==TRUE and !empty($_FILES['userfile']['name']['agree'][0])) 
             {
                $this->upload->do_upload(); 
                $data=array('upload_data'=>$this->upload->data());
                 $this->image_resize($data['upload_data']['full_path'], $data['upload_data']['file_name']);
                 $alldata=array(
                     'Title'=>$this->input->post('name'),
                     'Transport'=>$this->input->post('agree'),
                     'Package_id'=>$this->input->post('package_id'),
                     'plan'=>  $this->input->post('longdes'),
                     'Package_price'=>  $this->input->post('price'),
                     'Image'=>$data['upload_data']['file_name'],
                          'Image1'=>$data['upload_data']['file_name']
                 );
                 $this->load->model('admin_package_model');
                 $this->admin_package_model->insert($alldata);
                 redirect('admin/dashboard');
        }
        elseif ($this->session->userdata('is_logged_in')&& $this->session->userdata('role')=='User') {
            redirect('user/dashboard');
    }
        else {
            $error['error']='!!You dont have persmission!!';
            $this->load->view('login',$error);
    }
            
             }
             
            
            
            
//           if(!$this->upload->do_upload())
//           {
//               $error =array('error' => $this->upload->display_errors());
//               $this->load->view('upload_image',$error);
//           }
//           else
//           {
//               $data=array('upload_data'=>$this->upload->data());
//               /* echo'<pre>';
//                print_r($data);
//                 echo'</pre>';*/
//               $this->image_resize($data['upload_data']['full_path'], $data['upload_data']['file_name']);
//           }
           
        }
//    ============================================================================
//           Image Re-Size
//    ============================================================================
        
        public function image_resize($path,$file)
        {
            $config_resize=array();
            $config_resize['image_library']='gd2';
            $config_resize['source_image']=$path;
            $config_resize['maintain_ratio']=TRUE;
            $config_resize['width']=100;
            $config_resize['height']=100;
            $config_resize['new_image']='./image/thumb/'.$file;
            $this->load->library('image_lib',$config_resize);
            $this->image_lib->resize();
        }
        
//    ============================================================================
//            ADD Package 
//    ============================================================================
    
     public function package_list()
    {
       // $title['title']='User List';
        /*$data['data']='User List';
        $this->load->model('admin_user_list_model');
        $data['user']=$this->admin_user_list_model->get_user();
        $this->load->view('admin_user_list',$data);*/
        
         
//         if($this->session->userdata('is_logged_in')&& $this->session->userdata('role')=='Admin')
//        {
//           $data['data']='Package List';
//        $this->load->model('admin_package_model');
//        $data['packages']=$this->admin_package_model->get_package();
//        $this->load->view('admin_dashboard',$data);
//        }
//        elseif ($this->session->userdata('is_logged_in')&& $this->session->userdata('role')=='User') {
//            redirect('user/dashboard');
//    }
//        else {
//            $error['error']='!!You dont have persmission!!';
//            $this->load->view('login',$error);
//    }
   
   
    }
    
    
//    ============================================================================
//            Delete Package 
//    ============================================================================
  
    public function del_package($pid='')
    {
       if($this->session->userdata('is_logged_in')&& $this->session->userdata('role')=='Admin')
        {
            $this->load->model('admin_package_model');
            $where = array('id' => $pid);
            $this->admin_package_model->del_pack('tbl_package',$where);
           redirect('admin/dashboard');
        }
        elseif ($this->session->userdata('is_logged_in')&& $this->session->userdata('role')=='User') {
            redirect('user/dashboard');
    }
        else {
            $error['error']='!!You dont have persmission!!';
            $this->load->view('login',$error);
    } 
        
    }
    
       
//    ============================================================================
//            Place Info 
//    ============================================================================
    
    public function place_info()
    {
        $this->load->view('place_info');
    }
     public function other()
    {
        $this->load->view('other_resource');
    }
    
    public function up_place_info()
    {
         if($this->session->userdata('is_logged_in')&& $this->session->userdata('role')=='Admin')
        {
             $this->form_validation->set_rules('placename','Place Location','required|callback_location_is_taken');
             $this->form_validation->set_rules('p_info','Place info','required');
             // $this->form_validation->set_rules('Hotel','Hotel Name','required|callback_hotel_is_taken');
             //$this->form_validation->set_rules('h_location','Hotel','required');
              
             if($this->form_validation->run()==FALSE)
             {
                 $this->load->view('place_info');
             }
             else
             {
                   $data=array();
                $data['Place_Location']=  $this->input->post('placename');
                 $data['Place_Description']=  $this->input->post('p_info');
                 //$data['h_name']=  $this->input->post('Hotel');
                //$data['H_Location']=  $this->input->post('h_location');
                 
                  
                  $data['uid']=  $this->input->post('session');
                  $data['Date']=  date('Y-m-d');
                  $this->load->model('admin_package_model');
                  $this->admin_package_model->up_info_place($data);
                  redirect('admin/dashboard');
             }
 
        }
        elseif ($this->session->userdata('is_logged_in')&& $this->session->userdata('role')=='User') {
            redirect('user/dashboard');
    }
        else {
            $error['error']='!!You dont have persmission, please log in!!';
            $this->load->view('login',$error);
    }
        
    }
    
    public function up_coun_info()
    {
       if($this->session->userdata('is_logged_in')&& $this->session->userdata('role')=='Admin')
        {
             $this->form_validation->set_rules('country','Country','required|callback_country_is_taken');
             
              
             if($this->form_validation->run()==FALSE)
             {
                 $this->load->view('other_resource');
             }
             else
             {
                   $data=array();
                $data['c_name']=  $this->input->post('country');
                 
                  $data['Date']=  date('Y-m-d');
                  $this->load->model('admin_package_model');
                  $this->admin_package_model->up_country_place($data);
                  redirect('admin/dashboard');
             }
 
        }
        elseif ($this->session->userdata('is_logged_in')&& $this->session->userdata('role')=='User') {
            redirect('user/dashboard');
    }
        else {
            $error['error']='!!You dont have persmission, please log in!!';
            $this->load->view('login',$error);
    }
         
    }
    
       public function up_hotel_info()
    {
       if($this->session->userdata('is_logged_in')&& $this->session->userdata('role')=='Admin')
        {
             $this->form_validation->set_rules('Hotel','Hotel Name','required|callback_hotel_is_taken');
             $this->form_validation->set_rules('h_location','Hotel','required');
              
             if($this->form_validation->run()==FALSE)
             {
                 $this->load->view('other_resource');
             }
             else
             {
                   $data=array();
                $data['h_name']=  $this->input->post('Hotel');
                $data['H_Location']=  $this->input->post('h_location');
                 
                  $data['Date']=  date('Y-m-d');
                  $this->load->model('admin_package_model');
                  $this->admin_package_model->up_hotel_info($data);
                  redirect('admin/dashboard');
             }
 
        }
        elseif ($this->session->userdata('is_logged_in')&& $this->session->userdata('role')=='User') {
            redirect('user/dashboard');
    }
        else {
            $error['error']='!!You dont have persmission, please log in!!';
            $this->load->view('login',$error);
    }
         
    }
          public function up_ptype_info()
    {
       if($this->session->userdata('is_logged_in')&& $this->session->userdata('role')=='Admin')
        {
             $this->form_validation->set_rules('ptype','Type','required|callback_type_is_taken');
            
              
             if($this->form_validation->run()==FALSE)
             {
                 $this->load->view('other_resource');
             }
             else
             {
                   $data=array();
                $data['package_type']=  $this->input->post('ptype');
               
                  $this->load->model('admin_package_model');
                  $this->admin_package_model->up_pt_info($data);
                  redirect('admin/dashboard');
             }
 
        }
        elseif ($this->session->userdata('is_logged_in')&& $this->session->userdata('role')=='User') {
            redirect('user/dashboard');
    }
        else {
            $error['error']='!!You dont have persmission, please log in!!';
            $this->load->view('login',$error);
    }
         
    }
    
    public function type_is_taken($input)
        {
            $query="SELECT * FROM `tbl_package_type` where `package_type` = ?";
            $arg=array($input);
            $exce=$this->db->query($query,$arg) or die(mysql_error());
            if($exce->num_rows()>0)
            {
                  $this->form_validation->set_message('type_is_taken', 'This Type already taken');
                return FALSE;
            }
            else 
            {
                return TRUE;
            }
        }
     public function country_is_taken($input)
        {
            $query="SELECT * FROM `tbl_country` where `c_name` = ?";
            $arg=array($input);
            $exce=$this->db->query($query,$arg) or die(mysql_error());
            if($exce->num_rows()>0)
            {
                  $this->form_validation->set_message('country_is_taken', 'This Country already taken');
                return FALSE;
            }
            else 
            {
                return TRUE;
            }
        }

        public function location_is_taken($input)
        {
            $query="SELECT * FROM `tbl_placeinfo` where `Place_Location` = ?";
            $arg=array($input);
            $exce=$this->db->query($query,$arg) or die(mysql_error());
            if($exce->num_rows()>0)
            {
                  $this->form_validation->set_message('location_is_taken', 'This location already taken');
                return FALSE;
            }
            else 
            {
                return TRUE;
            }
        }
        
        
         public function duration_is_taken($input)
        {
            $query="SELECT * FROM `tbl_placeinfo` where `Duration` = ?";
            $arg=array($input);
            $exce=$this->db->query($query,$arg) or die(mysql_error());
            if($exce->num_rows()>0)
            {
                  $this->form_validation->set_message('duration_is_taken', 'This Duration already taken');
                return FALSE;
            }
            else 
            {
                return TRUE;
            }
        }
        
        public function hotel_is_taken($input)
        {
            $query="SELECT * FROM `tbl_hotel` where `h_name` = ?";
            $arg=array($input);
            $exce=$this->db->query($query,$arg) or die(mysql_error());
            if($exce->num_rows()>0)
            {
                  $this->form_validation->set_message('hotel_is_taken', 'This Hotel already taken');
                return FALSE;
            }
            else 
            {
                return TRUE;
            }
        }
        
         public function sight_is_taken($input)
        {
            $query="SELECT * FROM `tbl_placeinfo` where `Sight_seen` = ?";
            $arg=array($input);
            $exce=$this->db->query($query,$arg) or die(mysql_error());
            if($exce->num_rows()>0)
            {
                  $this->form_validation->set_message('hotel_is_taken', 'This Hotel already taken');
                return FALSE;
            }
            else 
            {
                return TRUE;
            }
        }
        
        public function pack_is_taken($input)
        {
            $query="SELECT * FROM `tbl_placeinfo` where `Package_Type` = ?";
            $arg=array($input);
            $exce=$this->db->query($query,$arg) or die(mysql_error());
            if($exce->num_rows()>0)
            {
                  $this->form_validation->set_message('pack_is_taken', 'This pack already taken');
                return FALSE;
            }
            else 
            {
                return TRUE;
            }
        }
    
    
    
    
    public function total()
    {
         if($this->session->userdata('is_logged_in')&& $this->session->userdata('role')=='Admin')
        {
             $this->load->model('admin_package_model');
             $d['user']=  $this->admin_package_model->total_pack();
             $this->load->view('admin_dashboard',$d);
                  
            
        }
        elseif ($this->session->userdata('is_logged_in')&& $this->session->userdata('role')=='User') {
            redirect('user/dashboard');
    }
        else {
            $error['error']='!!You dont have persmission, please log in!!';
            $this->load->view('login',$error);
    }
        
    }
    
//  //===========================================================================//
//    
//    ADMIN Search work 
//    ===========================================================================
    
    public function search_usr()
    {
         if($this->session->userdata('is_logged_in')&& $this->session->userdata('role')=='Admin')
        {
             $this->load->model('admin_user_list_model');
             $firstname=  $this->input->post('search');
             if(isset($firstname)and !empty($firstname))
             {
                 $sdata['user']=$this->admin_user_list_model->srch_user($firstname);
                 $sdata['links']='';
                 $this->load->view('admin_user_list',$sdata);
             }
             else
             {
                 redirect('admin/user_list');
             }
             
                  
            
        }
        elseif ($this->session->userdata('is_logged_in')&& $this->session->userdata('role')=='User') {
            redirect('user/dashboard');
    }
        else {
            $error['error']='!!You dont have persmission, please log in!!';
            $this->load->view('login',$error);
    }
    }
    
     public function search_pack()
    {
         if($this->session->userdata('is_logged_in')&& $this->session->userdata('role')=='Admin')
        {
             $this->load->model('admin_package_model');
             $firstname=  $this->input->post('search');
             if(isset($firstname)and !empty($firstname))
             {
                 $sdata['user']=$this->admin_package_model->srch_user($firstname);
                 $sdata['links']='';
                 $this->load->view('admin_dashboard',$sdata);
             }
             else
             {
                 redirect('admin/dashboard');
             }
             
                  
            
        }
        elseif ($this->session->userdata('is_logged_in')&& $this->session->userdata('role')=='User') {
            redirect('user/dashboard');
    }
        else {
            $error['error']='!!You dont have persmission, please log in!!';
            $this->load->view('login',$error);
    }
    }
    
 /*===============================================================================
  * ADMIN ADD PACKAGE
  */
    
     public function save()
        {
         if($this->session->userdata('is_logged_in')&& $this->session->userdata('role')=='Admin')
        {
           
            $this->form_validation->set_rules('pName','Package Title','required');
            $this->form_validation->set_rules('p_price','Price','required');
             $this->form_validation->set_rules('p_visa','Visa','required');
//             $this->form_validation->set_rules('pic','Picture','required');
//             $this->form_validation->set_rules('pic1','Picture','required');
   // $this->form_validation->set_rules('d_type','Type','required|greater_than[0]');
             $this->form_validation->set_rules('ts','Date','required');
             $this->form_validation->set_rules('te','Date','required');
             $this->form_validation->set_rules('d_type','Type','required|callback_check_default');
             $this->form_validation->set_rules('longdes','Description','required');
             
            if($this->form_validation->run()==FALSE)
            {
                $this->dynamic_combobox();
            }
            else
            {
                $this->load->model('combobox_model');
                $url=  $this->do_upload();
                $url1=  $this->do_upload1();
                $data1=  $_POST["pName"];
                $data2=  $_POST["p_id"];
                $data3=  $_POST["p_price"];
                $data4=  $_POST["d_type"];
                
                 $data5=  $_POST["d_dur"];
                $data6=  $_POST["d_dep"];
                $data7=  $_POST["d_des"];
                $data8=  $_POST["d_tra"];
                
                 $data9=  $_POST["p_visa"];
                $data10=  $_POST["p_tax"];
                $data11=  $_POST["d_aco"];
                $data12=  $_POST["a_type"];
                
                $data15=  $_POST["bre"];
                $data16=  $_POST["lun"];
                $data117=  $_POST["din"];
                
                
               // $data13=  $_POST["location"];
                $data14=  $_POST["longdes"];
                $data20= date('Y-m-d');
                 $data21=  $_POST["ts"];
                  $data22=  $_POST["te"];
                   $data23=  $_POST["country"];
               
                $this->combobox_model->Insertdata($data1,$data2,$data3,$data4,
        $data5,$data6,$data7,$data8,$data9,$data10,$data11,$data12,$data14,$data15,$data16,$data117,$data20,$data21,
         $data22,$data23,$url,$url1);
                redirect('admin/dashboard');
               // echo "successfull !!!";
            }
        }
        elseif ($this->session->userdata('is_logged_in')&& $this->session->userdata('role')=='User') {
            redirect('user/dashboard');
    }
        else {
            $error['error']='!!You dont have persmission!!';
            $this->load->view('login',$error);
    }
            
           
        }
        
        function check_default($post_string)
        {
           if($post_string=="none")
           {
               $this->form_validation->set_message('check_default','please slect a option');
               return false;
           }
           else
           {
               return true;
           }
        }
     function dynamic_combobox(){
     // retrieve the album and add to the data array
        $data['']= 'Names';
        $data['groups'] = $this->combobox_model->getname();
         $data['groups1'] = $this->combobox_model->getcountry();
         $data['groups2'] = $this->combobox_model->gethotel();
         $data['groups3']=  $this->combobox_model->gettype();
        $this->load->view('add_package', $data);
        //$this->load->view('admin_package_edit',$data);
         
        
   }
   
   
   
   
   
  
   
   public function do_upload()
   {
       $type=  explode('.', $_FILES["pic"]["name"]);
       $type=$type[count($type)-1];
       $url="./images/".uniqid(rand()).'.'.$type;
       if(in_array($type, array("jpg","jpeg","png","gif")))
       
           if(is_uploaded_file($_FILES["pic"]["tmp_name"]))
           
               if(move_uploaded_file($_FILES["pic"]["tmp_name"], $url))
              
                   return $url;
       return "";
       
               
   }
   
   public function do_upload1()
   {
       $type=  explode('.', $_FILES["pic1"]["name"]);
       $type=$type[count($type)-1];
       $url="./images/".uniqid(rand()).'.'.$type;
       if(in_array($type, array("jpg","jpeg","png","gif")))
       
           if(is_uploaded_file($_FILES["pic1"]["tmp_name"]))
           
               if(move_uploaded_file($_FILES["pic1"]["tmp_name"], $url))
              
                   return $url;
       return "";
       
               
   }
   
    /*===============================================================================
  * ADMIN ADD PACKAGE
  */
    
   public function ad_con_pack()
   {
       $this->load->model('admin_conf_model');
       $data['res']=  $this->admin_conf_model->process_pack();
       $this->load->view('admin_con_package',$data);
   }
   
   public function ad_con($id)
   {
       $data=array(
           'Status'=>'Confirm'
       );
       $this->load->model('admin_conf_model');
       $this->admin_conf_model->update_process($id,$data);//update by order id
       redirect('admin/ad_con_pack');
   }
   
   public function ad_new_user()
   {
       $this->load->model('admin_conf_model');
       $data['res']=  $this->admin_conf_model->inact_user();
       
       $this->load->view('admin_active_user',$data);
   }
    public function user_con($id)
   {
       $data=array(
           'Status'=>'1'
       );
       $this->load->model('admin_conf_model');
       $this->admin_conf_model->active_process($id,$data);//update by order id
       redirect('admin/ad_new_user');
   }
   
   
   public function ad_pack_edit($id)
   {
       $this->load->model('admin_conf_model');
       $p['item']=$this->admin_conf_model->get_pack_update($id);
       $p['groups'] = $this->combobox_model->getname();
         $p['groups1'] = $this->combobox_model->getcountry();
         $p['groups2'] = $this->combobox_model->gethotel();
         $p['groups3']=  $this->combobox_model->gettype();
       $this->load->view('admin_package_edit',$p);
           
   }
   
   
        public function updat_pack()
        {
         if($this->session->userdata('is_logged_in')&& $this->session->userdata('role')=='Admin')
        {
           
            $this->form_validation->set_rules('pName','Package Title','required');
            $this->form_validation->set_rules('p_price','Price','required');
             $this->form_validation->set_rules('p_visa','Visa','required');
             $this->form_validation->set_rules('ts','Date','required');
             $this->form_validation->set_rules('te','Date','required');
             $this->form_validation->set_rules('d_type','Type','required|callback_check_default');
              $this->form_validation->set_rules('country','Country','required|callback_check_country');
             $this->form_validation->set_rules('longdes','Description','required');
              $id=  $this->input->post('id');
             
            if($this->form_validation->run()==FALSE)
            {
                $this->ad_pack_edit($id);
            }
            else
            {
                $this->load->model('combobox_model');
                $this->load->model('admin_user_list_model');
                $data['Image']=  $this->do_upload();
                $data['Image1']=  $this->do_upload1();
                $data['Title']=  $this->input->post('pName');
                $data['Package_price']=  $this->input->post('p_price');
                $data['Package_Type']=  $this->input->post('d_type');
                $data['Duration']=  $this->input->post('d_dur');
                $data['Start_Date']=  $this->input->post('ts');
                $data['End_Date']=  $this->input->post('te');
                $data['Country']=  $this->input->post('country');
                $data['Jour_start']=  $this->input->post('d_dep');
                $data['Jour_Destination']=  $this->input->post('d_des');
                $data['Transport']=  $this->input->post('d_tra');
                $data['Visa']=  $this->input->post('p_visa');
                $data['Tax']=  $this->input->post('p_tax');
                $data['Acommodation']=  $this->input->post('d_aco');
                $data['Acommodo_type']=  $this->input->post('a_type');
                $data['Breakfast']=  $this->input->post('bre');
                $data['Lunch']=  $this->input->post('lun');
                $data['Dinner']=  $this->input->post('din');
                $data['plan']=  $this->input->post('longdes');
                $data['Date']=  date('Y-m-d');
                
               
                $this->admin_user_list_model->update_pack($data,$id);
                redirect('admin/dashboard');
                echo "successfull !!!";
            }
        }
        elseif ($this->session->userdata('is_logged_in')&& $this->session->userdata('role')=='User') {
            redirect('user/dashboard');
    }
        else {
            $error['error']='!!You dont have persmission!!';
            $this->load->view('login',$error);
    }
            
           
        }
   
   
   function dynamic_combobox3(){
     // retrieve the album and add to the data array
        $data['']= 'Names';
        $data['groups'] = $this->combobox_model->get_all();
        $this->load->view('admin_package_edit', $data);
         
         
        
   }
    function check_country($post_string)
        {
           if($post_string=="none")
           {
               $this->form_validation->set_message('check_country','please slect a option');
               return false;
           }
           else
           {
               return true;
           }
        }
        
        
        function placename()
        {
            $this->load->model('admin_placeinfo_model');
            $data['data']=  $this->admin_placeinfo_model->getplace();
            $this->load->view('admin_about_place',$data);
        }
        
        function ad_pedit($id)
        {
            $this->load->model('admin_placeinfo_model');
            $data['res']=$this->admin_placeinfo_model->edit($id);
            $this->load->view('admin_pedit',$data);
        }
        
        function up_p()
        {
             if($this->session->userdata('is_logged_in')&& $this->session->userdata('role')=='Admin')
        {
             $this->form_validation->set_rules('placename','Place Location','required');
             $this->form_validation->set_rules('p_info','Place info','required');
             // $this->form_validation->set_rules('Hotel','Hotel Name','required|callback_hotel_is_taken');
             //$this->form_validation->set_rules('h_location','Hotel','required');
                            $id=  $this->input->post('id');

             if($this->form_validation->run()==FALSE)
             {
                 $this->ad_pedit($id);
             }
             else
             {
                 $this->load->model('admin_placeinfo_model');
                   $data=array();
                $data['Place_Location']=  $this->input->post('placename');
                 $data['Place_Description']=  $this->input->post('p_info');
                 //$data['h_name']=  $this->input->post('Hotel');
                //$data['H_Location']=  $this->input->post('h_location');
                 
                  
                  $data['uid']=  $this->input->post('session');
                  $data['Date']=  date('Y-m-d');
                  //$this->load->model('admin_package_model');
                  $this->admin_placeinfo_model->up_info_place($data,$id);
                  redirect('admin/dashboard');
             }
 
        }
        elseif ($this->session->userdata('is_logged_in')&& $this->session->userdata('role')=='User') {
            redirect('user/dashboard');
    }
        else {
            $error['error']='!!You dont have persmission, please log in!!';
            $this->load->view('login',$error);
    }
        }
}
