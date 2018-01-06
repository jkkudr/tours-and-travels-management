<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of base_model
 *
 * @author Majeed
 */
class base_model extends CI_Model{
    //put your code here
   /* public function Insertdata($data)
    {
         $this->db->insert('tbl_userdata',$data);
    }*/
    public function insertdata($data)
    {
        $this->db->insert('tbl_userdata',$data);
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
    
    
    public function get_package()
    {
        $this->db->select('*');
        $this->db->from('tbl_package');
        $result=  $this->db->get();
        if($result->num_rows()>0)
        {
            return $result->result();
        }
        else
        {
            return $result->result();
        }
    }
    
    public function view_pro_details($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_package');
        $this->db->where('id',$id);
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
    
     public function dom_pack()
    {
//         $test="Domestic";
////         $this->db->select('*');
////         $this->db->where('Package_Type',$test);
////         $query=  $this->db->get('tbl_package');
////         
//        $query = $this->db->where('Package_Type', 'Domestic')->get('tbl_package');
//        return $query->num_rows();
//        $query=$this->db->query("select * from tbl_package where Package_Type='Domestic'");
//        return $query->num_rows();
         
//          $this->db->select ( 'COUNT(*) AS `numrows`' );
//    $this->db->where ( array (
//            'Package_type' => 'Domestic'
//    ) );
//    $query = $this->db->get ( 'tbl_package' );
//    return $query->row ()->numrows;
         
         
        $this->db->select('*');
        $this->db->from('tbl_package');
        $this->db->where('Package_Type',"Domestic");
        $query=  $this->db->get();
        return $query->num_rows();
    }
}
