<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
        $this->load->model('m_test');
	}




	public function insert_answer(Type $var = null)

	{

		$insert = array(

			'answer'=>$this->input->post('answer'),

			'question'=>$this->input->post('question'),

			'user_id'=>$this->input->post('user_id'),

			'correct'=>$this->input->post('correct'),

			'sub_id'=>$this->input->post('sub_id'),

			'subject'=>$this->input->post('subject'),

			'time'=>$this->input->post('time'),

			'q_row_id'=>$this->input->post('q_row_id'),

			'test_id'=>$this->input->post('test_id'),

			'status'=>1,

			'date' => date('Y-m-d'),

			// 'status'=>2,

		);

		if(empty($insert['answer'])){

			$insert['status']=2;

		}

			$result = $this->m_test->insert_quiz($insert);	

			if($result){

				$this->session->unset_userdata('duration');

				$this->session->unset_userdata('q_duration');

				$this->session->unset_userdata('qst_id');

				$this->session->unset_userdata('tes_uniqId');

				$this->session->unset_userdata('tes_uniq');

				$this->session->unset_userdata('tes_id');

				$update=$this->m_test->update_user_question_status($insert['question'],$insert['user_id']);

				echo json_encode($result);

			}else{

				//echo json_encode($result);

			}

	}




public function update_test_status(Type $var = null)
{
	$insert = array(
		'user_id' => $this->session->userdata('aa_uid'),
		'id' => $this->input->post('test_id'),
		'status'=>2,
		'test_date'=>date('Y-m-d'),
	);
	
	
	
	$result = $this->m_test->updateTestStatus($insert);
	echo json_encode($result);
}

/* 
*insert sstudent schedule interview
*
*/
public function insert_schedule()
{
	$schedule_id = $this->input->post('schedule_id');
	$test_id = $this->input->post('test_id');
	$user_id = $this->input->post('user_id');
	// $user_id = $this->session->userdata('aa_uid');
	
	$insert = array(
		'schedule_id'=>$schedule_id,
		'user_id'=>$user_id,
		'test_id'=>$test_id,
		'status'=>1
	);
	
	$result = $this->m_test->insertSchedule($insert);
	
	echo json_encode($result);
	

}


public function insertResult(){

	$test_id = $this->input->post('test_id');
	$uid = $this->session->userdata('aa_uid');
	$data['total'] =$this->m_test->total_question($uid, $test_id);
	$data['attempt'] =$this->m_test->attempt($uid , $test_id);
	$data['q_detail'] =$this->m_test->question_detail($uid, $test_id);
	$data['date'] =$this->m_test->getDate($uid, $test_id);
	$subject_detail= $this->m_test->subject_detail($uid, $test_id);
	$data['test_detail'] = $this->m_test->get_test_detail($uid, $test_id);
	$questions =$this->m_test->get_questions();
		
	$temp = array_unique(array_column($subject_detail, 'subject'));
	$data['uniq_subject'] = array_intersect_key($subject_detail, $temp);


	$this->load->library('pdf');
	
	$html = $this->output->get_output($this->load->view('auth/online-result-email',$data));

	$pdf = $this->dompdf->loadHtml($html);
	
	
	$this->dompdf->setPaper('A3', 'Potrait');
	$this->dompdf->render();
   
	$fileName = random_string('alnum',10);
	file_put_contents('pdf/result-'.$fileName.'.pdf',$this->dompdf->output());
	$pdfFile = 'pdf/result-'.$fileName.'.pdf';

	$result = $this->m_test->insert_result($test_id,$pdfFile,$uid);

		if($result){
		

			$this->load->config('email');
			$this->email->set_newline('\r\n');
			$this->load->library('email');
			$from = $this->config->item('smtp_user');
			$to = $this->session->userdata('aa_em');
		
			$cc = $this->config->item('admin');
			$this->email->from($from , 'Arjunaa Academy');
			$this->email->to('kschandan62@gmail.com');
			$this->email->cc($cc);
			$this->email->subject('Online Test Result - Arjunaa Academy');
			$this->email->message($html);
			$this->email->attach(base_url().$pdfFile);
			$this->email->send();
			echo json_encode($this->email->print_debugger());
		}
	

}


}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */

