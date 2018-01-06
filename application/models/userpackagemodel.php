<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of userpackagemodel
 *
 * @author Majeed
 */
class userpackagemodel extends CI_Model{
    //put your code here
    public function curpack($uid)
    {
        //$this->db->select('*');
        //$this->db->from('tbl_orderlist');
        //$this->db->where('user_id',$uid);
        $query=  $this->db->query("SELECT * FROM `tbl_orderlist` WHERE `user_id`='$uid' AND Status='Proccessing'");
        if($query->num_rows()>0)
        {
             return $query->result();
        }
        else
        {
            return $query->result();
        }
    }
    
     public function buyedpack($uid)
    {
        //$this->db->select('*');
        //$this->db->from('tbl_orderlist');
        //$this->db->where('user_id',$uid);
        $query=  $this->db->query("SELECT * FROM `tbl_orderlist` WHERE `user_id`='$uid' AND Status='Confirm'");
        if($query->num_rows()>0)
        {
             return $query->result();
        }
        else
        {
            return $query->result();
        }
    }
    
    
    public function select_usr($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_userdata');
        $this->db->where('uid',$id);
        $query=  $this->db->get();
        if($query->num_rows()>0)
        {
            return $query->result();
        }
 else {
            return $query->result();
 }
    }
    
    public function updatepass($data,$id)
    {
       $this->db->where('uid',$id);
        $this->db->update('tbl_userdata',$data);
    }
    
    
   public function getRows($id = ''){
		$this->db->select('id,Title,Package_id,Image,Package_price');
		$this->db->from('tbl_package');
		if($id){
			$this->db->where('id',$id);
			$query = $this->db->get();
			$result = $query->row_array();
		}else{
			$this->db->order_by('Title','asc');
			$query = $this->db->get();
			$result = $query->result_array();
		}
		return !empty($result)?$result:false;
	}
        
        //insert transaction data
	public function insertTransaction($data = array()){
		$insert = $this->db->insert('payments',$data);
		return $insert?true:false;
	}
}
