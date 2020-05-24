<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {

	 //get featured 
	 public function get_featured($var = null)
	 {
		 return $this->db->order_by('id', 'desc')->get('featured')->result();     
	 }
	  //get event 
	  public function get_event($var = null)
	  {
		  return $this->db->order_by('date', 'desc')->get('event')->result();     
	  }

	 public function get_one_featured($id)
	 {
		 $this->db->where('id',$id);
		 return $this->db->order_by('id', 'desc')->get('featured')->row();     
	 }

	 public function get_one_course($slug)
	 {
		 $this->db->where('slug',$slug);
		 return $this->db->get('course')->row();     
	 }

	 //get gallery 
	 public function get_gallery($id)
	 {
		 $this->db->where('featured_id',$id);
		 $this->db->limit(18);
		 return $this->db->order_by('id', 'desc')->get('gallery')->result();     
	 }
	 public function get_featured_description($id)
	 {
		 $this->db->where('id',$id);
		 return $this->db->get('featured')->row();
	 }

	  //get gallery 
	  public function get_all_gallery()
	  {
		  return $this->db->order_by('id', 'desc')->get('gallery')->result();     
	  }

	  //get gallery 
	  public function get_home_gallery()
	  {
		  return $this->db->order_by('id', 'desc')->get('home_gallery')->result();     
	  }

	  //get course 
	  public function get_course()
	  {
		  return $this->db->get('course')->result();     
	  }
	  public function get_notification()
	  {
		  $this->db->where('notification',1);
		  $query = $this->db->get('event')->result();
		  
		  return count($query);     
	  }
	    //get course 
		public function get_banner()
		{
			return $this->db->order_by('id', 'desc')->get('banner')->result();     
		}

	    //insert contact details
		public function contact($insert = null)
		{
			$this->db->get('contact');
			 $this->db->insert('contact', $insert);
	
			 if($this->db->affected_rows()>0){
			   return true;
			 }else{
				 return false;
			 }
		}

	//apply course
	public function apply_course($insert)
	{
		$this->db->get('course_apply');
         $this->db->insert('course_apply', $insert);

         if($this->db->affected_rows()>0){
           
            return true;
         }
	}

	//get job 
    public function jobGet($var = null)
    {
        return $this->db->order_by('id', 'desc')->get('job')->result();     
	}
	public function jobIdGet($uniq)
    {
		
		
		
		$this->db->where('uniq',$uniq);
        return $this->db->get('job')->row_array();     
	}
	
	public function apply_job($insert)
	{
		
		
		$this->db->get('job_apply');
         $this->db->insert('job_apply', $insert);

         if($this->db->affected_rows()>0){
           
            return true;
         }else{
			 return false;
		 }
		
	}

	public function insert_enroll($insert)
	{
		
		
		
		
		$this->db->get('enroll');
         $this->db->insert('enroll', $insert);

         if($this->db->affected_rows()>0){
           
            return true;
         }else{
			 return false;
		 }
		
	}

	public function get_testimonial($id)
	{
	  $this->db->where('c.id', $id);        
	  $this->db->select('c.id, ct.name, ct.course,ct.rank,ct.college,ct.description,ct.testimonial_thumb');
	  $this->db->from('course c');
	  $this->db->join('course_testimonial ct', 'ct.course_id   = c.id','left');
	  return $this->db->order_by('c.id', 'desc')->get()->result();
	}
}

/* End of file M_home.php */
/* Location: ./application/models/M_home.php */