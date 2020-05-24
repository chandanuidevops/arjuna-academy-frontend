<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	
        $this->load->model('m_home');
        $this->load->model('m_authentication');
        $this->load->model('m_payment');
        $this->load->model('m_test');
		//$this->res = $this->get_head();
		
	}

	public function insert_payment(Type $var = null)
    {
       $insert = array(
           'user_id'=>$this->input->post('user_id'),
           'name'=>$this->input->post('name'),
           'email'=>$this->input->post('email'),
           'father_mobile'=>$this->input->post('father_mobile'),
           'mother_mobile'=>$this->input->post('mother_mobile'),
           'course'=>$this->input->post('course'),
           'amount'=>$this->input->post('amount'),
           'pay_id'=>$this->input->post('razorpay_payment_id'),
           'uniq'=>random_string('alnum', 16),
           'status'=>1
       );
        $pcmb = $this->input->post('course');

        $result = $this->m_payment->insert_paymentdata($insert);
       if(!empty($result))
       {
            $questions =$this->m_test->get_questions();
			$temp = array_unique(array_column($questions, 'q_row_id'));
            $newQuestion = array_intersect_key($questions, $temp);
           
			foreach($newQuestion as $key=>$value){
               
				$insert = array(	
                    'test_id'=>$result,
					'q_id'=>$value['id'],
					'question'=>$value['question'],
					'sub_id'=>$value['sub_id'],
					'subject'=>$value['subject'],
					'q_row_id'=>$value['q_row_id'],
					'correct'=>$value['correct'],
					'choice1'=>$value['choice1'],
					'choice2'=>$value['choice2'],
					'choice3'=>$value['choice3'],
					'choice4'=>$value['choice4'],
					'choice_img1'=>$value['choice_img1'],
					'choice_img2'=>$value['choice_img2'],
					'choice_img3'=>$value['choice_img3'],
					'choice_img4'=>$value['choice_img4'],
					'duration'=>$value['duration'],
					'question_img'=>$value['question_img'],
					'status'=>1,
					'user_id'=>$this->session->userdata('aa_uid'),
                    'uniq'=>random_string('alnum', 10),
                );
                $storeTestQuest = $this->m_test->store_test_question($insert);
                // $subject_code = str_split(trim($pcmb));
                // $subject = str_split(trim($value['subject']));
                // $sub_fl = strtoupper($subject[0]);

                // if($sub_fl === $subject_code[0] || $sub_fl === $subject_code[1] || $sub_fl === $subject_code[2] ){
                //     $storeTestQuest = $this->m_test->store_test_question($insert);
                
                // }
            }
        $this->session->set_flashdata('msg', 'online test purchased successfully');
        redirect('start-test','refresh');
       }else{
        $this->session->set_flashdata('error', 'Failed to purchase online test');
        redirect('make-payment','refresh');
       }
       
    }
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */