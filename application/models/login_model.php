<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class login_model extends CI_Model{
    //put your code here
    public function is_logged_in($email,$pass)
    {  
       $this->db->select('*');
       $this->db->from('tbl_userdata');
       $this->db->where('Email',$email);
        $this->db->where('Password',$pass);
        $this->db->where('Status',"1");
        
        
        $query=$this->db->get();
        if($query->num_rows()==1)
        {
            return $query->result();
        }
        else 
            {
            return FALSE;
            }
        
    }
}
