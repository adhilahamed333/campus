
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hod extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('security_model');
		$this->security_model->check_log_in_faculty();
		$this->load->model('hod_model');
	}
	/**
	 * @author Unnikrishnan
	 **/
	public function index()
	{
		$this->load->view('hod/index');
	}

	public function hodprofile()
	{
		$hod_id = $this->session->userdata('hod_id');
		$this->load->model('hod_model');
		$posts = $this->hod_model->gethod($hod_id);
		$this->load->view('hod/profile', array('posts' => $posts));
	}
	// //
	public function logoutstaff()
	{
		$this->session->sess_destroy();
		redirect('Front', 'refresh');
	}

	public function viewstudent()
	{
		$department = $this->session->userdata('department');
		$this->load->model('hod_model');
		$posts = $this->hod_model->getstudent($department);
		$this->load->view('hod/viewstd', array('posts' => $posts));
	}

	public function stdsem($std_id)
	{
		$this->load->model('hod_model');
		$stdsem = $this->hod_model->getstudentsem($std_id);
		$stdpersonal = $this->hod_model->getstdperbyid($std_id);
		$regcourse = $this->hod_model->regcourse($std_id);
		$regcourse->sub1 = $this->hod_model->courseDetails($regcourse->sub1);
		$regcourse->sub2 = $this->hod_model->courseDetails($regcourse->sub2);
		$regcourse->sub3 = $this->hod_model->courseDetails($regcourse->sub3);
		$regcourse->sub4 = $this->hod_model->courseDetails($regcourse->sub4);
		$regcourse->sub5 = $this->hod_model->courseDetails($regcourse->sub5);
		$regcourse->sub6 = $this->hod_model->courseDetails($regcourse->sub6);
		$regcourse->sub7 = $this->hod_model->courseDetails($regcourse->sub7);
		$regcourse->sub8 = $this->hod_model->courseDetails($regcourse->sub8);
		$regcourse->sub9 = $this->hod_model->courseDetails($regcourse->sub9);
		$regcourse->sub10 = $this->hod_model->courseDetails($regcourse->sub10);
		$this->load->view('hod/semreg', array('stdsem' => $stdsem, 'stdpersonal' => $stdpersonal, 'regcourse' => $regcourse));
	}

	public function hodaprove()
	{
		if (isset($_REQUEST['hod_status'])) {
			$this->load->model('hod_model');
			$res = $this->hod_model->hod_status();
		}
		$this->load->view('hod/index');
	}
}
