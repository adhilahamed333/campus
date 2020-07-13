<?php

/**
 * @author Unnikrishnannair
 **/


defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->helper('url');
			$this->load->model('admin_model');
	}

	public function index()
	{
		$this->load->view('admin/index');
	}
	public function check_login()
	{
			$user_email = $this->input->post('user_email');
			$password   = $this->input->post('password');
			$result     = $this->admin_model->check($user_email, $password);
			if ($result) {
					$session_details1 = array();
					foreach ($result as $row) {
							$session_details = array(
									'user_id' => $row->admin_id,
									'user_name' => $row->admin_name,
									'user_email' => $row->admin_email,
									'logged_in' => 1
							);
					}
					$this->session->set_userdata($session_details);
					redirect('dashboard', 'refresh');
			} else {
					$this->session->set_flashdata('errormsg', "Invalid Password or Username");
					redirect('admin', 'refresh');
			}
	}
	public function register()
	{
		$this->load->view('admin/register');
	}

	public function logoutadmin()
	{
			$this->session->sess_destroy();
			redirect('admin', 'refresh');

	}
}
