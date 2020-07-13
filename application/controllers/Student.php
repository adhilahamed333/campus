<?php

/**
 * @author Unnikrishnannair
 **/


defined('BASEPATH') or exit('No direct script access allowed');

class Student extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    $this->load->helper('url');
    $this->load->model('staff_model');
    $this->load->model('student_model');
    $this->load->model('admin_model');
    $this->load->model('hod_model');
  }
  public function index()
  {
    if ($this->session->userdata('logged_in')) {
      $id = $this->session->userdata('user_id');
      $this->load->model('staff_model');
      $credits = $this->staff_model->getstudentcredits($id);
      $stddet = $this->staff_model->getSinglestudent($id);
      $sem_date = $this->staff_model->getSemdate();
      $this->load->view('student/index', array('credits' => $credits, 'stddet' => $stddet, 'sem_date' => $sem_date));
    } else {
      redirect('Front', 'refresh');
    }
  }

  public function student_login()
  {
    $user_email = $this->input->post('username');
    $password   = $this->input->post('password');
    $result     = $this->student_model->valid($user_email, $password);
    if ($result) {
      $session_details1 = array();
      foreach ($result as $row) {
        $session_details = array(
          'user_id' => $row->std_id,
          'name' => $row->std_name,
          'user_adno' => $row->admission_no,
          'logged_in' => 1
        );
      }
      $this->session->set_userdata($session_details);
      redirect('student', 'refresh');
    } else {
      $this->session->set_flashdata('errormsg', "Invalid Password or Username");
      redirect('Front', 'refresh');
    }
  }

  public function logoutstd()
  {
    $this->session->sess_destroy();
    redirect('Front', 'refresh');
  }

  public function profile()
  {
    $user_id = $this->session->userdata('user_id');
    $this->load->model('student_model');
    $posts = $this->student_model->getstd($user_id);
    $this->load->view('student/profile', array('posts' => $posts));
  }

  public function acdprofile()
  {
    $user_id = $this->session->userdata('user_id');
    $this->load->model('student_model');
    $credits = $this->staff_model->getstudentcredits($user_id);
    $this->load->model('student_model');
    $posts = $this->student_model->getstd($user_id);
    $this->load->view('student/acdprofile', array('posts' => $posts, 'credits' => $credits));
  }

  public function personalprofile()
  {
    $user_adno = $this->session->userdata('user_adno');
    $this->load->model('student_model');
    $posts = $this->student_model->getstdpersonal($user_adno);
    $this->load->view('student/personalprofile', array('posts' => $posts));
  }

  public function personalprofileedit()
  {
    $user_adno = $this->session->userdata('user_adno');
    $this->load->model('student_model');
    $posts = $this->student_model->getstdpersonal($user_adno);
    $this->load->view('student/personalprofileedit', array('posts' => $posts));
  }

  public function stdupdate($id)
  {
    $this->form_validation->set_rules('phone', 'phone', 'required');
    $this->form_validation->set_rules('address', 'address', 'required');
    $this->form_validation->set_rules('email', 'email', 'required');
    $this->form_validation->set_rules('category', 'category', 'required');
    $this->form_validation->set_rules('fath_moth', 'fath_moth', 'required');
    $this->form_validation->set_rules('occupationfath_moth', 'occupationfath_moth', 'required');
    $this->form_validation->set_rules('phnofath_moth', 'phnofath_moth', 'required');
    $this->form_validation->set_rules('emailfath_moth', 'emailfath_moth', 'required');
    $this->form_validation->set_rules('lgname', 'lgname', 'required');
    $this->form_validation->set_rules('lgrelation', 'lgrelation', 'required');
    $this->form_validation->set_rules('lgoccupation', 'lgoccupation', 'required');
    $this->form_validation->set_rules('lgphone', 'lgphone', 'required');
    if ($this->form_validation->run()) {
      $data = $this->input->post();
      unset($data['submit']);
      $this->load->model('student_model');
      if ($this->student_model->update_std($data, $id)) {
        $this->session->set_flashdata('msgsuccess', 'Successfully Updated');
      } else {

        $this->session->set_flashdata('msgfail', 'Failed');
      }
      return redirect('student/personalprofile');
    } else {

      redirect('student/personalprofile', 'refresh');
    }
  }

  public function semregistration()
  {
    $user_id = $this->session->userdata('user_id');
    $this->load->model('student_model');
    $std = $this->student_model->getstd($user_id);
    $perdetails = $this->student_model->getstdperbyid($user_id);
    $regdetails = $this->student_model->getregdetails($user_id);
    
    $this->load->view('student/semregistration', array('std' => $std, 'perdetails' => $perdetails, 'regdetails' => $regdetails));
  }

  public function semregistration2($semester)
  {
    $user_id = $this->session->userdata('user_id');
    $this->load->model('student_model');
    $std = $this->student_model->getstd($user_id);
    $perdetails = $this->student_model->getstdperbyid($user_id);
    $advisor = $this->student_model->advisor();
    $course = $this->admin_model->getcourse();
    $this->load->view('student/semregistration2', array('std' => $std, 'perdetails' => $perdetails,'semester'=>$semester, 'course' => $course, 'advisor' => $advisor));
  }

  public function courseregistration()
  {
    $advisor = $this->input->post('advisor');
    $courselist = $this->input->post('course');
    $std_id = $this->session->userdata('user_id');
    for ($i = 0; $i < sizeof($courselist); $i++) {
      $course_id = $courselist[$i];
      $this->load->model('student_model');
      $this->student_model->sem_reg($std_id, $course_id, $advisor);
    }
    $this->session->set_flashdata('msgsuccess', 'Successfully Updated');
    redirect('student/personalprofile', 'refresh');
  }
}
