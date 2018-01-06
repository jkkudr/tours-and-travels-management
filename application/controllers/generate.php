<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of generate
 *
 * @author Majeed
 */
class generate extends CI_Controller {
    //put your code here
    
   function generate()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }


    function create($user_id)
    {

                $this->load->library('cezpdf');

        $this->cezpdf->ezText('PDF REPORT OF LOGIN TABLE', 12, array('justification' => 'center'));
        $this->cezpdf->ezSetDy(-10);
                $i=1;
                $content="";

                $fname="";
                $query = $this->db->query("SELECT * FROM `tbl_orderlist` WHERE `user_id`='$user_id' AND Status='Confirm'");
                $num = $query->num_fields();
                $farr=array();

                while($i <= $num){
                    $test = $i;
                    $value = $this->input->post($test);

                    if($value != ''){
                            $fname= $fname." ".$value;
                            array_push($farr, $value);

                        }
                     $i++;
                }

                $fname = trim($fname);

                $fname=str_replace(' ', ',', $fname);
                $this->db->select($fname);
                $query = $this->db->get('tbl_orderlist');
                $result = $query->result();

                foreach ($farr as $j)
                {

                    $content= strtoupper($j)."\n\n";
                    foreach($result as $res){
                       $content = $content.$res->$j."\n";
                    }

                      $this->cezpdf->ezText($content, 10);

                       $this->cezpdf->ezStream($user_id);
                 }
    }

}
