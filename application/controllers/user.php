<?php

/**
 * Description of user
 *
 * @author Majeed
 */
class user extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->library('paypal_lib');
        $this->load->model('userpackagemodel');
    }
    public function dashboard()
    {
       if($this->session->userdata('is_logged_in')&& $this->session->userdata('role')=='User')
        {
            $this->load->library('pagination');
            $this->load->model('user_package_model');
            $config=array();
            $config['base_url']=  base_url('user/dashboard');
            $config['total_rows']=  $this->user_package_model->count_user();
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
            $data['user']=  $this->user_package_model->fetch_user($config['per_page'],  $this->uri->segment(3)); 
//        $data['user']=$this->admin_user_list_model->get_user();
            $data['links'] = $this->pagination->create_links();
           $this->load->view('user_dashboard',$data); 
        }
        elseif ($this->session->userdata('is_logged_in')&& $this->session->userdata('role')=='Admin') {
            redirect('admin/dashboard');
    }
        else {
            $error['error']='You dont have persmission, please log in';
            $this->load->view('login',$error);
    }
    }
    
    public function view_pack()
    {
       if($this->session->userdata('is_logged_in')&& $this->session->userdata('role')=='User')
        {
//           $data['data']='Package_List';
//           $this->load->model('user_package_model');
//           $data['list']=  $this->user_package_model->view_package();
//           
//           $this->load->view('user_view_pack',$data); 
           
           $this->load->library('pagination');
            $this->load->model('user_package_model');
            $config=array();
            $config['base_url']=  base_url('user/view_pack');
            $config['total_rows']=  $this->user_package_model->count_user();
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
            $data['user']=  $this->user_package_model->fetch_user($config['per_page'],  $this->uri->segment(3)); 
//        $data['user']=$this->admin_user_list_model->get_user();
            $data['links'] = $this->pagination->create_links();
           $this->load->view('user_view_pack',$data);
        }
        elseif ($this->session->userdata('is_logged_in')&& $this->session->userdata('role')=='Admin') {
            redirect('admin/dashboard');
    }
        else {
            $error['error']='You dont have persmission, please log in';
            $this->load->view('login',$error);
    }  
    }
    
    public function view_details($id)
    {
      if($this->session->userdata('is_logged_in')&& $this->session->userdata('role')=='User')
        {
          $this->load->model('user_package_model');
            $data['pro']= $this->base_model->view_pro_details($id);
            $this->load->view('user_view_details',$data);
           
        }
        elseif ($this->session->userdata('is_logged_in')&& $this->session->userdata('role')=='Admin') {
            redirect('admin/dashboard');
    }
        else {
            $error['error']='You dont have persmission, please log in';
            $this->load->view('login',$error);
    }    
    }
    
    public function confirm_order()
    {
        if($this->session->userdata('is_logged_in')&& $this->session->userdata('role')=='User')
        {
           $this->load->helper(array('form','url'));
           $this->load->library('form_validation');
           $this->form_validation->set_rules('cardno','Card no','trim|required|min_length[11]|max_length[11]');
           $this->form_validation->set_rules('pay','Choose a option','trim|required');
           $this->form_validation->set_rules('pin','PIN','trim|required|min_length[4]|max_length[5]');
           $this->form_validation->set_rules('amunt','Please enter right amount','required|matches[p_price]');
//           $this->form_validation->set_rules('password','password','trim|required|min_length[5]');
//           $this->form_validation->set_rules('phone','Phone','trim|required|min_length[11]|max_length[14]');
//           $this->form_validation->set_rules('address','Address','trim|required');
           $pid=  $this->input->post('user_id');
           
           if($this->form_validation->run()==FALSE)
           {
               $this->pay_confirm($pid);
           }
           else
           {
               $user=array(
                   'user_id'=>  $this->input->post('uid'),
                   'Invoice'=>  $this->input->post('invoice'),
                   'Customer_name'=>$this->input->post('name'),
                   'Customer_email'=>$this->input->post('umail'),
                   'Card_type'=>$this->input->post('pay'),
                   'Card_no'=>  $this->input->post('cardno'),
                   'Package_title'=>  $this->input->post('fname'),
                   'Package_id'=> $this->input->post('lname'),
                   'Package_price'=>  $this->input->post('p_price'),
                   'Date'=>  date('Y-m-d')
                   
               );
               $this->load->model('user_package_model');
               $this->user_package_model->confirm_package($user);
               redirect('user/dashboard');
                       
           }
        }
        elseif ($this->session->userdata('is_logged_in')&& $this->session->userdata('role')=='Admin'){
            redirect('admin/dashboard');
    }
        else {
            $error['error']='!!You dont have persmission, please log in!!';
            $this->load->view('login',$error);
    }
    }
    
     public function search_pack()
    {
        
            $this->load->model('user_package_model');
             $firstname=  $this->input->post('search');
              if(isset($firstname)and !empty($firstname))
             {
                 $sdata['user']=$this->user_package_model->srch_user($firstname);
                 $sdata['links']='';
//                 $this->load->library('pagination');
//            $this->load->model('user_package_model');
//            $config=array();
//            $config['base_url']=  base_url('user/dashboard');
//            $config['total_rows']=  $this->user_package_model->count_user();
//            $config['per_page']=3;
//            $config['num_links']=3;
//           
//            $config['full_tag_open']="<ul class='pagination'";
//            $config['full_tag_close']="</ul>";
//            $config['num_tag_open']='<li>';
//            $config['num_tag_close']='</li>';
//            $config['cur_tag_open']="<li class='disabled'><li class='active'><a href='#'>";
//            $config['cur_tag_close']="<span class='sr-only'></span></a></li>";
//            $config['next_tag_open']="<li>";
//            $config['next_tagl_close']="</li>";
//            $config['prev_tag_open']="<li>";
//            $config['prev_tagl_close']="</li>";
//            $config['first_tag_open']="<li>";
//            $config['first_tag_close']="</li>";
//            $config['last_tag_open']="<li>";
//            $config['last_tag_close']="</li>";
//            
//            
//            $config['uri_segment']=3;
//            $this->pagination->initialize($config);
//             $sdata['user']=  $this->user_package_model->fetch_user($config['per_page'],  $this->uri->segment(3)); 
////        $data['user']=$this->admin_user_list_model->get_user();
//            $sdata['links'] = $this->pagination->create_links();
                 $this->load->view('user_dashboard',$sdata);
             }
             else
             {
                 redirect('user/dashboard');
             }
            
    }
    
    public function pay_confirm($pid)
    {
        $this->load->model('user_package_model');
         
        $pdata['pro']=  $this->user_package_model->paid_confirm($pid);
        
        $this->load->view('user_paid_confirm',$pdata);
        
        
//         if($this->session->userdata('is_logged_in')&& $this->session->userdata('role')=='Admin')
//        {
////         $this->load->helper(array('form','url'));
////         $this->load->library('form_validation');
////         $this->form_validation->set_rules('fname','FirstName','required');
////         $this->form_validation->set_rules('lname','Lastname','required');
////         $this->form_validation->set_rules('email_address','Email','required');
////         $this->form_validation->set_rules('password','old password','required');
////         $this->form_validation->set_rules('re_password','new password','required');
////         $this->form_validation->set_rules('con_password','confirm password','required');
////         $this->form_validation->set_rules('phone','phone','required');
////         if($this->form_validation->run()==FALSE)
////         {
////            $this->load->view('admin_user_edit');
////         }
//         
//        
//             $data['data']='Confirm';
//             $this->load->model('user_package_model');
//             $data['user']=$this->user_package_model->paid_confirm($pid);
//             $this->load->view('user_paid_confirm',$data);
//        }
//         
//        
//        elseif ($this->session->userdata('is_logged_in')&& $this->session->userdata('role')=='User') {
//            redirect('user/dashboard');
//    }
//        else {
//            $error['error']='!!You dont have persmission!!';
//            $this->load->view('login',$error);
//    }
//     
    }
    
    public function aftr_buy_pak()
    {
        
        if($this->session->userdata('is_logged_in')&& $this->session->userdata('role')=='User')
        {
           $uid=  $this->session->userdata('usrid');
           $this->load->model('userpackagemodel');
           $data['result']=  $this->userpackagemodel->curpack($uid);
           $this->load->view('user_ongoing_pack',$data);
          
       
        }
        elseif ($this->session->userdata('is_logged_in')&& $this->session->userdata('role')=='Admin') {
            redirect('admin/dashboard');
    }
        else {
            $error['error']='You dont have persmission, please log in';
            $this->load->view('login',$error);
    }
    }
    
     public function confirmed_pak()
    {
        
        if($this->session->userdata('is_logged_in')&& $this->session->userdata('role')=='User')
        {
           $uid=  $this->session->userdata('usrid');
           $this->load->model('userpackagemodel');
           $data['result']=  $this->userpackagemodel->buyedpack($uid);
           $this->load->view('user_buyed_pack',$data);
          
       
        }
        elseif ($this->session->userdata('is_logged_in')&& $this->session->userdata('role')=='Admin') {
            redirect('admin/dashboard');
    }
        else {
            $error['error']='You dont have persmission, please log in';
            $this->load->view('login',$error);
    }
    }
    
    function mypdf(){
  $this->load->library('pdf');
  $this->pdf->load_view('views/user_buyed_pack');
  $this->pdf->render();
  $this->pdf->stream("welcome.pdf");
 }
 
 public function changepass()
 {
     if($this->session->userdata('is_logged_in')&& $this->session->userdata('role')=='User')
        {      $id=  $this->session->userdata('usrid');   
          $this->load->model('userpackagemodel');
            $u['user']=$this->userpackagemodel->select_usr($id);
           $this->load->view('user_change_pass',$u);
                
          
       
        }
        elseif ($this->session->userdata('is_logged_in')&& $this->session->userdata('role')=='Admin') {
            redirect('admin/dashboard');
    }
        else {
            $error['error']='You dont have persmission, please log in';
            $this->load->view('login',$error);
    }
 }
 
 public function updatepass()
 {
     if($this->session->userdata('is_logged_in')&& $this->session->userdata('role')=='User')
        {     
         $this->form_validation->set_rules('copass','Old Password','required|trim|matches[opass]');
         $this->form_validation->set_rules('npass','New Password','required|max_length[12]|min_length[5]');
         $this->form_validation->set_rules('cnpass','Confirm New Password','required|matches[npass]');
         
         if($this->form_validation->run()==false)
         {
             $this->changepass();
         }
         else
         {
              $id=  $this->session->userdata('usrid');   
             $this->load->model('userpackagemodel');
             
            $data=array(
                'Password'=>  $this->input->post('cnpass')
            );
            $this->userpackagemodel->updatepass($data,$id);
            redirect('user/dashboard');
         }

          
       
        }
        elseif ($this->session->userdata('is_logged_in')&& $this->session->userdata('role')=='Admin') {
            redirect('admin/dashboard');
    }
        else {
            $error['error']='You dont have persmission, please log in';
            $this->load->view('login',$error);
    }
 }
 
 
 function buy($id){
		//Set variables for paypal form
     if($this->session->userdata('is_logged_in')&& $this->session->userdata('role')=='User'){
		$returnURL = base_url().'paypal/success'; //payment success url
		$cancelURL = base_url().'paypal/cancel'; //payment cancel url
		$notifyURL = base_url().'paypal/ipn'; //ipn url
		//get particular product data
		$product = $this->userpackagemodel->getRows($id);
                $p['item']=  $this->userpackagemodel->getRows($id);
		$userID = $this->session->userdata('usrid'); //current user id
		//$logo = base_url().'assets/images/codexworld-logo.png';
		
		$this->paypal_lib->add_field('return', $returnURL);
		$this->paypal_lib->add_field('cancel_return', $cancelURL);
		$this->paypal_lib->add_field('notify_url', $notifyURL);
		$this->paypal_lib->add_field('item_name', $product['Title']);
		$this->paypal_lib->add_field('custom', $userID);
		$this->paypal_lib->add_field('item_number',  $product['id']);
		$this->paypal_lib->add_field('amount',  $product['Package_price']);		
		//$this->paypal_lib->image($logo);
		
		$this->paypal_lib->paypal_auto_form();
                //$this->load->view('paypal/success/',$p,$userID);
             }
             
             elseif ($this->session->userdata('is_logged_in')&& $this->session->userdata('role')=='Admin') {
            redirect('admin/dashboard');
    }
        else {
            $error['error']='You dont have persmission, please log in';
            $this->load->view('login',$error);
    }
             
             
	}
        
        
     public function view_image($id)
     {
         $this->load->model('user_package_model');
         $t['img']=  $this->user_package_model->view_details($id);
         
         $this->load->view('user_view_image',$t);
     }
    
     
     public function msg()
     {
         $this->load->view('user_msg');
     }
     
     public function mail_send()
     { if($this->session->userdata('is_logged_in')&& $this->session->userdata('role')=='User')
        {     
           $s['user_id']= $this->input->post('sender');
           $s['Subject']=  $this->input->post('sub');
            $s['mail_body']=  $this->input->post('body');
            $s['Date']=  date('Y-m-d');
            $this->load->model('model_mail');
            $this->model_mail->sendmail($s);
            redirect('user/dashboard');
            
//            $config=array(
//                'protocol'=>'smtp',
//                'smtp_host'=>'ssl://smtp.googlemail.com',
//                'smtp_port'=>465,
//                'smtp_user'=>'firsthalf00@gmail.com',
//                'smtp_pass'=>'firsthalf00@',
//                'mailtype' => 'text',
//                'charset' => 'iso-8859-1',
//                'wordwrap' => TRUE
//            );
//         
//         $this->load->library('email',$config);
//         $this->email->from($sender,'User');
//         $this->email->to('firsthalf00@gmail.com');
//         $this->email->subject($subject);
//         $this->email->message($mbody);
//         $this->email->set_newline("\r\n");
//         
//         if($this->email->send())
//         {
//             echo"Your Mail Send Successfully!!!";
//         }
//         else
//         {
//             show_error($this->email->print_debugger());
//         }
          
       
        }
        elseif ($this->session->userdata('is_logged_in')&& $this->session->userdata('role')=='Admin') {
            redirect('admin/dashboard');
    }
        else {
           $error['error']='You dont have persmission, please log in';
            $this->load->view('login',$error);
    }
           
     }
   
}
