<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of admin_conf_model
 *
 * @author Majeed
 */
class admin_conf_model extends CI_Model{
    //put your code here
    public function process_pack()
    {   
        $status="Proccessing";
        $this->db->select('*');
        $this->db->from('tbl_orderlist');
        $this->db->where('Status',$status);
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
    
    public function update_process($id,$data)
    {
        $this->db->where('order_id',$id);
        $this->db->update('tbl_orderlist',$data);
    }
    
    
    
     public function inact_user()
    {   
        $status="0";
        $this->db->select('*');
        $this->db->from('tbl_userdata');
        $this->db->where('Status',$status);
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
    
    public function active_process($id,$data)
    {
        $this->db->where('uid',$id);
        $this->db->update('tbl_userdata',$data);
    }
    
    
    public function get_pack_update($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_package');
        $this->db->where('id',$id);
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
}
