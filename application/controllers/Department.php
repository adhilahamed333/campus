<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Department extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('security_model');
		$this->load->model('department_model');
		$this->security_model->check_log_in_faculty();
	}
	/**
	 * @author Unnikrishnan
	 **/



	public function index()
	{
		$this->load->view('department/index');
	}
	//
	//
	//
	public function departmentprofile()
	{
		$dept_id = $this->session->userdata('dept_id');
		$this->load->model('department_model');
		$posts = $this->department_model->getdept($dept_id);
		$this->load->view('department/profile', array('posts' => $posts));
	}
	//
	// 		public function logoutstaff()
	// 		{
	// 				$this->session->sess_destroy();
	// 				redirect('Front', 'refresh');
	// 		}
	//

	public function viewstudent()
	{

		$this->load->model('department_model');
		$posts = $this->department_model->getstudent();
		foreach ($posts as $p) {
			$mydues[$p->std_id] = $this->department_model->getmydues($p->std_id, $_SESSION['dept_id']);
		}
		$posts_branch = $this->department_model->getbranch();
		$posts_semester = $this->department_model->getsemester();
		$posts_due = $this->department_model->getdue();
		$this->load->view('department/viewstd', array('dues' => $mydues,'posts' => $posts, 'posts_branch' => $posts_branch, 'posts_semester' => $posts_semester, 'posts_due' => $posts_due));
	}

	public function viewstudents()
	{

		$branch = $this->input->post('branch');
		$semester = $this->input->post('semester');
		$this->load->model('department_model');
		$posts = $this->department_model->getstudents($branch, $semester);
		foreach ($posts as $p) {
			$mydues[$p->std_id] = $this->department_model->getmydues($p->std_id, $_SESSION['dept_id']);
		}
		$posts_branch = $this->department_model->getbranch();
		$posts_semester = $this->department_model->getsemester();
		$posts_due = $this->department_model->getdue();
		$this->load->view('department/viewstd', array('dues' => $mydues, 'posts' => $posts, 'posts_branch' => $posts_branch, 'posts_semester' => $posts_semester, 'posts_due' => $posts_due));
	}
	public function save_due()
	{

		$std_id = $this->input->post('std_id');
		$amount = $this->input->post('amount');
		$due = $this->input->post('due_type');
		$posts_due = $this->department_model->save_due($std_id, $amount, $due);

		$branch = $this->input->post('branch');
		$semester = $this->input->post('semester');
		$this->load->model('department_model');
		$posts = $this->department_model->getstudent();
		foreach ($posts as $p) {
			$mydues[$p->std_id] = $this->department_model->getmydues($p->std_id, $_SESSION['dept_id']);
		}
		$posts_branch = $this->department_model->getbranch();
		$posts_semester = $this->department_model->getsemester();
		$posts_due = $this->department_model->getdue();
		$this->load->view('department/viewstd', array('dues' => $mydues, 'posts' => $posts, 'posts_branch' => $posts_branch, 'posts_semester' => $posts_semester, 'posts_due' => $posts_due));
	}

	//
	// 		public function deletestudent($id)
	// 				{
	// 					$this->load->model('staff_model');
	// 					if($post =$this->staff_model->deletestudent($id))
	// 					{
	// 						$this->session->set_flashdata('success','Deleted Successfully');
	// 					}
	// 					else {
	//
	// 						$this ->session ->set_flashdata('errormsg','Failed');
	// 					}
	// 					return redirect('staff/viewstudent');
	// 				}
	//
	// 		public function updatestudent($id)
	// 					{
	// 						$this->load->model('staff_model');
	// 						$post = $this->staff_model->getSinglestudent($id);
	// 						$this->load->view('staff/studentedit',array('post'=>$post));
	// 					}
	//
	// 		public function editstudent($id)
	// 				{
	// 					$this->form_validation->set_rules('std_name','std_Name','required');
	// 					$this->form_validation->set_rules('dob','Dob','required');
	// 					$this->form_validation->set_rules('admission_no','admission_no','required');
	// 					$this->form_validation->set_rules('branch','branch','required');
	// 					$this->form_validation->set_rules('dateofjoining','dateofjoining','required');
	// 					$this->form_validation->set_rules('dateofleaving','dateofleaving','required');
	// 					$this->form_validation->set_rules('universityregno','universityregno','required');
	// 					$this->form_validation->set_rules('password','Password','required');
	// 					if($this->form_validation->run())
	// 					{
	// 						$data = $this->input->post();
	// 						unset($data['submit']);
	// 						$this->load->model('staff_model');
	// 						if($this->staff_model->updatestudent($data,$id))
	// 						{
	// 							 $this->session->set_flashdata('success','Successfully Updated');
	// 						}
	// 						else {
	//
	// 							$this->session->set_flashdata('errormsg','Failed to Update');
	//
	// 						}
	// 						return redirect('staff/viewstudent');
	// 									}
	// 						else
	// 						{
	// 							$this->load->view('staff/viewstudent');
	// 						}
	// 				}
	//
	// 			public function updatecredits($id)
	// 						{
	// 							$this->load->model('staff_model');
	// 							$post = $this->staff_model->getSinglestudent($id);
	// 							$this->load->view('staff/creditsedit',array('post'=>$post));
	// 						}
	//
	// 			public function editcredits($id)
	// 					{
	// 						$this->form_validation->set_rules('std_credits','std_credits','required');
	// 						if($this->form_validation->run())
	// 						{
	// 							$data = $this->input->post();
	// 							unset($data['submit']);
	// 							$this->load->model('staff_model');
	// 							if($this->staff_model->updatestudent($data,$id))
	// 							{
	// 								 $this->session->set_flashdata('success','Successfully Updated Credits');
	// 							}
	// 							else {
	//
	// 								$this->session->set_flashdata('errormsg','Failed to Update Credits');
	//
	// 							}
	// 							return redirect('staff/viewstudent');
	// 										}
	// 							else
	// 							{
	// 								$this->load->view('staff/viewstudent');
	// 							}
	// 					}
}
