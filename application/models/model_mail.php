<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of model_mail
 *
 * @author Majeed
 */
class model_mail extends CI_Model{
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    
    
    public function sendmail($s)
    {
        $this->db->insert('tbl_mail',$s);
    }
    
}
