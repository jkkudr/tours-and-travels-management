<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of user_package_model
 *
 * @author Majeed
 */
class user_package_model extends CI_Model{
    //put your code here
    public function view_package()
    {
        $this->db->select('*');
        $this->db->from('tbl_package');
        $query=$this->db->get();
        if($query->num_rows()>0)
        {
            return $query->result();
        }
        else
        {
            return $query->result();
        }
        
        
    }
    public function view_details($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_package');
        $this->db->where('id',$id);
        $query=$this->db->get();
        
        if($query->num_rows()>0)
        {
            return $query->result();
        }
 else {
            return $query->result();
 }
        
    }
    
    public function confirm_package($user)
    {
        $this->db->insert('tbl_orderlist',$user);
        
    }
    
     public function count_user()
    {
        return $this->db->count_all('tbl_package');
        
    }
    
    public function fetch_user($limit,$offset)
    {
        $this->db->limit($limit,$offset);
        
        $query= $this->db->get('tbl_package');
        if($query->num_rows()>0)
        {
            return $query->result();
        }
        else 
        {
            return $query->result();
        }
    }
    
    public function srch_user($firstname)
    {
        $this->db->select('*');
        $this->db->from('tbl_package');
        $this->db->like('Title',$firstname);
        $query=$this->db->get();
        if($query->num_rows()>0)
        {
            return $query->result();
            
        }
        else 
            {
            return $query->result();
            }
    }
    
    public function paid_confirm($pid)
    {
        $this->db->select('*');
        $this->db->from('tbl_package');
        $this->db->where('id',$pid);
        $query=  $this->db->get();
        if($query->num_rows()>0)
        {
            return $query->result();
        }
        else 
            {
            return $query->result();
            }
    }
}
