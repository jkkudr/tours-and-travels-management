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
		public function getbannerfromid($id)
		{
			$query=$this->db->query("SELECT * FROM `banners` WHERE id='$id'");
	    	$data=array();
	    	foreach ($query->result() as $key=> $row)
			{
				$data[$key]=$row;
			}
			return $data;
		}
		public function banner_update($data,$where)
		{
			$this->db->where('id',$where);
			$this->db->update('banners',$data);
			return  TRUE;
		}
		public function getpackagelist()
		{
			$query=$this->db->query("SELECT * FROM `tlb_packages` ORDER BY id");
	    	$data=array();
	    	foreach ($query->result() as $key=> $row)
			{
				$data[$key]=$row;
			}
			return $data;
		}
		public function deletepackage($id)
		{
			$query=$this->db->query("delete FROM `tlb_packages` where id='$id'");
	    	 return TRUE;
		}
		public function getpackagefromid($id)
		{
			$query=$this->db->query("SELECT * FROM `tlb_packages` WHERE id='$id'");
	    	$data=array();
	    	foreach ($query->result() as $key=> $row)
			{
				$data[$key]=$row;
			}
			return $data;
		}
		public function package_update($data,$where)
		{
			$this->db->where('id',$where);
			$this->db->update('tlb_packages',$data);
			return  TRUE;
		}
	}