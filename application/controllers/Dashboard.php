<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
                $this->load->model('security_model');
                $this->security_model->check_log_in_admin();
	}
        /**
	 * @author Unnikrishnan
	 **/
	 public function index()
		 {
		 $this->load->view('dashboard/index');
		 }

######################################## Faculty Session ################################################
					public function department_login()
					{
						$department_id = $this->input->post('department_id');
						$password   = $this->input->post('password');
						// $result     = $this->department_model->valid($department_id, $password);
						echo $department_id;
						echo $password;
						// if ($result) {
						 // 	 $session_details1 = array();
						 // 	 foreach ($result as $row) {
						 // 			 $session_details = array(
						 // 					 'dept_id' => $row->dept_id,
						 // 					 'department' => $row->department,
						 // 					 'logged_in' => 1
						 // 			 );
						 // 	 }
						 // 	 $this->session->set_userdata($session_details);
						 // 	 echo "saasaasaaaa";
						// } else {
						 // 	 echo "fails";}
					}

				public function staffreg()
				{
				    $this->load->view('dashboard/staffreg');
				 }
				public function addstaff()
				{
					$this->form_validation->set_rules('name',' Name','required');
					$this->form_validation->set_rules('ktu_id','Ktu_id','required');
					$this->form_validation->set_rules('department','Department','required');
					$this->form_validation->set_rules('advisor','Advisor','required');
					$this->form_validation->set_rules('username','Username','required');
					$this->form_validation->set_rules('password','Password','required');
				if($this->form_validation->run())
				{
					$data =$this->input->post();
					unset($data['submit']);

					$this->load->model('staff_model');
					if($this->staff_model->addstaff($data))
					{
						$this->session->set_flashdata('success','Successfully');
						redirect('dashboard/staffreg', 'refresh');
					}
					else {

						$this->session->set_flashdata('errormsg','Failed');
						redirect('dashboard/staffreg', 'refresh');
					}
					return redirect('dashboard/index');
				}
				else {
					return redirect('dashboard/staffreg');
				}
				}
				public function viewstaff(){
				  $this->load->model('admin_model');
				  $posts =$this->admin_model->getstaff();
					$this->load->view('dashboard/viewstaff',array('posts' =>$posts));
				}

				public function deletestaff($id)
						{
							$this->load->model('admin_model');
							if($post =$this->admin_model->deletestaff($id))
							{
								$this->session->set_flashdata('success','Deleted Successfully');
							}
							else {

								$this ->session ->set_flashdata('errormsg','Failed');
							}
							return redirect('dashboard/viewstaff');

						}

				public function updatestaff($id)
						{
							$this->load->model('admin_model');
							$post = $this->admin_model->getSinglestaff($id);
							$this->load->view('dashboard/staffedit',array('post'=>$post));
						}

				public function editstaff($id)
						{
							$this->form_validation->set_rules('name',' Name','required');
							$this->form_validation->set_rules('ktu_id','Ktu_id','required');
							$this->form_validation->set_rules('department','Department','required');
							$this->form_validation->set_rules('advisor','Advisor','required');
							$this->form_validation->set_rules('username','Username','required');
							$this->form_validation->set_rules('password','Password','required');
							if($this->form_validation->run())
							{
								$data = $this->input->post();
								unset($data['submit']);
								$this->load->model('admin_model');
								if($this->admin_model->updatestaff($data,$id))
								{
									 $this->session->set_flashdata('success','Successfully Updated');
								}
								else {

									$this->session->set_flashdata('errormsge','Failed');

								}
								return redirect('dashboard/viewstaff');
											}
								else
								{
									$this->load->view('dashboard/viewstaff');
								}

						}


######################################## Course Session ################################################


				public function addcourse()
				{
				    $this->load->view('dashboard/addcourse');
				}

				 public function coursereg()
		 				{
		 					$this->form_validation->set_rules('semester','Semester','required');
		 					$this->form_validation->set_rules('branch','Branch','required');
		 					$this->form_validation->set_rules('code','Code','required');
		 					$this->form_validation->set_rules('course_name','Course_name','required');
		 					$this->form_validation->set_rules('slot','Slot','required');
		 					$this->form_validation->set_rules('credits','Credits','required');
		 				if($this->form_validation->run())
		 				{
		 					$data =$this->input->post();
		 					unset($data['submit']);

		 					$this->load->model('admin_model');
		 					if($this->admin_model->addcourse($data))
		 					{
		 						$this->session->set_flashdata('success','Successfully Data Inserted');
		 						redirect('dashboard/addcourse', 'refresh');
		 					}
		 					else {
		 						$this->session->set_flashdata('errormsg','Failed');
		 						redirect('dashboard/addcourse', 'refresh');
		 					}
		 					return redirect('dashboard/index');
		 				}
		 				else {
							$this->session->set_flashdata('errormsg','Please check the fields');
		 					return redirect('dashboard/addcourse');
		 				}
		 				}

				public function viewcourse()
				{
				  $this->load->model('admin_model');
				  $posts =$this->admin_model->getcourse();
					$this->load->view('dashboard/viewcourse',array('posts' =>$posts));
				}

				public function deletecourse($id)
						{
							$this->load->model('admin_model');
							if($post =$this->admin_model->deletecourse($id))
							{
								$this->session->set_flashdata('success','Deleted Successfully');
							}
							else {

								$this ->session ->set_flashdata('errormsg','Failed');
							}
							return redirect('dashboard/viewcourse');

						}

				public function updatecourse($id)
						{
							$this->load->model('admin_model');
							$post = $this->admin_model->getSinglecourse($id);
							$this->load->view('dashboard/editcourse',array('post'=>$post));
						}

				public function editcourse($id)
						{
							$this->form_validation->set_rules('semester','Semester','required');
		 					$this->form_validation->set_rules('branch','Branch','required');
		 					$this->form_validation->set_rules('code','Code','required');
		 					$this->form_validation->set_rules('course_name','Course_name','required');
		 					$this->form_validation->set_rules('slot','Slot','required');
		 					$this->form_validation->set_rules('credits','Credits','required');
							if($this->form_validation->run())
							{
								$data = $this->input->post();
								unset($data['submit']);
								$this->load->model('admin_model');
								if($this->admin_model->updatecourse($data,$id))
								{
									 $this->session->set_flashdata('success','Successfully Updated');
								}
								else {

									$this->session->set_flashdata('errormsg','Failed to Update');

								}
								return redirect('dashboard/viewcourse');
											}
								else
								{
									$this->load->view('dashboard/viewcourse');
								}
						}

####################################### Due Department Session ################################################


						public function adddept()
						{
								$this->load->view('dashboard/adddept');
						}

						public function deptreg()
	 		 				{
	 		 					$this->form_validation->set_rules('department','Department','required');
	 		 					$this->form_validation->set_rules('department_id','department_id','required');
	 		 					$this->form_validation->set_rules('staffincharge','staffincharge','required');
								$this->form_validation->set_rules('password','password','required');
	 		 				if($this->form_validation->run())
	 		 				{
	 		 					$data =$this->input->post();
	 		 					unset($data['submit']);

	 		 					$this->load->model('admin_model');
	 		 					if($this->admin_model->adddept($data))
	 		 					{
	 		 						$this->session->set_flashdata('success','Successfully Data Inserted');
	 		 						redirect('dashboard/adddept', 'refresh');
	 		 					}
	 		 					else {
	 		 						$this->session->set_flashdata('errormsg','Failed');
	 		 						redirect('dashboard/adddept', 'refresh');
	 		 					}
	 		 					return redirect('dashboard/index');
	 		 				}
	 		 				else {
	 							$this->session->set_flashdata('errormsg','Please check the fields');
	 		 					return redirect('dashboard/adddept');
	 		 				}
	 		 				}

						public function viewdept()
							{
							  $this->load->model('admin_model');
							  $posts =$this->admin_model->getdept();
								$this->load->view('dashboard/viewdept',array('posts' =>$posts));
							}

						public function deletedept($id)
								{
									$this->load->model('admin_model');
									if($post =$this->admin_model->deletedept($id))
									{
										$this->session->set_flashdata('success','Deleted Successfully');
									}
									else {

										$this ->session ->set_flashdata('errormsg','Failed');
									}
									return redirect('dashboard/viewdept');

								}

						public function updatedept($id)
								{
									$this->load->model('admin_model');
									$post = $this->admin_model->getSingledept($id);
									$this->load->view('dashboard/editdept',array('post'=>$post));
								}

						public function editdept($id)
						{
							$this->form_validation->set_rules('department','Department','required');
							$this->form_validation->set_rules('department_id','department_id','required');
							$this->form_validation->set_rules('staffincharge','staffincharge','required');
							$this->form_validation->set_rules('password','password','required');
									if($this->form_validation->run())
									{
										$data = $this->input->post();
										unset($data['submit']);
										$this->load->model('admin_model');
										if($this->admin_model->updatedept($data,$id))
										{
											 $this->session->set_flashdata('success','Successfully Updated');
										}
										else {

											$this->session->set_flashdata('errormsg','Failed to Update');

										}
										return redirect('dashboard/viewdept');
													}
										else
										{
											$this->load->view('dashboard/viewcourse');
										}
								}


####################################### HOD Session ################################################



							public function addhod()
							{
									$this->load->view('dashboard/addhod');
							}

							public function hodreg()
		 		 				{
									$this->form_validation->set_rules('hod_name','hod_name','required');
		 		 					$this->form_validation->set_rules('department','Department','required');
									$this->form_validation->set_rules('user_id','user_id','required');
									$this->form_validation->set_rules('password','password','required');
		 		 				if($this->form_validation->run())
		 		 				{
		 		 					$data =$this->input->post();
		 		 					unset($data['submit']);

		 		 					$this->load->model('admin_model');
		 		 					if($this->admin_model->addhod($data))
		 		 					{
		 		 						$this->session->set_flashdata('success','Successfully Data Inserted');
		 		 						redirect('dashboard/addhod', 'refresh');
		 		 					}
		 		 					else {
		 		 						$this->session->set_flashdata('errormsg','Failed');
		 		 						redirect('dashboard/addhod', 'refresh');
		 		 					}
		 		 					return redirect('dashboard/index');
		 		 				}
		 		 				else {
		 							$this->session->set_flashdata('errormsg','Please check the fields');
		 		 					return redirect('dashboard/addhod');
		 		 				}
		 		 				}

							public function viewhod()
								{
								  $this->load->model('admin_model');
								  $posts =$this->admin_model->gethod();
									$this->load->view('dashboard/viewhod',array('posts' =>$posts));
								}

							public function deletehod($id)
									{
										$this->load->model('admin_model');
										if($post =$this->admin_model->deletehod($id))
										{
											$this->session->set_flashdata('success','Deleted Successfully');
										}
										else {

											$this ->session ->set_flashdata('errormsg','Failed');
										}
										return redirect('dashboard/viewhod');

									}

							public function updatehod($id)
									{
										$this->load->model('admin_model');
										$post = $this->admin_model->getSinglehod($id);
										$this->load->view('dashboard/edithod',array('post'=>$post));
									}

							public function edithod($id)
							{
								$this->form_validation->set_rules('hod_name','hod_name','required');
								$this->form_validation->set_rules('department','Department','required');
								$this->form_validation->set_rules('user_id','user_id','required');
								$this->form_validation->set_rules('password','password','required');
										if($this->form_validation->run())
										{
											$data = $this->input->post();
											unset($data['submit']);
											$this->load->model('admin_model');
											if($this->admin_model->updatehod($data,$id))
											{
												 $this->session->set_flashdata('success','Successfully Updated');
											}
											else {

												$this->session->set_flashdata('errormsg','Failed to Update');

											}
											return redirect('dashboard/viewhod');
														}
											else
											{
												$this->load->view('dashboard/viewhod');
											}
									}


}
