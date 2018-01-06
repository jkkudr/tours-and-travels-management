<?php


class combobox_model extends CI_Model{
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    public function getname()
    {
        
       $query = $this->db->query('SELECT * FROM tbl_placeinfo order by Place_Location asc');
   


        return $query->result();

        
        
         
 
    }
     public function getcountry()
    {
        
       $query = $this->db->query('SELECT * FROM tbl_country order by c_name asc');


        return $query->result();
        
         
 
    }
    
    public function gethotel()
    {
        
       $query = $this->db->query('SELECT * FROM tbl_hotel order by h_name asc');


        return $query->result();
        
         
 
    }
    
    public function gettype()
    {
        
       $query = $this->db->query('SELECT * FROM tbl_package_type order by package_type asc');


        return $query->result();
        
         
 
    }
    
    public function Insertdata($data1,$data2,$data3,$data4,
        $data5,$data6,$data7,$data8,$data9,$data10,$data11,$data12,$data14,$data15,$data16,$data117,$data20,
            $data21,$data22,$data23,$url,$url1)
    {
        
        $this->db->set('Title',$data1);
        $this->db->set('Package_id',$data2);
        $this->db->set('Package_price',$data3);
        $this->db->set('Package_type',$data4);
        $this->db->set('Duration',$data5);
        $this->db->set('Jour_start',$data6);
        $this->db->set('Jour_Destination',$data7);
        $this->db->set('Transport',$data8);
        $this->db->set('Visa',$data9);
        $this->db->set('Tax',$data10);
        $this->db->set('Acommodation',$data11);
        $this->db->set('Acommodo_Type',$data12);
        $this->db->set('plan',$data14);
        $this->db->set('Breakfast',$data15);
        $this->db->set('Lunch',$data16);
        $this->db->set('Dinner',$data117);
        $this->db->set('Date',$data20);
        $this->db->set('Start_Date',$data21);
        $this->db->set('End_Date',$data22);
        $this->db->set('Country',$data23);
        
        
        $this->db->set('Image',$url);
         $this->db->set('Image1',$url1);
        
        $this->db->insert('tbl_package');
    }
    
    
    public function get_all()
    {
        //$this->db->select('*');
    $this->db->from('tbl_placeinfo');
$this->db->order_by('Place_Location');
$result = $this->db->get();
$return = array();
if($result->num_rows() > 0) {
foreach($result->result_array() as $row) {
$return[$row['id']] = $row['Place_Location'];
}


        return $return;
}
    }
    
}
