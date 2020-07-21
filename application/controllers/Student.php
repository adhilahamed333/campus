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
      $posts_due = $this->student_model->getdues($id);

      //$sem_date = $this->staff_model->getSemdate();
      $sem_date = $this->student_model->getsem_not($id);
      $this->load->view('student/index', array('credits' => $credits, 'stddet' => $stddet, 'sem_date' => $sem_date, 'due' => $posts_due));
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
    $this->load->model('staff_model');
    $credits = $this->staff_model->getstudentcredits($user_id);
    $this->load->model('student_model');
    $posts = $this->student_model->getstd($user_id);

    $this->load->model('student_model');
    $posts_due = $this->student_model->getdue($user_id);

    $this->load->view('student/acdprofile', array('posts' => $posts, 'credits' => $credits, 'posts_due' => $posts_due));
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

  public function semreg()
  {

    $id = $this->session->userdata('user_id');
    $this->load->model('staff_model');
    $credits = $this->staff_model->getstudentcredits($id);
    $stddet = $this->staff_model->getSinglestudent($id);
    $posts_due = $this->student_model->getdue($id);

    $user_adno = $this->session->userdata('user_adno');
    $this->load->model('student_model');
    $posts = $this->student_model->getstdpersonal($user_adno);
    $status = $this->student_model->getstdstatus($id);
    $sem_date = $this->student_model->getsem_not($id);
    $std = $this->student_model->getstd($id);
    $this->load->view('student/semreg', array('status' => $status, 'std' => $std, 'credits' => $credits, 'stddet' => $stddet, 'sem_date' => $sem_date, 'due' => $posts_due, 'posts' => $posts));
  }




  public function semnotification()
  {
    $user_id = $this->session->userdata('user_id');
    $this->load->model('student_model');
    $std = $this->student_model->getstd($user_id);
    $regdetails = $this->student_model->getregdetails($user_id);
    $perdetails = $this->student_model->getstdperbyid($user_id);
    $this->load->view('student/semregistration', array('std' => $std, 'perdetails' => $perdetails, 'regdetails' => $regdetails));
  }


  public function semregistration2()
  {
    $user_id = $this->session->userdata('user_id');
    $this->load->model('student_model');
    $std = $this->student_model->getstd($user_id);
    $perdetails = $this->student_model->getstdperbyid($user_id);
    $advisor = $this->student_model->advisor();
    $course = $this->admin_model->getcourse();
    $this->load->view('student/semregistration2', array('std' => $std, 'perdetails' => $perdetails, 'course' => $course, 'advisor' => $advisor));
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





  public function semreg_action($id)
  {
    $std_id = $this->session->userdata('user_id');
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



      $sem1 = $this->input->post('sem1');
      $sem2 = $this->input->post('sem2');
      $sem3 = $this->input->post('sem3');
      $sem4 = $this->input->post('sem4');
      $sem5 = $this->input->post('sem5');
      $sem6 = $this->input->post('sem6');
      $sem7 = $this->input->post('sem7');
      $sem8 = $this->input->post('sem8');
      $cgpa = $this->input->post('cgpa');
      $credit = $sem1 + $sem2 + $sem3 + $sem4 + $sem5 + $sem6 + $sem7 + $sem8;
      $sem = $this->input->post('sem');
      $staff = $this->input->post('staff');
      $branch = $this->input->post('branch');
      $sub = $this->input->post('sub');
      $data4 = array();
      $i = 1;
      foreach ($sub as $val) {
        $data4["sub" . $i] = $val;
        $i++;
      }
      $data4['stud_id'] = $std_id;
      $data4['sem'] = $sem;

      if ($sem == 's5') {
        if ($credit < 26) {
          $this->session->set_flashdata('msgfail', 'Your Not Elgible Your Credits are too');
        }
      } else if ($sem == 's7') {
        if ($credit < 52) {
          $this->session->set_flashdata('msgfail', 'Your Not Elgible Your Credits are too');
        }
      } else {
        $data1 = array("first_sem" => $sem1, "sec_sem" => $sem2, "third_sem" => $sem3, "forth_sem" => $sem4, "fifth_sem" => $sem5, "sixth_sem" => $sem6, "seventh_sem" => $sem7, "eighth_sem" => $sem8, "cgpa" => $cgpa, "std_id" => $std_id);
        $data = array("phone" => $this->input->post('phone'), "address" => $this->input->post('address'), "email" => $this->input->post('email'), "category" => $this->input->post('category'), "fath_moth" => $this->input->post('fath_moth'), "occupationfath_moth" => $this->input->post('occupationfath_moth'), "phnofath_moth" => $this->input->post('phnofath_moth'), "emailfath_moth" => $this->input->post('emailfath_moth'), "lgname" => $this->input->post('lgname'), "lgrelation" => $this->input->post('lgrelation'), "lgoccupation" => $this->input->post('lgoccupation'), "lgphone" => $this->input->post('lgphone'), "std_id" => $std_id);
        $data3 = array("std_id" => $std_id, "course_id" => $sem, "advisor_id" => $staff);
        $data5 = array("std_credits" => $credit);
        unset($data['submit']);
        $this->load->model('student_model');
        if ($this->student_model->sem_regaction($data, $data1, $data3, $id, $data4, $std_id, $data5)) {
          $this->session->set_flashdata('msgsuccess', 'Successfully Updated');
        } else {

          $this->session->set_flashdata('msgfail', 'Failed');
        }
      }



      return redirect('student/index');
    } else {

      redirect('student/index', 'refresh');
    }
  }
}
