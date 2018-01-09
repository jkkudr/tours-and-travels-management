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
	    public function getbanners()
	    {
	    	$query=$this->db->query("SELECT * FROM `banners` ORDER BY sort_order");
	    	$data=array();
	    	foreach ($query->result() as $key=> $row)
			{
				$data[$key]=$row;
			}
			return $data;
		}
		public function deletebanner($id)
	    {
	    	$query=$this->db->query("delete FROM `banners` where id='$id'");
	    	 return TRUE;
		}
		public function package_insert($data)
		{
			if($this->db->insert('tlb_packages',$data))
			{
				return TRUE;
			}
		}
	}