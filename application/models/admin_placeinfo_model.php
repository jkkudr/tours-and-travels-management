<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of admin_placeinfo_model
 *
 * @author Majeed
 */
class admin_placeinfo_model extends CI_Model{
    public function add_info($info)
    {
        $this->db->insert('tbl_placeinfo',$info);
    }
    //put your code here
    
    
    public function getplace()
    {
        $this->db->select('*');
        $this->db->from('tbl_placeinfo');
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
    
    public function edit($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_placeinfo');
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
     public function up_info_place($data,$id)
    {
        $this->db->where('id',$id);
        $this->db->update('tbl_placeinfo',$data);
    }
}
