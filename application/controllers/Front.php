<?php

/**
 * @author Unnikrishnannair
 **/


defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {
  public function __construct()
  {
      parent::__construct();
      $this->load->helper('url');
      $this->load->model('staff_model');
      $this->load->model('department_model');
      $this->load->model('hod_model');
  }
  public function index()
	{
		$this->load->view('frontend/index');
	}
  public function about()
	{
		$this->load->view('frontend/about');
	}
  public function staff_login()
  {
      $user_email = $this->input->post('username');
      $password   = $this->input->post('password');
      $result     = $this->staff_model->valid($user_email, $password);
      if ($result) {
          $session_details1 = array();
          foreach ($result as $row) {
              $session_details = array(
                  'user_id' => $row->s_id,
                  'name' => $row->name,
                  'logged_in' => 1
              );
          }
          $this->session->set_userdata($session_details);
          redirect('Staff', 'refresh');
      } else {
          $this->session->set_flashdata('errormsg', "Invalid Password or Username");
          redirect('Front', 'refresh');
      }
  }

  public function department_login()
  {
      $department_id = $this->input->post('department_id');
      $password   = $this->input->post('password');
      $result     = $this->department_model->valid($department_id, $password);

      if ($result) {
       	 $session_details1 = array();
       	 foreach ($result as $row) {
       			 $session_details = array(
       					 'dept_id' => $row->dept_id,
       					 'department' => $row->department,
       					 'logged_in' => 1
       			 );
       	 }
       	 $this->session->set_userdata($session_details);
       	 redirect('Department', 'refresh');
      } else {
        $this->session->set_flashdata('errormsg', "Invalid Password or Username");
        redirect('Front', 'refresh');
  }

}

    public function hod_login()
    {
        $user_id = $this->input->post('user_id');
        $password   = $this->input->post('password');
        $result     = $this->hod_model->valid($user_id, $password);

        if ($result) {
           $session_details1 = array();
           foreach ($result as $row) {
               $session_details = array(
                   'hod_id' => $row->hod_id,
                   'department' => $row->department,
                   'hod_name' => $row->hod_name,
                   'logged_in' => 1
               );
           }
           // echo "success";
           $this->session->set_userdata($session_details);
           redirect('Hod', 'refresh');
        } else {
          // echo "failed";
          $this->session->set_flashdata('errormsg', "Invalid Password or Username");
          redirect('Front', 'refresh');
    }

    }
}
