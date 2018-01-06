<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of combox_model
 *
 * @author Majeed
 */
class combox_model extends CI_Model{
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    public function getname()
    {
        
       $query = $this->db->query('SELECT Transport_bus FROM tbl_placeinfo order by Transport_bus asc');


        return $query->result();
        
         
 
    }
    
    
  
}
