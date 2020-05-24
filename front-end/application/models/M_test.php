<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_test extends CI_Model {

  public function get_questions()
  {
      $temp = $this->check_tmp();
      if(!empty($temp)){
       return $temp;
      }else{
        
         $quiz = $this->check_quiz();
         $not=array ();
         if (!empty($quiz)) {
          foreach ($quiz as $key => $value) {
            foreach ($value as $keys => $values) {
              $not[] = $values->question;
            }
          }
          if(!empty($not[0])){
            $this->db->group_start();
              $this->db->where_not_in('q.id', $not);
            $this->db->group_end();
          }
         }
         
        $this->db->order_by('q.q_row_id','RANDOM');
        $this->db->select('q.id, q.question, q.sub_id, q.question_img, q.subject, q.q_row_id, q.correct, a.choice1,  a.choice2,  a.choice3,   a.choice4,    a.choice_img1,   a.choice_img2,   a.choice_img3,   a.choice_img4, qr.duration');
        $this->db->from('tbl_question q');
        $this->db->join('answer a', 'a.q_id   = q.id','left');
        $this->db->join('question_row qr', 'qr.id   = q.q_row_id','left');
        $query= $this->db->order_by('q.id', 'DESC')->get()->result_array();

        return $query;
      }
  }


   

    public function check_quiz($value='')
    {
      $this->db->select('qz.test_id');
      $this->db->group_by('qz.test_id');
      $this->db->where('qz.user_id', $this->session->userdata('aa_uid'));
      $this->db->where('tp.status', 2);
      $this->db->from('quiz qz');
      $this->db->join('test_payment tp', 'tp.id = qz.test_id', 'left');
      $query = $this->db->get()->result();
      if (!empty($query)) {
        foreach ($query as $key => $value) {
          $today = date('Y-m-d');
          $result[] = $this->db->select('question')
          ->where('user_id', $this->session->userdata('aa_uid'))
          ->where('test_id', $value->test_id)
          ->where('date',$today)
          ->get('quiz')->result();
        }
        $output = $result;
        return $output;
      }else{
        return false;
      }
    }
  
    public function check_tmp($value='')
    {
      return $this->db->where('user_id',  $this->session->userdata('aa_uid'))->where('status',1)->get('user_question')->result_array();
    }
  
    public function insert_quiz($insert)
    {
       return $this->db->insert('quiz',$insert);
    }

 
    public function store_test_question($insert)

    {

        $sn = $this->db->order_by('id', 'desc')->where('user_id',$insert['user_id'])->where('test_id',$insert['test_id'])->get("user_question")->row();

        if(!empty($sn)){

          $insert['sino'] = (int)($sn->sino) +1;

          

        }else{

          $insert['sino'] = 1;

        }

         $query = $this->db->insert('user_question', $insert);

         return $query;


    }

 


    public function get_single_question($id,$test_id)
    {
      $status = 1;
      if(!empty($id) ){
        $this->db->where('id',$id);
        $this->db->where('test_id',$test_id);
        // $this->db->where('uniq',$uniq);
        $this->db->where('status',$status);
        
         $query =  $this->db->get('user_question')->row_array();
         if(!empty($query)){
           return $query;
         }else{
           
           return false;
         }
       
      }else{
        $this->db->where('status',$status);
        $this->db->where('test_id',$test_id);
         $result =  $this->db->get('user_question')->row_array();
  
      return $result;
      }
    }
  
    public function change_status($q_id,$status)
    {
      $this->db->where('q_id',$q_id);
      $query = $this->db->get('user_question');
      if($query->num_rows()>0){
        $this->db->where('q_id',$q_id);
        return $this->db->update('user_question',['status'=>$status]);
      }
    }

    public function check_attempt_question($id, $uid,$test_id)
    {

      $status = 2;
      $this->db->where('question',$id);
      $this->db->where('user_id',$uid);
      $this->db->where('status',$status);
      $this->db->where('test_id',$test_id );
   
     $query =  $this->db->get('quiz');
      if($query->num_rows()>0){
       
        return true;
      }else{

        return false;
      }
    }



    public function total_question( $uid,$test_id)
    {
      $this->db->where('user_id',$uid );
      $this->db->where('test_id',$test_id );
      $query = $this->db->get('quiz')->result();
      return count($query);
    }

    public function attempt($uid,$test_id)
    {
      $this->db->where('status',1);
      $this->db->where('user_id',$uid );
      $this->db->where('test_id',$test_id );
      $query = $this->db->get('quiz')->result();
      return count($query);

    }



    public function question_detail($uid,$test_id)
    {
      $this->db->where('test_id',$test_id );
          $this->db->where('qz.user_id', $uid);
            $this->db->select('qz.id,qz.test_id, qz.question,qz.status,qz.correct,qz.answer,qz.time,qz.sub_id,qz.subject, qr.percent,qr.sub_id,qr.duration');
            $this->db->from('quiz qz');
          
            $this->db->join('question_row qr', 'qr.id   = qz.q_row_id','left');
             $query= $this->db->order_by('qz.id', 'desc')->get()->result_array();
             return $query;
    }

    public function getPdfResult($uid, $test_id)
    {
      $this->db->where('id',$test_id );
      $this->db->where('user_id',$uid );
      $query = $this->db->get('test_payment')->row();
      if(!empty($query)){
        return $query->pdf_result;
      }else{
        return false;
      }
     
    }

    public function subject_detail($uid,$test_id )
    {
      $this->db->where('test_id',$test_id );
      $this->db->where('user_id',$uid );
			
      $this->db->group_by('subject');
      $query = $this->db->get('quiz')->result();
      return $query;
    }

    public function updateTestStatus($insert)
    {
      
      $this->db->where('user_id',$insert['user_id']);
      $this->db->where('id',$insert['id']);
      $query = $this->db->get('test_payment');
      if($query->num_rows()>0){
        $this->db->where('user_id',$insert['user_id']);
        $this->db->where('id',$insert['id']);
        return $this->db->update('test_payment',$insert);
      }
    }
    
    public function update_user_question_status($qid,$uid)
    {
     
      $status = 2;
     $this->db->where('q_id',$qid);
     $this->db->where('user_id',$uid);
     $query = $this->db->get('user_question');

     if($query->num_rows()>0){
      $this->db->where('q_id',$qid);
      $this->db->where('user_id',$uid);
      return $this->db->update('user_question',['status'=>$status]);
     }
    }

    public function check_test_complete($uid)
    {
      $this->db->where('user_id',$uid);

    }

    public function get_schedule(Type $var = null)
    {
        return    $this->db->order_by('id', 'desc')->get('tbl_schedule')->result();
    }
    public function get_test_uid($test_id)
    {
      return $this->db->where('id',$test_id)->get('test_payment')->row()->user_id;
    }
    public function candidate_name($uid)
    {
      return $this->db->where('id',$uid)->get('user')->row()->name;
    }


    public function insertSchedule($insert)
    {
      $this->db->where('test_id',$insert['test_id']);
      $this->db->where('user_id',$insert['user_id']);
      $query = $this->db->get('student_schedule');
      if($query->num_rows()>0){
        $this->db->where('test_id',$insert['test_id']);
        $this->db->where('user_id',$insert['user_id']);
        $this->db->update('student_schedule',$insert);
        if($this->db->affected_rows()>0){
          return true;
        }else{
          return false;
        }
        
      }
       return $this->db->insert('student_schedule',$insert);
    }
    public function getDate($uid, $test_id)
    {
      
      $this->db->where('user_id',$uid);
      $this->db->where('test_id',$test_id);
      $this->db->order_by('id','DESC');
     $query = $this->db->get('quiz')->row()->date;
    if(!empty($query)){
      return $query;
    }else{
      return false;
    }
    }

    //insert result pdf to test_payment
    public function insert_result($test_id,$pdfFile,$uid)
    {
      
      $this->db->where('id',$test_id);
      $this->db->where('user_id',$uid);
      $query = $this->db->get('test_payment')->row();
      if(!empty($query)){
        $this->db->where('id',$test_id);
      $this->db->where('user_id',$uid);
        return $this->db->update('test_payment',['pdf_result'=>$pdfFile]);
      }else{
        return false;
      }
    }
    public function get_test_detail($uid, $id)
    {
        $this->db->where('id',$id);
        $this->db->where('user_id',$uid);
        $query = $this->db->get('test_payment')->row();
        if(!empty($query)){
            return $query;
        }else{
            return false;
        }

    }

    public function get_question_detail($user_id,$test_id)
    {
      $this->db->where('qz.user_id',$user_id);
      $this->db->where('qz.test_id',$test_id);
      $this->db->select('qz.id,qz.test_id, qz.question,qz.status,qz.correct,qz.answer,qz.time,qz.sub_id,qz.subject, qr.percent,qr.sub_id,qr.duration');
      $this->db->from('quiz qz');
    
      $this->db->join('question_row qr', 'qr.id   = qz.q_row_id','left');
       $query= $this->db->order_by('qz.id', 'desc')->get()->result_array();
       return $query;
    }
}

