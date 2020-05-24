<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
        $this->load->model('m_home');
        $this->load->model('m_authentication');
		$this->load->model('m_payment');
        $this->load->model('m_test');
		
		$this->res = $this->get_head();
		$this->profile = $this->get_profile();
		$this->notification = $this->get_notification();
	}

	public function register()
	{
		if (!empty($this->session->userdata('tes_uniqId'))) {
			$url = base_url('online-test/').$this->session->userdata('tes_uniqId').'/'.$this->session->userdata('tes_uniq').'/'.$this->session->userdata('tes_id');
			redirect($url,'refresh');
		} 

		$data['title']="Arjunaa Academy - Registration";
		$data['head'] = $this->res;
		$data['profile'] = $this->profile;
		$data['notification'] = $this->notification;
		$this->load->view('auth/online-registration', $data);
	}

	public function login()
	{
		if (!empty($this->session->userdata('tes_uniqId'))) {
			$url = base_url('online-test/').$this->session->userdata('tes_uniqId').'/'.$this->session->userdata('tes_uniq').'/'.$this->session->userdata('tes_id');
			redirect($url,'refresh');
		} 

		$data['title']="Arjunaa Academy - Login";
		$data['head'] = $this->res;
		$data['profile'] = $this->profile;
		$data['notification'] = $this->notification;
		if(empty($this->session->userdata('aa_uid'))){
			$this->load->view('auth/online-login', $data);
		}else{
			redirect('start-test');
		}
		
	}

	public function forgot_password()
	{
		if (!empty($this->session->userdata('tes_uniqId'))) {
			$url = base_url('online-test/').$this->session->userdata('tes_uniqId').'/'.$this->session->userdata('tes_uniq').'/'.$this->session->userdata('tes_id');
			redirect($url,'refresh');
		}

		$data['title']="Arjunaa Academy - Forgot password";
		$data['head'] = $this->res;
		$data['profile'] = $this->profile;
		$data['notification'] = $this->notification;
		$this->load->view('auth/online-forgot-password', $data);
	}
	public function set_password($id = '')
    {
		if (!empty($this->session->userdata('tes_uniqId'))) {
			$url = base_url('online-test/').$this->session->userdata('tes_uniqId').'/'.$this->session->userdata('tes_uniq').'/'.$this->session->userdata('tes_id');
			redirect($url,'refresh');
		} 

        $data['title'] = 'Reset Password | Arjunaa Academy';
		$data['forgot_id'] = $id;
		$data['head'] = $this->res;
		$data['notification'] = $this->notification;
		$data['profile'] = $this->profile;
        $this->load->view('auth/online-reset-password', $data);
	}

	public function profile_setting()
    {
		if (!empty($this->session->userdata('tes_uniqId'))) {
			$url = base_url('online-test/').$this->session->userdata('tes_uniqId').'/'.$this->session->userdata('tes_uniq').'/'.$this->session->userdata('tes_id');
			redirect($url,'refresh');
		} 

		$data['title'] = 'Profile setting | Arjunaa Academy';
		$data['head'] = $this->res;
		$data['profile'] = $this->profile;
		$data['notification'] = $this->notification;
		if($this->session->userdata('aa_uid') !=''){
		$uid = $this->session->userdata('aa_uid');
		
	
		
		$data['result'] = $this->m_authentication->get_user($uid);

		$this->load->view('auth/student-profile', $data);
		}else{
			redirect('student-login');
		}
      
	}

	public function get_head(Type $var = null)
	{
		$result =  $this->m_home->get_course();
		return $result;		
	}
	public function get_profile(Type $var = null)
	{
		$uid = $this->session->userdata('aa_uid');
		$result =  $this->m_authentication->get_profileimg($uid);

		return $result;		
	}
	public function get_notification(Type $var = null)
	{
		$result =  $this->m_home->get_notification();
		if(!empty($result)){
			return $result;	
		}else{
			return false;
		}
			
	}


	public function otpVarification()
	{
		
		$data['head'] = $this->res;
		$data['profile'] = $this->profile;
		$data['notification'] = $this->notification;
		$data['title']="Arjunaa Academy - Otp verification";
		$this->load->view('auth/online-otp-varification', $data);
	}

    	/**
     * user registration-> insert user data
     * 
	**/

    public function insert_register()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.email]',array('is_unique' => ' %s is already taken'));
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('school', 'School', 'trim|required');
		$this->form_validation->set_rules('father', 'Father Name', 'trim|required');
		$this->form_validation->set_rules('father_mobile', 'Father Mobile', 'trim|required|exact_length[10]|is_unique[user.father_mobile]',array('is_unique' => ' %s is already taken'));
		$this->form_validation->set_rules('mother_mobile', 'Mother Mobile', 'trim|required|exact_length[10]|is_unique[user.mother_mobile]',array('is_unique' => ' %s is already taken'));
		$this->form_validation->set_rules('mother', 'Mother Name', 'trim|required');
		$this->form_validation->set_rules('course', 'Course Name', 'trim|required');
		$this->form_validation->set_rules('address', 'Address', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('conf_password', 'Confirm Password', 'trim|required|matches[password]');
		$this->form_validation->set_error_delimiters('<i class="">', '</i>');

			if ($this->form_validation->run() == TRUE){
				$password = $this->input->post('password'); 
				$encpass = $this->bcrypt->hash_password($password);
				$otpmobile = $this->input->post('otpselect');
				$insert = array(
					'name'=>$this->input->post('name'),
					'email'=>$this->input->post('email'),
					'school'=>$this->input->post('school'),
					'school_id'=>$this->input->post('school_id'),
					'father'=>$this->input->post('father'),
					'father_mobile'=>$this->input->post('father_mobile'),
					'mother'=>$this->input->post('mother'),
					'mother_mobile'=>$this->input->post('mother_mobile'),
					'course'=>$this->input->post('course'),
					'address'=>$this->input->post('address'),
					'password'=>$encpass,
					'uniq'=> random_string('alnum', 10),
					'status'=>0,
					'otp' =>  random_string('nozero',6),
					'ip'=>$this->input->ip_address(),
				);


				$this->load->library('upload');
				$this->load->library('image_lib');
				$files = $_FILES;
				
				if (file_exists($_FILES['school_id']['tmp_name'])) {
				
				$config['upload_path'] = './school-id/';
				$config['allowed_types'] = 'jpg|png|jpeg|PNG|JPEG|JPG|gif';
				$config['max_width'] = 0;
				$config['max_size'] = '512';
				$config['encrypt_name'] = true;
				$this->load->library('upload');
				$this->upload->initialize($config);

				if (!is_dir($config['upload_path'])) {
				mkdir($config['upload_path'], 0777, true);
				}
			   
				if (!$this->upload->do_upload('school_id')) {

				$errors = array('errors' => $this->upload->display_errors());

				} else {
				$upload_data = $this->upload->data();
				$file_name  = $upload_data['file_name'];
				$school_id    = 'school-id/'.$file_name;

				if (file_exists($_FILES['school_id']['tmp_name'])) {
					$insert['school_id'] = $school_id;
				} 
				$data = $this->m_authentication->register($insert);
				}
				}

				
						
				if(!empty($data)){
					$rsession_data = array('res_email' => $insert['email'], 'res_mobile' => $otpmobile);
					$this->session->set_userdata($rsession_data);
					
					$sentOtp=$this->registerOtp($insert, $otpmobile);
					$sentEmailOtp=$this->sendregister($insert['email'], $insert['otp']);
					if(!empty(($sentOtp)) || !empty(($sentEmailOtp)))
					{
						$output = array('result'=>true,'errors'=>'');
						$this->session->set_flashdata('msg', 'Please enter otp sent to your mobile or email');
						
					}
		
				}else{
					if(!empty($errors)){
						$output = $errors;
					}
				}
				echo json_encode($output);exit;
			}else{
				
				$data['profile'] = $this->profile;
				//echo json_encode(validation_errors());

				$json = array(
					'errors' => '',
					'email' => form_error('email'),
					'father' => form_error('father'),
					'mother' => form_error('mother'),
					'father_mobile' => form_error('father_mobile'),
					'mother_mobile' => form_error('mother_mobile'),
					'school' => form_error('school'),
					'school_id' => form_error('school_id'),
					'name' => form_error('name'),
					'course' => form_error('course'),
					'password' => form_error('password'),
					'conf_password' => form_error('conf_password'),
					'mother_mobile' => form_error('mother_mobile'),
				);
			}
			
		
			echo json_encode($json);
	}

	//update profile

	public function insert_profile_setting()
	{
		$aa_id = $this->session->userdata('aa_uid');
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('school', 'School', 'trim|required');
		$this->form_validation->set_rules('father', 'Father Name', 'trim|required');
		$this->form_validation->set_rules('father_mobile', 'Father Mobile', 'trim|required|exact_length[10]');
		$this->form_validation->set_rules('mother_mobile', 'Mother Mobile', 'trim|required|exact_length[10]');
		$this->form_validation->set_rules('mother', 'Mother Name', 'trim|required');
		$this->form_validation->set_rules('course', 'Course Name', 'trim|required');
		$this->form_validation->set_rules('address', 'Address', 'trim|required');
		$this->form_validation->set_error_delimiters(' <i class="error" id="error">', '</i>');

			if ($this->form_validation->run() == TRUE){
				
				$password = $this->input->post('password'); 
				$encpass = $this->bcrypt->hash_password($password);

				$insert = array(
					'name'=>$this->input->post('name'),
					'school'=>$this->input->post('school'),
					// 'school_id'=>$this->input->post('school_id'),
					'father'=>$this->input->post('father'),
					'father_mobile'=>$this->input->post('father_mobile'),
					'mother'=>$this->input->post('mother'),
					'mother_mobile'=>$this->input->post('mother_mobile'),
					'address'=>$this->input->post('address'),
				);


				$this->load->library('upload');
				$this->load->library('image_lib');
				$files = $_FILES;
				
				if (file_exists($_FILES['profile_img']['tmp_name'])) {
				
				$config['upload_path'] = './school-id/';
				$config['allowed_types'] = 'jpg|png|jpeg|PNG|JPEG|JPG|gif';
				$config['max_width'] = 0;
				$config['max_size'] = '512';
				$config['encrypt_name'] = true;
				$this->load->library('upload');
				$this->upload->initialize($config);

				if (!is_dir($config['upload_path'])) {
				mkdir($config['upload_path'], 0777, true);
				}
			   
				if (!$this->upload->do_upload('profile_img')) {

				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('error', $this->upload->display_errors());

				} else {
				$upload_data = $this->upload->data();
				
				$file_name  = $upload_data['file_name'];
				$profile_img    = 'school-id/'.$file_name;
				if (file_exists($_FILES['profile_img']['tmp_name'])) {
					$insert['profile_img'] = $profile_img;
					
				} 

				}
				}

				 


				$data = $this->m_authentication->profile_update($insert,$aa_id);
						
				if(!empty($data)){
					// $this->session->set_userdata('aa_uid',$insert['name']);
					echo json_encode($data);
				}else{
					$errorMsg= validation_errors();
				$this->session->set_flashdata('error', $errorMsg);
				redirect('profile-setting','refresh');
				}
			}else{
				$json = array(
					'errors' => '',
					'email' => form_error('email'),
					'father' => form_error('father'),
					'mother' => form_error('mother'),
					'father_mobile' => form_error('father_mobile'),
					'mother_mobile' => form_error('mother_mobile'),
					'school' => form_error('school'),
					'school_id' => form_error('school_id'),
					'name' => form_error('name'),
					'course' => form_error('course'),
					'password' => form_error('password'),
					'conf_password' => form_error('conf_password'),
					'mother_mobile' => form_error('mother_mobile'),
				);
				echo json_encode($json);
			}
			
	}


	/**
     * user registration-> otp send
     * 
	**/
	public function registerOtp($data='',$otpmobile)
    {
		
	
	
	
		
        $msg = 'Your One time Password For Arjunaa Academy registration is ' . $data['otp'] . ' . Do not share with anyone';
       
        $url = 'http://trans.smsfresh.co/api/sendmsg.php';
        $param = 'user=5inewebsolutions&pass=5ine5ine&sender=PROPSB&phone=' . $otpmobile . '&text=' . $msg . '&priority=ndnd&stype=normal';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $param);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_output = curl_exec($ch);
		curl_close($ch);
        return $server_output;
	}

		/**
     * user registration-> email send
     * 
    **/
    function sendregister($to='', $otp='')
    {
        $this->load->config('email');
        $this->load->library('email');
        $from = $this->config->item('smtp_user');
       
		//$msg = $this->load->view('email/registration', $data, true);
		$this->email->set_newline("\r\n");
		$this->email->from($from , 'Arjunaa Academy');
        $this->email->to($to);
        $this->email->subject('OTP for registration verification - Arjunaa Academy'); 
		$this->email->message('
								<!DOCTYPE html>
								<html>
									<head>
										<title>
										
										</title>
									</head>
									<body style="background-color:rgb(224, 224, 224)">
										<br><br>
										<center>
										<table width="60%" style="background-color:#ffff">
										<tr>
												<td>
													<center>
													<img src = "'.base_url().'assets/img/logo.png" width = "300px">
													</center>
												</td>
											</tr>
											<tr>
												<td>
													<center>
													<h1>Sign Up OTP Verification</h1>
													</center>
												</td>
											</tr>
											<tr>
												<td>
													<center>
													<p style="width: 80%"<center> Please Use  <b>'.$otp.'</b> (Arjunaa Academy OTP) to activate your account<br>This OTP is valid for only one time.</center></p> <br>
													</center>
												</td>
											</tr>
											<tr >
												<td >
													<p style="width: 80%"><center></center></p><br>
												</td>
											</tr>
										</table>
										</center>
										<br><br>
									</body>
								</html> ');
									
     	if($this->email->send())  
        {  
         	return true;
        } 
        else
        {  
            return false;
        } 
	}
	
	public function otp_verification()
	{
		 $uniq = random_string('alnum', 16);
		 $status=1;
		 $ip= $this->input->ip_address();
		 $otp = trim($this->input->post('otp'));
		 $newotp =  random_string('nozero',6);
			$result = $this->m_authentication->activateAccount($uniq, $otp, $newotp, $status, $ip);
	   if($result){
		 $session_data = array(
			 'res_email' => $this->session->userdata('res_email'),
			 'res_mobile' 	=> $this->session->userdata('res_mobile'),
		 );
 
		
		$this->session->set_flashdata('msg', 'Your have registered successfully. You can  login now. ');
		$this->session->unset_userdata('res_email');
		$this->session->unset_userdata('res_mobile');
		echo json_encode($result);
	   }else{
		echo json_encode($result);
	   }
	}

	/**
     * user registration-> otp resend
     * 
	**/
	public function resendOtp()
	{
		$otpmobile=$this->input->post('mobile');
		$insert = array(
			'email'=>$this->input->post('email'),
			
			'otp' =>  random_string('nozero',6),
			'ip'=>$this->input->ip_address()
		);
		$result=$this->m_authentication->updateregister($insert);
		 $sentOtp=$this->registerOtp($insert,$otpmobile);
		 $sentEmailOtp=$this->sendregister($insert['email'], $insert['otp'] );

		 if(!empty(($sentOtp)) || !empty(($sentEmailOtp))){
			echo json_encode(array(
				"smsStatusCode"=>$sentOtp,
				"emailStatusCode"=>$sentEmailOtp,
			));
		}

	}

	public function insert_login(Type $var = null)
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_url');
		
		$this->form_validation->set_error_delimiters('<i class="text-danger">', '</i>');

			if ($this->form_validation->run() == TRUE){
					$email=$this->input->post('email');
					$password =$this->input->post('password');
				
				$data = $this->m_authentication->check_login($email,$password);
				
				
				
				if($data['status'] === '2'){

					$this->session->set_flashdata('error', 'Your account has been blocked by admin');
					redirect('student-login','refresh');
				}else{
					if(!empty($data)){
						$rsession_data = array('aa_em' => $data['email'], 'aa_uid' => $data['id'], 'aa_uname' => $data['name'],'aa_prof_img' => $data['school_id']);
						$this->session->set_userdata($rsession_data);
						redirect('start-test');
					}else{
						$this->session->set_flashdata('error', 'Invalid email id or password');
						redirect('student-login','refresh');
					}
				}
				

				
			}
	}

	public function check_email_exist(Type $var = null)
	{
		$email=$this->input->post('email');
		$forgotid = random_string('alnum', 16);
		$output = $this->m_authentication->check_email($email, $forgotid);



		if ($output == '' && $output == FALSE) {
		
			// $this->session->set_flashdata('error', 'invalid Email address');
			$error = false;
            // redirect('login');
        } else {
		
            $this->load->config('email');
            $this->email->set_newline('\r\n');
            $this->load->library('email');
            // $this->email->clear(TRUE);
			$from = $this->config->item('smtp_user');
			$data['forgotid'] = $forgotid;
			$msg = $this->load->view('email/reset', $data, true);
            $this->email->from($from , 'Arjunaa Academy');
            $this->email->to($email);
            $this->email->subject('forgot password - Arjunaa Academy');
			$this->email->message($msg);

            if ($this->email->send()) {
                // $this->session->set_flashdata('msg', 'Please check your registered email address');
				// redirect('login');
				$output=true;
            } else {
                $this->session->set_flashdata('error', 'Please try again');
                redirect('student-login');
            }

		}
		if(!empty($error)){
			$result = $error;
		}else{
			$result = $output;
		}
		echo json_encode($result);
	}

	public function reset_password(Type $var = null)
	{
		$forgotid = $this->input->post('forgot_id');
		
        $this->form_validation->set_rules('remail', 'Email Address', 'required|valid_email');
        $this->form_validation->set_rules('password', 'New Password', 'required');
        $this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|matches[password]');
        if ($this->form_validation->run() == false) {
		
            $error = validation_errors();
            $this->session->set_flashdata('error', $error);
            redirect('set-password/' . $forgotid, 'refresh');
        } else {
			$email = $this->input->post('remail');
			$pass = $this->input->post('password');
			$newpass = $this->bcrypt->hash_password($pass);

            if ($this->m_authentication->addforgtpass($email, $newpass,$forgotid)) {
                // $this->session->set_flashdata('msg', 'Password updated Successfully');
				// redirect('login', 'refresh');
				$output =true;
            } else {
                // $this->session->set_flashdata('error', 'Email id does not exist. please enter correct one!');
				// redirect('set-password/' . $forgotid, 'refresh');
				$output =false;
            }
		}
		if(!empty($error)){
			$result = $error;
		}else{
			$result = $output;
		}
		echo json_encode($result);
	}
	
	public function logout()
	{
		$session_data = array(
            'email' => $this->session->userdata('aa_em'),
            'aa_uid' 	=> $this->session->userdata('aa_uid'),
        );
        $this->session->unset_userdata($session_data);
         $this->session->sess_destroy();
        $this->session->set_flashdata('msg', 'You are logged out Successfully');
        redirect('student-login');
	}


			public function online_start_test()
		{
			if (!empty($this->session->userdata('tes_uniqId'))) {
				$url = base_url('online-test/').$this->session->userdata('tes_uniqId').'/'.$this->session->userdata('tes_uniq').'/'.$this->session->userdata('tes_id');
				redirect($url,'refresh');
			} 
			
			$data['head'] = $this->res;
			$data['profile'] = $this->profile;
			$data['notification'] = $this->notification;
			$data['title']="Arjunaa Academy - Start Test";
			$uid = $this->session->userdata('aa_uid') ;
			$this->load->view('auth/online-start-test', $data);
			
		}
		public function online_make_payment()
		{
			
			$data['head'] = $this->res;
			$data['title']="Arjunaa Academy - Make-payment";
			$data['profile'] = $this->profile;
			$data['notification'] = $this->notification;
			if($this->session->userdata('aa_uid') !=''){
				$uid=	$this->session->userdata('aa_uid');
				$test_status = $this->m_payment->check_test_completed($uid);
				if($test_status){

					redirect('online-test/'.$test_status->uniq);
				}else{
					$data['user'] = $this->m_authentication->get_user($uid);
					$this->load->view('auth/online-make-payment', $data);
				}
			}else{
				redirect('student-login');
			}
			
		}

		public function admission_puc()
		{
			if (!empty($this->session->userdata('tes_uniqId'))) {
				$url = base_url('online-test/').$this->session->userdata('tes_uniqId').'/'.$this->session->userdata('tes_uniq').'/'.$this->session->userdata('tes_id');
				redirect($url,'refresh');
			} 
			$data['head'] = $this->res;
			$data['profile'] = $this->profile;
			$data['notification'] = $this->notification;
			$data['captcha']= $this->generateCaptcha();
			$data['amount'] = $this->m_authentication->get_amount();
			$data['list'] = $this->input->get('center');
			$data['batch_list']=$this->input->get('batch');
			$data['title']="Arjunaa Academy - Online Admission Form for Class 11 or 1st PUC";
			if(!empty($this->input->post()))
			{
				
				$this->form_validation->set_rules('name', 'Name', 'trim|required');
				$this->form_validation->set_rules('school', 'School Name', 'trim|required');
				$this->form_validation->set_rules('father', 'Father Name', 'trim|required');
				$this->form_validation->set_rules('father_mobile', 'Father Mobile', 'trim|required|integer|exact_length[10]|is_unique[admission.father_mobile]',array('is_unique' => ' %s is already taken'));
				$this->form_validation->set_rules('father_occupation', 'Father occupation', 'trim|required');
				$this->form_validation->set_rules('mother', 'Mother Name', 'trim|required');
				$this->form_validation->set_rules('mother_mobile', 'Mother Mobile', 'trim|required|integer|exact_length[10]|is_unique[admission.mother_mobile]',array('is_unique' => ' %s is already taken'));
				$this->form_validation->set_rules('mother_occupation', 'Mother occupation', 'trim|required');
				$this->form_validation->set_rules('center', 'Center', 'trim|required');
				$this->form_validation->set_rules('address', 'Address', 'trim|required');
				
				$this->form_validation->set_rules('adhar', 'Adhar details', 'trim|required|integer|exact_length[12]|is_unique[admission.adhar]',array('is_unique' => ' %s is already taken'));
				$this->form_validation->set_rules('batch', 'Batch', 'trim|required');
				$this->form_validation->set_rules('working_status', 'Working status', 'trim|required');
				if (empty($_FILES['marksheet']['name']))
				{
					$this->form_validation->set_rules('marksheet', 'Marksheet', 'required');
				}
				$this->form_validation->set_error_delimiters('<label class="error">', '</label>');
				$this->session->unset_userdata('puc');
				if ($this->form_validation->run() == TRUE)
				{
					$puc = 'puc';
					$this->session->set_userdata('puc', $puc);
					$insert = array(
						'name'=>$this->input->post('name'),
						'school'=>$this->input->post('school'),
						'father'=>$this->input->post('father'),
						'father_mobile'=>$this->input->post('father_mobile'),
						'father_occupation'=>$this->input->post('father_occupation'),
						'mother'=>$this->input->post('mother'),
						'mother_mobile'=>$this->input->post('mother_mobile'),
						'mother_occupation'=>$this->input->post('mother_occupation'),
						'center'=>$this->input->post('center'),
						'address'=>$this->input->post('address'),
						'adhar'=>$this->input->post('adhar'),
						'batch'=>$this->input->post('batch'),
						'siblings'=>$this->input->post('siblings'),
						'working_status'=>$this->input->post('working_status'),
						'studdying_grade'=>$this->input->post('studdying_grade'),
						'sibling_school'=>$this->input->post('sibling_school'),
						'uniq'=> random_string('alnum', 10),
						'status'=>0,
						'admission_type'=>'puc',
					);
					

					

						$this->load->library('upload');
						$this->load->library('image_lib');
						$files = $_FILES;
						if (file_exists($_FILES['marksheet']['tmp_name'])) {
						
						$config['upload_path'] = './marksheet/';
						$config['allowed_types'] = 'jpg|png|jpeg|PNG|JPEG|JPG|gif|pdf';
						$config['max_width'] = 0;
						$config['max_size'] = '512';
						$config['encrypt_name'] = true;
						$this->load->library('upload');
						$this->upload->initialize($config);
			
						if (!is_dir($config['upload_path'])) {
						mkdir($config['upload_path'], 0777, true);
						}
					   
						if (!$this->upload->do_upload('marksheet')) {
			
						$error =  $this->upload->display_errors();
						$this->session->set_flashdata($error, $this->upload->display_errors());
						$this->load->view('auth/online-admission-puc', $data);
						} else {
						$upload_data = $this->upload->data();
			
						$file_name  = $upload_data['file_name'];
						$marksheet    = 'marksheet/'.$file_name;

						if (file_exists($_FILES['marksheet']['tmp_name'])) {
							$insert['prep_percent'] = $marksheet;
							
						}  
						}
						}

						
						$insert_id = $this->m_authentication->insert__admission($insert);
						if(!empty($insert_id)){
							$data['insert_id'] = $insert_id;
							$this->load->config('email');
							$this->email->set_newline('\r\n');
							$this->load->library('email');
							$from = $this->config->item('smtp_user');
							$to = $this->config->item('admin');
							$msg = $this->load->view('email/puc-admission', $insert, true);
							$this->email->from($from , 'Arjunaa academy');
							$this->email->to($to);
							$this->email->subject('Admission- Arjunaa Academy');
							$this->email->message($msg);
							$this->email->attach(base_url().$marksheet);
							$this->email->send();
						}

					$this->load->view('auth/online-admission-puc', $data);
				}
				else
				{	
					
				
					$this->load->view('auth/online-admission-puc', $data);
				}
			}
			else
			{
				$this->load->view('auth/online-admission-puc', $data);
			}

		}



		public function admission()
		{
			if (!empty($this->session->userdata('tes_uniqId'))) {
				$url = base_url('online-test/').$this->session->userdata('tes_uniqId').'/'.$this->session->userdata('tes_uniq').'/'.$this->session->userdata('tes_id');
				redirect($url,'refresh');
			} 
			$data['head'] = $this->res;
			$data['profile'] = $this->profile;
			$data['notification'] = $this->notification;
			$data['captcha']= $this->generateCaptcha();
			$data['amount'] = $this->m_authentication->get_amount();
			$data['list'] = $this->input->get('center');
			$data['batch_list']=$this->input->get('batch');
			$data['title']="Arjunaa Academy - Online Admission Form for Class 8, 9, 10";
			
			if(!empty($this->input->post()))
			{
				$this->form_validation->set_rules('name', 'Name', 'trim|required');
				$this->form_validation->set_rules('school', 'School Name', 'trim|required');
				$this->form_validation->set_rules('father', 'Father Name', 'trim|required');
				$this->form_validation->set_rules('father_mobile', 'Father Mobile', 'trim|required|integer|exact_length[10]|is_unique[admission.father_mobile]',array('is_unique' => ' %s is already taken'));
				$this->form_validation->set_rules('father_occupation', 'Father occupation', 'trim|required');
				$this->form_validation->set_rules('mother', 'Mother Name', 'trim|required');
				$this->form_validation->set_rules('mother_mobile', 'Mother Mobile', 'trim|required|integer|exact_length[10]|is_unique[admission.mother_mobile]',array('is_unique' => ' %s is already taken'));
				$this->form_validation->set_rules('mother_occupation', 'Mother occupation', 'trim|required');
				$this->form_validation->set_rules('center', 'Center', 'trim|required');
				$this->form_validation->set_rules('address', 'Address', 'trim|required');
			
				$this->form_validation->set_rules('prev_percent', 'prev year percent', 'trim|required');
				$this->form_validation->set_rules('adhar', 'Adhar details', 'trim|required|integer|exact_length[12]|is_unique[admission.adhar]',array('is_unique' => ' %s is already taken'));
				$this->form_validation->set_rules('batch', 'Batch', 'trim|required');
				$this->form_validation->set_rules('working_status', 'Working status', 'trim|required');
				if (empty($_FILES['marksheet']['name']))
				{
					$this->form_validation->set_rules('marksheet', 'Marksheet', 'required');
				}
				$this->form_validation->set_error_delimiters('<label class="error">', '</label>');
				$this->session->unset_userdata('ssc');
				if ($this->form_validation->run() == TRUE)
				{
					$ssc = 'ssc';
					$this->session->set_userdata('ssc', $ssc);
					$insert = array(
						'name'=>$this->input->post('name'),
						'school'=>$this->input->post('school'),
						'class'=>$this->input->post('class'),
						'father'=>$this->input->post('father'),
						'father_mobile'=>$this->input->post('father_mobile'),
						'father_occupation'=>$this->input->post('father_occupation'),
						'mother'=>$this->input->post('mother'),
						'mother_mobile'=>$this->input->post('mother_mobile'),
						'mother_occupation'=>$this->input->post('mother_occupation'),
						'center'=>$this->input->post('center'),
						'address'=>$this->input->post('address'),
						'prev_percent'=>$this->input->post('prev_percent'),
						'adhar'=>$this->input->post('adhar'),
						'batch'=>$this->input->post('batch'),
						'siblings'=>$this->input->post('siblings'),
						'working_status'=>$this->input->post('working_status'),
						'studdying_grade'=>$this->input->post('studdying_grade'),
						'sibling_school'=>$this->input->post('sibling_school'),
						'uniq'=> random_string('alnum', 10),
						'status'=>0,
						'admission_type'=>'ssc',
					);

						$this->load->library('upload');
						$this->load->library('image_lib');
						$files = $_FILES;
						if (file_exists($_FILES['marksheet']['tmp_name'])) {
						
						$config['upload_path'] = './marksheet/';
						$config['allowed_types'] = 'jpg|png|jpeg|PNG|JPEG|JPG|gif|pdf';
						$config['max_width'] = 0;
						$config['max_size'] = '512';
						$config['encrypt_name'] = true;
						$this->load->library('upload');
						$this->upload->initialize($config);
			
						if (!is_dir($config['upload_path'])) {
						mkdir($config['upload_path'], 0777, true);
						}
					   
						if (!$this->upload->do_upload('marksheet')) {
			
						$error =  $this->upload->display_errors();
						$this->session->set_flashdata($error, $this->upload->display_errors());
						$this->load->view('auth/online-admission', $data);
						} else {
						$upload_data = $this->upload->data();
			
						$file_name  = $upload_data['file_name'];
						$marksheet    = 'marksheet/'.$file_name;

						if (file_exists($_FILES['marksheet']['tmp_name'])) {
							$insert['prep_percent'] = $marksheet;
							
						}  
						}
						}

						
						$insert_id = $this->m_authentication->insert__admission($insert);
						if(!empty($insert_id)){
							$data['insert_id'] = $insert_id;
							$this->load->config('email');
							$this->email->set_newline('\r\n');
							$this->load->library('email');
							$from = $this->config->item('smtp_user');
							$to = $this->config->item('admin');
							$msg = $this->load->view('email/puc-admission', $insert, true);
							$this->email->from($from , 'Arjunaa academy');
							$this->email->to($to);
							$this->email->subject('Admission- Arjunaa Academy');
							$this->email->message($msg);
							$this->email->attach(base_url().$marksheet);
							$this->email->send();
						}

					$this->load->view('auth/online-admission', $data);
				}
				else
				{
					
					$this->load->view('auth/online-admission', $data);
				}
			}
			else
			{
				$this->load->view('auth/online-admission', $data);
			}
		}

		//insert admission payment gateway data
		public function insert_admission(Type $var = null)
		{
			$id = $this->input->post('id');
			$insert = array(
				'status'=>1,
				'amount'=>$this->input->post('amount'),
           		'pay_id'=>$this->input->post('razorpay_payment_id'),
			);
			$data = $this->m_authentication->update__admission($insert,$id);
			if(!empty($data)){
				$this->session->set_flashdata('msg', 'Student details added successfully');
				redirect('online-admission','refresh');
			}else{
				$this->session->set_flashdata('error', 'Failed to insert admission data');
				redirect('online-admission','refresh');
			}
		}


		public function generateCaptcha(Type $var = null)
		{
			$config = array(
				'img_path'      => './captcha-image/',
				'img_url'       => base_url().'captcha-image/',
				'font_path'     => base_url().'system/fonts/texb.ttf',
				'img_width'     => '200',
				'img_height'    => 60,
				'word_length'   => 6,
				'font_size'     => 28,
				'expiration'=>7200,
				'colors'        => array(
					'background' => array(100, 100, 100),
					'border' => array(255, 255, 255),
					'text' => array(0, 0, 0),
					'grid' => array(255, 40, 40)
				)
			);
			$captcha = create_captcha($config);
			
			// Unset previous captcha and set new captcha word
			
			$this->session->unset_userdata('captchaCode');
			$this->session->set_userdata('captchaCode', $captcha['word']);
	
			// Pass captcha image to view
			 $data['captcha'] = $captcha['image'];
			
			 return $data['captcha'];
	
		}
		public function refresh_captcha(Type $var = null)
		{
			
		   $config = array(
				'img_path'      => './captcha-image/',
				'img_url'       => base_url().'captcha-image/',
				'font_path'     => base_url().'system/fonts/texb.ttf',
				'img_width'     => '200',
				'img_height'    => 60,
				'word_length'   => 6,
				'font_size'     => 28,
				'expiration'=>7200,
				'colors'        => array(
					'background' => array(100, 100, 100),
					'border' => array(255, 255, 255),
					'text' => array(0, 0, 0),
					'grid' => array(255, 40, 40)
				)
			);
			$captcha = create_captcha($config);
			
			// Unset previous captcha and set new captcha word
			$this->session->unset_userdata('captchaCode');
			$this->session->set_userdata('captchaCode', $captcha['word']);
			
			// Pass captcha image to view
			 $data['captcha'] = $captcha['image'];
				$data['code'] = $this->session->userdata('captchaCode');
			
				echo json_encode($data);
		}



public function change_password()
{
	if (!empty($this->session->userdata('tes_uniqId'))) {
		$url = base_url('online-test/').$this->session->userdata('tes_uniqId').'/'.$this->session->userdata('tes_uniq').'/'.$this->session->userdata('tes_id');
		redirect($url,'refresh');
	} 
	$data['head'] = $this->res;
	$data['title']="Arjunaa Academy - Change password";
	$data['profile'] = $this->profile;
	$data['notification'] = $this->notification;
	if($this->session->userdata('aa_uid') !=''){
		$data['user_id']=	$this->session->userdata('aa_uid');
		$data['user_email']=	$this->session->userdata('aa_em');
		$this->load->view('auth/change-password', $data);
	}else{
		redirect('student-login');
	}
	
}

public function update_password(Type $var = null)
{
		$currentpass = $this->input->post('cur_password');
		$npassword = $this->input->post('newpassword');
		$newpass = $this->bcrypt->hash_password($npassword);
		$email = $this->session->userdata('aa_em');
  
        if ($this->m_authentication->changepass($email, $currentpass, $newpass)) {
			$this->session->set_flashdata('msg', 'Password updated Successfully');
               $output=true;
         } else {
            $this->session->set_flashdata('error', 'unable to update your password, Current Password is not matching');
			$output=false;
		}
		echo json_encode($output);
}

	public function student_paymnet_detail()
	{
		if (!empty($this->session->userdata('tes_uniqId'))) {
			$url = base_url('online-test/').$this->session->userdata('tes_uniqId').'/'.$this->session->userdata('tes_uniq').'/'.$this->session->userdata('tes_id');
			redirect($url,'refresh');
		} 
		$data['head'] = $this->res;
		$data['profile'] = $this->profile;
		$data['notification'] = $this->notification;
		$data['title']="Arjunaa Academy - payment Detail";
		if($this->session->userdata('aa_uid') !=''){
			$data['user_id']=	$this->session->userdata('aa_uid');
			$data['result']  = $this->m_payment->getPayment($data['user_id']);
			// $test_id = $this->m_test->get_test_id($data['user_id']);

			// foreach($test_id as $key=>$value){
			// 	$q_detail[] =$this->m_test->get_question_detail($data['user_id'],$value->id);
			// }
			// $data['q_detail'] = $q_detail;

			$this->load->view('auth/student-payment-detail', $data);

		}else{
			redirect('student-login');
		}

	}
	public function online_test($testUbiqId='',$uniq='', $id='')
	{
		$time_seconds = '';
		$data['head'] = $this->res;
		$data['profile'] = $this->profile;
		$data['notification'] = $this->notification;
		$data['title']="Arjunaa Academy - Online Test";
		$data['testUbiqId']=$testUbiqId;

		$uid = $this->session->userdata('aa_uid');
		if($this->m_payment->check_payment($uid )){
			$questions =$this->m_test->check_tmp();
		}else{
			redirect('make-payment');
		}
		$test_id = $this->db->where('uniq', $testUbiqId )->get('test_payment')->row()->id;

		$data['last_id'] = $this->db->order_by('id','DESC')->where('user_id',  $this->session->userdata('aa_uid'))->where('test_id',  $test_id)->get('user_question')->row('id');
		$data['first_id'] = $this->db->order_by('id','ASC')->where('user_id',  $this->session->userdata('aa_uid'))->get('user_question')->row('id');

		if(empty($id)){
			$nextid = (int)$data['first_id'];
			$uniq = 	$this->db->where('id', $nextid)->get('user_question')->row()->uniq;
			$duration = $this->db->where('id', $nextid )->where('user_id', $uid )->get('user_question')->row()->duration;
			$this->sc_chk->check_test($testUbiqId,$uniq,$id);
			if (!empty($this->session->userdata('q_duration'))) {
				$str_time1 = $this->session->userdata('q_duration');
				sscanf($str_time1, "%d:%d", $minutes, $seconds);
				$time_seconds1 = (int) $time_seconds + (int)($minutes * 60 + $seconds) * 1000;
				$total_seconds1 = $str_time1;
			    $seconds1 = intval($total_seconds1%60);
			    $total_minutes1 = intval($total_seconds1/60);
			    $minutes1 = $total_minutes1%60;
			    $hours1 = intval($total_minutes1/60);
			    $dur1 = "$hours1:$minutes1:$seconds1";
			    $duration = '0:'.$duration;
			    $time1 = new DateTime($duration);
			    $time2 = new DateTime($dur1);
			    $timediff = $time1->diff($time2);
			    $du =  $timediff->format('%i:%s');
				$data['duration'] = $du;
				$data['secs'] = $str_time1;
			}else{
				$data['duration'] = $duration;
			}
		}else{
			
			$nextid = $id;	
			$uniq = 	$this->db->where('id', $nextid)->get('user_question')->row()->uniq;
			$duration = $this->db->where('id', $id )->where('user_id', $uid )->get('user_question')->row()->duration;
			$this->sc_chk->unset_duration($nextid);
			$this->sc_chk->check_test($testUbiqId,$uniq,$nextid);
			if (!empty($this->session->userdata('q_duration'))) {
				$str_time1 = $this->session->userdata('q_duration');
				sscanf($str_time1, "%d:%d", $minutes, $seconds);
				$time_seconds1 = (int) $time_seconds + (int)($minutes * 60 + $seconds) * 1000;
				$total_seconds1 = $str_time1;
			    $seconds1 = intval($total_seconds1%60);
			    $total_minutes1 = intval($total_seconds1/60);
			    $minutes1 = $total_minutes1%60;
			    $hours1 = intval($total_minutes1/60);
			    $dur1 = "$hours1:$minutes1:$seconds1";
			    $duration = '0:'.$duration;
			    $time1 = new DateTime($duration);
			    $time2 = new DateTime($dur1);
			    $timediff = $time1->diff($time2);
			    $du =  $timediff->format('%i:%s');
				$data['duration'] = $du;
				$data['secs'] = $str_time1;
			}else{
				$data['duration'] = $duration;
			}
		}

		if (!empty($data['secs'])) {
			$data['secs'] = $data['secs'];
		}else{
			$data['secs'] = 0;
		}

		if($id !=$data['last_id']){
			$data['uniqid'] =$this->db->where('id',(int)$nextid+1)->get('user_question')->row()->uniq;
		}

		$data['question'] =$this->m_test->get_single_question($id,$test_id);
	
		// $this->m_test->update_user_question_status($id,$uid);
		
		$this->load->view('auth/online-test', $data);
	}

	public function online_result($test_id)
	{
		if (!empty($this->session->userdata('tes_uniqId'))) {
			$url = base_url('online-test/').$this->session->userdata('tes_uniqId').'/'.$this->session->userdata('tes_uniq').'/'.$this->session->userdata('tes_id');
			redirect($url,'refresh');
		} 
		$data['profile'] = $this->profile;
		$data['head'] = $this->res;
		$data['notification'] = $this->notification;
		$data['test_id'] = $test_id;
		$data['title']="Arjunaa Academy - Online Result";
		$uid = $this->m_test->get_test_uid($test_id);
		$data['total'] =$this->m_test->total_question($uid, $test_id);
		$data['cand_name'] =$this->m_test->candidate_name($uid);
		$data['attempt'] =$this->m_test->attempt($uid , $test_id);
		$data['schedule'] =$this->m_test->get_schedule();
		$data['q_detail'] =$this->m_test->question_detail($uid, $test_id);
		$data['pdfResult'] = $this->m_test->getPdfResult($uid, $test_id);
		
		$data['uniq_subject']= $this->m_test->subject_detail($uid, $test_id);

	
		$this->load->view('auth/online-result', $data);
	}

	public function test($value='')
	{
		$this->load->library('sc_chk');
		$seconds = $this->input->get('seconds');
		$id = $this->input->get('id');
		$this->sc_chk->duration($seconds,$id);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */












