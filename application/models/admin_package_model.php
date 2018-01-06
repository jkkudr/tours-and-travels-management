<?php


class admin_package_model extends CI_Model{
    //put your code here
    public function insert($alldata)
    {
        $this->db->insert('tbl_package',$alldata);
    }
    
    public function get_package()
    {
//        $this->db->select('*');
//        $this->db->from('tbl_package');
//        $this->db->order_by("id", "desc");
//        $result=$this->db->get();
//        if($result->num_rows()>0)
//        {
//            return $result->result();
//        }
//        else
//        {
//            return $result->result();
//        }
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

    public function del_pack($table, $where = array())
    {
        $this->db->where($where);
        $res = $this->db->delete($table); 
         if($res)
         {
         return TRUE;
         }
         else
         {
         return FALSE;
         }
    }
    
    public function up_info_place($data)
    {
        $this->db->insert('tbl_placeinfo',$data);
    }
     public function up_country_place($data)
    {
        $this->db->insert('tbl_country',$data);
    }
    public function up_hotel_info($data)
    {
        $this->db->insert('tbl_hotel',$data);
    }
    public function up_pt_info($data)
    {
        $this->db->insert('tbl_package_type',$data);
    }
    
   
    public function total_package()
    {
       $this->db->select_sum('Package_price');
      $this->db->select('Package_price');
     $this->db->from('tbl_package');

$query=$this->db->get();

    return $query->result();

        
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
    
    public function getname()
    {
        
       $query = $this->db->query('SELECT Lastname FROM tbl_userdata order by Lastname asc');


        return $query->result();
        
         
 
    }
    
    
    public  function total_pack()
    {
        $query=  $this->db->query("SELECT count(*) FROM `tbl_package`");
        return $query;
    }
    
}
