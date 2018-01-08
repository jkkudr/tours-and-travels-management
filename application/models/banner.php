<?php 
class banner extends CI_Model {
		
		function __construct() {
	        parent::__construct();
	        $this->load->database();
	        $this->load->library('session');
	    }
	    public function banner_insert($data)
	    {
	    	if($this->db->insert('banners',$data))
			{
				return TRUE;
			}
	    }
	}