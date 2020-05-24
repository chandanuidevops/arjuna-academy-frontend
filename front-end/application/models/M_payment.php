<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_payment extends CI_Model {

    public function insert_paymentdata($insert)
    {
       
        $query =   $this->db->insert('test_payment',$insert); 
        
        if($this->db->affected_rows()>0){
          return  $this->db->insert_id();
           
        }else{
            return false;
        }
        
    }

    public function getPayment($uid='')
	{
		return $this->db->where('user_id', $uid)->get('test_payment')->result_array();
    }

    public function check_payment($uid )
    {
        $this->db->where('user_id',$uid);
        $this->db->where('status',1);
        $query = $this->db->get('test_payment')->result();
        if(!empty($query)){
            return true;
        }else{
            return false;
        }
       
    }
    public function check_test_completed($uid )
    {
        $this->db->where('user_id',$uid);
        $this->db->where('status',1);
        $query = $this->db->get('test_payment')->row();
        if(!empty($query)){
            return $query;
        }else{
            return false;
        }
       
    }
  
}

/* End of file M_home.php */
/* Location: ./application/models/M_home.php */