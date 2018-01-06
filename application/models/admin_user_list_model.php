<?php



/**
 * Description of admin_user_list_model
 *
 * @author Majeed
 */
class admin_user_list_model extends CI_Model{
    //put your code here
    public function get_user()
    {
//        $this->db->select('*');
//        $this->db->from('tbl_userdata');
//        $query=$this->db->get();
//        if($query->num_rows()>0)
//        {
//            return $query->result(); 
//        }
//        else 
//            {
//            return $query->result();
//            }
 
    }
    
    public function count_user()
    {
        return $this->db->count_all('tbl_userdata');
        
    }
    
    public function fetch_user($limit,$offset)
    {
        $this->db->limit($limit,$offset);
        
        $query= $this->db->get('tbl_userdata');
        if($query->num_rows()>0)
        {
            return $query->result();
        }
        else 
        {
            return $query->result();
        }
    }
    
    public function confirm_del($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_userdata');
        $this->db->where('uid',$id);
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

    public function del_user($table, $where = array())
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
    
    
    public function get_user_update($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_userdata');
        $this->db->where('uid',$id);
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
    
    public function update($user,$id)
    {
        $this->db->where('uid',$id);
        $this->db->update('tbl_userdata',$user);
    }
    
    public function check_exists($input)
    {
        
//        $this->db->select('*');
//        $this->db->from('tbl_userdata');
//        $this->db->where();
//       
//       $query=  $this->db->get();
//        
//        if($query->num_rows()>0)
//        {
//            return FALSE;
//        }
//        else
//        {
//            return TRUE;
//        }
        
        $query="SELECT * FROM `tbl_userdata` where `Email` = ?";
        $arg=array($input);
        $exce=$this->db->query($query,$arg);
            if($exce->num_rows()>0)
            {
                 $this->form_validation->set_message('email_is_taken', 'This Email already taken');
                return FALSE;
            }
            else 
            {
                return TRUE;
            }
        
        
//     $this->db->where('Email',$input);
//    $query = $this->db->get('tbl_userdata');
//    if ($query->num_rows() > 0){
//        return true;
//    }
//    else{
//        return false;
//    }
    }
    
    public function srch_user($firstname)
    {
        $this->db->select('*');
        $this->db->from('tbl_userdata');
        $this->db->like('Firstname',$firstname);
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
    
    
     public function update_pack($data,$id)
    {
        $this->db->where('id',$id);
        $this->db->update('tbl_package',$data);
    }
}
