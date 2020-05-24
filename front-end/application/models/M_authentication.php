<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_authentication extends CI_Model {

    public function register($insert)
    {
        $this->db->where('email', $insert['email']);
        $query=$this->db->get('user');
        
        if($query->num_rows()>0){
          
            if($query->row()->status==0){
                $this->db->where('email', $insert['email']);
                if(!empty($insert['school_id'])){
                    if(!empty($query->row()->school_id)){
                        
                        unlink('./'.$query->row()->school_id);  
                    }
                }
               return $this->db->update('user',$insert);
            }else{
                return false;
            }
        }
         return   $this->db->insert('user',$insert); 
    }

    public function profile_update($insert,$aa_id)
    {
        $this->db->where('id', $aa_id);
        $query=$this->db->get('user');
        
        if($query->num_rows()>0){
          
            if($query->row()->status==1){
                $this->db->where('id', $aa_id);
                if(!empty($insert['profile_img'])){
                    if(!empty($query->row()->profile_img)){
                        
                        unlink('./'.$query->row()->profile_img);  
                    }
                }
               return $this->db->update('user',$insert);
            }else{
                return false;
            }
        }
         return  false;
    }

    function check_unique_father_mobile($id, $father_mobile) {
        $this->db->where('father_mobile', $father_mobile);
        if($id) {
            $this->db->where_not_in('id', $id);
        }
        return $this->db->get('user')->num_rows();
    }




        //account activate
        public function activateAccount($uniq, $otp, $newotp , $status, $ip)
        {
           $this->db->where('ip', $ip);
           $this->db->where('otp', $otp);
           $query = $this->db->get('user')->row();
           
           if(!empty($query))
           {
            $this->db->where('ip', $ip);
            $this->db->where('otp', $otp);
              $this->db->update('user', ['status'=>$status, 'uniq'=>$uniq, 'otp'=>$newotp]);
              return true;
           }else{
    
              return false;
           }
        }

        public function updateregister($insert)
        {
            $this->db->where('email', $insert['email']);
            $this->db->where('ip', $insert['ip']);
            // $this->db->where('father_mobile', $insert['father_mobile']);
            $query=$this->db->get('user');
            if($query->num_rows()>0){
                $this->db->where('email', $insert['email']);
                $this->db->where('ip', $insert['ip']);
                // $this->db->where('father_mobile', $insert['father_mobile']);
                if(!empty($insert['school_id'])){
                    if(!empty($query->row()->school_id)){
                        
                        unlink('../'.$query->row()->school_id);
                    }
                }
                return $this->db->update('user',array('otp' =>$insert['otp']));
            }else{  
                return false;          
            }
        }
        public function get_profileimg($uid='')
        {
            $this->db->where('id', $uid);
            $query= $this->db->order_by('id', 'desc')->get('user')->row();
            if(!empty($query)){
                return $query->profile_img;  
            }else{
                return false;
            }
               
        }

        public function check_login($email, $password)
        {
    
           $this->db->where('email',$email);
           $query =$this->db->get('user')->row_array();
            if(!empty($query)){
                $stored = $query['password'];
                
                if ($this->bcrypt->check_password($password, $stored))
                {   

                    if($query['status' ]=== '1' || $query['status' ] === '2'){
                      
                        return  $query;
                    }
                  
                }else{

                  return false;
                }
            }else{
                return false;
            }
        }

        public function check_email($email,$forgotid)
        {
            
        $this->db->where('email', $email);
        $query = $this->db->get('user');
        if($query->num_rows() > 0)  
           {
            $this->db->where('email', $email);
            $this->db->update('user',array('forgot_link' =>$forgotid));
            return true;
           }  
           else  
           {
              return false;
           }
        }


        //add forgot password
    public function addforgtpass($email,$newpass,$forgotid)
    {
        $this->db->where('email', $email);
        $this->db->where('forgot_link', $forgotid);
        $query = $this->db->get('user');
        
        if($query->num_rows() > 0)
        {          
            $this->db->where('email', $email);
            $this->db->where('forgot_link', $forgotid);         
            $this->db->update('user',  array(' password ' =>$newpass,'forgot_link'=>random_string('alnum',16)));
            if ($this->db->affected_rows() > 0) 
            {
                return true;
            }else{
                return false;
            }
        }else
        {
         return false;  
        }
        
    }

    public function get_user($uid)
    {
        $this->db->where('id', $uid);
       
        $query=$this->db->get('user');
        
        if($query->num_rows()>0){
          
           return $query->row_array();
        }
       
         return   false;
          
    }

    public function insert_puc_admission($insert)
    {
        $this->db->where('adhar', $insert['adhar']);
        $query = $this->db->get('admission');
        
        if($query->num_rows()>0){
                
               return $query->row()->adhar;
        }else{
            return   $this->db->insert('admission',$insert); 
        }
    }

    public function insert__admission($insert)
    {
     $this->db->insert('admission',$insert); 
         return  $this->db->insert_id(); 
    }
    public function update__admission($insert,$id )
    {
      
       $this->db->where('id', $id);
       $query = $this->db->get('admission')->row();
       if(!empty($query))
       {
        $this->db->where('id', $id);
        $this->db->update('admission', $insert);
         if($this->db->affected_rows()>0){
             return true;
         }else{
             return false;
         }
       }else{
          return false;
       }
    }

       /**
	*Change pasword -> Update New password
	* @url : change-password
	*/
	public function changepass($email, $currentpass, $newpass)
	{
      
		$this->db->where('email', $email);
        $query =$this->db->get('user')->row();

		if(!empty($query))
		{
            $stored = $query->password;  

			if($this->bcrypt->check_password($currentpass, $stored))
			{
                $this->db->where('email', $email);  
                $this->db->update('user',  array('password' =>$newpass));
                if ($this->db->affected_rows() > 0) 
                {  
                    return true;
                }else{
                    return false;
                }
			
		} else {
			return false;
		}
    }
}
public function get_amount(Type $var = null)
{
    return    $this->db->order_by('id', 'desc')->get('admission_amount')->row();
}

}

/* End of file M_home.php */
/* Location: ./application/models/M_home.php */