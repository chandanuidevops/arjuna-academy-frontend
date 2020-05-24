<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('m_home');
		$this->load->model('m_authentication');

		$this->res = $this->get_head();
		$this->profile = $this->get_profile();
		$this->notification = $this->get_notification();
		
	}

	public function index()
	{
		if (!empty($this->session->userdata('tes_uniqId'))) {
			$url = base_url('online-test/').$this->session->userdata('tes_uniqId').'/'.$this->session->userdata('tes_uniq').'/'.$this->session->userdata('tes_id');
			redirect($url,'refresh');
		} 
		$data['title']=" Home | Arjunaa Academy ";
		// $data['gallery'] = $this->m_home->get_home_gallery();
		$data['gallery'] = $this->m_home->get_featured();
		$data['head'] = $this->res;
		$data['profile'] = $this->profile;
		$data['notification'] = $this->notification;
		$data['courses']=$this->m_home->get_course();
		$data['captcha']= $this->generateCaptcha();
		$data['banner']=$this->m_home->get_banner();
		$this->load->view('pages/index', $data);
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

	public function get_head(Type $var = null)
	{
		$result =  $this->m_home->get_course();
		
		return $result;	

	}

	public function get_profile(Type $var = null)
	{
		$uid = $this->session->userdata('aa_uid');
		$result =  $this->m_authentication->get_profileimg($uid);

		if(!empty($result)){
			return $result;	
		}else{
			return false;
		}
			
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

	
	public function validate_captcha(){
        if($this->input->post('captcha') != $this->session->userdata['captcha'])
        {
            $this->form_validation->set_message('validate_captcha', 'Wrong captcha code, hmm are you the Terminator?');
            return false;
        }else{
            return true;
        }
    
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


	public function about_us()
	{
		if (!empty($this->session->userdata('tes_uniqId'))) {
			$url = base_url('online-test/').$this->session->userdata('tes_uniqId').'/'.$this->session->userdata('tes_uniq').'/'.$this->session->userdata('tes_id');
			redirect($url,'refresh');
		} 

		$data['title']="About Us | Arjunaa Academy  ";
		$data['head'] = $this->res;
		$data['profile'] = $this->profile;
		$data['notification'] = $this->notification;
		$this->load->view('pages/about-us', $data);
	}
	public function contact_us()
	{
		if (!empty($this->session->userdata('tes_uniqId'))) {
			$url = base_url('online-test/').$this->session->userdata('tes_uniqId').'/'.$this->session->userdata('tes_uniq').'/'.$this->session->userdata('tes_id');
			redirect($url,'refresh');
		} 

		$data['title']="Contact Us | Arjunaa Academy  ";
		$data['head'] = $this->res;
		$data['courses']=$this->m_home->get_course();
		$data['captcha']= $this->generateCaptcha();
		$data['profile'] = $this->profile;
		$data['notification'] = $this->notification;
		$this->load->view('pages/contact-us', $data);
	}
	public function course_detail($slug)
	{
		if (!empty($this->session->userdata('tes_uniqId'))) {
			$url = base_url('online-test/').$this->session->userdata('tes_uniqId').'/'.$this->session->userdata('tes_uniq').'/'.$this->session->userdata('tes_id');
			redirect($url,'refresh');
		} 

		$data['title']="Arjunaa Academy - Course Detail";
		$data['result'] = $this->m_home->get_one_course($slug);
		
		
		
		$id = $this->db->where('slug',$slug)->get('course')->row()->id;
		
		$data['testimonial'] = $this->m_home->get_testimonial($id);

		$data['profile'] = $this->profile;
		$data['head'] = $this->res;	
		$data['notification'] = $this->notification;
		$this->load->view('pages/course-detail', $data);
	}

	public function course_list()
	{
		if (!empty($this->session->userdata('tes_uniqId'))) {
			$url = base_url('online-test/').$this->session->userdata('tes_uniqId').'/'.$this->session->userdata('tes_uniq').'/'.$this->session->userdata('tes_id');
			redirect($url,'refresh');
		} 

		$data['title']="Course List | Arjunaa Academy  ";
		$data['head'] = $this->res;
		$data['profile'] = $this->profile;
		$data['notification'] = $this->notification;
		$this->load->view('pages/course-list', $data);
	}
	public function event_detail($id)
	{
		if (!empty($this->session->userdata('tes_uniqId'))) {
			$url = base_url('online-test/').$this->session->userdata('tes_uniqId').'/'.$this->session->userdata('tes_uniq').'/'.$this->session->userdata('tes_id');
			redirect($url,'refresh');
		} 

		$data['title']="Arjunaa Academy - Event Details";
		$data['result'] = $this->m_home->get_one_featured($id);
		$data['gallery'] = $this->m_home->get_gallery($id);
		$data['head'] = $this->res;
		$data['profile'] = $this->profile;
		$data['notification'] = $this->notification;
		$this->load->view('pages/event-detail', $data);
	}
	public function upcoming_events()
	{
		if (!empty($this->session->userdata('tes_uniqId'))) {
			$url = base_url('online-test/').$this->session->userdata('tes_uniqId').'/'.$this->session->userdata('tes_uniq').'/'.$this->session->userdata('tes_id');
			redirect($url,'refresh');
		} 

		$data['title']="Upcoming Events | Arjunaa Academy  ";
		$data['result'] = $this->m_home->get_event();
		$data['head'] = $this->res;
		$data['profile'] = $this->profile;
		$data['notification'] = $this->notification;
		$this->load->view('pages/upcoming-event', $data);
	}
	public function jee()
	{
		if (!empty($this->session->userdata('tes_uniqId'))) {
			$url = base_url('online-test/').$this->session->userdata('tes_uniqId').'/'.$this->session->userdata('tes_uniq').'/'.$this->session->userdata('tes_id');
			redirect($url,'refresh');
		} 

		$data['title']="JEE Achievers | Arjunaa Academy  ";
		$data['head'] = $this->res;
		$data['profile'] = $this->profile;
		$data['notification'] = $this->notification;
		$this->load->view('pages/jee', $data);
	}
	public function neet()
	{
		if (!empty($this->session->userdata('tes_uniqId'))) {
			$url = base_url('online-test/').$this->session->userdata('tes_uniqId').'/'.$this->session->userdata('tes_uniq').'/'.$this->session->userdata('tes_id');
			redirect($url,'refresh');
		} 

		$data['title']="NEET Achievers | Arjunaa Academy ";
		$data['head'] = $this->res;
		$data['profile'] = $this->profile;
		$data['notification'] = $this->notification;
		$this->load->view('pages/neet', $data);
	}
	public function kcet()
	{
		if (!empty($this->session->userdata('tes_uniqId'))) {
			$url = base_url('online-test/').$this->session->userdata('tes_uniqId').'/'.$this->session->userdata('tes_uniq').'/'.$this->session->userdata('tes_id');
			redirect($url,'refresh');
		} 
		$data['title']="KCET Achievers | Arjunaa Academy ";
		$data['head'] = $this->res;
		$data['profile'] = $this->profile;
		$data['notification'] = $this->notification;
		$this->load->view('pages/kcet', $data);
	}
	public function ntse()
	{
		if (!empty($this->session->userdata('tes_uniqId'))) {
			$url = base_url('online-test/').$this->session->userdata('tes_uniqId').'/'.$this->session->userdata('tes_uniq').'/'.$this->session->userdata('tes_id');
			redirect($url,'refresh');
		} 
		$data['title']="Achievers NTSE | Arjunaa Academy ";
		$data['head'] = $this->res;
		$data['profile'] = $this->profile;
		$data['notification'] = $this->notification;
		$this->load->view('pages/ntse', $data);
	}
	public function vrddhi()
	{
		if (!empty($this->session->userdata('tes_uniqId'))) {
			$url = base_url('online-test/').$this->session->userdata('tes_uniqId').'/'.$this->session->userdata('tes_uniq').'/'.$this->session->userdata('tes_id');
			redirect($url,'refresh');
		} 
		$data['title']="Vrddhi Arjunaa Academy";
		$data['head'] = $this->res;
		$data['profile'] = $this->profile;
		$data['notification'] = $this->notification;
		$this->load->view('pages/vrddhi', $data);
	}
	public function photo_gallery()
	{
		if (!empty($this->session->userdata('tes_uniqId'))) {
			$url = base_url('online-test/').$this->session->userdata('tes_uniqId').'/'.$this->session->userdata('tes_uniq').'/'.$this->session->userdata('tes_id');
			redirect($url,'refresh');
		} 
		$data['title']="Arjunaa Academy - Photo Gallery";
		$data['result'] = $this->m_home->get_featured();
		$data['head'] = $this->res;
		$data['profile'] = $this->profile;
		$data['notification'] = $this->notification;
		$this->load->view('pages/photo-gallery', $data);
	}
	public function gallery_detail($id='')
	{
		if (!empty($this->session->userdata('tes_uniqId'))) {
			$url = base_url('online-test/').$this->session->userdata('tes_uniqId').'/'.$this->session->userdata('tes_uniq').'/'.$this->session->userdata('tes_id');
			redirect($url,'refresh');
		} 
		$data['title']="Arjunaa Academy - Home";
		$data['head'] = $this->res;
		$data['profile'] = $this->profile;
		$data['notification'] = $this->notification;
		$data['gallery'] = $this->m_home->get_gallery($id);
		
		$data['featured'] = $this->m_home->get_featured_description($id);

		$this->load->view('pages/gallery-detail', $data);
	}

	public function career()
	{
		if (!empty($this->session->userdata('tes_uniqId'))) {
			$url = base_url('online-test/').$this->session->userdata('tes_uniqId').'/'.$this->session->userdata('tes_uniq').'/'.$this->session->userdata('tes_id');
			redirect($url,'refresh');
		} 
		$data['title']="Arjunaa Academy - Career";
		$data['result'] = $this->m_home->jobGet();
		$data['head'] = $this->res;
		$data['profile'] = $this->profile;
		$data['notification'] = $this->notification;
		$data['captcha']= $this->generateCaptcha();
		$this->load->view('pages/career', $data);
	}

	public function career_detail($uniq)
	{
		if (!empty($this->session->userdata('tes_uniqId'))) {
			$url = base_url('online-test/').$this->session->userdata('tes_uniqId').'/'.$this->session->userdata('tes_uniq').'/'.$this->session->userdata('tes_id');
			redirect($url,'refresh');
		} 
		$data['title']="Arjunaa Academy - Career Detail";
		$data['result'] = $this->m_home->jobIdGet($uniq);
		
		
		$data['captcha']= $this->generateCaptcha();
		$data['profile'] = $this->profile;
		$data['head'] = $this->res;
		$data['notification'] = $this->notification;
		$this->load->view('pages/career-detail', $data);
	}

	public function enroll($slug)
	{
		if (!empty($this->session->userdata('tes_uniqId'))) {
			$url = base_url('online-test/').$this->session->userdata('tes_uniqId').'/'.$this->session->userdata('tes_uniq').'/'.$this->session->userdata('tes_id');
			redirect($url,'refresh');
		} 
		$data['title']="Arjunaa Academy - Enroll Course";
		$data['head'] = $this->res;
		$data['profile'] = $this->profile;
		$data['notification'] = $this->notification;
		$data['captcha']= $this->generateCaptcha();

		$data['result'] = $this->m_home->get_one_course($slug);

		$this->load->view('pages/enroll', $data);
	}
	
	//insert contact detail
	public function insert_contact(Type $var = null)
	{
		
		
		
		$this->form_validation->set_rules('name', 'Location', 'required|alpha_numeric_spaces');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('phone', 'Phone', 'required|exact_length[10]');
		
		if ($this->form_validation->run() == true) {
			$insert = array(
				'name'=>$this->input->post('name'),
				'email'=>$this->input->post('email'),
				'phone'=>$this->input->post('phone'),
				'course'=>$this->input->post('course'),
				'message'=>$this->input->post('message'),
				'uniq'=> random_string('alnum', 10),
			);
			$result= $this->m_home->contact($insert);
			
			if($result==true){
				if($this->sendenquiry($insert))
				{
					$this->session->set_flashdata('msg', 'Your have submitted successfully! ');
					redirect('contact-us');
				}else{
					$this->session->set_flashdata('error', 'Your mail has failed to sent.');
					redirect('contact-us');
				}
			}else{
				redirect('contact-us');
			}
		}else{
			$this->contact_us();
		}
		
		
	}

		//insert contact detail
		public function insert_home_contact(Type $var = null)
		{
			$this->form_validation->set_rules('name', 'Name', 'required|alpha_numeric_spaces');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('phone', 'Phone', 'required|numeric|exact_length[10]');
		
			if ($this->form_validation->run() == true) {
				$insert = array(
					'name'=>$this->input->post('name'),
					'email'=>$this->input->post('email'),
					'phone'=>$this->input->post('phone'),
					'course'=>$this->input->post('course'),
					'message'=>$this->input->post('message'),
					'uniq'=> random_string('alnum', 10),
				);

			
				if($this->input->post('captcha') != $this->session->userdata('captchaCode'))
				{
					$error =  'Invalid recaptcha ';
				}else{
					$result= $this->m_home->contact($insert);
				
					if($result==true){
						if($this->sendenquiry($insert))
						{
							$output = true;
						}else{
							$error = 'Failed to send enquiry data';
						}
					}
				}
			}else{
				$error = validation_errors();
			}

			if (!empty($error)) 
			{
				$output = $error;
			 }
		   
			 echo json_encode($output);
			
		}
	

	   //submit contact form
	   public function sendenquiry($data)
	   {
		   $subj = "Application for Enquiry Sent By - ".$data['name'];
		   $msg=' <!doctype html> 
			   <html> 
			   <head> 
			   <meta name="viewport" content="width=device-width" />
					<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
					<title>Album Semiconductor Job Application</title>
					<style>td{padding: 5px 2px;} 
					img { border: none; -ms-interpolation-mode: bicubic; max-width: 100%; } 
					body { background-color:#f6f6f6; font-family: sans-serif; -webkit-font-smoothing: antialiased; font-size: 14px; line-height: 1.4; margin: 0; padding: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; } table { border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; } table td { font-family: sans-serif; font-size: 14px; vertical-align: top; } .body { background-color: #f6f6f6; width: 100%; } .container { display: block; margin: 0 auto !important; max-width: 580px; padding: 10px; width: 580px; } .content { box-sizing: border-box; display: block; margin: 0 auto; max-width: 580px; padding: 10px; } .main { background: #ffffff; border-radius: 3px; width: 100%; } .wrapper { box-sizing: border-box; padding: 20px; } .content-block { padding-bottom: 10px; padding-top: 10px; } .footer { clear: both; margin-top: 10px; text-align: center; width: 100%; } .footer td, .footer p, .footer span, .footer a { color: #999999; font-size: 12px; text-align: center; } h1, h2, h3, h4 { color: #000000; font-family: sans-serif; font-weight: 400; line-height: 1.4; margin: 0; margin-bottom: 30px; } h1 { font-size: 35px; font-weight: 300; text-align: center; text-transform: capitalize; } p, ul, ol { font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px; } p li, ul li, ol li { list-style-position: inside; margin-left: 5px; } a { color: #3498db; text-decoration: underline; } .btn { box-sizing: border-box; width: 100%; } .btn > tbody > tr > td { padding-bottom: 15px; } .btn table { width: auto; } .btn table td { background-color: #ffffff; border-radius: 5px; text-align: center; } .btn a { background-color: #ffffff; border: solid 1px #3498db; border-radius: 5px; box-sizing: border-box; color: #3498db; cursor: pointer; display: inline-block; font-size: 14px; font-weight: bold; margin: 0; padding: 12px 25px; text-decoration: none; text-transform: capitalize; } .btn-primary table td { background-color: #3498db; } .btn-primary a { background-color: #3498db; border-color: #3498db; color: #ffffff; } .last { margin-bottom: 0; } .first { margin-top: 0; } .align-center { text-align: center; } .align-right { text-align: right; } .align-left { text-align: left; } .clear { clear: both; } .mt0 { margin-top: 0; } .mb0 { margin-bottom: 0; } .preheader { color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0; } .powered-by a { text-decoration: none; } hr { border: 0; border-bottom: 1px solid #f6f6f6; margin: 20px 0; } @media only screen and (max-width: 620px) { table[class=body] h1 { font-size: 28px !important; margin-bottom: 10px !important; } table[class=body] p, table[class=body] ul, table[class=body] ol, table[class=body] td, table[class=body] span, table[class=body] a { font-size: 16px !important; } table[class=body] .wrapper, table[class=body] .article { padding: 10px !important; } table[class=body] .content { padding: 0 !important; } table[class=body] .container { padding: 0 !important; width: 100% !important; } table[class=body] .main { border-left-width: 0 !important; border-radius: 0 !important; border-right-width: 0 !important; } table[class=body] .btn table { width: 100% !important; } table[class=body] .btn a { width: 100% !important; } table[class=body] .img-responsive { height: auto !important; max-width: 100% !important; width: auto !important; } } @media all { .ExternalClass { width: 100%; } .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div { line-height: 100%; } .apple-link a { color: inherit !important; font-family: inherit !important; font-size: inherit !important; font-weight: inherit !important; line-height: inherit !important; text-decoration: none !important; } .btn-primary table td:hover { background-color: #34495e !important; } .btn-primary a:hover { background-color: #34495e !important; border-color: #34495e !important; } } </style> 
					</head> 
					<body class=""> 
					<span class="preheader">This is preheader text. Some clients will show this text as a preview.</span> 
					<table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body"> 
					<tr> <td>&nbsp;</td> <td class="container"> <div class="content"> <table role="presentation" class="main"> <tr> <td class="wrapper">
						 <table role="presentation" border="0" cellpadding="0" cellspacing="0">
							  <tr >
								   <td colspan="2" ><h2> Enquiry Details  </h2></td>
							  </tr>
							  <tr>
						   <td width="30%">Name</td>
						   <td width="70%">'.$data['name'].'</td>
					   </tr>
					  
					   <tr>
						   <td width="30%">Email</td>
						   <td width="70%">'.$data['email'].'</td>
					   </tr>
					   <tr>
						   <td width="30%">Phone</td>
						   <td width="70%">'.$data['phone'].'</td>
					   </tr>

					   <tr>
					   <td width="30%">Course</td>
					   <td width="70%">'.$data['course'].'</td>
				   </tr>
   
					   <tr>
						   <td width="30%">Message</td>
						   <td width="70%">'.$data['message'].'</td>
					   </tr>
 
						 </table>
			   </td> </tr> </table> </div> </td> <td>&nbsp;</td> </tr> </table> </body> </html>'
			   ;
			
				$this->load->config('email');
               	$this->load->library('email');
			    $this->email->set_newline("\r\n");
			   $this->config->item('smtp_user');
			   $to = $this->config->item('admin');
			   $this->email->from('no-reply@aaaedu.in');
			   $this->email->to($to );
			   $this->email->subject($subj);
			   $this->email->message($msg);
			   $send=$this->email->send();
			   return $send;	      
	   }

	   //course apply
	   public function apply_course(Type $var = null)
	   {
		$this->form_validation->set_rules('name', 'Name', 'required|alpha_numeric_spaces');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('phone', 'Phone', 'required|exact_length[10]');
		$this->form_validation->set_rules('location', 'Location', 'required');
		
		if ($this->form_validation->run() == true) {
			$insert = array(
				'name'=>$this->input->post('name'),
				'email'=>$this->input->post('email'),
				'phone'=>$this->input->post('phone'),
				'course'=>$this->input->post('course'),
				'location'=>$this->input->post('location'),
				'optionname'=>$this->input->post('optradio'),
				'message'=>$this->input->post('message'),
				
				'status'=>1,
				'uniq'=>random_string('alnum',10)
		   );
		   $branch=$this->input->post('branch');
		    	   
		   $date = $this->input->post('date');
		   $time = $this->input->post('time');
		   if(!empty($date)){
			$insert['date']=$date;
		   }
		   if(!empty($branch)){
			$insert['branch']=$branch;
		   }

		   if(!empty($date)){
			$insert['time']=$time;
		   }

		   if($this->input->post('captcha') != $this->session->userdata('captchaCode')){
			$this->session->set_flashdata('error', 'Invalid recaptcha ');
			redirect('');
		   }else{
			$result = $this->m_home->apply_course($insert);

			if($result==true)
			 {
				$this->apply_email($insert);
				 $this->apply_admin_email($insert);
				 
				 $this->session->set_flashdata('msg', 'Your have applied successfully! ');
				 redirect('');
			 }else{
				 $this->session->set_flashdata('error', 'Your application has failed to sent.');
				 redirect('');
			 }
		   }

		   
		}else{
			redirect('');
		}
		   
	   }

	    //course apply
		public function apply_course_contact(Type $var = null)
		{
		 $this->form_validation->set_rules('name', 'Name', 'required|alpha_numeric_spaces');
		 $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		 $this->form_validation->set_rules('phone', 'Phone', 'required|exact_length[10]');
		 $this->form_validation->set_rules('location', 'Location', 'required');
		 
		 if ($this->form_validation->run() == true) {
			 $insert = array(
				 'name'=>$this->input->post('name'),
				 'email'=>$this->input->post('email'),
				 'phone'=>$this->input->post('phone'),
				 'course'=>$this->input->post('course'),
				 'location'=>$this->input->post('location'),
				 'optionname'=>$this->input->post('optradio'),
				 'message'=>$this->input->post('message'),
				 'status'=>1,
				 'uniq'=>random_string('alnum',10)
			);
				
			$branch=$this->input->post('branch');
			$date = $this->input->post('date');
			$time = $this->input->post('time');
			if(!empty($date)){
			 $insert['date']=$date;
			}
			if(!empty($date)){
			 $insert['time']=$time;
			}
			if(!empty($branch)){
				$insert['branch']=$branch;
			   }

			if($this->input->post('captcha') != $this->session->userdata('captchaCode')){
				$error = 'Invalid Recaptcha';
			}else{
				$result = $this->m_home->apply_course($insert);
				if($result==true)
				 {
					 $this->apply_email($insert);
					 $this->apply_admin_email($insert);
					$output =true;
				 }else{
					 
					 $error = 'Your application has failed to sent.';
				 }
			}

		
		 }else{
			$error = validation_errors();
			}

			if (!empty($error)) 
			{
				$output = $error;
			 }
		   
			 echo json_encode($output);
		}
	    //submit contact form
		public function apply_email($data)
		{
				
				$this->load->config('email');
				$this->email->set_newline('\r\n');
				$this->load->library('email');
				$this->config->item('smtp_user');
				$this->email->from('no-reply@aaaedu.in');
				$this->email->to($data['email']);
				$this->email->subject('Arjunaa Academy admission enquiry ');
				$msg = $this->load->view('email/application', $data, true);
			
				$this->email->message($msg);
				$send=$this->email->send();
				return $send;	      
		}
		
		public function apply_admin_email($data)
		{
				$this->load->config('email');
				$this->email->set_newline('\r\n');
				$this->load->library('email');
				$this->config->item('smtp_user');
				$to = $this->config->item('admin');
				$this->email->from('no-reply@aaaedu.in');
				$this->email->to($to );
				$this->email->subject('Arjunaa Academy admission enquiry');
				$msg = $this->load->view('email/admission-enquiry-form', $data, true);
				$this->email->message($msg);
				$send=$this->email->send();
				return $send;	      
		}






		public function apply_job(Type $var = null)
		{
			$this->form_validation->set_rules('name', 'Name', 'required|alpha_numeric_spaces');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('phone', 'Phone', 'required|exact_length[10]');
			$this->form_validation->set_rules('gender', 'Gender', 'required');
			$this->form_validation->set_rules('experience', 'experience', 'required');
			$this->form_validation->set_rules('company', 'company', 'required');
			$this->form_validation->set_rules('designation', 'designation', 'required');
			
			if ($this->form_validation->run() == true)
			{

				if($this->input->post('captcha') != $this->session->userdata('captchaCode')){
					$error = 'Invalid reCaptcha';
				   }else{
					$insert = array(
						'name'=>$this->input->post('name'),
						'email'=>$this->input->post('email'),
						'phone'=>$this->input->post('phone'),
						'gender'=>$this->input->post('gender'),
						'experience'=>$this->input->post('experience'),
						'company'=>$this->input->post('company'),
						'designation'=>$this->input->post('designation'),
						'job_title'=>$this->input->post('job_title'),
						'status'=>1
					);
					
					// $this->load->library('upload');
					$files = $_FILES;
					
					if (file_exists($_FILES['resume']['tmp_name'])) {
		
					$config['upload_path'] = './resume/';
					$config['allowed_types'] = 'pdf|doc|docx';
					$config['max_width'] = 0;
					$config['encrypt_name'] = false;
					$this->load->library('upload');
					$this->upload->initialize($config);
			
					if (!is_dir($config['upload_path'])) {
					mkdir($config['upload_path'], 0777, true);
					}
				   
					if (!$this->upload->do_upload('resume')) {
		
					$fileerror = array('error' => $this->upload->display_errors());
						
					} 
					else
					{
					$upload_data = $this->upload->data();
					$file_name  = $upload_data['file_name'];
					$resume    = 'resume/'.$file_name;

					if (file_exists($_FILES['resume']['tmp_name'])) {
						$insert['resume'] = $resume;
					}

					$result = $this->m_home->apply_job($insert);
					if($result==true)
					{
						$this->apply_email($insert);
				
						$this->load->config('email');
						$this->email->set_newline('\r\n');
						$this->load->library('email');
						$this->config->item('smtp_user');
						$this->email->from('no-reply@aaaedu.in');
						$to = $this->config->item('admin');
						$this->email->from('no-reply@aaaedu.in');
						$this->email->to($to );
						$this->email->subject('Arjunaa Academy Job Application');
						$msg = $this->load->view('email/job-application', $insert, true);
		
						$this->email->message($msg);
						$this->email->attach($upload_data['full_path']);
						$send=$this->email->send();
						if($send){
							$output = true;
						}else{
							$output = false;
						}
						
					}else{
						$output = false;
					}
					
					}
					}
		
					

				   }
			}else{
				$output = validation_errors();
			}

			if (!empty($fileerror)) 
			{
				$output = $fileerror['error'];
			 }
		   
			 echo json_encode($output);
		}

		public function payment(Type $var = null)
		{
			$uniq = $this->input->post('uniq');
			$slug = $this->input->post('slug');
			
			
		
			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('phone', 'Phone no', 'required|exact_length[10]');
			
			
			
		
			//if ($this->form_validation->run() == TRUE){
				$pay_id         = $this->input->post('razorpay_payment_id');
				$name = $this->input->post('name');
				$email = $this->input->post('email');
				$phone = $this->input->post('phone');
			
				$course_id = $this->input->post('course_id');
				$course = $this->input->post('course');
				$amount = $this->input->post('amount');
	
				$insert = array(
					'name'=>$name,
					'email'=>$email,
					'phone'=>$phone,
					'pay_id'=>$pay_id,
					'course_id'=>$course_id,
					'course'=>$course,
					'amount'=>$amount,

				);

				
				$result = $this->m_home->insert_enroll($insert);
	
	
				if($result==true)
				{
					
	
	
					$this->load->config('email');
					$this->email->set_newline('\r\n');
					$this->load->library('email');
					$this->config->item('smtp_user');
					$this->email->from('no-reply@aaaedu.in');
					$to = $this->config->item('admin');
					$this->email->from('no-reply@aaaedu.in');
					$this->email->to($to );
					$this->email->cc($insert['email']);
					$this->email->subject('Arjunaa Academy Enrollment');
					$msg = $this->load->view('email/course-enroll', $insert, true);
	
					
					$this->email->message($msg);
					
					$send=$this->email->send();
					$this->session->set_flashdata('msg', 'Your have enrolled successfully! ');
					redirect('course/'.$slug);
				}else{
					$this->session->set_flashdata('error', 'Your application has failed to sent.');
					redirect('enroll/'.$slug );
				}
			// }else{
			// 	redirect('enroll/'.$uniq );
			// }
			
		}
	// online Test
	public function online_registration()
	{
		if (!empty($this->session->userdata('tes_uniqId'))) {
			$url = base_url('online-test/').$this->session->userdata('tes_uniqId').'/'.$this->session->userdata('tes_uniq').'/'.$this->session->userdata('tes_id');
			redirect($url,'refresh');
		} 

		$data['title']="Online-Registration | Arjunaa Academy  ";
		$data['head'] = $this->res;
		$data['profile'] = $this->profile;
		$data['notification'] = $this->notification;
		$this->load->view('pages/online-registration', $data);
	}
		
	
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */