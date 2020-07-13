<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
                $this->load->model('security_model');
                $this->security_model->check_log_in_faculty();
	}
        /**
	 * @author Unnikrishnan
	 **/
    public function index()
			{
      $this->load->view('staff/index');
      }

		public function staffprofile()
		{
				$staff_id = $this->session->userdata('user_id');
				$this->load->model('staff_model');
				$posts =$this->staff_model->getstaff($staff_id);
				$this->load->view('staff/profile',array('posts' =>$posts));
		}

		public function logoutstaff()
		{
				$this->session->sess_destroy();
				redirect('Front', 'refresh');
		}

		public function studentreg()
		{
	      $this->load->view('staff/studentreg');
	   }
	 public function addstudent()
		{
			$this->form_validation->set_rules('staff_id','Staff_id','required');
			$this->form_validation->set_rules('std_name','std_Name','required');
			$this->form_validation->set_rules('dob','Dob','required');
			$this->form_validation->set_rules('admission_no','admission_no','required');
			$this->form_validation->set_rules('branch','branch','required');
			$this->form_validation->set_rules('dateofjoining','dateofjoining','required');
			$this->form_validation->set_rules('dateofleaving','dateofleaving','required');
			$this->form_validation->set_rules('universityregno','universityregno','required');
			$this->form_validation->set_rules('semester','semester','required');
			$this->form_validation->set_rules('Course','Course','required');
			$this->form_validation->set_rules('password','Password','required');
		if($this->form_validation->run())
		{
			$data =$this->input->post();
			unset($data['submit']);
			$admission_no = $this->input->post('admission_no');
			$admission = array(
				'admission_no' => $admission_no
			);
			$this->load->model('student_model');
			if ($this->student_model->stdpersonal($admission)) {
				if($this->student_model->addstd($data))
				{
					$this->session->set_flashdata('msgsuccess','Successfully Added');
					redirect('staff/studentreg', 'refresh');
				}
				else {

					$this->session->set_flashdata('msgfail','Failed to Added');
					redirect('staff/studentreg', 'refresh');
				}
			}
			return redirect('staff/index');
		}
		else {
			$this->session->set_flashdata('msgfail','Failed, Fields are empty');
			return redirect('staff/studentreg');

		}
	}


		public function viewstudent()
		{
				$staff_id = $this->session->userdata('user_id');
				$this->load->model('staff_model');
				$posts =$this->staff_model->getstudent($staff_id);
				$this->load->view('staff/viewstd',array('posts' =>$posts));
		}
		
		public function add_date()
		{				
				$this->load->view('staff/add_date');
		}
		
		public function insert_date()
		{				
				$date = $this->input->post('dateofjoining'); 
				$this->load->model('staff_model');
				$posts =$this->staff_model->insert_date($date);
			    return redirect('staff/add_date');

		}
		
		
		public function semester_request_list()
		{				
				$name=$this->session->userdata('name'); 
				$this->load->model('staff_model');
				$posts =$this->staff_model->semester_request_list($name);
				$this->load->view('staff/semester_request_listing',array('posts' =>$posts));


		}
		
		
		public function advisor_action()
		{	
				$id = $this->input->post('id'); 
				$this->load->model('staff_model');
				$posts =$this->staff_model->semester_request_hod($id);
				//$this->load->view('staff/semester_request_list',array('posts' =>$posts));
				return redirect('staff/semester_request_list');

		}
		
	
		
		
		 

		public function deletestudent($id)
				{
					$this->load->model('staff_model');
					if($post =$this->staff_model->deletestudent($id))
					{
						$this->session->set_flashdata('success','Deleted Successfully');
					}
					else {

						$this ->session ->set_flashdata('errormsg','Failed');
					}
					return redirect('staff/viewstudent');
				}

		public function updatestudent($id)
					{
						$this->load->model('staff_model');
						$post = $this->staff_model->getSinglestudent($id);
						$due = $this->staff_model->getdue();
						$this->load->view('staff/studentedit',array('post'=>$post,'due'=>$due));
						
					}

		public function editstudent($id)
				{
					$this->form_validation->set_rules('std_name','std_Name','required');
					$this->form_validation->set_rules('dob','Dob','required');
					$this->form_validation->set_rules('admission_no','admission_no','required');
					$this->form_validation->set_rules('branch','branch','required');
					$this->form_validation->set_rules('dateofjoining','dateofjoining','required');
					$this->form_validation->set_rules('dateofleaving','dateofleaving','required');
					$this->form_validation->set_rules('universityregno','universityregno','required');
					$this->form_validation->set_rules('semester','semester','required');
					$this->form_validation->set_rules('Course','Course','required');
					$this->form_validation->set_rules('password','Password','required');
					if($this->form_validation->run())
					{
						$data = $this->input->post();
						unset($data['submit']);
						$this->load->model('staff_model');
						if($this->staff_model->updatestudent($data,$id))
						{
							 $this->session->set_flashdata('success','Successfully Updated');
						}
						else {

							$this->session->set_flashdata('errormsg','Failed to Update');

						}
						return redirect('staff/viewstudent');
									}
						else
						{
							$this->load->view('staff/viewstudent');
						}
				}

			public function updatecredits($id)
						{
							$this->load->model('staff_model');
							$posts = $this->staff_model->getstudentcredits($id);
							$stddet = $this->staff_model->getSinglestudent($id);
							$this->load->view('staff/creditsedit',array('posts'=>$posts , 'stddet'=>$stddet));
						}

			public function addcredits()
				 		{

				 		if($this->input->post('submit'))
				 		{

				 			$data =$this->input->post();
				 			unset($data['submit']);
				 			$this->load->model('Staff_model');
				 				if($this->Staff_model->addcredits($data))
				 				{
				 					$this->session->set_flashdata('success','Successfully Added Credits');
				 					redirect('staff/viewstudent', 'refresh');
				 				}
				 				else {

				 					$this->session->set_flashdata('errormsg','Failed to Added Credits');
				 					redirect('staff/viewstudent');
				 				}

				 			return redirect('staff/index');
				 		}
				 		else {
				 			$this->session->set_flashdata('errormsg','Failed, Credits Fields are empty');
				 			return redirect('staff/viewstudent');

				 		}
				 	}

			public function editcredits($id)
					{
						if($this->input->post('submit'))
						{

							$first_sem = $this->input->post('first_sem');
							$sec_sem = $this->input->post('sec_sem');
							$third_sem = $this->input->post('third_sem');
							$forth_sem = $this->input->post('forth_sem');
							$fifth_sem = $this->input->post('fifth_sem');
							$sixth_sem = $this->input->post('sixth_sem');
							$seventh_sem = $this->input->post('seventh_sem');
							$eighth_sem = $this->input->post('eighth_sem');

							$total_credits = $first_sem + $sec_sem + $third_sem + $forth_sem + $fifth_sem + $sixth_sem + $seventh_sem +$eighth_sem;
							$std_credits = array(
								'std_credits' => $total_credits
							);
							$data = $this->input->post();
							unset($data['submit']);
							$this->load->model('staff_model');
								if($this->staff_model->updatetotalcredits($std_credits,$id)){
									if($this->staff_model->updatecredits($data,$id))
									{
										 $this->session->set_flashdata('success','Successfully Updated Credits');
									}
									else {
										$this->session->set_flashdata('errormsg','Failed to Update Credits');
									}
								}
							return redirect('staff/viewstudent');
										}
							else
							{
								$this->load->view('staff/viewstudent');
							}
						}

}
