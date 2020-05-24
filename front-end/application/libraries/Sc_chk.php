<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sc_chk
{
	protected $ci;

	public function __construct()
	{
        $this->ci =& get_instance();
        $this->ci->load->library('session');
	}

	public function duration($duration='',$ids='')
	{
		if ($this->ci->session->userdata('qst_id') != $ids) {
			$this->ci->session->unset_userdata('q_duration');
			$this->ci->session->unset_userdata('qst_id');
			$ses= array('q_duration'=>$duration,'qst_id'=>$ids);
			$this->ci->session->set_userdata($ses);
			return $data['duration'] = $this->ci->session->userdata('q_duration');
		}else{
			$ses= array('q_duration'=>$duration,'qst_id'=>$ids);
			$this->ci->session->set_userdata($ses);
			return $data['duration'] = $this->ci->session->userdata('q_duration');
		}
	}

	public function unset_duration($id='')
	{
		if ($this->ci->session->userdata('qst_id') != $id) {
			$this->ci->session->unset_userdata('q_duration');
			$this->ci->session->unset_userdata('qst_id');
		}
		return true;
	}

	public function check_test($testUbiqId='',$uniq='',$nextid='')
	{
		$this->ci->session->unset_userdata('tes_uniqId');
		$this->ci->session->unset_userdata('tes_uniq');
		$this->ci->session->unset_userdata('tes_id');
		$ses= array('tes_uniqId'=>$testUbiqId,'tes_uniq'=>$uniq,'tes_id'=>$nextid);
		return $this->ci->session->set_userdata($ses);
	}

	

}

/* End of file Sc_chk.php */
/* Location: ./application/libraries/Sc_chk.php */
